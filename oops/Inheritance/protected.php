<?php
class Fruit{
    public $name;
    public $color;

    public function __construct($name, $color, $length){
        $this->name = $name;
        $this->color = $color;
        $this->length = $length;
    }

    protected function intro(){
        echo "fruit name is {$this->name} and its color is {$this->color} . ";
    }

    protected function description(){
        echo "length of the fruit is {$this->length}.";
    }
}

class Banana extends Fruit {
    public function message(){
    echo "name and color of fruit ?";
    $this->intro();
    $this->description();
    }

    // public function description(){
    //     echo "length is ?" ;
    //     $this->description();
    // }
}

$apple = new Banana ("banana", "yellow", "big");
$apple->message();





?>