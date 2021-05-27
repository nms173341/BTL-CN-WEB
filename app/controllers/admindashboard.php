<?php


class admindashboard extends PController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        Session::checkSession();;
        $product_model=$this->load->model("product_model");
        $user_model=$this->load->model("user_model");
        $order_model=$this->load->model("order_model");
        $data['product_amount']=sizeof($product_model->getAllProduct("product_web"));
        $data['user_amount']=sizeof($user_model->getAllUser("user_web"));
        $allOrder=$order_model->getAllOrder("order_web");
        $data['order_amount']=sizeof($allOrder);
        $data['order']=$allOrder;
        $this->load->view('admin/dashboard',$data);
    }

}