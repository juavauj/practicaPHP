<?php

require(__DIR__ . '/../modelo/class.Producto.php');

listarProductos();


if(isset($_GET['accionProd'])){
$acccionProducto = $_GET['accionProd'];

switch($accionProd){
    case 'registrarProd':
        guardarProducto();
    break;
}
}

function guardarProducto(){
    $producto = new Producto();

    $nombreProd = $_POST['nombre'];
    $idUser = $_POST['idUsuario'];

    $producto->agregarProducto($nombreProd, $idUser);
}

// listar productos

function listarProductos(){
    $producto = new Producto();

    $result = $producto->mostrarProductos();

    if($result != 'error'){
        $listaProd = $result;

        foreach($listaProd as $productoEncontrado){
            echo "$productoEncontrado[1] $productoEncontrado[2] $productoEncontrado[5] <br>";
        }
    } else {
        echo 'Error';
    }
}

?>