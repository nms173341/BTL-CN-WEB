<?php


class order_model extends PModel
{
    public function __construct()
    {
        parent::__construct();
    }
    public function insertOrder($table,$data)
    {
        return $this->db->insert($table,$data);
    }
    public function getAllOrder($table)
    {
        $sql="SELECT * FROM $table";
        return $this->db->select($sql);
    }
    public function deleteOrder($table,$cond){
        return $this->db->delete($table,$cond);
    }
    public function getOrderByCode($table,$code)
    {
        $sql="SELECT * FROM $table WHERE order_code=:code";
        $data=array(":code"=>$code);
        return$this->db->select($sql,$data);
    }
    public function updateOrder($table,$data,$cond)
    {
        return $this->db->update($table,$data,$cond);
    }
}