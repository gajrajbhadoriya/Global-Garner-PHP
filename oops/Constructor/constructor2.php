<?php 
class User{
    public $username;
    public $email;
    public $password;

    public function __construct($username, $email, $password){
        $this->username = $username;
        $this->email    = $email;
        $this->password = $password;
    }

    public function getProperty(){
        echo "{$this->username}" . "{$this->email}" . "{$this->password}" ;
    }
}

$user = new User("Jaydeep" , "jaydeep@gmail.com" , 12345678);
$user->getProperty();






?>