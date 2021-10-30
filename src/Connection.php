<?php


namespace App;

class Connection
{

    public static function make(){
        try {
            return new \PDO("mysql:host=".$_ENV['DB_HOST'].";port=3306;dbname=".$_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
        } catch (PDOException $e){
            die($e->getMessage());
        }
    }
}