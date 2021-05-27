<?php


class cart extends PController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $cate_model=$this->load->model('category_model');
        $table_category="category_web";
        $data['category']=$cate_model->getAllCategories($table_category);
        Session::init();
        if(Session::get('login')==true)
        {
            $data['name']=Session::get('name');
            $this->load->view('cart',$data);
        }
        else{
            $this->load->view('cart',$data);
        }

    }
    public function addtocart()
    {
        Session::init();
        if(isset($_SESSION["shopping_cart"]))
        {
            $available=0;
            foreach ($_SESSION["shopping_cart"] as $key=>$value):
                if($value['product_id']== $_POST['product_id'])
                {
                    $available++;
                    $_SESSION["shopping_cart"][$key]['product_quantity']+=$_POST['product_quantity'];
                }
                endforeach;
            if($available==0)
            {
                $item=array(
                    'product_id'=>$_POST['product_id'],
                    'product_name'=>$_POST['product_name'],
                    'product_image'=>$_POST['product_image'],
                    'product_quantity'=>$_POST['product_quantity'],
                    'product_price'=>$_POST['product_price']
                );
                $_SESSION['shopping_cart'][]=$item;
            }
        }else{
            $item=array(
                'product_id'=>$_POST['product_id'],
                'product_name'=>$_POST['product_name'],
                'product_image'=>$_POST['product_image'],
                'product_quantity'=>$_POST['product_quantity'],
                'product_price'=>$_POST['product_price']
            );
            $_SESSION['shopping_cart'][]=$item;

        }
        header("Location:".BASE_URL."cart");

    }
    public function removefromcart($id)
    {
        Session::init();
        foreach ($_SESSION['shopping_cart'] as $key=>$value):
            if($value['product_id']==$id)
            {
                unset($_SESSION['shopping_cart'][$key]);
                break;
            }
        endforeach;
        header("Location:".BASE_URL."cart");
    }

}