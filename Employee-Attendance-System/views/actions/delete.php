<?php

include dirname(__DIR__, 1) . '/includes/header.php';

use App\Controllers\EmployeeController;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $EmployeeController = new EmployeeController();

    $id = $_POST['emp_id'];
    // $attendance = $_POST['attendance'];

    $EmployeeController->delete($id);
    
    header('Location: ../index.php');
    exit;
}
