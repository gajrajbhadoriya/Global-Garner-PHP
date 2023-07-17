<?php

include("Views/form.php");

if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    require_once __DIR__ . '/Models/Calculator.php';
    $calculator = new Calculator();
    $result = $calculator->calculate($num1, $num2, $operator);

    echo "Result: " . $result;
}
