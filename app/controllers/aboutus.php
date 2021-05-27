<?php


class aboutus extends PController
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
            $this->load->view('aboutus',$data);
        }
        else{
            $this->load->view('aboutus',$data);
        }
    }
}