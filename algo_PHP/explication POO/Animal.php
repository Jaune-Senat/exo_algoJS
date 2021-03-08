<?php
//une classe a toujours un nom avec la première lettre en majuscule

class Animal{

    //Attributs ou variables d'instance ou propriétés
    // portée de variable : public, protected, private
    private $_nomAnimal;
    private $_race;
    private $_nbPattes;
    private $_dateNaissance;
    private $_aliments;
    private $_pointsDeVie;

    // Constructor
    public function __construct($nomAnimal =  "inconnu", $race = "inconnue", $nbPattes = 0, $dateNaissance = ""){
        $this->_nomAnimal = $nomAnimal;
        $this->_race = $race;
        $this->nbPattes = $nbPattes;
        $this->_dateNaissance = new DateTime ($dateNaissance);
        $this->_aliments = [];
        $this->_pointsDeVie = 100;
    }

    // Getters (accesseurs) et setters (mutateurs car on fait muter les propriétés d'un objet)
    public function getNomAnimal(){
        return $this->_nomAnimal;
    }

    public function getRace(){
        return $this->_race;
    }

    public function getNbPattes(){
        return $this->_nbPattes;
    }

    public function getDateNaissance(){
        return $this->_dateNaissance->format("d/m/Y");
    }

    public function getPointsDeVie(){
        return $this->_pointsDeVie;
    }

    public function setNomAnimal($nomAnimal){
        $this->_nomAnimal = $nomAnimal;
    }

    public function setRace($race){
         $this->_race = $race;
    }

    public function setNbPattes($nbPattes){
         $this->_nbPattes = $nbPattes;
    }

    public function setDateNaissance($dateNaissance){
         $this->_dateNaissance = $dateNaissance;
    }

    public function manger($aliment){
        $this->_aliments[] = $aliment;
        //array_push($this->_aliments,$aliment)
    }

    public function attaquer(Animal $animal){
        $this->_pointsDeVie = $this->_pointsDeVie + 2;
        $animal->_pointsDeVie = $animal->_pointsDeVie -2;
        echo $this->getNomAnimal(). " a " .$this->getPointsDeVie(). " points de vie <br>";
        echo $animal->getNomAnimal(). " a " .$animal->getPointsDeVie(). " points de vie <br>";
    }

    public function __toString(){
        return $this->getNomAnimal(). " est de race ". $this->getRace(). ", possède ". $this->getNbPattes(). " pattes et est né le ".$this->getDateNaissance()."<br>";
    }
    
}


// Il est préférable de ne pas avoir deux classes dans le même fichier de code
// Mickael n'aime pas ça