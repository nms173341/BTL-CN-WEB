<?php
class product extends PController {
    public function __construct()
    {
       parent::__construct();
    }
    public function index($page=1)
    {
        $limit=16;
        $cate_model=$this->load->model('category_model');
        $table_category="category_web";
        $data['category']=$cate_model->getAllCategories($table_category);
        $home_model=$this->load->model('product_model');
        $table='product_web';
        $all_product=$home_model->getAllProduct($table);
        $number_page=ceil(sizeof($all_product)/$limit);
        if($page>$number_page)
        {
            $page=$number_page;
        }
        $start=($page-1)*$limit;
        Session::init();
        if(Session::get('login')==true)
        {
            $data['name']=Session::get('name');
            $data['current_page']=$page;
            $data['number_page']=$number_page;
            $data['product']=$home_model->getProductByPage($table,$start,$limit);
            $this->load->view('product',$data);
        }
        else{
            $data['number_page']=$number_page;
            $data['current_page']=$page;
            $data['product']=$home_model->getProductByPage($table,$start,$limit);
            $this->load->view('product',$data);
        }
    }
    public function id($id)
    {
        $cate_model=$this->load->model('category_model');
        $table_category="category_web";
        $data['category']=$cate_model->getAllCategories($table_category);
        Session::init();
        if(Session::get('login')==true)
        {
            $data['name']=Session::get('name');
            $product_model=$this->load->model('product_model');
            $table="product_web";
            $data['product_detail']=$product_model->getProductById($table,$id);
            $this->load->view("products-detail",$data);
        }
        else
        {
            $product_model=$this->load->model('product_model');
            $table="product_web";
            $data['product_detail']=$product_model->getProductById($table,$id);
            $this->load->view("products-detail",$data);
        }
    }
    public function category($id)
    {
        $cate_model=$this->load->model('category_model');
        $table_category="category_web";
        $data['category']=$cate_model->getAllCategories($table_category);
        foreach ($data['category'] as $key=>$value):
            if($value['category_id']==$id)
            {
                $data['name_category']=$value['name'];
                break;
            }
            endforeach;
        Session::init();
        if(Session::get('login')==true)
        {
            $data['name']=Session::get('name');
            $product_model=$this->load->model('product_model');
            $table="product_web";
            $data['product']=$product_model->getProductByCategoryId($table_category,$table,$id);
            $this->load->view("product",$data);
        }
        else
        {
            $product_model=$this->load->model('product_model');
            $table="product_web";
            $data['product']=$product_model->getProductByCategoryId($table_category,$table,$id);
            $this->load->view("product",$data);
        }


    }


}