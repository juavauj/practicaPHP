<?php

require('conexion.php'); #traemos la conexion a la BD


$img = $_FILES['imagen']['name']; #traemos la imagen $_FILES['valorAtributoName']['AtributoName']

$temp = $_FILES['imagen']['tmp_name']; #traemos la ubicacion de la imagen en la carpeta temporal de PHP

$carpeta = 'files'; #carpeta donde se guardara la img en nuestro proyecto

// mover el archivo de la carptea temporal de PGP a la carpeta de nuestro proyecto
// move_uploaded_file('carpetaTemporal', 'carpetaDondeseMovera')
move_uploaded_file($temp, $carpeta.'/'.$img);

// BLOB en BD, debemos extraer o especificar el peso del archivo en bytes
$bytes = file_get_contents($carpeta.'/'.$img);

$nombreImg = $_POST ['nombreImg'];

// realizar la insercion de los datos a nuestra tabla
$sql = "INSERT INTO imagenes_blob (nombre, imagen) VALUES (?, ?)"; #sentencia sql
$stm = $conexion->prepare($sql); #abriendo la conexion para la insercion de datos
$stm->bind_param('ss', $nombreImg, $bytes);
$stm->execute();

// Indicamos a que archivo nos debe redirigir una vez hecho el registro
header('Location: mostrar.php');

?>