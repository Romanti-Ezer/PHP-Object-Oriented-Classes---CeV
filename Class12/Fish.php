<?php
require_once 'Animal.php';
class Fish extends Animal {
    private $scalesColor;
    
    public function moveAround() {
        echo "<p>Swimming</p>";
    }
    
    public function eat(){
        echo "<p>Eating substances</p>";
    }
    
    public function makeSound() {
        echo "<p>Fish doesn't makes sound</p>";
    }
    
    public function dropBubble(){
        echo "<p>Droped a bubble</p>";
    }
    
    public function getScalesColor(){
        return $this->scalesColor;
    }
    
    public function setScalesColor($color){
        $this->scalesColor = $color;
    }
}
