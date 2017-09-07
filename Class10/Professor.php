<?php
require_once 'Person.php';
class Professor extends Person {
    private $speciality;
    private $salary;
    
    public function receiveIncrease($increase){
        $this->setSalary($this->getSalary() + $increase);
    }
    
    public function getSpeciality() {
        return $this->speciality;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSpeciality($speciality) {
        $this->speciality = $speciality;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }


}
