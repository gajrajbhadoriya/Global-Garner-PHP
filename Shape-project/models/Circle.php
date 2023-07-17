<?php
require_once("Shape.php");

class Circle extends Shape {
  protected $radius = 5;

  public function getArea() {
    return pi() * pow($this->radius, 2);
  }

  public function setRadius($radius) {
    $this->radius = $radius;
  }
}

?>
