<?php
namespace OnRoute\models;
use PDO;
class Database{
    
    // private static $user ="moeasakr_the_webdevs";
    // private static $pass = "rk,O#Nuwn]wJ";
    // private static $dsn = "mysql:host=198.50.215.64;dbname=moeasakr_onroute";

    /*
    Heroku Database PHPMyAdmin
    */
    //mysql://b0e67c74f17db1:e15748b9@us-cdbr-east-03.cleardb.com/heroku_2ccb5fef8b13c05;
    
    private static $user ="b0e67c74f17db1";
    private static $pass = "e15748b9";
    private static $dsn = "mysql:host=us-cdbr-east-03.cleardb.com;dbname=heroku_2ccb5fef8b13c05";
    
    private static $dbcon;

    private function __construct() {

    }

    public static function getDB() {
        if (!isset(self::$dbcon)) {
            self::$dbcon = new PDO(self::$dsn, self::$user, self::$pass);
        }
        return self::$dbcon;
    }
}

