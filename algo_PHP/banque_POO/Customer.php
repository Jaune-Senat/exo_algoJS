<?php

class Customer{
    private $_lastName;
    private $_firstname;
    private $_birthDate;
    private $_town;
    private $_allAccounts;

    public function __construct($lastName = "", $firstName = "", $birthDate = "", $town = ""){
        $this->_lastName = $lastName;
        $this->_firstname = $firstName;
        $this->_birthDate = new DateTime($birthDate);
        $this->_town = $town;
        $this->_allAccounts = [];
        
    }

    /**
     * Get the value of _lastName
     */ 
    public function getLastName(){
        return $this->_lastName;
    }
    
    /**
     * Get the value of _firstname
     */ 
    public function getFirstname(){
        return $this->_firstname;
    }
    
    /**
     * Get the value of _birthDate
     */ 
    public function getBirthDate(){
        return $this->_birthDate->format("d/m/Y");
    }
    
    /**
     * Get the value of _town
     */ 
    public function getTown(){
        return $this->_town;
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
     * Set the value of _firstname
     *
     * @return  self
     */ 
    public function setFirstname($_firstname){
        $this->_firstname = $_firstname;
        
        return $this;
    }
    
    /**
     * Set the value of _birthDate
     *
     * @return  self
     */ 
    public function setBirthDate($_birthDate){
        $this->_birthDate = $_birthDate;

        return $this;
    }

    /**
     * Set the value of _town
     *
     * @return  self
     */ 
    public function setTown($_town){
        $this->_town = $_town;

        return $this;
    }

    public function addAccount(Account $account){
        $this->_allAccounts[] = $account;
    }

    public function getSituation(){
        $situation = "";
        foreach($this->_allAccounts as $account){
            $situation .= $account->getLabel(). " - solde actuel: " . $account->getBalance(). " ". $account->getCurrency(). "<br>";
        }
        return $situation . "<br>";
    }

    public function __toString(){
        return "<b> Résumé de situation de ". $this->getLastName() . " " . $this->getFirstname(). " à ce jour :</b> <br>" . $this->getSituation();
    }
}


//créditer un compte
// débiter un compte
// virer de l'argent d'un compte à l'autre
// il me faut le titulaire, le nom du compte, son solde