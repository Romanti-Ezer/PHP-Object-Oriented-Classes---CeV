<?php
require_once 'Person.php';
class Student extends Person{
    private $admission;
    private $course;
    
    public function payMonthlyDues(){
        echo "<p>Paying {$this->getName()}'s monthly dues</p>";
    }
    
    function getAdmission() {
        return $this->admission;
    }

    function getCourse() {
        return $this->course;
    }

    function setAdmission($admission) {
        $this->admission = $admission;
    }

    function setCourse($course) {
        $this->course = $course;
    }


}
