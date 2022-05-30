<?php
namespace App\models;
defined("APPPATH") OR die("Access denied");

use \Core\Database;
use \App\interfaces\Crud;

class RegistroTrabajo implements Crud{

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
            INSERT INTO trabajos2020(categoria_id,especialidad_id,usuario_id,titulo_corto,titulo_en,titulo_es,adjunto,adjunto_extenso,resumen,coautores,autor,url_video,postulatrabajo,envio_revista)
            VALUES(:categoria_id,:especialidad_id,:usuario_id,:titulo_corto,:titulo_en,:titulo_es,:adjunto,:adjunto_extenso,:resumen,:coautores,:autor,:url_video,:postulatrabajo,:envio_revista);
sql;
            $parametros = array(
            
            ':categoria_id'=>$data->_categoria_id,
            ':especialidad_id'=>$data->_especialidad_id,
            ':usuario_id'=>$data->_usuario_id,
            ':titulo_corto'=>$data->_titulo_corto,
            ':titulo_en'=>$data->_titulo_en,
            ':titulo_es'=>$data->_titulo_es,
            ':adjunto'=>$data->_adjunto,
            ':adjunto_extenso'=>$data->_adjunto_extenso,
            ':resumen'=>$data->_resumen,
            ':coautores'=>$data->_coautores,
            ':autor'=>$data->_autor,
            ':url_video'=>$data->_url_video,
            ':postulatrabajo'=>$data->_postulatrabajo,
            ':envio_revista'=>$data->_envio_revista,
           
            );
 
            $id = $mysqli->insert($query,$parametros);
            //UtileriasLog::addAccion($accion);
            return $id;
         
    }

    public static function getCategorias(){       
        $mysqli = Database::getInstance();
        $query=<<<sql
        SELECT * FROM categorias_trabajos
sql;
        return $mysqli->queryAll($query);
      }

      public static function getEspecialidades(){       
        $mysqli = Database::getInstance();
        $query=<<<sql
        SELECT * FROM especialidades
sql;
        return $mysqli->queryAll($query);
      }
}