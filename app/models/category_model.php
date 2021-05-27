<?php


class category_model extends PModel
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getAllCategories($table)
    {
        $sql="SELECT * FROM $table";
        return $this->db->select($sql);
    }
    public function getCategoryById($table,$id)
    {
        $sql="SELECT * FROM $table WHERE category_id=:id";
        $data=array(":id"=>$id);
        return$this->db->select($sql,$data);
    }
    public function insertCategory($table,$data)
    {
        return $this->db->insert($table,$data);
    }
    public function deleteCategory($table,$cond){
        return $this->db->delete($table,$cond);
    }
    public function updateCategory($table,$data,$cond)
    {
        return $this->db->update($table,$data,$cond);
    }

}