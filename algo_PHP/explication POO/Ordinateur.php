<?php

class Ordinateur {

    private $_marque;
    private $_modele;
    private $_ram;
    private $_processeur;

    public function __construct(Marque $marque, string $modele = "", int $ram = 0, string $processeur = "")
    {
        $this->_marque = $marque;
        $this->_modèle = $modele;
        $this->_ram = $ram;
        $this->_processeur = $processeur;
    }
    
    /**
     * Get the value of _marque
     */ 
    public function getMarque(){
        return $this->_marque;
    }
    
    /**
     * Get the value of _modele
     */ 
    public function getModele(){
        return $this->_modele;
    }
    
    /**
     * Get the value of _ram
     */ 
    public function getRam(){
        return $this->_ram;
    }
    
    /**
     * Get the value of _processeur
     */ 
    public function getProcesseur(){
        return $this->_processeur;
    }
    
    /**
     * Set the value of _marque
     *
     * @return  self
     */ 
    public function setMarque($_marque){
        $this->_marque = $_marque;
        
        return $this;
    }
    
    /**
     * Set the value of _modele
     *
     * @return  self
     */ 
    public function setModele($_modele){
        $this->_modele = $_modele;
        
        return $this;
    }
    
    /**
     * Set the value of _ram
     *
     * @return  self
     */ 
    public function setRam($_ram){
        $this->_ram = $_ram;
        
        return $this;
    }
    
    /**
     * Set the value of _processeur
     *
     * @return  self
     */ 
    public function setProcesseur($_processeur){
        $this->_processeur = $_processeur;
        
        return $this;
    }
    
        public function __toString(){
             return "L'ordinateur ".$this->getMarque(). " ".$this->getModele(). " a une mémoire vive de ".$this->getRam(). " Go, avec un processeur ".$this->getProcesseur(). "<br>";
        }
}