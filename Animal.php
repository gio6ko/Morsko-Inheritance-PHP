<?php


class Animal
{
    private $numberOfFeet;
    private $hasFur;
    private $hasEars;


    function __construct()
    {
        $this->init();
    }

    function __destruct(){

    }

    private function init(){
        $this->numberOfFeet = 4;
        $this->hasFur = true;
        $this->hasEars = true;
    }


    public function setNumberOfFeet($number)
    {
        $this->numberOfFeet = $number;
    }

    public function setHasEars($hasEars)
    {
        $this->hasEars = $hasEars;
    }

    public function setHasFur($hasFur)
    {
        $this->hasFur = $hasFur;
    }


    public function getAnimal()
    {
        return [
            "numberOfFeet" => $this->numberOfFeet,
            "hasEars" => $this->hasEars,
            "hasFur" => $this->hasFur
        ];
    }
}
