<?php

class Caneta {
    var $model;
    var $color;
    var $tip;
    var $load_percent;
    var $covered;
    
    function scribble(){
        if ($this->covered) {
            echo "<p>Error! I can't scribble!</p>";
        }
        else{
            echo "<p>I'm scribbling...</p>";
        }
    }
    
    function cover(){
        if ($this->covered) {
           echo "<p>The pen is already covered!</p>";
        }
        else{
            $this->covered = true;
            echo "<p>Pen $this->color covered</p>";
        }
    }
    
    function uncover(){
        if ($this->covered==false) {
           echo "<p>The pen is already uncovered!</p>";
        }
        else{
            $this->covered = false;
            echo "<p>Pen $this->color uncovered</p>";
        }
    }
}
