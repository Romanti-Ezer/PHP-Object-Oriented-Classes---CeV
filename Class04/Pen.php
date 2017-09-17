<?php
class Pen {
    private $model;
    private $tip;
    private $color;
    private $covered;
    
    function __construct($model, $tip, $color) {
        $this->model = $model;
        $this->tip = $tip;
        $this->color = $color;
        $this->setCovered(true);
    }

    function getModel() {
        return $this->model;
    }

    function getTip() {
        return $this->tip;
    }

    function getColor() {
        return $this->color;
    }

    function getCovered() {
        return $this->covered;
    }

    function setModel($model) {
        $this->model = $model;
    }

    function setTip($tip) {
        $this->tip = $tip;
    }

    function setColor($color) {
        $this->color = $color;
    }

    function setCovered($covered) {
        $this->covered = $covered;
    }


}
