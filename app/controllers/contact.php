<?php


class contact extends PController
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
            $data['email']=Session::get('email');
            $this->load->view('contact',$data);
        }
        else{
            $this->load->view('contact',$data);
        }
    }
    public function addcontact()
    {
        $contact_model=$this->load->model('contact_model');
        $table="contact_web";
        $data=[
          "name"=>$_POST['name'],
          "email"=>$_POST['email'],
          "message"=>$_POST['message'],
          "status"=>$_POST['status']
        ];
        try{
            $result=$contact_model->insertContact($table,$data);
            if($result==1)
            {
                $message="Thanks for your contact";
                Session::init();
                Session::set("success_message",$message);
                header("Location:".BASE_URL."contact");
            }
        }catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }
}