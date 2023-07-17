<?php
// ((((1))))
// $y = 1;
 
// $fn1 = fn($x) => $x + $y;
// // equivalent to using $y by value:
// $fn2 = function ($x) use ($y) {
//     return $x + $y;
// };

// var_export($fn1(3));



// ((((2))))
// simple arrow using arrow function
// $str = "hello world";
// $my_function = fn($a) => $str . $a;

// echo $my_function("!");


// ((((3))))
// using function and fn too
// $y =  1;

// $fn1 = fn($x) => $x + $y;

// $fn2 = function ($x) use ($y){
//     return $x + $y;
// };
// echo $fn1(5)

// ((((4)))) Arrow functions capture variables by value automatically, even when nested

// $z = 1;
// $fn = fn($x) => fn($y) => $x * $y + $z ;
// echo ($fn(10) (20));

// ((((5)))) Values from the outer scope cannot be modified by arrow functions
// $x = 1;
// $fn = fn() => $x++; // Has no effect
// $fn();
// var_export($x);  // Outputs 1


// ((((6)))) Array MAP FUNCTION

// ((((7)))) access outside variable using without global variables
$x = 1;
$function = function($w) use ($x){
    return $w + $x;
};

echo $function(5);
?>