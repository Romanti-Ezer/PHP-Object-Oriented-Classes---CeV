<?php
require_once 'Animal.php';
class Mammal extends Animal{
    private $coat;
    
    public function eat() {
        echo "<p>The mammal is mamando</p>";
    }

    public function makeSound() {
        echo "<p>Mammal sound</p>";
    }

    public function moveAround() {
        echo "<p>Running</p>";
    }

    function getCoat() {
        return $this->coat;
    }

    function setCoat($coat) {
        $this->coat = $coat;
    }


}
