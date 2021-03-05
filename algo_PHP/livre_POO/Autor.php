<?php

class Autor{
    
    private $_firstName;
    private $_lastName;
    private $_library;
    
    public function __construct($firstName = "", $lastName = ""){
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->_library = [];
    }
    
    /**
     * Get the value of _firstName
     */ 
    public function getFirstName(){
        return $this->_firstName;
    }
    
    /**
     * Get the value of _lastName
     */ 
    public function getLastName(){
        return $this->_lastName;
    }
    
    /**
     * Get the value of _book
     */ 
   public function getBook(){
        return $this->_book;
    }

        /**
     * Set the value of _firstName
     *
     * @return  self
     */ 
    public function setFirstName($_firstName){
        $this->_firstName = $_firstName;

        return $this;
    }

        /**
     * Set the value of _lastName
     *
     * @return  self
     */ 
    public function setLastName($_lastName){
        $this->_lastName = $_lastName;
        
        return $this;
    }
    
   /**
     * Set the value of _book
     *
     //* @return  self
     */ 
     public function setBook($_book){
        $this->_book = $_book;

        return $this;
    }

    public function getlibrary(){
        $library = "";
        foreach($this->_library as $book){
            $library .= $book->getTitle(). " (".$book->getReleaseDate(). ") : ".$book->getPageNumber(). " pages / ".$book->getPrice()." €<br>";
        }
        return $library;

    }

    public function addBook(Book $book){
        $this->_library[] = $book;
    }

    public function __toString(){
        return "<b>Livres de ". $this->getFirstName(). " " .$this->getLastName(). " :</b> <br>.". $this->getlibrary();
    }
}