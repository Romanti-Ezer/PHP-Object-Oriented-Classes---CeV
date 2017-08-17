<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - POO</title>
    </head>
    <body>
        <?php
        
            // Testando instancias de objetos tipo Caneta
            require_once 'Pen.php';
            
            $c1 = new Pen;
            $c1->modelo = "Bic Cristal";
            $c1->cor = "Azul";
            $c1->ponta = 0.5;
            $c1->carga = 70;
            $c1->tampada = true;
            $c1->destampar();
            print_r($c1);
            
            echo "<br/>";
            echo "<hr>";
            
            $c2 = new Pen;
            $c2->modelo = "Vibe";
            $c2->cor = "Verde";
            $c2->ponta = 0.8;
            $c2->carga = 50;
            $c2->tampar();
            
            print_r($c2);
                
            echo "<br/>";
            echo "<hr>";
            
            // Testando instancias de objetos tipo Mouse
            require_once 'Mouse.php';
            
            $m1 = new Mouse;
            $m1->modelo = "Motospeed V30";
            $m1->peso = "132g";
            $m1->dimensoes = "128mm de altura x 67mm de largura x 41mm de altura";
            //$m1->dimensoes = "128x67x41";
            $m1->nro_botoes = 4;
            $m1->max_dpi = 7000;
            $m1->iluminacao_personalizada = true;
            $m1->tamanho_fio = 1.5;
            
            $m1->AcenderLeds();
            
            print_r($m1);
            
            echo "<br/><br/>";
            
            $m2 = new Mouse;
            $m2->modelo = "Microsoftt Mobile 8000";
            $m2->nro_botoes = 3;
            $m2->peso = 120;
            $m2->iluminacao_personalizada = false;
            
            $m2->AcenderLeds();
            
            print_r($m2);
            
            echo "<br/>";
            echo "<hr>";
            
            // Testando instancias de objetos tipo Compromisso
            require_once 'Compromisso.php';
         
            $compromisso1 = new Compromisso;
            $compromisso1->data = "10/08";
            $compromisso1->local = "Fatec Americana";
            $compromisso1->com_quem = "Rodrigo";
            $compromisso1->situacao = "marcado";
         
            echo "<p>Compromisso:</p>";
            echo "<p>Data: $compromisso1->data</p>";
            echo "<p>Local: $compromisso1->local</p>";
            echo "<p>Com: $compromisso1->com_quem</p>";
            echo "<p>Situação: $compromisso1->situacao</p>";
         
            $compromisso1->adiar();
         
            echo "<p>Situação: $compromisso1->situacao</p>";
        ?>
    </body>
</html>
