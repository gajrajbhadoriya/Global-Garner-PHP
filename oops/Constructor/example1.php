<?php
class A{
    public $name;
    public $age;
    public function __construct($name, $age){
        $this->name = $name ;
        $this->age = $age ;
    }

    public function show(){
        echo "my name is {$this->name}" . "</br>" ."my age is {$this->age}" ; 
        echo "</br>";
        }
}

class B extends A{
    
    public function __construct($name , $age){

        parent::__construct($name , $age);
        echo "this is a B class instance";
        echo "</br>";
        parent::show();
    }
    
    
}

$base = new A("Vraj", 20);
$base->show();
$b = new B("ronak", 21);



?>