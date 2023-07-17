<?php

include dirname(__DIR__, 1) . '/includes/header.php';

use App\Controllers\EmployeeController;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // var_dump($_POST);
    // exit;
    $EmployeeController = new EmployeeController();

    $id = $_POST['id'];
    $attendance = $_POST['attendance'];

    $EmployeeController->update($id, $attendance);

    header('Location: ../index.php');
    exit;
}
