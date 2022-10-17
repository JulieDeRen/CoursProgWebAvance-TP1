<?php

class Owner {
    // portée privéemde la variable
    private $name; 
    private $address;
    private $zipCode;
    private $phone;
    private $email;

    // construction de l'objet avec toutes ses propriétés
    public function __construct($name, $address, $zipCode, $phone, $email){
        $this -> name = $name;
        $this -> address = $address;
        $this -> zipCode = $zipCode;
        $this -> phone = $phone;
        $this -> email = $email;
    }
    
    // méthodes pour récupérer la valeur de la propriété retournée par la méthode
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