<?php

abstract class Animal {
    // portée protégée de la variable et méthodes publiques
    protected $type = "Cat"; 

    // construction de l'objet avec toutes ses propriétés
    public function __construct($type){
        $this -> type = $type;
    }
    
    // méthodes pour récupérer la valeur de la propriété retournée par la méthode
    public function getType(){
        return $this -> type;
    }

}


?>