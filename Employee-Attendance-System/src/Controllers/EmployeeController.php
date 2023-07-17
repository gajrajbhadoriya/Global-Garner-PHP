<?php

namespace App\Controllers;

use App\Models\Employee;

class EmployeeController
{
    private $employee;

    public function __construct()
    {
        $this->employee = new Employee();
    }

    public function index()
    { 
        return $this->employee->getEmployee();
    }

    public function attendance()
    { 
        return $this->employee->getAttendance();
    }

    public function add($emp_name, $emp_roll)
    {
        return $this->employee->addEmployee($emp_name,$emp_roll);
    }

    public function update($id, $attendance)
    {
        return $this->employee->updateEmployeeStatus($id, $attendance);
    }

    public function delete($id)
    {
        return $this->employee->deleteEmployee($id);
    }
}
