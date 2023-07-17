<?php

// Left Associativity
// 100 / 10 * 10 
echo (100 / 10) * 10 . "</br>";

// Right Associativity 

echo "5 - 3 + 2 = "  . (5 - 3 + 2) . "</br>"; // 5-3+2 is treated as (5-3)+2
echo "\n";
echo "5 + 3 * 2 = " .  (5 + 3 * 2) . "</br>"; // 5+3*2 is treated as 5+(3*2)
echo "\n";
echo "15 / 3 * 5 = " .  (15 / 3 * 5) . "</br>"; // 15/3*5 is treated as (15/3)*5
echo "\n";
echo "42 + 7 % 2 = "  .  (42 + 7 % 2) . "</br>"; // 42+7%2 is treated as 42+(7%2)

// Operators with the same Precedence and Associativity


$a = 5 * 3 % 2; // $a now is (5 * 3) % 2 => (15 % 2) => 1
echo $a . "</br>";
$b = 5 % 3 * 2; // $a now is (5 % 3) * 2 => (2 * 2) => 4
echo $b . "</br>";

$c = 34 + 12 / 4 - 45;
echo $c . "</br>";



?>