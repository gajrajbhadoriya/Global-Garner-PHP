<?php
abstract class Animal{
    public $name;
    Public $color;

    public function Describe($name,$color){
        echo "Animal_name :" .$name . "Animal_color :" .$color ;
    }

    abstract public function show() ;
}

class Dog extends Animal{
    public function show(){
        echo "hi this is abstract method";
    }

    public function describe($name,$color){
        return parent::describe($name,$color);
    }
}

$dog = new Dog();
$dog->show();
$dog->describe("fff",66);


?>