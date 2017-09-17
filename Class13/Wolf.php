<?php
require_once 'Mammal.php';

class Wolf extends Mammal{
	public function makeSound() {
        echo "<p>Auuuuuuuuuu!</p>";
    }
}