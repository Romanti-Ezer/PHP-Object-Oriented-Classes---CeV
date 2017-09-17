<?php

class Fighter {
    private $name;
    private $country;
    private $age;
    private $height;
    private $weight;
    private $category;
    private $wins;
    private $losses;
    private $draws;
    
    public function presentFighter(){
        echo "<h2>Fighter's presentation</h2>";
        echo "<p>Origin: {$this->getCountry()}</p>";
        echo "<p>Age: {$this->getAge()} years old</p>";
        echo "<p>{$this->getHeight()}m of height</p>";
        echo "<p>Weighting {$this->getWeight()} kg</p>";
        echo "<p>Won: {$this->getWins()}</p>";
        echo "<p>Lost: {$this->getLosses()}</p>";
        echo "<p>Drew: {$this->getDraws()}</p>";
        echo "<p>I PRESENT YOU.. {$this->getName()}!</p>";
    }
    
    public function fighterStatus(){
        echo "<h2>Status of the fighter</h2>";
        echo "<p>Name: {$this->getName()}</p>";
        echo "<p>Category: {$this->getCategory()}</p>";
        echo "<p> {$this->getWins()} win(s)</p>";
        echo "<p>{$this->getLosses()} lose(s)</p>";
        echo "<p>{$this->getDraws()} draw(s)</p>";
    }
    
    public function winFight(){
        $this->setWins($this->getWins() + 1);
    }
    
    public function loseFight(){
        $this->setLosses($this->getLosses() + 1);
    }
    
    public function drawFight(){
        $this->setDraws($this->getDraws() + 1);
    }
    
    
    //Special Methods
    
            
    function __construct($na, $co, $ag, $he, $we, $wi, $lo, $dr) {
        $this->setName($na);
        $this->setCountry($co);
        $this->setAge($ag);
        $this->setHeight($he);
        $this->setWeight($we);
        $this->setWins($wi);
        $this->setLosses($lo);
        $this->setDraws($dr);
    }
    
    function getName(){
        return $this->name;
    }
    
    function getCountry() {
        return $this->country;
    }

    function getAge() {
        return $this->age;
    }

    function getHeight() {
        return $this->height;
    }

    private function getWeight() {
        return $this->weight;
    }

    function getCategory() {
        return $this->category;
    }

    function getWins() {
        return $this->wins;
    }

    function getLosses() {
        return $this->losses;
    }

    function getDraws() {
        return $this->draws;
    }
    
    function setName(string $n){
        $this->name = $n;
    }

    function setCountry(string $c) {
        $this->country = $c;
    }

    function setAge(int $a) {
        $this->age = $a;
    }

    function setHeight(float $h) {
        $this->height = $h;
    }

    function setWeight(float $w) {
        $this->weight = $w;
        $this->setCategory();
    }

    private function setCategory() {
        if ($this->getWeight() < 52.2 || $this->getWeight() > 120.2){
            $this->category = "Invalid";
        } elseif ($this->getWeight() <= 70.3){
            $this->category = "Lightweight";
        } elseif ($this->getWeight() <= 83.9){
            $this->category = "Middleweight";
        } elseif ($this->getWeight() <= 120.2){
            $this->category = "Heavyweight";
        }
    }

    function setWins(int $w) {
        $this->wins = $w;
    }

    function setLosses(int $l) {
        $this->losses = $l;
    }

    function setDraws(int $d) {
        $this->draws = $d;
    }


}
