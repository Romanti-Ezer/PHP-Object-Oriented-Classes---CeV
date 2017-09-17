<?php

require_once 'Video.php';
require_once 'Person.php';
class View {
    private $viewer;
    private $movie;
    
    function __construct($viewer, $movie) {
        $this->setViewer($viewer);
        $this->setMovie($movie);
        $this->movie->setViews($this->movie->getViews() + 1);
        $this->viewer->setTotWatched($this->viewer->getTotWatched() + 1);
    }

    
    function getViewer() {
        return $this->viewer;
    }

    function getMovie() {
        return $this->movie;
    }

    function setViewer($viewer) {
        $this->viewer = $viewer;
    }

    function setMovie($movie) {
        $this->movie = $movie;
    }


    public function rate(){
        $this->movie->setRating(5);
    }
    
    public function rateGrade($nota){
        $this->movie->setRating($nota);
    }
    
    public function ratePercent($percent){
        $new = 0;
        
        if ($percent <= 20){
            $new = 3;
        } elseif ($percent <= 50){
            $new = 5;
        } elseif ($percent <= 90){
            $new = 9;
        } else{
            $new = 10;
        }
        
        $this->movie->setRating($new);
    }
}
