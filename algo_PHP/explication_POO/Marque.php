<?php

class Marque {

    private $_nomMarque;
    private $_pays;

    public function __construct($nomMarque = "inconnue", $pays = "inconnu"){
        $this->_nomMarque = $nomMarque;
        $this->_pays = $pays;
    }



    /**
     * Get the value of _nomMarque
     */ 
    public function getNomMarque()
    {
        return $this->_nomMarque;
    }
    
    /**
     * Get the value of _pays
     */ 
    public function getPays()
    {
        return $this->_pays;
    }

    /**
     * Set the value of _nomMarque
     *
     * @return  self
     */ 
    public function setNomMarque($_nomMarque)
    {
        $this->_nomMarque = $_nomMarque;

        return $this;
    }

    /**
     * Set the value of _pays
     *
     * @return  self
     */ 
    public function setPays($_pays)
    {
        $this->_pays = $_pays;

        return $this;
    }

    public function __toString(){
        return $this->getNomMarque(). " (".$this->getPays().")";
    }
}
