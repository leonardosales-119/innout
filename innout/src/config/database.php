<?php

class Database{

    //conexão com o banco 
    public static function getConnection(){

        $envPacth=realpath(dirname(__FILE__,) . '/../env.ini');
        $env = parse_ini_file($envPacth);
        $conn = new mysqli($env['host'],$env['username'],$env['password'],$env['database']);

        //sabendo se ta ok
        if($conn->connect_error){

            die("Erro" . $conn->connect_error);
        }

        return $conn;
    }

    public static function getRultFromQuery($sql){

        $conn = self::getConnection();
        $result = $conn->query($sql);
        $conn->close();

        return $result;
        
    }

}