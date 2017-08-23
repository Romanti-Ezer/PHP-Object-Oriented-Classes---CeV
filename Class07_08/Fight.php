<?php

class Fight {
    private $challenged;
    private $challenger;
    private $rounds;
    private $approved;
    
    // Special Methods
    function getChallenged() {
        return $this->challenged;
    }

    function getChallenger() {
        return $this->challenger;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getApproved() {
        return $this->approved;
    }

    function setChallenged($challenged) {
        $this->challenged = $challenged;
    }

    function setChallenger($challenger) {
        $this->challenger = $challenger;
    }

    function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    function setApproved($approved) {
        $this->approved = $approved;
    }
    
    function __construct() {
        
    }

    // Public Methods
    public function markFight(Fighter $f1, Fighter $f2){
        if (($f1->getCategory() == $f2->getCategory()) && ($f1 != $f2)){
            $this->setApproved(true);
            $this->setChallenged($f1);
            $this->setChallenger($f2);
        } else{
            $this->setApproved(false);
            $this->setChallenged(false);
            $this->setChallenger(false);
            
            echo "<h2>Error while marking fight</h2>";
            
             if ($f1 == $f2){
                echo "<p>The fighter {$f1->getName()} cannot fight against himself!</p>";
            } elseif ($f1->getCategory() != $f2->getCategory()){
                echo "<p>The fighters' categories are different</p>";
                echo "<p>{$f1->getName()}: {$f1->getCategory()} category</p>";
                echo "<p>{$f2->getName()}: {$f2->getCategory()} category</p>";
            }
        }
    }
    
    public function mFight(){
        if ($this->getApproved()){
            echo "<h2>".($this->getChallenged()->getName()) ." versus ".($this->getChallenger()->getName())."</h2>";
            $this->getChallenged()->presentFighter();
            $this->getChallenger()->presentFighter();
            $winner = rand(0, 2);
            
            echo "<hr>";
            echo "<p>...</p>";
            echo "<p>Fight period</p>";
            echo "<p>...</p>";
            echo "<hr>";
            echo "<h2>End of fight!</h2>";
            
            switch ($winner){
                case 0: // Draw
                    echo "<p>The fight drew!</p>";
                    $this->challenged->drawFight();
                    $this->challenger->drawFight();
                    break;
                case 1: // Challenged wins
                    $this->challenged->winFight();
                    $this->challenger->loseFight();
                    echo "<p>The challenged {$this->challenged->getName()} was the winner!</p>";
                    echo "<p>One more victory for his stats, that now is:". $this->showStats($this->challenged). "</p>";
                    
                    break;
                case 2: // Challenger wins
                    $this->challenger->winFight();
                    $this->challenged->loseFight();
                    echo "<p>The challenger {$this->challenger->getName()} was the winner!</p>";
                    echo "<p>One more victory for his stats, that now is:". $this->showStats($this->challenger). "</p>";
            }
        } else{
            echo "<p>The fight cannot happen, it wasn't approved</p>";
        }
    }
    
    public function showStats(Fighter $winner){
        $wins = $winner->getWins();
        $losses = $winner->getLosses();
        $draws = $winner->getDraws();
        
        return " $wins/$losses/$draws ";
    }
}
