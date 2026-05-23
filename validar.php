<?php

session_start();
include("conexion.php");

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$sql = "SELECT * FROM usuarios4
        WHERE usuario='$usuario'
        AND clave='$clave'";

$resultado = mysqli_query($conn,$sql);

if(mysqli_num_rows($resultado) > 0){

    $fila = mysqli_fetch_assoc($resultado);

    $_SESSION['id'] = $fila['id'];
    $_SESSION['nombre'] = $fila['nombre'];
    $_SESSION['usuario'] = $fila['usuario'];

    header("Location: inicio.php");

}else{

    echo "Usuario o contraseña incorrectos";

}

?>