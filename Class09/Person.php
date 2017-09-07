<?php

class Person {
    private $name;
    private $age;
    private $sex;
    
    function __construct($name, $age, $sex) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    
    function getName() {
        return $this->name;
    }

    function getAge() {
        return $this->age;
    }

    function getSex() {
        return $this->sex;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setAge($age) {
        $this->age = $age;
    }

    function setSex($sex) {
        $this->sex = $sex;
    }

    // Method
    
    public function completeYear(){
        $this->setAge($this->getAge() + 1);
    }
}
