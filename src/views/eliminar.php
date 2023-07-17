<?php
use Pdo\Aplicacion\Controllers\EstudianteController;

require '../../vendor/autoload.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_GET['id'];

        $respuesta = EstudianteController::eliminarEstudiante($id);

        if($respuesta == "ok"){
            echo '<script>alert("Eliminacion exitosa"); window.location.href = "http://localhost/crudpdo/src/views/"; </script>';
            //header('Location: index.php');
        }else{
            echo '<script>alert("Error al eliminar")</script>';
        }
    }
?>