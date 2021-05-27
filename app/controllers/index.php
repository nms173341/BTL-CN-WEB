<?php
class index extends PController{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $cate_model=$this->load->model('category_model');
        $product_model=$this->load->model('product_model');
        $table_category="category_web";
        $table_product="product_web";
        $data['category']=$cate_model->getAllCategories($table_category);
        $data['product_latest']=$product_model->getProductLatest($table_product);
        $data['product_feature']=$product_model->getProductFeature($table_product);
        Session::init();
        if(Session::get('login')==true)
        {
            $data['name']=Session::get('name');
            $this->load->view('index',$data);
        }
        else{
            $this->load->view('index',$data);
        }
    }
    public function notfound()
    {
        $this->load->view('404');
    }
}