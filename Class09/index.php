<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Class 09 - OOP</title>
        <link rel="stylesheet" href="src/style.css"/>
    </head>
    <body>
        <div>
        <?php
            require_once 'Person.php';
            $pers[0] = new Person("Romanti-Ezer", 18, "M");
            $pers[1] = new Person("Maria", 28, "F");
            $pers[2] = new Person("Jhon", 21, "M");
            
            require_once 'Book.php';
            $book[0] = new Book("Estatistics Fundamentals", "Paula Sanches", 183, $pers[0]->getName());
            $book[1] = new Book("PHP Fundamental", "Gayanath Jayarathne", 283, $pers[2]->getName());
            $book[2] = new Book("Advanced PHP", "Larry Ullman", 383, $pers[1]->getName());
            
            $book[0]->open();
            $book[0]->leafThrough(180);
            $book[0]->nextPage();
            $book[0]->open();
            
            $book[1]->open();
            $book[1]->leafThrough(10);
            $book[1]->previousPage();
            $book[1]->close();
            
            $book[2]->open();
            $book[2]->leafThrough(62);
            $book[2]->leafThrough(39);
            
            $book[0]->seeDetails();
            $book[1]->seeDetails();
            $book[2]->seeDetails();
            
            
        ?>
        </div>
    </body>
</html>
