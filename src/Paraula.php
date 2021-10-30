<?php


namespace App;


class Paraula
{
    public static function aleatoria(){
        $query = require('../bootstrap.php');
        $paraules = $query->selectAll('paraules');
        return $paraules[rand(0,count($paraules))]->paraula;
        
    }
}