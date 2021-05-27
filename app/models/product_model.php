<?php
class product_model extends PModel
{
    public function __construct()
    {
        parent::__construct();

    }
    public function getAllProduct($table)
    {
        $sql="SELECT * FROM $table";
        return $this->db->select($sql);
    }
    public function getProductById($table,$id)
    {
        $sql="SELECT * FROM $table WHERE product_id=:id";
        $data=array(":id"=>$id);
        return$this->db->select($sql,$data);
    }
    public function getProductByPage($table,$start,$limit)
    {
        return $this->db->selectProductByPage($table,$start,$limit);
    }
    public function getAllProductAsc($table)
    {
        $sql="SELECT * FROM $table ORDER BY price ASC";
        return $this->db->select($sql);
    }
    public function insertProduct($table,$data)
    {
        return $this->db->insert($table,$data);
    }
    public function deleteProduct($table,$cond){
        return $this->db->delete($table,$cond);
    }
    public function updateProduct($table,$data,$cond)
    {
        return $this->db->update($table,$data,$cond);
    }
    public function getProductByCategoryId($table,$table_product,$id)
    {
        $sql="SELECT * FROM $table,$table_product WHERE $table.category_id=$table_product.category_id AND $table_product.category_id='$id' ORDER BY $table_product.product_id DESC ";
        return $this->db->select($sql);
    }
    public function getProductLatest($table)
    {
        $sql="SELECT * FROM $table ORDER BY $table.product_id DESC LIMIT 8";
        return $this->db->select($sql);
    }
    public function getProductFeature($table)
    {
        $sql="SELECT * FROM $table ORDER BY $table.price DESC LIMIT 4";
        return $this->db->select($sql);
    }


}
