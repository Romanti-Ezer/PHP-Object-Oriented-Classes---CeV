<?php

class Mouse {
    var $model;
    var $weight;
    var $dimensions;
    var $wire_size;
    var $buttons_number;
    var $max_dpi;
    var $personalized_illumination;
    var $software;
    
    function turnLedsOn(){
        if ($this->personalized_illumination == true){
            echo "<p>Leds have been turned on with sucess!</p>";
        }
        else {
            echo "<p>The function needs active personalized illumination</p>";
        }
    }
    
    function leftClick(){
        echo "<p>The left button was clicked</p>";
    }
    
    function rightClick(){
        echo "<p>The right button was clicked</p>";
    }
    
    function dpiClick(){
        echo "<p>The DPI was increased</p>";
    }
    
    function macro01Click(){
        echo "<p>Macro01 was ativated</p>";
    }
    
    function macro02Click(){
        echo "<p>Macro01 was ativated</p>";
    }
    
    function scroll(){
        echo "<p>Scroll was used</p>";
    }
    
    function readBase(){
        echo "<p>The mouse read the base. Cursor will move</p>";
    }
}
