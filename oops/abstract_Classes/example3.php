<?php
abstract class A{
    public $name;
    public $age;

    public function __construct(){
        $this->name = $name ;
        $this->age = $age ;
    }

    abstract public function intro();
}

class B extends A{
    public function intro(){
        
    }

}




?>