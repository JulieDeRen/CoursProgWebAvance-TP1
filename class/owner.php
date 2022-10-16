<?php

class Owner {
    // portée privéemde la variable
    private $name; 
    private $address;
    private $zipCode;
    private $phone;
    private $email;

    public function __construct($name, $address, $zipCode, $phone, $email){
        $this -> name = $name;
        $this -> address = $address;
        $this -> zipCode = $zipCode;
        $this -> phone = $phone;
        $this -> email = $email;
    }

    public function getName(){
        return $this -> name;
    }
    public function getAddress(){
        return $this -> address;
    }
    public function getZipCode(){
        return $this -> zipCode;
    }
    public function getPhone(){
        return $this -> phone;
    }
    public function getEmail(){
        return $this -> email;
    }

}


?>