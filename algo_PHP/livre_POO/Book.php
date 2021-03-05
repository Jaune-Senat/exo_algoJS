<?php

class Book{
    
    private $_title;
    private $_pageNumber;
    private $_releaseDate;
    private $_price;
    private $_autor;

    public function __construct($title = "", $pageNumber = 0, $releaseDate = 0, $price = 0, Autor $autor){
        
        $this->_title = $title;
        $this->_pageNumber = $pageNumber;
        $this->_releaseDate = $releaseDate;
        $this->_price = $price;
        $this->_autor = $autor;
        $this->_autor->addBook($this);
    }

    /**
     * Get the value of _title
     */ 
    public function getTitle(){
        return $this->_title;
    }

    /**
     * Get the value of _pageNumber
     */ 
    public function getPageNumber(){
        return $this->_pageNumber;
    }

    /**
     * Get the value of _releaseDate
     */ 
    public function getReleaseDate(){
        return $this->_releaseDate;
    }
    
    /**
     * Get the value of _price
     */ 
    public function getPrice(){
        return $this->_price;
    }

    /**
     * Get the value of _autor
     */ 
    public function getAutor(){
        return $this->_autor;
    }

    /**
     * Set the value of _title
     *
     * @return  self
     */ 
    public function setTitle($_title){
        $this->_title = $_title;

        return $this;
    }

    /**
     * Set the value of _pageNumber
     *
     * @return  self
     */ 
    public function setPageNumber($_pageNumber){
        $this->_pageNumber = $_pageNumber;

        return $this;
    }

    /**
     * Set the value of _releaseDate
     *
     * @return  self
     */ 
    public function setReleaseDate($_releaseDate){
        $this->_releaseDate = $_releaseDate;

        return $this;
    }

    /**
     * Set the value of _price
     *
     * @return  self
     */ 
    public function setPrice($_price){
        $this->_price = $_price;

        return $this;
    }

    /**
     * Set the value of _autor
     *
     * @return  self
     */ 
    public function setAutor($_autor){
        $this->_autor = $_autor;

        return $this;
    }
}