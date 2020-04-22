<?php
    require('conexion.php');

    $sql = "SELECT * FROM imagenes_varchar";

    $resultado = mysqli_query($conexion, $sql);

    $resultado_varchar = mysqli_fetch_all($resultado);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Imagen Blob</title>
</head>
<body>
    <!-- Esta linea especificada permite enviar archivos -->
    <form method="POST" action="agregarImg_Varchar.php" enctype="multipart/form-data">
        <input type="text" name="nombreImg"/>
        <input type="file" name="imagen"/>
        <button type="submit">Agregar</button>
    </form>

    <?php foreach($resultado_varchar as $datoVar): ?>
        <div>
            <?php echo $datoVar[1]; ?>
            <img src="<?php echo $datoVar[2]; ?> " />
        </div>
    <?php endforeach; ?>

</body>
</html>