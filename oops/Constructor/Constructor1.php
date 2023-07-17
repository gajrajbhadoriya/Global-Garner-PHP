<?php
class Employee{
    public $name;
    public $age;
}
 class manager extends Employee {
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age =$age;
    }
    
    public function getProperty(){
        echo $this->name . "</br>" . $this->age ;
    }
 }

 $manager = new Manager("vraj", 22);
 $manager->getProperty()


?>