<?php
 require_once("ShapeInterface.php");

 class Shape implements ShapeInterface{
    public function __construct($color = 'red'){
        $this->color = $color;
    }

    public function getcolor(){
        return $this->color;
    }
   
    public function getArea(){
        echo "getarea";
    }


 }

?>