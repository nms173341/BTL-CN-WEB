<?php


class order_detail_model extends PModel
{
    public function __construct()
    {
        parent::__construct();
    }
    public function insertOrderDetail($table,$data)
    {
        return $this->db->insert($table,$data);
    }
    public function getOrderDetailByCode($order_detail_table,$product_table,$code)
    {
        $sql="SELECT * FROM $order_detail_table,$product_table WHERE  $order_detail_table.order_code='$code' AND $product_table.product_id=$order_detail_table.product_id ORDER BY $order_detail_table.order_code DESC ";
        return $this->db->select($sql);
    }
}