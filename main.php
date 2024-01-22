<?php 
    echo"Testes com PHP";

        require_once 'Book.php';
        
        $bookShelf = array();
        
        $arrayTitles = array("PHP for Begginers", "Learning POO with PHP", "I am master of poo ?");
        $arrayAuthors = array("Matt Zandstra", "Rasmus Lerdorf", "Josh Lockhart");
        
        
        $book = new Book();
        
        $book -> setAuthor("Mandarim");
        $book -> setPages(500);
        $book -> setTitle("Learning Mandarim to Begginers");
//        print_r($book);
        
//        $bookShelf[] = $book;
        for($i=0; $i < 10; $i++)
        {
            echo "$i";
        }
//        print_r($arrayTitles);
//        print_r($arrayAuthors);
        