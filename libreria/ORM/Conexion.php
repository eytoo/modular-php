<?php
/**
 * Created by Eyetoo estudios.
 * User: Cesar Mejia
 * Date: 13/09/2015
 * Time: 10:11 AM
 */
class Conexion{
    public static function conectar(){
        try {
            $cn = new PDO("mysql:host=".HOST.";dbname=".DB, USER, PASSWORD);
            return $cn;
        }catch (PDOException $ex){
            die($ex->getMessage());
        }
    }
}
