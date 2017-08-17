<?php

class Mouse {
    var $modelo;
    var $peso;
    var $dimensoes;
    var $tamanho_fio;
    var $nro_botoes;
    var $max_dpi;
    var $iluminacao_personalizada;
    var $software;
    
    function AcenderLeds(){
        if ($this->iluminacao_personalizada == true){
            echo "<p>Leds acesos com sucesso!</p>";
        }
        else {
            echo "<p>A função requer iluminação personalizada ativada</p>";
        }
    }
    
    function ClickEsquerdo(){
        echo "<p>Botão esquerdo foi clicado</p>";
    }
    
    function ClickDireito(){
        echo "<p>Botão direito foi clicado</p>";
    }
    
    function ClickDPI(){
        echo "<p>O DPI foi aumentado</p>";
    }
    
    function ClickMacro1(){
        echo "<p>O Macro01 foi ativado</p>";
    }
    
    function ClickMacro2(){
        echo "<p>O Macro02 foi ativado</p>";
    }
    
    function Scroll(){
        echo "<p>O scroll foi realizado</p>";
    }
    
    function LerBase(){
        echo "<p>O Mouse leu a base e se movimentou</p>";
    }
}
