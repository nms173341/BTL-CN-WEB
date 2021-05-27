<?php


class adminorder extends PController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        Session::checkSession();
        $table_order='order_web';
        $order_model=$this->load->model('order_model');
        $data['order']=$order_model->getAllOrder($table_order);
        $this->load->view('admin/order',$data);
    }

    public function edit($code)
    {
        Session::checkSession();
        $order_model=$this->load->model("order_model");
        $order_detail_model=$this->load->model("order_detail_model");
        $order_table="order_web";
        $order_detail_table="order_detail_web";
        $product_table="product_web";
        $data['order']=$order_model->getOrderByCode($order_table,$code);
        $data['order_detail']=$order_detail_model->getOrderDetailByCode($order_detail_table,$product_table,$code);
        $this->load->view("admin/order/editorder",$data);
    }
    public function remove($id)
    {
        $cate_model=$this->load->model("order_model");
        $table="order_web";
        $cond="order_id='$id'";
        $cate_model->deleteOrder($table,$cond);
        header("Location:".BASE_URL."adminorder");
    }
    public function complete($id)
    {
        $order_model=$this->load->model("order_model");
        $order_table="order_web";
        $cond="order_web.order_id='$id'";
        $data=array('status'=>1);
        $order_model->updateOrder($order_table,$data,$cond);
        header("Location:".BASE_URL."adminorder");
    }

}