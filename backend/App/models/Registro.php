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

      public static function getById($usuario){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
        SELECT * FROM usuarios WHERE usuario LIKE :usuario
sql;
        $params = array(
            ':usuario'=> $usuario->_usuario,
        );
        return $mysqli->queryOne($query,$params);
    }

      public static function getUser($usuario){
        $mysqli = Database::getInstance();
        $query=<<<sql
        SELECT * FROM usuarios WHERE usuario = '$usuario'
sql;
        return $mysqli->queryAll($query);      
      }

      public static function update($registro){
        $mysqli = Database::getInstance(true);
        $query=<<<sql
      UPDATE registros_acceso SET code = :code WHERE email = :email
sql;
        $parametros = array(
            ':code'=>$registro->_code,
            ':email'=>$registro->_email
        );
        $accion = new \stdClass();
        $accion->_sql= $query;
        $accion->_parametros = $parametros;
        $accion->_id = $registro->_email;
        return $mysqli->update($query, $parametros);
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
      SELECT * FROM instituciones ORDER BY institucion ASC
sql;

        return $mysqli->queryAll($query);
        //$mysqli -> set_charset("utf8");
    }

    public static function getCategoria()
    {
        $mysqli = Database::getInstance();
        $query = <<<sql
      SELECT * FROM categorias_trabajos ORDER BY id ASC
sql;

        return $mysqli->queryAll($query);
        //$mysqli -> set_charset("utf8");
    }

    public static function getStatus()
    {
        $mysqli = Database::getInstance();
        $query = <<<sql
      SELECT * FROM status ORDER BY id ASC
sql;

        return $mysqli->queryAll($query);
        //$mysqli -> set_charset("utf8");
    }

    public static function getConcursa()
    {
        $mysqli = Database::getInstance();
        $query = <<<sql
      SELECT * FROM concursa ORDER BY id ASC
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
       VALUES (NULL, :nombre, :apellidop, :apellidom, :usuario, MD5(:contrasena), '0', '1', :cedpro, :cedulaesp, :calle, :numext, :numint, :colonia, :delomun, :estado_id, :pais_id, :cp, :telefono, :celular, :p_lugar_nacimiento, :p_fecha_nacimiento, :p_edad, :p_sexo, :p_domicilio_particular, :p_especialidad, :p_cedula, :t_institucion, :t_cargo, :t_direccion_institucion, :t_telefono, :t_extension, :t_ciudad, :t_estado, :t_cp, :telinstitucion, :e_facultad, :e_fecha_inicial, :e_fecha_fin, :e_fecha_examen, :e_hospital, :e_fecha_inicial_hospital, :e_fecha_fin_hospital, :e_residencia, :e_fecha_inicial_residencia, :e_fecha_fin_residencia, :e_posgrado, :e_fecha_inicial_posgrado, :e_fecha_fin_posgrado, :inf_institucion, :fecha_ingreso, :es_socio, :fecha_ingreso_ameg, '1');
sql;


            $parametros = array(


            ':nombre'=>$data->_nombre,
            ':apellidop'=>$data->_apellidop,
            ':apellidom'=>$data->_apellidom,
            ':usuario'=>$data->_usuario,
            ':contrasena'=>$data->_contrasena,
            ':cedpro'=>$data->_cedpro,
            ':cedulaesp'=>$data->_cedulaesp,
            ':calle'=>$data->_calle,
            ':numext'=>$data->_numext,
            ':numint'=>$data->_numint,
            ':colonia'=>$data->_colonia,
            ':delomun'=>$data->_delomun,
            ':estado_id'=>$data->_estado_id,
            ':pais_id'=>$data->_pais_id,
            ':cp'=>$data->_cp,
            ':telefono'=>$data->_telefono,
            ':celular'=>$data->_celular,
            ':p_lugar_nacimiento'=>$data->_p_lugar_nacimiento,
            ':p_fecha_nacimiento'=>$data->_p_fecha_nacimiento,
            ':p_edad'=>$data->_p_edad,
            ':p_sexo'=>$data->_p_sexo,
            ':p_domicilio_particular'=>$data->_p_domicilio_particular,
            ':p_especialidad'=>$data->_p_especialidad,
            ':p_cedula'=>$data->_p_cedula,
            ':t_institucion'=>$data->_t_institucion,
            ':t_cargo'=>$data->_t_cargo,
            ':t_direccion_institucion'=>$data->_t_direccion_institucion,
            ':t_telefono'=>$data->_t_telefono,
            ':t_extension'=>$data->_t_extension,
            ':t_ciudad'=>$data->_t_ciudad,
            ':t_estado'=>$data->_t_estado,
            ':t_cp'=>$data->_t_cp,
            ':telinstitucion'=>$data->_telinstitucion,
            ':e_facultad'=>$data->_e_facultad,
            ':e_fecha_inicial'=>$data->_e_fecha_inicial,
            ':e_fecha_fin'=>$data->_e_fecha_fin,
            ':e_fecha_examen'=>$data->_e_fecha_examen,
            ':e_hospital'=>$data->_e_hospital,
            ':e_fecha_inicial_hospital'=>$data->_e_fecha_inicial_hospital,
            ':e_fecha_fin_hospital'=>$data->_e_fecha_fin_hospital,
            ':e_residencia'=>$data->_e_residencia,
            ':e_fecha_inicial_residencia'=>$data->_e_fecha_inicial_residencia,
            ':e_fecha_fin_residencia'=>$data->_e_fecha_fin_residencia,
            ':e_posgrado'=>$data->_e_posgrado,
            ':e_fecha_inicial_posgrado'=>$data->_e_fecha_inicial_posgrado,
            ':e_fecha_fin_posgrado'=>$data->_e_fecha_fin_posgrado,
            ':inf_institucion'=>$data->_inf_institucion,
            ':fecha_ingreso'=>$data->_fecha_ingreso,
            ':es_socio'=>$data->_es_socio,
            ':fecha_ingreso_ameg'=>$data->_fecha_ingreso_ameg
            );
 
            $id = $mysqli->insert($query,$parametros);
            //UtileriasLog::addAccion($accion);
            return $id;
         
    }
}