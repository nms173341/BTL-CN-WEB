<?php


class adminproduct extends PController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        Session::checkSession();
        $product_model=$this->load->model("product_model");
        $table="product_web";
        $data['product']=$product_model->getALLProduct($table);
        $this->load->view("admin/product",$data);

    }
    public function addnew()
    {
        Session::checkSession();
        $cate_model=$this->load->model("category_model");
        $table="category_web";
        $data['category']=$cate_model->getALLCategories($table);
        $this->load->view("admin/product/addproduct",$data);
    }
    public function add()
    {

        $product_model=$this->load->model("product_model");
        $table="product_web";
        $data=[
            "product_name"=>$_POST['product_name'],
            "quantity"=>$_POST['quantity'],
            "price"=>$_POST['price'],
            "image"=>$_POST['image'],
            "category_id"=>$_POST['category_id'],
            "description"=>$_POST['description']
        ];
        $product_model->insertProduct($table,$data);
        header("Location:".BASE_URL."adminproduct");
    }
    public function edit($id)
    {
        Session::checkSession();
        $cate_model=$this->load->model("product_model");
        $table1="product_web";
        $data['product']=$cate_model->getProductById($table1,$id);
        $cate_model=$this->load->model("category_model");
        $table="category_web";
        $data['category']=$cate_model->getALLCategories($table);
        $this->load->view("admin/product/editproduct",$data);
    }
    public function remove($id)
    {
        $cate_model=$this->load->model("product_model");
        $table="product_web";
        $cond="product_id='$id'";
        $cate_model->deleteProduct($table,$cond);
        header("Location:".BASE_URL."adminproduct");
    }
    public function save()
    {
        $cate_model=$this->load->model("product_model");
        $table="product_web";
        $data=[
            "product_name"=>$_POST['product_name'],
            "quantity"=>$_POST['quantity'],
            "price"=>$_POST['price'],
            "image"=>$_POST['image'],
            "category_id"=>$_POST['category_id'],
            "description"=>$_POST['description']
        ];
        $cond="product_web.product_id=".$_POST['product_id'];
        $cate_model->updateProduct($table,$data,$cond);
        header("Location:".BASE_URL."adminproduct");
    }
}