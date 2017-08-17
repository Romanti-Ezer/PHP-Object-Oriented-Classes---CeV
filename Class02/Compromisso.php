<?php

class Compromisso {
    public $horario;
    public $local;
    var $data;
    public $situacao;
    var $com_quem;
    
    function desmarcar(){
        $this->situacao = "desmarcado";
    }
    
    function adiar(){
        $this->situacao = "adiado";
    }
    
    function mudarLocal(){
        echo "<p>Local alterado</p>";
    }
    
    function mudarHorario(){
        echo "<p>Horário alterado</p>";
    }
}

class CompromissoTrabalho Extends Compromisso{
    
    
    public function mudarData(){
        $this->data = "30/18";
    }
}
