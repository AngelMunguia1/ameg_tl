<?php
namespace App\models;
defined("APPPATH") OR die("Access denied");

use \Core\Database;
use \App\interfaces\Crud;

class Login{
 
    public static function getUserByEmail($usuario){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
        SELECT *
        FROM usuarios
        WHERE usuario = '$usuario'
sql;

        return $mysqli->queryAll($query);
    }

    public static function getUserRAById($usuario){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
        SELECT * FROM usuarios
        WHERE usuario LIKE :usuario
sql;
        $params = array(
            ':usuario'=> $usuario->_usuario,
            ':contrasena'=>$usuario->_contrasena
        );

        var_dump($params);

        return $mysqli->queryOne($query,$params);
    }

    public static function getById($usuario){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
        SELECT * FROM usuarios WHERE id_usuario = :id_usuario AND usuario LIKE :usuario
sql;
        $params = array(
            ':usuario'=> $usuario->_usuario,
            ':contrasena'=>$usuario->_contrasena
        );

        return $mysqli->queryOne($query,$params);
    }
}
