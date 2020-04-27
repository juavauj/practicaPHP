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
</body>
</html>