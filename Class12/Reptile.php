<?php
require_once 'Animal.php';
class Reptile extends Animal{
    private $scalesColor;
    
    public function eat() {
        echo "<p>Eating vegetables</p>";
    }

    public function makeSound() {
        echo "<p>Reptile sound</p>";
    }

    public function moveAround() {
        echo "<p>Crawling</p>";
    }

    function getScalesColor() {
        return $this->scalesColor;
    }

    function setScalesColor($scalesColor) {
        $this->scalesColor = $scalesColor;
    }
}
