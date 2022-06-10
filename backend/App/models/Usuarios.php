<?php
namespace App\models;
defined("APPPATH") OR die("Access denied");

use \Core\Database;
use \App\interfaces\Crud;
use \App\controllers\UtileriasLog;

class Usuarios implements Crud{

    public static function getAll(){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
      SELECT * FROM registrados
sql;

        return $mysqli->queryAll($query);

    }

    public static function updateClaveRA($id,$clave){
        $mysqli = Database::getInstance(true);
        $query=<<<sql
      UPDATE registrados SET clave = '$clave' WHERE id_registrado = '$id'
sql;

        return $mysqli->update($query);
    }

    public static function getUserNotInCourse(){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
      SELECT * FROM registrados re WHERE id_registrado NOT IN (SELECT ac.id_registrado FROM asigna_curso ac)
sql;
        return $mysqli->queryAll($query);

    }

    public static function getPais(){
        $mysqli = Database::getInstance();
        $query=<<<sql
      SELECT * FROM paises
sql;
        return $mysqli->queryAll($query);
    }



    public static function getStateByCountry($id_pais){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
      SELECT * FROM estados where id_pais = '$id_pais'
sql;

        return $mysqli->queryAll($query);
    }
    public static function getById($id){

    }
    public static function insert($data){
        $mysqli = Database::getInstance(1);
        $query=<<<sql
      INSERT INTO registrados(nombre, apellidop, apellidom, email, prefijo, especialidad, telefono, id_pais, id_estado,identificador)
      VALUES(:nombre, :apellidop,:apellidom, :email, :prefijo, :especialidad, :telefono, :pais, :estado, :identificador);
sql;

        $parametros = array(

            ':nombre'=>$data->_nombre,
            ':apellidop'=>$data->_apellidop,
            ':apellidom'=>$data->_apellidom,
            ':email'=>$data->_email,
            ':prefijo'=>$data->_prefijo,
            ':especialidad'=>$data->_especialidad,
            ':telefono'=>$data->_telefono,
            ':pais'=>$data->_pais,
            ':estado'=>$data->_estado,
            ':identificador'=>$data->_identificador

        );
        $id = $mysqli->insert($query,$parametros);
        return $id;

    }

    public static function getUserRegister($email){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
      SELECT * FROM registrados WHERE email = '$email'
sql;

        return $mysqli->queryAll($query);
    }

    public static function getUserRegisterByClave($clave){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
      SELECT * FROM registrados WHERE clave = '$clave'
sql;

        return $mysqli->queryAll($query);
    }


    public static function update($data){
        $mysqli = Database::getInstance(true);
        $query=<<<sql
        UPDATE trabajos2020, usuarios
        SET trabajos2020.titulo_corto = :titulo_corto, trabajos2020.autor = :autor, trabajos2020.coautores = :coautores
        , usuarios.t_institucion = :t_institucion, trabajos2020.categoria_id = :categoria_id, trabajos2020.especialidad_id = :especialidad_id,trabajos2020.postulatrabajo_id = :postulatrabajo_id
        WHERE trabajos2020.id_trabajo = :id_trabajo AND usuarios.id_usuario = :id_usuario;
sql;


        $parametros = array(
            ':id_trabajo'=>$data->_id_trabajo,
            ':id_usuario'=>$data->_id_usuario,
            ':titulo_corto'=>$data->_titulo_corto,
            ':autor'=>$data->_autor,
            ':coautores'=>$data->_coautores,
            ':t_institucion'=>$data->_t_institucion,
            ':categoria_id'=>$data->_categoria,
            ':especialidad_id'=>$data->_especialidad,
            ':postulatrabajo_id' =>$data->_postulatrabajo,
        );

        // var_dump($parametros);
        // var_dump($query);
        // exit;
        // $accion = new \stdClass();
        // $accion->_sql= $query;
        // $accion->_parametros = $parametros;
        // $accion->_id = $hotel->_id_hotel;
        return $mysqli->update($query, $parametros);

    }
    public static function delete($id){

    }
}