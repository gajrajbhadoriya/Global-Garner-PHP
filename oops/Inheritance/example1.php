<?php
class EmployeeClass {
    public $name;
    public $age;
    public $salary;

    public function __construct($name , $age, $salary){
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function display(){
        echo "This IS a Employee Class";
        echo "</br>";
        echo "-------------------------------------------------------------";
        echo "</br>";
        echo "employee name is {$this->name}";
        echo "</br>";
        echo "employee age is {$this->age}";
        echo "</br>";
        echo "employee salary is {$this->salary}";
        echo "</br>";
        echo "------------------------------------------------------------";
        echo "</br>";

    }
}

class ManagerClass extends EmployeeClass{
    public $phone = 100;
    public $tr = 500;
    public $totalsalary;


    public function display(){
        
        $this->totalsalary = $this->phone + $this->tr;
        $this->totalsalary += $this->salary ;

        echo "Manager name is {$this->name}";
        echo "</br>";
        echo "Manager age is {$this->age}";
        echo "</br>";
        echo "Manager salary is {$this->totalsalary}";
        echo "</br>";

    }
}
$emp = new EmployeeClass("Vraj", 21, 25000);
$emp->display();
$manager = new ManagerClass("Ronak" , 20 , 7000 );
$manager->display();

echo"<br>";



?>