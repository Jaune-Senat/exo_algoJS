<?php

class Account{

    private $_label; // intitulé du compte
    private $_balance; // solde du compte
    private $_currency; // devise du compte
    private $_customer; // titulaire/client

    public function __construct($label = "", $balance = 0, $currency = "", Customer $customer){
        $this->_label = $label;
        $this->_balance = $balance;
        $this->_currency = $currency;
        $this->_customer = $customer;
        $customer->addAccount($this); // methode alternative à $this->_customer->addAccount($this);
    }

    /**
     * Get the value of _label
     */ 
    public function getLabel(){
        return $this->_label;
    }
        
    /**
     * Get the value of _balance
     */ 
    public function getBalance(){
        return $this->_balance;
    }
    
    /**
     * Get the value of _currency
     */ 
    public function getCurrency(){
        return $this->_currency;
    }
    
    /**
     * Get the value of _customer
     */ 
    public function getCustomer(){
        return $this->_customer;
    }

    /**
     * Set the value of _label
     *
     * @return  self
     */ 
    public function setLabel($_label){
        $this->_label = $_label;

        return $this;
    }

    /**
     * Set the value of _balance
     *
     * @return  self
     */ 
    public function setBalance($_balance){
        $this->_balance = $_balance;

        return $this;
    }

    /**
     * Set the value of _currency
     *
     * @return  self
     */ 
    public function setCurrency($_currency){
        $this->_currency = $_currency;

        return $this;
    }

    /**
     * Set the value of _customer
     *
     * @return  self
     */ 
    public function setCustomer($_customer){
        $this->_customer = $_customer;

        return $this;
    }

    public function credit(float $amount){
        $this->_balance += $amount; 

        echo "Le nouveau solde du " . $this->getLabel(). " de ". $this->_customer->getLastname(). " ".$this->_customer->getFirstname().  " est de: ". $this->getBalance(). "<br>";
    }

    public function debit(float $amount){
        $this->_balance -= $amount;

        echo "Le nouveau solde du " . $this->getLabel(). " de ". $this->_customer->getLastname(). " ".$this->_customer->getFirstname(). " est de: ". $this->getBalance(). " ". $this->getCurrency(). "<br>";
    }

    public function transfer(Account $toCredit, float $amount){
        $toCredit->credit($amount);
    
        $this->debit($amount);
        
    }

    public function __toString(){
        return $this->getLabel(). $this->getBalance(). "<br>";
    }
}