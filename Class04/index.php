<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Pen.php';
            
            $pen1 = new Pen("BIC", "Blue", 0.5);
            $pen2 = new Pen("KKK", "Green", 1.0);
            
            print_r($pen1);
            print_r($pen2);
        ?>
        </pre>
    </body>
</html>
