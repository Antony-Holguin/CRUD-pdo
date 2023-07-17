<?php


use Pdo\Aplicacion\Controllers\EstudianteController;

require '../../vendor/autoload.php';

?>


<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $id = $_GET['id'];

        $datos = ['nombre' => $nombre,'apellido' => $apellido, 'email' => $email];

        $respuesta = EstudianteController::editarEstudiante($id, $datos);

        if($respuesta == "ok"){
            echo '<script>alert("Actualizacion exitosa"); window.location.href = "http://localhost/crudpdo/src/views/";</script>';
            //header('Location: index.php');
        }else{
            echo '<script>alert("Error al actualizar")</script>';
        }

        
    }
?>