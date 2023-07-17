<?php
require_once('./models/student.php');
require_once('./models/teacher.php');

class Section {
    public $name;
    public $students = array();
    public $teacher;

    public function __construct($name, $teacher) {
        $this->name = $name;
        $this->teacher = $teacher;
    }

    public function addStudent(Student $student) {
        array_push($this->students, $student);
    }

    public function getName() {
        return $this->name;
    }

    public function getStudents() {
        return $this->students;
    }

    public function getTeacher() {
        return $this->teacher;
    }
}

//creating objects of the classes
$teacher = new Teacher("John", 35, "Math");
$section = new Section("A", $teacher);
$student1 = new Student("Mike", 16, 10);
$student2 = new Student("Emily", 17, 11);

//adding students to the section
$section->addStudent($student1);
$section->addStudent($student2);

//printing the section details
echo "Section: ".$section->getName()."<br>";
echo "Teacher: ".$section->getTeacher()->getName()."<br>";
echo "Subject Taught: ".$section->getTeacher()->getSubject()."<br>";
echo "Students: <br>";
foreach ($section->getStudents() as $student) {
    echo "- ".$student->getName()." (Grade ".$student->getGrade().")<br>";
}



?>