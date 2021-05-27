<?php


class register extends PController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->register();
    }
    public function register()
    {
        $cate_model=$this->load->model('category_model');
        $table_category="category_web";
        $data['category']=$cate_model->getAllCategories($table_category);
        $this->load->view('register',$data);
    }
    public function adduser()
    {
        $home_model=$this->load->model('user_model');
        $table='user_web';
        $name=$_POST['name'];
        $gender=$_POST['gender'];
        $address=$_POST['address'];
        $phone=$_POST['phone_number'];
        $password=md5($_POST['password']);
        $email=$_POST['email'];
        $data=array("name"=>$name,"gender"=>$gender,"address"=>$address,"email"=>$email,"phone_number"=>$phone,"password"=>$password);
        $count=$home_model->insertUser($table,$data);
        if($count==1)
        {
            $result=$home_model->getlogin($table,$email,$password);
            Session::init();
            Session::set('login',true);
            Session::set('email',$result[0]['email']);
            Session::set('user_id',$result[0]['user_id']);
            Session::set('name',$result[0]['name']);
            header("Location:".BASE_URL."index");
        }
    }
}