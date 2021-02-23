<?php

require_once "Animal.php";


class Goat extends Animal{
    private $hornLength;


    public function setHornLength($hornLength)
    {
        $this->hornLength = $hornLength;
    }


}


$goat = new Goat();

$goat->setNumberOfFeet(4);
$goat->setHasEars(true);
$goat->setHasFur(true);
print_r($goat->getAnimal());


