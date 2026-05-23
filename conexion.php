<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "sesiones";

$conn = mysqli_connect($servidor,$usuario,$password,$bd);

if(!$conn){
    die("Error de conexión");
}

?>