<?php  
abstract class a  
{  
abstract public function dis1();    
}  
class b extends a  
{  
    public $name;
    public $age;

    public function intro($name):string
    {
        return name;
    }
    public function intro1($age):int
    {
        return $this->age;
    }
public function dis1()  
    {  
        echo "javatpoint";  
    }  
    public function display($name,$age)  
    {  
        echo "name:".$name;
        echo"age:".$age;     
    }  
}  
$obj = new b();  
$obj->dis1();  
$obj->display("vraj",23);    
$obj-> intro("ronak");
$obj-> intro1(21);
?>  