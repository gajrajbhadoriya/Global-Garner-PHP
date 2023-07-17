<?php
class Teacher{
    public $teacher_id;
    public $teacher_name;
    public function __construct($teacher_id, $teacher_name){
       $this->teacher_id = $teacher_id;
       $this->teacher_name = $teacher_name;
    }
}
?>