<?php

/* 
    Ir a la BD, estraer los datos qye ecesitamos mostrar en el HTML
*/

require('conexion.php'); #solicitamos la conexion a BD

$sql = "SELECT * FROM imagenes_blob"; #guardamos en una variable la sentencia sql de la consulta

$resultado = mysqli_query($conexion, $sql); #resultado = $conexion->query($sql);

$resultado_blob = mysqli_fetch_all($resultado); #busca todo en la base de datos. Siempre es un arreglo.



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
    <form method="POST" action="agregarImg_blob.php" enctype="multipart/form-data">
        <input type="text" name="nombreImg"/>
        <input type="file" name="imagen"/>
        <button type="submit">Agregar</button>

    </form>

    <?php foreach($resultado_blob as $datoImg): ?>
        <div>
            <?php echo $datoImg[1]; ?>
            <!-- Debemos decodificar la img que esta en binario por ser blob en formato base 64 -->
            <img src="data:image/jpg; base64, <?php echo base64_encode($datoImg[2]); ?>" />
            <a href="eliminar.php?id=<?php echo $datoImg[0]; ?>">Eliminar</a>
        </div>
    <?php endforeach;  ?>

</body>
</html>