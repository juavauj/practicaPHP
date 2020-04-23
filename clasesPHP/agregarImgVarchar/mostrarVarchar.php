<?php
    require('conexion.php');

    $sql = "SELECT * FROM imagenes_varchar";

    $resultado = mysqli_query($conexion, $sql);

    $resultado_varchar = mysqli_fetch_all($resultado);
    @$id = $_GET['idImg'];
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
            <img src="<?php echo $datoVar[2]; ?> " />
        </div>
        <div>
            <form method="POST" action="actualizarImg_Varchar.php" enctype="multipart/form-data">
            <input type="text" value="<?php echo $datoVar[1] ?>" name="nombreNuevaImg"/>
            <input type="file" name="nuevaImagen"/>
            <input type="hidden" name="id" value="<?php echo $datoVar[0]; ?>">
            <button type="submit">Actualizar</button>
            </form>
        </div>
        <div>
            <a href="eliminar.php?id=<?php echo $datoVar[0]; ?>">Eliminar</a>
        </div>
    <?php endforeach; ?>

</body>
</html>


        <!-- Ejercicio a realizar
        Desarollar la funcionalidad de actualizar Img (Blob o Varchar)

        method="POST" -->


<!-- 
    if(isset($_POST['accion'])){
        if($_POST['accion'] == 'insertar'){
            logica para agregar el valor
        } else if($_POST['update'] == 'actualizar'){
            if(isset($_FILES['imagen']) && !empty($_FILES['imagen'])) {

            }
        }
    }
  -->
<!-- Crear tabla de contactos
    - Registrar un usuario
        nombre, apellido, direccion, telefono, email
    - Consultar y mostrar una tabla que muestre cada uno de los registros
    - Actualizar los datos de un determinado registro
    - Eliminar un registro
    - Botón de busqueda de un usuario (ustedes definen el filtro)
    
-->