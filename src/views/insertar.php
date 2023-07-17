<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="" method="post">
        <input type="text" name="nombre">
        <input type="text" name="apellido">
        <input type="email" name="email">
        <button type="submit">Guardar</button>
    </form>
</body>
</html>


<?php
use Pdo\Aplicacion\Controllers\EstudianteController;
require '../../vendor/autoload.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['nombre'])){
        $respuesta = EstudianteController::insertarEstudiante();
        if($respuesta == "ok"){
            echo '<script>alert("Registro exitoso")</script>';
        }else{
            echo '<script>alert("Error de registro")</script>';
        }
    }else{
        echo '<script>alert("Completar los campos")</script>';
    }
}

?>