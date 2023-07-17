<?php

class AreaCalculator {
    protected $shapes;
  
    public function __construct($shapes = array()) {
      $this->shapes = $shapes;
    }
  
    public function sum() {
      $area = array();
  
      foreach ($this->shapes as $shape) {
        if ($shape instanceof ShapeInterface) {
          $area[] = $shape->getArea();
        }
      }
  
      return array_sum($area);
    }
  }

?>