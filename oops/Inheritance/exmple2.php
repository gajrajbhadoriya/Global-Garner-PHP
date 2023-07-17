<?php
class EmployeeClass{
    public $name;
    public $salary;

    public function Display($name , $salary){
        // $this->name = $name;
        // $this->salary = $salary;
        echo"Name is:".$name;
        echo"salary is:".$salary;
    }
}

class ManagerClass extends EmployeeClass{
    public function Display($name , $salary){
        // echo"Name is:".$name;
        // echo"salary is:".$salary;
        parent::Display($name,$salary);
    }

    
}

// $emp = new  EmployeeClass();
 

echo"<br>";

$manager = new  ManagerClass();
$manager->Display("Ronak", 200000000000);
$manager->Display("Darshana", 20000);
?>