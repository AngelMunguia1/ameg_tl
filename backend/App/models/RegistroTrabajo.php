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

      public static function getUserByEmail($email){
        $mysqli = Database::getInstance();
        $query=<<<sql
        SELECT * FROM usuarios WHERE usuario = '$email'
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
            INSERT INTO trabajos2020(categoria_id,especialidad_id,usuario_id,titulo_corto,titulo_en,titulo_es,adjunto,adjunto_extenso,resumen,coautores,autor,postulatrabajo_id,envio_revista,ing_solicitud_ingreso,ing_carta_rec_uno,ing_carta_rec_dos,ing_carta_prof,ing_acta_naci,ing_titulo_prof,ing_cedula_prof,ing_constancia,ing_comprobante_pago)
            VALUES(:categoria_id,:especialidad_id,:usuario_id,:titulo_corto,:titulo_en,:titulo_es,:adjunto,:adjunto_extenso,'X',:coautores,:autor,:postulatrabajo_id,:envio_revista,:ing_solicitud_ingreso,:ing_carta_rec_uno,:ing_carta_rec_dos,:ing_carta_prof,:ing_acta_naci,:ing_titulo_prof,:ing_cedula_prof,:ing_constancia,:ing_comprobante_pago);
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
            ':coautores'=>$data->_coautores,
            ':autor'=>$data->_autor,
            ':postulatrabajo_id'=>$data->_postulatrabajo_id,
            ':envio_revista'=>$data->_envio_revista,
            ':ing_solicitud_ingreso'=>$data->_ing_solicitud_ingreso,
            ':ing_carta_rec_uno'=>$data->_ing_carta_rec_uno,
            ':ing_carta_rec_dos'=>$data->_ing_carta_rec_dos,
            ':ing_carta_prof'=>$data->_ing_carta_prof,
            ':ing_acta_naci'=>$data->_ing_acta_naci,
            ':ing_titulo_prof'=>$data->_ing_titulo_prof,
            ':ing_cedula_prof'=>$data->_ing_cedula_prof,
            ':ing_constancia'=>$data->_ing_constancia,
            ':ing_comprobante_pago'=>$data->_ing_comprobante_pago,
            );
 
            $id = $mysqli->insert($query,$parametros);
            //UtileriasLog::addAccion($accion);
            return $id;
    }

      public static function getCategoriasByUser($id){       
        $mysqli = Database::getInstance();
        $query=<<<sql
        SELECT u.nombre, u.apellidop, t.categoria_id, c.categoria
        FROM usuarios u 
        INNER JOIN trabajos2020 t ON(u.id_usuario = t.usuario_id)
        INNER JOIN categorias_trabajos c ON(c.id = t.categoria_id)
        WHERE u.id_usuario = '$id';
sql;
        return $mysqli->queryAll($query);
      }

      public static function getCategorias(){       
        $mysqli = Database::getInstance();
        $query=<<<sql
        SELECT * FROM categorias_trabajos
sql;
        return $mysqli->queryAll($query);
      }

      public static function getStatus(){       
        $mysqli = Database::getInstance();
        $query=<<<sql
        SELECT * FROM status
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

      public static function getConcursa(){       
        $mysqli = Database::getInstance();
        $query=<<<sql
        SELECT * FROM concursa
sql;
        return $mysqli->queryAll($query);
      }

      public static function getTableTrabajosLibres()
      {
              $mysqli = Database::getInstance(true);
              $query =<<<sql
              SELECT * FROM trabajos2020
              sql;
              return $mysqli->queryAll($query);
      }

      public static function getTrabajosAdmin($id_usuario)
      {
              $mysqli = Database::getInstance(true);
              $query =<<<sql
              SELECT * FROM usuarios WHERE id_usuario = "$id_usuario" AND rol_id = 5;
              sql;
              return $mysqli->queryAll($query);
      }

      public static function getTableTrabajosLibresOral()
        {
                $mysqli = Database::getInstance(true);
                $query =<<<sql
                SELECT * FROM trabajos2020
                WHERE categoria_id = '3'
                ORDER BY id_trabajo ASC
                sql;
                return $mysqli->queryAll($query);
        }

        public static function getTableTrabajosLibresCartel()
        {
                $mysqli = Database::getInstance(true);
                $query =<<<sql
                SELECT * FROM trabajos2020
                WHERE categoria_id = '4'
                ORDER BY id_trabajo ASC
                sql;
                return $mysqli->queryAll($query);
        }

        public static function getTableTrabajosLibresVideo()
        {
                $mysqli = Database::getInstance(true);
                $query =<<<sql
                SELECT * FROM trabajos2020
                WHERE categoria_id = '5'
                ORDER BY id_trabajo ASC
                sql;
                return $mysqli->queryAll($query);
        }

        public static function getTableTrabajosLibresIngreso()
        {
                $mysqli = Database::getInstance(true);
                $query =<<<sql
                SELECT * FROM trabajos2020
                WHERE categoria_id = '6'
                ORDER BY id_trabajo ASC
                sql;
                return $mysqli->queryAll($query);
        }

}