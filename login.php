<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="contenedor">

    <h2>Iniciar Sesión</h2>

    <form action="validar.php" method="POST">

        <label>Usuario</label>
        <input type="text" name="usuario" required>

        <label>Contraseña</label>
        <input type="password" name="clave" required>

        <button type="submit">Ingresar</button>

    </form>

</div>

</body>
</html>