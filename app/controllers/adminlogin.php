<?php


class adminlogin extends PController
{
    public function index()
    {
        $this->load->view('admin/login');
    }
    public function authentication_login()
    {
        $username=$_POST['email'];
        $password=$_POST['password'];
        $table_user='admin_web';
        $loginmodel=$this->load->model('admin_model');
        $count=$loginmodel->login($table_user,$username,$password);
        if($count==0)
        {
            $message['msg']="Tai khoan khong ton tai";
            header("Location:".BASE_URL."adminlogin");

        }else{
            $result=$loginmodel->getlogin($table_user,$username,$password);
            Session::init();
            Session::set('admin_login',true);
            Session::set('email_admin',$result[0]['email']);
            Session::set('id_admin',$result[0]['admin_id']);
            header("Location:".BASE_URL."admindashboard");
        }
    }
    public function logout()
    {
        Session::init();
        Session::unsett('admin_login');
        header("Location:".BASE_URL."adminlogin");
    }
}