<?php

require_once 'Publication.php';

class Book implements Publication {
    private $title;
    private $author;
    private $totPages;
    private $currentPage;
    private $open;
    private $reader;
    
    function __construct($title, $author, $totPages, $reader) {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setTotPages($totPages);
        $this->setReader($reader);
        $this->setCurrentPage(0);
        $this->setOpen(false);
    }

    
    function getTitle() {
        return $this->title;
    }

    function getAuthor() {
        return $this->author;
    }

    function getTotPages() {
        return $this->totPages;
    }

    function getCurrentPage() {
        return $this->currentPage;
    }

    function getOpen() {
        return $this->open;
    }

    function getReader() {
        return $this->reader;
    }

    private function setTitle($title) {
        $this->title = $title;
    }

    private function setAuthor($author) {
        $this->author = $author;
    }

    private function setTotPages($totPages) {
        $this->totPages = $totPages;
    }

    private function setCurrentPage($currentPage) {
        $this->currentPage = $currentPage;
    }

    private function setOpen($open) {
        $this->open = $open;
    }

    private function setReader($reader) {
        $this->reader = $reader;
    }

    // Methods
    public function seeDetails(){
        if ($this->getTitle()){
            echo "<h2>Book details</h2>";
            echo "<p>Title: {$this->getTitle()}</p>";
            echo "<p>Autor: {$this->getAuthor()}</p>";
            echo "<p>Total pages: {$this->getTotPages()}</p>";
            echo "<p>Current page: {$this->getCurrentPage()}</p>";
            echo "<p>Reader: {$this->getReader()}</p>";            
        } else{
            echo "<p>Insert at least the book's title to see its details</p>";
        }
    }
    
    
    // Methods of the interface "Publication.php"
    public function close() {
        if ($this->getOpen()){
            $this->setOpen(false);
            echo "<p>The Book was closed</p>";
        } else{
            echo "<p>Error: the book is arelady closed</p>";
        }
        
    }

    public function leafThrough($p) {
        if ($this->getOpen()){
            if (($p <= $this->getTotPages()) && $p > 0){
                $this->setCurrentPage($p);
                echo "<p>The book was fliped through to the page $p</p>";
            } else{
                echo "<p>Error in flipping through the book: invalid page number</p>";
            }
        } else{
            echo "<p>Error in flipping through the book: it's closed";
        }
    }

    public function nextPage() {
        if ($this->getOpen()){
            if (($this->getCurrentPage() + 1) <= ($this->getTotPages())){
            $this->setCurrentPage($this->getCurrentPage() + 1);
            echo "<p>A page was advanced</p>";
            } else{
                echo "<p>Error going to the next page: You're in the last page</p>";
            }
        } else{
            echo "<p>Error going to the next page: book is closed</p>";
        }
    }

    public function open() {
        if ($this->getOpen()){
            echo "<p> Error opening the book: it's already open</p>";
        }
        else {
            $this->setOpen(true);
            echo "<p>Book successfully opened</p>";
        }
    }

    public function previousPage() {
        if ($this->getOpen()){
            if ($this->getCurrentPage() > 1){
            $this->setCurrentPage($this->getCurrentPage() - 1);
            } else{
                echo "<p>Error while retroceding page: You're in the first page</p>";
            }
            echo "<p>The page was retroceded</p>";
        } else{
            echo "<p>Error while retroceding page: book is closed</p>";
        }
    }

}
