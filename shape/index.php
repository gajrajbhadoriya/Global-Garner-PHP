<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

require __DIR__ . "/vendor/autoload.php";

use App\Models\Circle;
use App\Models\AreaCalculator;
use App\Models\Square;

// Encapsulation
$circle = new Circle();
$circle->setRadius(2);

$square = new Square();

$calculator = new AreaCalculator([$circle, $square]);
$area = $calculator->sum();

echo "The total area is: " . $area . "\n";
