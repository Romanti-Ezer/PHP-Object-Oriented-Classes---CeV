<?php
require_once 'Controller.php';
class RemoteControll implements Controller {
    private $volume;
    private $status;
    private $playing;
    
    public function __construct() {
        $this->setVolume(50);
        $this->setStatus(true);
        $this->setPlaying(false);
    }
    
    function getVolume() {
        return $this->volume;
    }

    function getStatus() {
        return $this->status;
    }

    function getPlaying() {
        return $this->playing;
    }

    function setVolume($volume) {
        $this->volume = $volume;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setPlaying($playing) {
        $this->playing = $playing;
    }

    
    public function openMenu() {
        echo "<p>- Menu</p>";
        echo "<p>Is it turned on?: ". ($this->getStatus()?"Yes</p>":"No</p>");
        echo "<p>Is it playing something?: ". ($this->getPlaying()?"Yes</p>":"No</p>");
        echo "<p>Volume: " . ($this->getVolume()). "</p>";
        
        for ($i = 1; $i <= ($this->getVolume()); $i += 10){
            echo "|";
        }
        echo "<br/>";
    }
    
    public function closeMenu() {
        echo "<p>Closing menu...</p>";
    }

    public function turnOn() {
        if (!$this->getStatus()){
            $this->setStatus(true);
            echo "<p>The device was turned on</p>";
        }
        else{
            echo "<p>The device is already on</p>";
        }
    }

    public function turnOff() {
        if ($this->getStatus()){
            $this->setStatus(false);
            $this->setPlaying(false);
            echo "<p>Stopping media...</p>";
            echo "<p>Turning off...</p>";
        }
        else{
            echo "<p>The device is already off...</p>";
        }
    }

    public function mute() {
        if ($this->getStatus()){
            if (getVolume() > 0){
                $this->setVolume(0);
            } else{
                echo "<p>Volume is already 0</p>";
            }
        }
        else {
            echo "<p>Error while muting: the device is turned off</p>";
        }
    }
    
    public function unmute() {
        if ($this->getStatus()){
            if ($this->getVolume() == 0){
                $this->setVolume(50);
            }
            else{
                echo "<p>Error: the device is already unmuted</p>";
            }
        }
        else{
            echo "<p>Error while unmuting: the device is turned off</p>";
        }
    }

    public function increaseVolume() {
        if ($this->getStatus()){
            if ($this->getVolume() != 100){
                $this->setVolume($this->getVolume() + 5);
            }
            else{
                echo "<p>Error: Max volume achieved</p>";
            }
        }
        else{
            echo "<p>Error while increasing volume: the device is turned off</p>";
        }
    }

    public function decreaseVolume() {
        if ($this->getStatus()){
            if ($this->getVolume() != 0){
                $this->setVolume($this->getVolume() - 5);
            }
            else{
                echo "<p>Error: Min volume achieved</p>";
            }
        }
        else{
            echo "<p>Error while decreasing volume: the device is turned off</p>";
        }
    }

    public function play() {
        if ($this->getStatus()){
            if (!$this->getPlaying()){
                $this->setPlaying(true);
            }
            else{
                echo "<p>Error: a media is already being played</p>";
            }
        }
        else {
            echo "<p>'Play' error: device is turned off</p>";
        }
    }
    
    public function pause() {
        if ($this->getStatus()){
            if ($this->getPlaying()){
                $this->setPlaying(false);
            } else{
                echo "<p>Error: there is nothing being played</p>";
            }
        }
        else {
            echo "<p>'Pause' error: device is turned off</p>";
        }
    }
}
