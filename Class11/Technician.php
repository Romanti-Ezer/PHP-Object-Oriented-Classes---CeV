<?php
require_once 'Student.php';
class Technician extends Student{
    private $professionalRegister;
    
    public function practice(){
        echo "<p>{$this->name} is practicing</p>";
    }
    
    function getProfessionalRegister() {
        return $this->professionalRegister;
    }

    function setProfessionalRegister($professionalRegister) {
        $this->professionalRegister = $professionalRegister;
    }


}
