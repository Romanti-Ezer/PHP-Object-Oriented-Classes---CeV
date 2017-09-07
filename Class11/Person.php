<?php
// The superclass
abstract class Person {
    protected $name;
    private $age;
    private $sex;
    
    public final function completeYears(){
        $this->setAge($this->getAge() + 1);
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
}
