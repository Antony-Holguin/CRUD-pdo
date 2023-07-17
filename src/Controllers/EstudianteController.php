<?php
    namespace Pdo\Aplicacion\Controllers;

    use Pdo\Aplicacion\Models\Estudiante;

    class EstudianteController{
        public static function mostrarEstudiante(){
            $respuesta = Estudiante::mostrarEstudiantes();
            return $respuesta;
        }

        public static function insertarEstudiante(){
            $datos = [
                'nombre' =>$_POST['nombre'],
                'apellido' =>$_POST['apellido'],
                'email' =>$_POST['email'],
            ];

            $respuesta = Estudiante::agregarEstudiante($datos);
            return $respuesta;
        }

        public static function eliminarEstudiante($id){
            $respuesta = Estudiante::eliminarEstudiante($id);
            return $respuesta;
        }

        public static function cargarInfoEstudiante($id){
            $respuesta = Estudiante::cargarInfoEstudiante($id);
            return $respuesta;
        }

        public static function editarEstudiante($id,$datos){
            $respuesta = Estudiante::editarEstudiante($id,$datos);
            return $respuesta;
        }
    }

?>

