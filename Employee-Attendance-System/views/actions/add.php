<?php

include dirname(__DIR__, 1) . '/includes/header.php';

use App\Controllers\EmployeeController;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $emp_name = $_POST['emp_name'];
    $emp_roll = $_POST['emp_roll'];
    $employee = new EmployeeController();
    $employee->add($emp_name, $emp_roll);

    header('Location: ../index.php');
}
