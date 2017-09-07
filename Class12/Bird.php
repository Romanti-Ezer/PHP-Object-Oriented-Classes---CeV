<?php
require_once 'Animal.php';
class Bird extends Animal{
    private $featherColor;
    
    public function eat() {
        echo "<p>Eating fruits</p>";
    }

    public function makeSound() {
        echo "<p>Bird sound</p>";
    }

    public function moveAround() {
        echo "<p>Flying</p>";
    }

    public function construcNeast(){
        echo "<p>Neast constructed</p>";
    }
    
    function getFeatherColor() {
        return $this->featherColor;
    }

    function setFeatherColor($featherColor) {
        $this->featherColor = $featherColor;
    }
}
