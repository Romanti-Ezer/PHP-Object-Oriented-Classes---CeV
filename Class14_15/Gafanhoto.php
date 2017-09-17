<?php

require_once 'Person.php';
class Gafanhoto extends Person{
    private $login;
    private $totWatched;
    
    function __construct($name, $age, $sex, $login) {
        parent::__construct($name, $age, $sex);
        $this->setLogin($login);
        $this->setTotWatched(0);
    }
    
    function getLogin() {
        return $this->login;
    }

    function getTotWatched() {
        return $this->totWatched;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setTotWatched($totWatched) {
        $this->totWatched = $totWatched;
    }

    public function watchedOneMore(){
        $this->setTotWatched($this->getTotWatched()+1);
    }
}
