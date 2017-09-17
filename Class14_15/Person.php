<?php

abstract class Person {
    protected $name;
    protected $age;
    protected $sex;
    protected $experience;
    
    function __construct($name, $age, $sex) {
        $this->setName($name);
        $this->setAge($age);
        $this->setSex($sex);
        $this->setExperience(0);
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

    function getExperience() {
        return $this->experience;
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

    function setExperience($experience) {
        $this->experience = $experience;
    }
    
    protected function gainExperience($n){
        $this->setExperience($this->getExperience()+$n);
    }
}
