<?php

class Appointment {
    public $hour;
    public $place;
    var $date;
    public $situation;
    var $with;
    
    function cancel(){
        $this->situation = "canceled";
    }
    
    function postpone(){
        $this->situacao = "postponed";
    }
    
    function changePlace(){
        echo "<p>Place Changed</p>";
    }
    
    function changeHour(){
        echo "<p>Hour changed</p>";
    }
}
