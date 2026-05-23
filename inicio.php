<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Principal</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="panel">

    <h1>Bienvenido <?php echo $_SESSION['nombre']; ?></h1>

    <p>Usuario: <?php echo $_SESSION['usuario']; ?></p>

    <a href="cerrar_sesion.php">Cerrar Sesión</a>

</div>

</body>
</html>