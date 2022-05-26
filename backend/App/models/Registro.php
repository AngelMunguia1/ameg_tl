<?php
namespace App\models;
defined("APPPATH") OR die("Access denied");

use \Core\Database;
use \App\interfaces\Crud;

class Registro implements Crud{

    public static function getAll(){
        $mysqli = Database::getInstance();
        $query=<<<sql
        SELECT * FROM usuarios
  sql;
        return $mysqli->queryAll($query);
          
      }
      public static function getById($id){
           
      }
      public static function update($data){
        
    }
    public static function delete($id){
        
    }

    public static function insert($data){
        $mysqli = Database::getInstance(1);
        $query=<<<sql
            INSERT INTO usuarios(id_usuario, id_rol, id_titulo,nombre, apellidop, apellidom, email, password, cedula_profesional, cedula_especialista)
            VALUES(null, 6, 4, :nombre, :apellidop, :apellidom, :email, :password, :cedula_profesional, :cedula_especialista);
sql;


            $parametros = array(
            
            ':nombre'=>$data->_nombre,
            ':apellidop'=>$data->_apellidop,
            ':apellidom'=>$data->_apellidom,
            ':email'=>$data->_email,
            ':password'=>$data->_password,
            ':cedula_profesional'=>$data->_cedula_profesional,
            ':cedula_especialista'=>$data->_cedula_especialista,
           
            );
 
            $id = $mysqli->insert($query,$parametros);
            //UtileriasLog::addAccion($accion);
            return $id;
         
    }
}