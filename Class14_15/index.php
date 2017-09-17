<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Class 14 and 15 - OOP</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            require_once 'View.php';
            
            // Instantiating Videos
            $v[0] = new Video("Class 01 - POO");
            $v[1] = new Video("Class 12 - PHP");
            $v[2] = new Video("Class 15 - HTML5");
            
            // Instantiating Viewers
            $p[0] = new Gafanhoto("Romanti-Ezer", 18, "M", "romantisantos");
            $p[1] = new Gafanhoto("Creuza", 22, "F", "creuzita");
            $p[2] = new Gafanhoto("Marcos", 42, "M", "marcosgds");
            
            // Instantiating Views - Aggregation of Videos and Views
            $vw[0] = new View($p[0], $v[2]);
            $vw[1] = new View($p[0], $v[1]);
            $vw[2] = new View($p[1], $v[2]);
            $vw[3] = new View($p[2], $v[2]);
            
            $vw[0]->rateGrade(8);
            $vw[1]->ratePercent(85);
            $vw[2]->rate();
            
            print_r($vw[0]);
            print_r($vw[1]);
        ?>
        </pre>
    </body>
</html>
