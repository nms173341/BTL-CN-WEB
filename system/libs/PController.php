<?php
class PController
{
    protected $load=array();
    public function __construct()
    {
        $this->load=new Load();
    }
}