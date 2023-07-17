<?php
namespace Pdo\Aplicacion\Models;

use PDO;


class Conexion{
    private $usuario = "root";
    private $password = "";
    private $base = "Pruebas2";

    public function conectar(){
        $link = new PDO('mysql:host=localhost;dbname='.$this->base, $this->usuario, $this->password);
        return $link;
    }
}


?>