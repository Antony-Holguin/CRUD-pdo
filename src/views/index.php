<?php


use Pdo\Aplicacion\Controllers\EstudianteController;

require '../../vendor/autoload.php';


$respuesta = EstudianteController::mostrarEstudiante();
?>


<table>
    <tr>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Email</td>
        <td colspan="2">Opciones</td>
    </tr>


<?php
foreach($respuesta as $key => $value){
    echo '<table>
                <td>'.$value['estudiante_nombre'].'</td>
                <td>'.$value['estudiante_apellido'].'</td>
                <td>'.$value['estudiante_email'].'</td>
                <td ><form action="cargarInfo.php?id='.$value['id_estudiante'].'" method="POST"><button type="submit">Editar</button>

                </form></td>
                <td ><form action="eliminar.php?id='.$value['id_estudiante'].'" method="POST"><button type="submit">Eliminar</button>
                    <input name="id_estudiante" disabled type="text" value='.$value['id_estudiante'].'>
                </form></td>
                
            </tr>
    ';
        
    echo '</table>';
}


?>
</table>

