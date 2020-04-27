<?php

// Activamos en esta pestaña la sesión de nuestro usuario
session_start();
$_SESSION['user'];


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Usuario :: Clases PHP</title>
</head>
<body>
    <span>
        <?php echo "Bienvenid@ " . $_SESSION['user']['nombre'] . " " . $_SESSION['user']['apellido']; ?>
    </span>

    <a href="control/usuarioControl.php?accion=cerrar">Cerrar Sesión</a>

    <div id="registroProdFrom">
        <form action="POST" action="control/productoControl.php?accionProd=registrarProd">
            <input type="text" name="nombre" id="nombre" placeholder="Nombre Producto" />
            <br>
            <input type="hidden" value="<?php echo $_SESSION['user']['id']; ?>" name="idUsuario">
            <input type="submit" value="Registrar Producto" name="enter" />
        </form>
    </div>

    <?php
    include  __DIR__ .  '/control/productoControl.php';
    ?>
</body>
</html>