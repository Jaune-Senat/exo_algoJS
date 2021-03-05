<?php

Class Autor{

    private $_firstName;
    private $_lastName;

    public function __construct($firstName = "", $lastName = ""){
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
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
}