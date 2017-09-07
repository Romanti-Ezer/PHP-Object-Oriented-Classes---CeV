<?php
require_once 'Mammal.php';
class Kangaroo extends Mammal{
    public function useBag(){
        echo "<p>Using the bag</p>";
    }
    public function moveAround(){
        echo "<p>Jumping</p>";
    }
}
