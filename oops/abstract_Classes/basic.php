<?php
abstract class Car{
    public $name;
     public function __construct($name){
        $this->name = $name;
    }

    abstract function intro() : string ;
}

class Bmw extends Car {
    public function intro() : string {
        return "It is a {$this->name} car." ;
    }   
}

class Volvo extends Car {
    public function intro() : string {
        return "It is a {$this->name} car. ";
    }
}

class Bharatbenz extends Car {
    public function intro() : string {
        return "It is a {$this->name} car." ;
    }
}

$bmw = new Bmw ("BMW");
echo $bmw->intro();

echo "<br>";

$Volvo = new Volvo ("VOLVO");
echo $Volvo->intro();

echo "<br>";

$Bharatbenz = new Bharatbenz ("BHARATBENZ");
echo $Bharatbenz->intro();
?>