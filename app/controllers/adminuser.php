<?php


class adminuser extends PController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        Session::checkSession();
        $product_model=$this->load->model("user_model");
        $table="user_web";
        $data['user']=$product_model->getAllUser($table);
        $this->load->view("admin/user",$data);
    }
    public function addnew()
    {
        Session::checkSession();
        $this->load->view("admin/user/adduser");
    }
    public function add()
    {
        $product_model=$this->load->model("user_model");
        $table="user_web";
        $data=[
            "name"=>$_POST['name'],
            "email"=>$_POST['email'],
            "gender"=>$_POST['gender'],
            "address"=>$_POST['address'],
            "phone_number"=>$_POST['phone_number']
        ];
        $product_model->insertUser($table,$data);
        header("Location:".BASE_URL."adminuser");
    }
    public function edit($id)
    {
        Session::checkSession();
        $cate_model=$this->load->model("user_model");
        $table="user_web";
        $data['user']=$cate_model->getUserById($table,$id);
        $this->load->view("admin/user/edituser",$data);
    }
    public function remove($id)
    {
        $cate_model=$this->load->model("user_model");
        $table="user_web";
        $cond="user_id='$id'";
        $cate_model->deleteUser($table,$cond);
        header("Location:".BASE_URL."adminuser");
    }
    public function save()
    {
        $cate_model=$this->load->model("user_model");
        $table="user_web";
        $data=[
            "name"=>$_POST['name'],
            "email"=>$_POST['email'],
            "gender"=>$_POST['gender'],
            "address"=>$_POST['address'],
            "phone_number"=>$_POST['phone_number']
        ];
        $cond="user_web.user_id=".$_POST['user_id'];
        $cate_model->updateUser($table,$data,$cond);
        header("Location:".BASE_URL."adminuser");
    }
}