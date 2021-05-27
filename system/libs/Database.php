<?php


class Database extends PDO
{
    public function __construct()
    {
        $connect="mysql:dbname=".dbname.";host=".host.";charset=utf8";
        $user=user;
        $pass=pass;
        $db= new PDO($connect,$user,$pass);
        parent::__construct($connect,$user,$pass);
    }
    public function select($sql,$data=array())
    {
        $statement=$this->prepare($sql);
        foreach ($data as $key=>$value):
            $statement->bindParam($key,$value);
            endforeach;
        $statement->execute();
        return $statement->fetchAll();
    }
    public function insert($table,$data)
    {
        $keys=implode(',',array_keys($data));
        $values=":".implode(", :",array_keys($data));
        $sql="INSERT INTO $table($keys) VALUES ($values)";
        $statement=$this->prepare($sql);
        foreach ($data as $key=>$value):
            $statement->bindValue(":".$key,$value);
        endforeach;
        return $statement->execute();
    }
    public function update($table,$data,$cond)
    {
        $updateKeys= NULL;
        foreach ($data as $key=>$value):
            $updateKeys.= "$key=:$key,";
        endforeach;
        $updateKeys=rtrim($updateKeys,",");
        $sql="UPDATE $table SET $updateKeys WHERE $cond";
        $statement=$this->prepare($sql);
        foreach ($data as $key=>$value):
            $statement->bindValue(":".$key,$value);
        endforeach;
        return $statement->execute();
    }
    public function delete($table,$cond,$limit=1)
    {
        $sql="DELETE FROM $table WHERE $cond LIMIT $limit";
        return $this->exec($sql);
    }
    public function affectedRows($sql,$username,$password)
    {
        $statement=$this->prepare($sql);
        $statement->execute(array($username,$password));
        return $statement->rowCount();
    }
    public function selectUser($sql,$username,$password)
    {
        $statement=$this->prepare($sql);
        $statement->execute(array($username,$password));
        return $statement->fetchAll();
    }
    public function selectProductByPage($table,$start,$limit)
    {
        $sql="SELECT * FROM $table LIMIT $start,$limit";
        $statement=$this->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }
}