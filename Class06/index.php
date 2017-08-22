<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Class 06 - OOP</title>
    </head>
    <body>
        <?php
            require_once 'RemoteControll.php';
            $rc1 = new RemoteControll();
            $rc1->turnOn();
            $rc1->openMenu();
            $rc1->play();
            $rc1->increaseVolume();
            
            echo '<br/>';
            $rc1->openMenu();
            $rc1->turnOff();
            $rc1->increaseVolume();
            $rc1->openMenu();
            
        ?>
    </body>
</html>
