<?php
class Teacher {
    public $name;
    public $age;
    public $subject;

    public function __construct($name, $age, $subject) {
        $this->name = $name;
        $this->age = $age;
        $this->subject = $subject;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getSubject() {
        return $this->subject;
    }
}

?>