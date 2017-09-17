<?php

require_once 'VideoActions.php';
class Video implements VideoActions{
    private $title;
    private $rating;
    private $ratings;
    private $views;
    private $likes;
    private $playing;

    public function __construct($title){
        $this->setTitle($title);
        //$this->setRating(1);
        $this->setViews(0);
        $this->setLikes(0);
        $this->setPlaying(false);
    }

    public function getTitle(){
        return $this->title;
    }

    public function getRating(){
        return $this->rating;
    }

    public function getViews(){
        return $this->views;
    }

    public function getLikes(){
        return $this->likes;
    }

    public function getPlaying(){
        return $this->playing;
    }

    function setTitle($title){
        $this->title = $title;
    }

    function setRating($rating){
        $this->setRatings($this->getRatings() + 1);
        $this->rating = ($rating + $this->rating) / $this->getRatings();
    }

    function setViews($views){
        $this->views = $views;
    }

    function setLikes($likes){
        $this->likes = $likes;
    }

    function setPlaying($status){
        $this->playing = $status;
    }
    
    function getRatings() {
        return $this->ratings;
    }

    function setRatings($ratings) {
        $this->ratings = $ratings;
    }

    
    public function play(){
        $this->setPlaying(true);
    }

    public function pause(){
        $this->setPlaying(false);
    }

    public function like(){
        $this->setLikes($this->getLikes()+1);
    }
}