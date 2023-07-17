<?php
namespace Pdo\Aplicacion\Models;

use PDO;


class Estudiante{
    public static function mostrarEstudiantes(){
        $pdo = new Conexion();
        $link = $pdo->conectar();
        $query = $link->prepare("SELECT * FROM estudiante");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        $link = null;
        return $result;

    }

    public static function agregarEstudiante($datos){
        $pdo = new Conexion();
        $link = $pdo->conectar();
        $query = $link->prepare("INSERT INTO estudiante (estudiante_nombre,estudiante_apellido,estudiante_email) VALUES (:nombre, :apellido, :email) ");
        $query->bindParam(":nombre",$datos["nombre"],PDO::PARAM_STR);
        $query->bindParam(":apellido",$datos["apellido"],PDO::PARAM_STR);
        $query->bindParam(":email",$datos["email"],PDO::PARAM_STR);
        $query->execute();

        if($query->rowCount()>=1){
            $respuesta = "ok";
        }else{
            $respuesta = "error"; 
        }

        $link = null;
        return $respuesta;

    }

    public static function eliminarEstudiante($id){
        $pdo = new Conexion();
        $link = $pdo->conectar();
        $query = $link->prepare("DELETE FROM estudiante where id_estudiante = $id");
        $query->execute();

        if($query){
            $respuesta = "ok";
        }else{
            $respuesta = "error";
        }

        $link = null;
        return $respuesta;
    }

    public static function cargarInfoEstudiante($id){
        $pdo = new Conexion();
        $link = $pdo->conectar();
        $query = $link->prepare("SELECT * FROM estudiante where id_estudiante = $id");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        $link = null;
        return $result;
    }

    public static function editarEstudiante($id,$datos){
        $pdo = new Conexion();
        $link = $pdo->conectar();
        $query = $link->prepare("UPDATE estudiante SET estudiante_nombre=:nombre, estudiante_apellido=:apellido, estudiante_email=:email WHERE id_estudiante=$id ");
        $query->bindParam(":nombre",$datos["nombre"],PDO::PARAM_STR);
        $query->bindParam(":apellido",$datos["apellido"],PDO::PARAM_STR);
        $query->bindParam(":email",$datos["email"],PDO::PARAM_STR);
        $query->execute();

        if($query){
            $respuesta = "ok";
        }else{
            $respuesta = "error";
        }

        $link = null;
        return $respuesta;
    }
}

?>