<?php

abstract class Animal {
    protected $weight;
    protected $age;
    protected $members;
    
    public abstract function moveAround();
    public abstract function eat();
    public abstract function makeSound();
    
    function getWeight() {
        return $this->weight;
    }

    function getAge() {
        return $this->age;
    }

    function getMembers() {
        return $this->members;
    }

    function setWeight($weight) {
        $this->weight = $weight;
    }

    function setAge($age) {
        $this->age = $age;
    }

    function setMembers($members) {
        $this->members = $members;
    }
}
