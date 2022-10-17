<?php

abstract class Animal {
    // portée protégée de la variable et méthodes publiques
    protected $type = "Cat"; 

    public function __construct($type){
        $this -> type = $type;
    }

    public function getType(){
        return $this -> type;
    }

}


?>