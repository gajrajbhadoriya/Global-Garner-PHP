<?php

class User{
    public $username;
    public $password;

    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername(){
       echo $this->name;
    }

}

$User = new User();




?>