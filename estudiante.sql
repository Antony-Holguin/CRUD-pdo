CREATE DATABASE Pruebas2;

use Pruebas2;

CREATE TABLE estudiante(
    id_estudiante int primary key AUTO_INCREMENT,
    estudiante_nombre varchar(30),
    estudiante_apellido varchar(30),
    estudiante_email varchar(30)
);

use Pruebas2;
DROP DATABASE Pruebas2;

use Pruebas2;
SELECT * FROM Pruebas2;
INSERT INTO estudiante (estudiante_nombre,estudiante_apellido,estudiante_email) VALUES ('Antony', 'Holguin', 'antony@gmail.com');