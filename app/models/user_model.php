<?php
class user_model extends PModel
{
    public function __construct()
    {
        parent::__construct();

    }
    public function getAllUser($table)
    {
        $sql="SELECT * FROM $table";
        return $this->db->select($sql);
    }
    public function getUserById($table,$id)
    {

        $sql="SELECT * FROM $table WHERE user_id=:id";
        $data=array(":id"=>$id);
        return $this->db->select($sql,$data);
    }
    public function insertUser($table,$data)
    {
        return $this->db->insert($table,$data);
    }
    public function updateUser($table,$data,$cond)
    {
        return $this->db->update($table,$data,$cond);
    }
    public function deleteUser($table,$cond){
        return $this->db->delete($table,$cond);
    }
    public function login($table,$username,$password)
    {
        $sql="SELECT * FROM $table WHERE email=? AND password=? ";
        return $this->db->affectedRows($sql,$username,$password);
    }
    public function getlogin($table,$username,$password)
    {
        $sql="SELECT * FROM $table WHERE email=? AND password=? ";
        return $this->db->selectUser($sql,$username,$password);
    }
}
