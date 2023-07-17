<?php
  require_once("./Database/DBTransaction.php");
  require_once("./Models/Student.php");
  require_once("./Models/Teacher.php");

 $student = new Student(01,"Rahul Solanki");
 $sql  = "insert into student(student_id, student_name)values(:student_id , :student_name)";
 $data = [
    'student_id'=>$student->student_id,
    'student_name'=>$student->student_name,
];

$teacher = new Teacher(01,"Asmita");
$sql = "insert into Teacher(teacher_id, teacher_name)values(:teacher_id, :teacher_name)";
$data = [
    'teacher_id' =>$teacher->teacher_id,
    'teacher_name' =>$teacher->teacher_name,
];
// $id  = "DELETE FROM invoice1 WHERE invoice_number = 10" ;

   $db = new DBTransaction();
   $db->insertTransaction($sql, $data);
   $db->insertTeacher($sql, $data);
//    $db->deleteTransaction();
//    $db->updatETransaction();
?>