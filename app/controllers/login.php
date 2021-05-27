<?php


class login extends PController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {

        $this->login();

    }
    public function login()
    {
        $cate_model=$this->load->model('category_model');
        $table_category="category_web";
        $data['category']=$cate_model->getAllCategories($table_category);
        $this->load->view('login',$data);
    }
    public function authentication_login()
    {
        $username=$_POST['email'];
        $password=md5($_POST['password']);
        $table_user='user_web';
        $loginmodel=$this->load->model('user_model');
        $count=$loginmodel->login($table_user,$username,$password);
        if($count==0)
        {
            $message="The account sign-in was incorrect or your account is disabled temporarily.";
            Session::init();
            Session::set("login_error",$message);
            header("Location:".BASE_URL."login");

        }else{
            $result=$loginmodel->getlogin($table_user,$username,$password);
            Session::init();
            Session::set('login',true);
            Session::set('email',$result[0]['email']);
            Session::set('user_id',$result[0]['user_id']);
            Session::set('name',$result[0]['name']);
            Session::set('phone_number',$result[0]['phone_number']);
            Session::set('address',$result[0]['address']);
           header("Location:".BASE_URL."index");
        }
    }
    public function logout()
    {
        Session::init();
        Session::unsett('login');
        header("Location:".BASE_URL."index");
    }

}