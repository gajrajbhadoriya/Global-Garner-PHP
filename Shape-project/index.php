<?php

require_once("./models/Circle.php");
require_once("./models/AreaCalculator.php");
require_once("./models/Square.php");

// Encapsulation
$circle = new Circle;
$circle->setRadius(5);

$square = new Square;

$calculator = new AreaCalculator([$circle, $square]);
$area = $calculator->sum();

echo "The total area is: " . $area . "\n";
?>
