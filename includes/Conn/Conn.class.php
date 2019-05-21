<?php

class Conn {

    private static $host = DB_HOST;
    private static $user = DB_USER;
    private static $pass = DB_PASSWORD;
    private static $bdName = DB_NAME;
    
    private static $Connect = null;

    private static function Conectar(){
        
        try {
           if(self::$Connect == null){
               $dsn = 'mysql:host=' .self::$host. ';dbname='. self::$bdName .'';
               $options = [ PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8' ];
               self::$Connect = new PDO($dsn, self::$user, self::$pass, $options);
           }
        } catch (PDOException $e) {
            PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
            echo $e;
            die;
        }
        
        self::$Connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$Connect;
            
    }
    
    public static function getConn(){
        
        return self::Conectar();
        
    }
    
}
