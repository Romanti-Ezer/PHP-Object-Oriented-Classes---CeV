<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Class 03 - OOP</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Pen.php';
            $pen1 = new Pen;
            $pen1->model = "BIC Cristal";
            $pen1->color = "Blue";
            //$pen1->tip = 0.5; // Won't work because it's private
            //$pen1->load_percent = 99; //Won't work because it's protected
            //$pen1->covered = true; //Won't work because it's protected
            $pen1->scribble();
            $pen1->cover();
            $pen1->uncover();
            
            print_r($pen1);
        ?>
        </pre>
    </body>
</html>
