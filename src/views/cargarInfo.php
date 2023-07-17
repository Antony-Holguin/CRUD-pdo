<?php


use Pdo\Aplicacion\Controllers\EstudianteController;

require '../../vendor/autoload.php';

?>


<?php if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_GET['id'];

        $respuesta = EstudianteController::cargarInfoEstudiante($id);
        
        foreach($respuesta as $key => $value){
            echo '<form action="editarEstudiante.php?id='.$value['id_estudiante'].'" method="POST">
            
   
    
            <label for="">Nombre</label> <input name="nombre" type="text" value="'.$value['estudiante_nombre'].'">
            <label for="">Apellido</label> <input name="apellido" type="text" value="'.$value['estudiante_apellido'].'">
            <label for="">Email</label> <input name="email" type="text" value="'.$value['estudiante_email'].'">
            <input type="submit" name="id_estudiante" id="">
           
            
            ';

            echo '</form>';
        }
        
        
    }
?>




