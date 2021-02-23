<?php


class Printer{
    public static function parse($assocArray){
        echo "<pre>";
        print_r($assocArray);
        echo "</pre>";
    }
}


$assocArray = [
    "name" => "Georgi",
    "name1" => "Georgi",
    "name2" => "Georgi",
    "name3" => "Georgi",
    "name4" => "Georgi",
    "name5" => "Georgi"
];


Printer::parse($assocArray);