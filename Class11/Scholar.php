<?php
require_once 'Student.php';
class Scholar extends Student{
    private $scholarship;
    
    public function renewScholarship(){
        echo "<p>Scholarship renewd</p>";
    }
    
    public function payMonthlyDues() {
        echo "<p>{$this->name} has scholarship! Then his payment is with discount</p>";
        
    }
    function getScholarship() {
        return $this->scholarship;
    }

    function setScholarship($scholarship) {
        $this->scholarship = $scholarship;
    }


}
