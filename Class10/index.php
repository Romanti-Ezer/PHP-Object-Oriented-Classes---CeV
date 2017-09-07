<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Class 10 - OOP</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Person.php';
            require_once 'Student.php';
            require_once 'Professor.php';
            require_once 'Employee.php';
            
            
            $p1 = new Person;
            $p2 = new Student;
            $p3 = new Professor;
            $p4 = new Employee;
            
            $p1->setName("Pedro");
            $p2->setName("Maria");
            $p3->setName("Cláudio");
            $p4->setName("Fabiana");
            
            $p1->setSex("M");
            $p4->setSex("F");
            
            $p2->setCourse("Informatics");
            $p3->setSalary(2500.75);
            $p4->setBranch("Stock");
            
            //$p1->receiveIncrease(550.20); // Won't work. Student hasn't this method
            //$p2->changeStatus(); // Won't work. Professor hasn't this method
            //$p4->cancelAdmission(); // Won't work. Employee hasn't this method
            
            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
        ?>
        </pre>
    </body>
</html>
