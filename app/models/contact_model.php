<?php


class contact_model extends PModel
{
    public function __construct()
    {
        parent::__construct();
    }
    public function insertContact($table,$data)
    {
        return $this->db->insert($table,$data);
    }
    public function getAllContact($table)
    {
        $sql="SELECT * FROM $table";
        return $this->db->select($sql);
    }
}