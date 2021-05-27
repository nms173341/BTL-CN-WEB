<?php


class checkout extends PController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        Session::checkUserSession();
        $cate_model=$this->load->model('category_model');
        $table_category="category_web";
        $data['category']=$cate_model->getAllCategories($table_category);
        Session::init();
        if(Session::get('login')==true)
        {
            $data['name']=Session::get('name');
            $data['email']=Session::get('email');
            $data['address']=Session::get('address');
            $data['phone_number']=Session::get('phone_number');
            $data['user_id']=Session::get('user_id');
            $subtotal=0;
            foreach ($_SESSION['shopping_cart'] as $key=>$value):
                $subtotal=$value['product_price']*$value['product_quantity'];
                $total+=$subtotal;
                endforeach;

                $data['subtotal']=$total;
            $this->load->view('checkout',$data);
        }
        else{
            $this->load->view('checkout',$data);
        }
    }
    public function placeorder()
    {
        Session::checkUserSession();
        Session::init();
        $table_order='order_web';
        $table_order_detail='order_detail_web';
        $order_model=$this->load->model('order_model');
        $order_detail_model=$this->load->model('order_detail_model');

        $email=$_POST['email'];
        $user_id=$_POST['user_id'];
        $name=$_POST['name'];
        $phone_number=$_POST['phone_number'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $shipping_method=$_POST['shipping_method'];
        $payment_method=$_POST['payment_method'];
        $subtotal=$_POST['subtotal'];
        $shipping=$_POST['shipping'];
        $total=$_POST['total'];
        $order_code=rand(0,9999);

        $data_order=[
            'order_code'=>$order_code,
            'user_id'=>$user_id,
            'name'=>$name,
            'email'=>$email,
            'phone_number'=>$phone_number,
            'address'=>$address,
            'shipping_method'=>$shipping_method,
            'payment_method'=>$payment_method,
            'subtotal'=>$subtotal,
            'shipping'=>$shipping,
            'total'=>$total,
            'status'=>0
        ];
        $result_order=$order_model->insertOrder($table_order,$data_order);
        if(Session::get('shopping_cart')==true)
        {
            foreach (Session::get('shopping_cart') as $key=>$value):
                $data_order_detail=[
                    'order_code'=>$order_code,
                    'product_id'=>$value['product_id'],
                    'product_quantity'=>$value['product_quantity']
                ];
                $result_order_detail=$order_detail_model->insertOrderDetail($table_order_detail,$data_order_detail);
            endforeach;
            unset($_SESSION["shopping_cart"]);
        }
        if($result_order==1)
        {
            $message="Thank you for your purchase!";
            Session::init();
            Session::set("order_success",$message);
            header("Location:".BASE_URL."cart");
        }
    }

}