<?php

Interface MyInterface {
    public function name();
    public function age();
}

class MyClass implements MyInterface {
    public function name(){
    echo "NAME". '<br>';
    }
    public function age(){
    echo "AGE";
    }
}

$Myclass = new Myclass();

$Myclass->name();
$Myclass->age();

?>