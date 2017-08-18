<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - POO</title>
    </head>
    <body>
        <?php
        
            // Testing objects instances - Pen Class
            require_once 'Pen.php';
            
            $pen1 = new Pen;
            $pen1->mode = "Bic Cristal";
            $pen1->color = "Blue";
            $pen1->tip = 0.5;
            $pen1->load_percent = 70;
            $pen1->covered = true;
            $pen1->uncover();
            print_r($pen1);
            
            echo "<br/>";
            echo "<hr>";
            
            $pen2 = new Pen;
            $pen2->model = "Vibe";
            $pen2->color = "Green";
            $pen2->tip = 0.8;
            $pen2->load_percent = 50;
            $pen2->uncover();
            
            print_r($pen2);
                
            echo "<br/>";
            echo "<hr>";
            
            // Testing objects instances - Mouse Class
            require_once 'Mouse.php';
            
            $m1 = new Mouse;
            $m1->model = "Motospeed V30";
            $m1->weight = "132g";
            $m1->dimensions = "128mm of length x 67mm of width x 41mm of height";
            //$m1->dimensoes = "128x67x41";
            $m1->buttons_number = 4;
            $m1->max_dpi = 7000;
            $m1->personalized_illumination = true;
            $m1->wire_size = 1.5;
            
            $m1->turnLedsOn();
            
            print_r($m1);
            
            echo "<br/><br/>";
            
            $m2 = new Mouse;
            $m2->model = "Microsoftt Mobile 8000";
            $m2->buttons_number = 3;
            $m2->weight = 120;
            $m2->personalized_illumination = false;
            
            $m2->turnLedsOn();
            
            print_r($m2);
            
            echo "<br/>";
            echo "<hr>";
            
            // Testing objects instances - Appointment Class
            require_once 'Appointment.php';
         
            $appointment1 = new Appointment;
            $appointment1->date = "10/08";
            $appointment1->place = "Fatec Americana";
            $appointment1->with = "Rodrigo";
            $appointment1->situation = "scheduled";
         
            echo "<p>Appointment:</p>";
            echo "<p>Date: $appointment1->date</p>";
            echo "<p>Place: $appointment1->place</p>";
            echo "<p>With: $appointment1->with</p>";
            echo "<p>Situation: $appointment1->situation</p>";
         
            $appointment1->postpone();
         
            echo "<p>Situation: $appointment1->situation</p>";
        ?>
    </body>
</html>
