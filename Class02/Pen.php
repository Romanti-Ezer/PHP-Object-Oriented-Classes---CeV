<?php

class Caneta {
    var $modelo;
    var $color;
    var $ponta;
    var $carga;
    var $tampada;
    
    function rabiscar(){
        if ($this->tampada) {
            echo "<p>Erro! Não posso rabiscar!</p>";
        }
        else{
            echo "<p>Estou rabiscando...</p>";
        }
    }
    
    function tampar(){
        if ($this->tampada) {
           echo "<p>A caneta já está tampada!</p>";
        }
        else{
            $this->tampada = true;
            echo "<p>Caneta $this->cor tampada</p>";
        }
    }
    
    function destampar(){
        if ($this->tampada==false) {
           echo "<p>A caneta já está destampada!</p>";
        }
        else{
            $this->tampada = false;
            echo "<p>Caneta $this->cor destampada</p>";
        }
    }
}
