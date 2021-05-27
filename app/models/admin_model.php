<?php


class admin_model extends PModel
{
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