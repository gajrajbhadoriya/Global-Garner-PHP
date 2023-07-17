<?php
class Fruit {
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    public function intro(){
        echo "fruit name is {$this->name} and color is {$this -> color}";
    }
}

class Banana extends Fruit {
    public $name;
    public $color;
    Public $weight;

    public function __construct($name , $color, $weight) {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function intro(){
        echo "fruit name is {$this->name} and color is {$this->color} amd weight is {$this->weight} gram.";
    }
}

$apple = New Banana("banana", "yellow", "20");
$apple->intro();

?>