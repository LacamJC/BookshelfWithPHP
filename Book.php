<?php
class Book {
    private $title;
    private $author;
    private $pages;
    
    public function __construct()
    {
        $this -> title = "No title defined";
        $this -> author = "No author defined";
        $this -> pages = "No pages defined";
    }
    
    public function setTitle($t){
        return $this -> title = $t;
    }
    
    public function setAuthor($a)
    {
        return $this -> author = $a;
    }
    
    public function setPages($p)
    {
        return $this -> pages = $p; 
    }
    
}
