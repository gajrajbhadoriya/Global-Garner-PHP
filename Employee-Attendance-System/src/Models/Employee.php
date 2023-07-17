<?php

namespace App\Models;

use PDO;

class Employee
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new DBTransaction();
    }

    public function getEmployee()
    {
        $stmt = $this->pdo->query("SELECT * FROM employee");
        $employee = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $employee;
    }

    public function getAttendance()
    {
        $stmt = $this->pdo->query("SELECT * FROM attendance");
        $employee = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $employee;
    }

    public function addEmployee($emp_name, $emp_roll)
    {
        $stmt = $this->pdo->prepare("INSERT INTO employee (emp_name , emp_roll) VALUES (:emp_name, :emp_roll)");
        $stmt->bindParam(':emp_name', $emp_name);
        $stmt->bindParam(':emp_roll', $emp_roll);

        return $stmt->execute();
    }

    public function updateEmployeeStatus($id, $attendance)
    {
        $stmt = $this->pdo->prepare("UPDATE attendance SET attendance = :attendance WHERE id = :id");
        // var_dump($id);
        // exit;
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':attendance', $attendance);
        return $stmt->execute();
    }

    public function deleteEmployee($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM employee WHERE emp_id = :emp_id");
        $stmt->bindParam(':emp_id', $id);
        return $stmt->execute();
    }
}
