<?php
// ((((1))))simple function using map function
// function myfunction($v)g
// {
//   return($v*$v);
// }

// $a=array(1,2,3,4,5);
// print_r(array_map("myfunction",$a));

// ((((2)))) map function 
// $factor = 10;

$numbers = array_map(function($value) use ($factor){
    return $value * $factor;
}, [1, 2, 3]);

print_r($numbers);
// Array([0] => 10 [1] => 20 [2] => 30)

// ((((4)))) map function using arrow function
// $factor = 10;

// $number= array_map(fn($x) => $x + $factor, [1,2,3]);
// print_r($number);

// ((((5)))) map function using ANONYMOUS

$factor = 10;
$a=array(4,6,4);

$numbers = array_map(fn($factor) =>$factor *= 2,$a);
print_r($numbers);



?>