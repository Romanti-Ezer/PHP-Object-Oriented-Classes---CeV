<?php
require_once 'Wolf.php';

class Dog extends Wolf{
	public function makeSound() {
        echo "<p>Woof! Woof!</p>";
    }
	
	function reactPhrase($phrase){
		if ($phrase == "Here's your food" || $phrase == "Come here sweetie" || $phrase == "Hi!" || $phrase == "Hello!"){
			echo "<p>Wag and bark</p>";
		} else{
			echo "<p>Growl</p>";
		}
	}
	
	function reactHour($hour, $min){
		if ($hour < 12){
			echo "<p>Wag</p>";
		} elseif ($hour >= 18){
			echo "<p>Ignore</p>";
		} else{
			echo "<p>Wag and bark</p>";
		}
	}
	
	function reactOwner($owner){
		if ($owner){
			echo "<p>Wag</p>";
		} else{
			echo "<p>Growl and bark</p>";
		}
	}
	
	function reactAgeWeight($age, $weight){
		if ($age < 5){
			if ($weight < 10){
				echo "<p>Wag</p>";
			} else{
				echo "<p>Bark</p>";
			}
		} else{
			if ($weight < 10){
				echo "<p>Growl</p>";
			} else{
				echo "<p>Ignore</p>";
			}
		}
	}
}