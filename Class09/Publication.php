<?php

interface Publication {
    public function open();
    public function close();
    public function leafThrough($p);
    public function nextPage();
    public function previousPage();
}
