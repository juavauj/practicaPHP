<?php
    require('conexion.php'); #el método require es propio de php

    $nombreImg = $_POST['nombreImg'];

    $carpeta = "files/";
    opendir($carpeta); #abrimos la carpeta donde queremos guardar los archivos
    $destino = $carpeta . $_FILES['imagen']['name']; #capturamos la img / files/imagen.png
    move_uploaded_file($_FILES['imagen']['tmp_name'],$destino);


    $sql = "INSERT INTO imagenes_varchar (nombre, imagen) VALUES ('$nombreImg', '$destino')";

    mysqli_query($conexion, $sql); #abrimos

    header('Location: mostrarVarchar.php'); #redirigimos a la vista mostrarVarchar.php


?>