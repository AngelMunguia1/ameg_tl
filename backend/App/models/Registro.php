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

    public static function getCountryAll()
    {
        $mysqli = Database::getInstance();
        $query = <<<sql
      SELECT * FROM paises ORDER BY pais ASC
sql;

        return $mysqli->queryAll($query);
        //$mysqli -> set_charset("utf8");
    }

    public static function getEspecialidad()
    {
        $mysqli = Database::getInstance();
        $query = <<<sql
      SELECT * FROM especialidades ORDER BY id ASC
sql;

        return $mysqli->queryAll($query);
        //$mysqli -> set_charset("utf8");
    }

    public static function getInstitucion()
    {
        $mysqli = Database::getInstance();
        $query = <<<sql
      SELECT * FROM instituciones ORDER BY id ASC
sql;

        return $mysqli->queryAll($query);
        //$mysqli -> set_charset("utf8");
    }

    public static function getState($pais)
    {
        $mysqli = Database::getInstance();
        $query = <<<sql
     SELECT * FROM estados WHERE id_pais = $pais;
sql;
        return $mysqli->queryAll($query);
    }

    public static function insert($data){
        $mysqli = Database::getInstance();
        $query=<<<sql
       INSERT INTO usuarios (id_usuario, nombre, apellidop, apellidom, usuario, contrasena, titulo_id, rol_id, cedpro, cedulaesp, calle, numext, numint, colonia, delomun, estado_id, pais_id, cp, telefono, celular, p_lugar_nacimiento, p_fecha_nacimiento, p_edad, p_sexo, p_domicilio_particular, p_especialidad, p_cedula, t_institucion, t_cargo, t_direccion_institucion, t_telefono, t_extension, t_ciudad, t_estado, t_cp, telinstitucion, e_facultad, e_fecha_inicial, e_fecha_fin, e_fecha_examen, e_hospital, e_fecha_inicial_hospital, e_fecha_fin_hospital, e_residencia, e_fecha_inicial_residencia, e_fecha_fin_residencia, e_posgrado, e_fecha_inicial_posgrado, e_fecha_fin_posgrado, inf_institucion, fecha_ingreso, es_socio, fecha_ingreso_ameg, status) 
       VALUES (NULL, :nombre, :apellidop, :apellidom, :usuario, MD5(:contrasena), NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1');
sql;


            $parametros = array(
            ':nombre'=>$data->_nombre,
            ':apellidop'=>$data->_apellidop,
            ':apellidom'=>$data->_apellidom,
            ':usuario'=>$data->_usuario,
            ':contrasena'=>$data->_contrasena
            );
 
            $id = $mysqli->insert($query,$parametros);
            //UtileriasLog::addAccion($accion);
            return $id;
         
    }
}