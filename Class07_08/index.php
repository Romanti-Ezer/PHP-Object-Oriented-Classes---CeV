<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Class 07 and 08 - Ultra Emoji Combat</title>
        <link rel="stylesheet" href="src/style.css"/>
    </head>
    <body>
        <div>
            <h1>Ultra Emoji Combat</h1>
        <?php
            require_once 'Fighter.php';
            require_once 'Fight.php';
            
            $f[0] = new Fighter("Pretty Boy", "France", 31, 1.75, 68.9, 11, 2, 1);
            $f[1] = new Fighter("Putscript", "Brazil", 29, 1.68, 57.8, 14, 2, 3);
            $f[2] = new Fighter("Snapshadow", "USA", 35, 1.65, 80.9 , 12, 2, 1);
            $f[3] = new Fighter("Dead Code", "Australia", 28, 1.93, 81.6, 13, 0, 2);
            $f[4] = new Fighter("Ufocobol", "Brazil", 37, 1.70, 119.3, 5, 4, 3);
            $f[5] = new Fighter("Nerdaard", "USA", 30, 1.81, 105.7, 12, 2, 4);
            
            $UEC01 = new Fight;
            $UEC01->markFight($f[2],$f[3]);
            $UEC01->mFight();
        ?>
        </div>
    </body>
</html>
