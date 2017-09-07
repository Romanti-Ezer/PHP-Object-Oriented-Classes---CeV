<?php
require_once 'Person.php';
class Professor extends Person{ 
    private $speciality;
    private $salary;
    
    public function receiveIncrease($value){
        $this->setSalary($this->getSalary() + $value);
    }
    
    function getSpeciality() {
        return $this->speciality;
    }

    function getSalary() {
        return $this->salary;
    }

    function setSpeciality($speciality) {
        $this->speciality = $speciality;
    }

    function setSalary($salary) {
        $this->salary = $salary;
    }


}
