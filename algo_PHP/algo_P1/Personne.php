<?php

class Personne{
    private $_lastName;
    private $_firstName;
    private $_birthDate;

    public function __construct($lastName = "", $firstName = "", $birthDate = ""){
        $this->_lastName = $lastName;
        $this->_firstName = $firstName;
        $this->_birthDate = new DateTime($birthDate);
    }
    
        /**
         * Get the value of _lastName
         */ 
        public function getLastName(){
            return $this->_lastName;
        }
        
        /**
         * Get the value of _firstName
         */ 
        public function getFirstName(){
            return $this->_firstName;
        }
        
        /**
         * Get the value of _birthDate
         */ 
        public function getBirthDate(){
            return $this->_birthDate->format("d/m/Y");
        }
        
        public function getAge(){
            $dateActuelle = new DateTime();

            $interval = $this->_birthDate->diff($dateActuelle);

            return $interval->format("%y ans");
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
         * Set the value of _firstName
         *
         * @return  self
         */ 
        public function setFirstName($_firstName){
            $this->_firstName = $_firstName;

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

        public function setAge($interval){
            $this->_interval = $interval;

            return $this;
        }

    public function __toString(){
        return $this->getFirstName(). " " .$this->getLastName(). " a ". $this->getAge(). "<br>";
    }
}