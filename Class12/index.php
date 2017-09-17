<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Class 12 - OOP</title>
    </head>
    <body>
        <?php
            //require_once 'Animal.php';
            require_once 'Mammal.php';
            require_once 'Reptile.php';
            require_once 'Fish.php';
            require_once 'Bird.php';
            
            require_once 'Kangaroo.php';
            require_once 'Dog.php';
            require_once 'Snake.php';
            require_once 'Turtle.php';
            require_once 'GoldFish.php';
            require_once 'Macaw.php';
            
            //$a = new Animal;
            $m = new Mammal();
            $b = new Bird();
            $r = new Reptile();
			$f = new Fish;
            $k = new Kangaroo();
            $d = new Dog();
            $t = new Turtle();
            
            /*$m->moveAround();
            $d->moveAround();
            $k->moveAround();
            $t->moveAround();*/

            $m->setWeight(85.3);
            $m->setAge(2);
            $m->setMembers(4);
            $m->moveAround();
            $m->eat();
            $m->makeSound();
            
            echo "<hr>";
            
            $f->setWeight(0.35);
            $f->setAge(1);
            $f->setMembers(0);
            $f->moveAround();
            $f->eat();
            $f->makeSound();
            $f->dropBubble();
            
            echo "<hr>";
            
            $b->setWeight(0.89);
            $b->setAge(2);
            $b->setMembers(2);
            $b->moveAround();
            $b->eat();
            $b->makeSound();
            $b->construcNeast();
			
            echo "<hr>";

            $k->moveAround();
            $t->moveAround();
			
        ?>
    </body>
</html>
