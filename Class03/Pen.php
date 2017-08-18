<?php

class Pen {
    public $model;
    public $cor;
    private $tip;
    protected $load_percent;
    protected $covered;
    
    public function scribble(){
        if ($this->covered) {
            echo "<p>Error! I can't scribble!</p>";
        }
        else{
            echo "<p>I'm scribbling...</p>";
        }
    }
    
    public function cover(){
        if ($this->covered) {
           echo "<p>The pen is already covered!</p>";
        }
        else{
            $this->covered = true;
            echo "<p>Pen $this->color covered</p>";
        }
    }
    
    public function uncover(){
        if ($this->covered==false) {
           echo "<p>The pen is already uncovered!</p>";
        }
        else{
            $this->covered = false;
            echo "<p>Pen $this->color uncovered</p>";
        }
    }
}
