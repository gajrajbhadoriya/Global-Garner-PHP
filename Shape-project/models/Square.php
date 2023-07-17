<?php
require_once("Shape.php");
require_once("ShapeInterface.php");


class Square extends Shape{
    protected $length = 4;

    public function getArea() {
        return pow($this->length, 2);
      }
}



?>