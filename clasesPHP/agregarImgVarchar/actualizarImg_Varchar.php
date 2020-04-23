<?php
    require('conexion.php'); #el método require es propio de php

    $nombreImg = $_POST['nombreNuevaImg']; #Quien queremos actualizar
    $id = $_POST['id'];
    $carpeta = "files/";
    opendir($carpeta); #abrimos la carpeta donde queremos guardar los archivos
    $destino = $carpeta . $_FILES['nuevaImagen']['name']; #capturamos la img / files/imagen.png
    move_uploaded_file($_FILES['nuevaImagen']['tmp_name'],$destino);




    $sql = "UPDATE `imagenes_varchar` SET `nombre`='$nombreImg',`imagen`='$destino' WHERE id='$id'";

    mysqli_query($conexion, $sql); #abrimos

    header('Location: mostrarVarchar.php'); #redirigimos a la vista mostrarVarchar.php

?>