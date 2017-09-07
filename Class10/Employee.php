<?php
require_once 'Person.php';
class Employee extends Person {
    private $branch;
    private $working;   
    
    public function changeStatus(){
        $this->setWorking(!$this->getWorking());
    }
    
    public function getBranch() {
        return $this->branch;
    }

    public function getWorking() {
        return $this->working;
    }

    public function setBranch($branch) {
        $this->branch = $branch;
    }

    public function setWorking($working) {
        $this->working = $working;
    }


}
