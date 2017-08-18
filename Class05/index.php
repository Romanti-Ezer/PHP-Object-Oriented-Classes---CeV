<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Class 05 - OOP</title>
        <link rel="stylesheet" href="_css/style.css"/>
    </head>
    <body>
        <div>
        <pre>
        <?php
            require_once 'BankAccount.php';
        
            $acc1 = new BankAccount(); //Jubileu
            $acc2 = new BankAccount(); //Creuza
            
            $acc1->openAccount("cc");
            $acc1->setAccNumber(1111);
            $acc1->setOwner("Jubileu");
            
            $acc2->openAccount("cp");
            $acc2->setAccNumber(2222);
            $acc2->setOwner("Creuza");
            
            $acc1->deposit(300);
            $acc2->deposit(500);
            
            $acc2->withdraw(100);
            
            $acc1->payMonthTax();
            $acc2->payMonthTax();
            
            $acc1->withdraw($acc1->getBalance());
            $acc2->withdraw($acc2->getBalance());
            
            $acc1->closeAccount();
            $acc2->closeAccount();
            
            print_r($acc1);
            print_r($acc2);
              
        ?>
        </pre>
        </div>
    </body>
</html>
