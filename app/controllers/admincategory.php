<?php


class admincategory extends PController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        Session::checkSession();
        $cate_model=$this->load->model("category_model");
        $table="category_web";
        $data['category']=$cate_model->getALLCategories($table);
        $this->load->view("admin/category",$data);
    }
    public function addnew()
    {
        Session::checkSession();
        $this->load->view("admin/category/addcategory");
    }
    public function add()
    {

        $cate_model=$this->load->model("category_model");
        $table="category_web";
        $data=[
            "name"=>$_POST['name'],
            "description"=>$_POST['description']
        ];
        $cate_model->insertCategory($table,$data);
        header("Location:".BASE_URL."admincategory");
    }
    public function edit($id)
    {
        Session::checkSession();
        $cate_model=$this->load->model("category_model");
        $table="category_web";
        $data['category']=$cate_model->getCategoryById($table,$id);
        $this->load->view("admin/category/editcategory",$data);
    }
    public function remove($id)
    {
        $cate_model=$this->load->model("category_model");
        $table="category_web";
        $cond="category_id='$id'";
        $cate_model->deleteCategory($table,$cond);
        header("Location:".BASE_URL."admincategory");
    }
    public function save()
    {
        $cate_model=$this->load->model("category_model");
        $table="category_web";
        $data=[
            'name'=>$_POST['name'],
            'description'=>$_POST['description']
        ];
        $cond="category_web.category_id=".$_POST['category_id'];
        $cate_model->updateCategory($table,$data,$cond);
        header("Location:".BASE_URL."admincategory");
    }
}