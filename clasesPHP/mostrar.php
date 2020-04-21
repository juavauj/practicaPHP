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
</body>
</html>