<?php
class Student{
    public $student_id;
    public $student_name;

    public function __construct($student_id, $student_name){
        $this->student_id=$student_id;
        $this->student_name=$student_name;
    }
}
?>