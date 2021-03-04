<?php

namespace SON;

class Client 
{
    public $id;
    public $name;
    private $password;

    public function __construct()
    {
        $this->password = 123;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function __toString()
    {
        return $this->name;
    }   

}