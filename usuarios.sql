CREATE DATABASE sesiones;

USE sesiones

CREATE TABLE usuarios4(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    usuario VARCHAR(50) NOT NULL,
    clave VARCHAR(255) NOT NULL
);



INSERT INTO usuarios4(nombre,usuario,clave)
VALUES('Administrador','admin','1234');