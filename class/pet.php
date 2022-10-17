<?php
require_once "class/animal.php";
date_default_timezone_set('America/New_York');

class Pet extends Animal {
    public $name;
    public $birthday;
    public $age;

    public function __construct($name, $birthday, $age){
        $this -> name = $name;   
        $this -> birthday = $birthday;
        // Calcul âge Ref : https://codesource.io/how-to-calculate-age-in-php/#:~:text=In%20order%20to%20calculate%20age,method%20and%20date_create()%20method.&text=Note%3A%20The%20date_diff()%20method,object%20from%20a%20supplied%20string.
        $currentDate = date("d-m-Y");
        $ageCalcul = date_diff(date_create($birthday), date_create($currentDate));
        $age= $ageCalcul->format("%y ans, %m mois et %d jours");
        $this -> age = $age;
    }
    public function getName(){
        return $this -> name;
    }
    public function getbirthday(){
        return $this -> birthday;
    }
    public function getAge(){
        return $this -> age;
    }
}

?>