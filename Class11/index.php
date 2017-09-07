<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Person.php';
            require_once 'Visitant.php';
            require_once 'Student.php';
            require_once 'Scholar.php';
            require_once 'Professor.php';
            require_once 'Technician.php';
            
            //$p1 = new Person; // Doesn't work because Person is abstract
            $v1 = new Visitant;
            $v1->setName("Richard");
            $v1->setAge(33);
            $v1->setSex("M");
            
            print_r($v1);
            
            // Instantiating Student, a subclass of Person
            $stud1 = new Student;
            $stud1->setName("Pedro");
            $stud1->setAdmission(1111);
            $stud1->setAge(16);
            $stud1->setSex("M");
            $stud1->setCourse("Informatics");
            
            $stud1->payMonthlyDues();
            print_r($stud1);
            
            // Instantiating Professor, a subclass of Person
            $prof1 = new Professor();
            $prof1->setName("Matthew");
            $prof1->setAge(29);
            $prof1->setSalary(3024.50);
            $prof1->setSex("M");
            $prof1->setSpeciality("Software Engineering");
            $prof1->receiveIncrease(251.10);
            
            print_r($prof1);
            
            // Instantiating Scholar, a subclass of Student
            $scho1 = new Scholar;
            $scho1->setName("Jubileu");
            $scho1->setAdmission(1112);
            $scho1->setScholarship(12.5);
            $scho1->setCourse("Administration");
            $scho1->setAge(17);
            $scho1->payMonthlyDues();
            
            print_r($scho1);
            
            // Instantiating Technician, a subclass of Student
            $tech1 = new Technician;
            $tech1->setName("Escobar");
            $tech1->setAdmission(1113);
            $tech1->setAge(19);
            $tech1->setSex("M");
            $tech1->setCourse("Electronics");
            $tech1->practice();
            
            print_r($tech1);
            
        ?>
        </pre>
    </body>
</html>
