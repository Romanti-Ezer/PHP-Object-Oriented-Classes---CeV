<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Class 13 - Polymorphism</title>
</head>
<body>
    <?php
        require_once 'Dog.php';

        $d1 = new Dog();
        $d1->makeSound();
        $d1->reactPhrase("Hello!");
        $d1->reactHour(12,45);
        $d1->reactOwner(true);
        $d1->reactAgeWeight(9, 7.5);
    ?>
</body>
</html>
