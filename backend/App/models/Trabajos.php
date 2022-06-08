<?php
namespace App\models;
defined("APPPATH") OR die("Access denied");

use \Core\Database;
use \App\interfaces\Crud;

class Trabajos{

    public static function getById($usuario){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
         SELECT * FROM usuarios WHERE usuario LIKE :usuario
sql;
        $params = array(
            ':usuario'=> $usuario->_usuario
        );

        return $mysqli->queryOne($query,$params);
    }

    public static function getUser($usuario){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
        SELECT * FROM usuarios WHERE usuario = '$usuario'
sql;

        return $mysqli->queryAll($query);
    }
}
