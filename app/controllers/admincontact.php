<?php


class admincontact extends PController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        Session::checkSession();
        $cate_model=$this->load->model("contact_model");
        $table="contact_web";
        $data['contact']=$cate_model->getAllContact($table);
        $this->load->view("admin/contact",$data);
    }

}