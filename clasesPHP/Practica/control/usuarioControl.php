<?php

/* 
Este archivo validará los campos se envían desde el formulario y instanciará la clase Usuario para acceder al método agregarUsuario()
*/

require(__DIR__ . '/../modelo/class.Usuario.php'); #requerimos el archivo de la clase Usuario

$accion = $_GET['accion'];

switch($accion){
    case 'registrar';
        insertar();
break;
}

function insertar(){
    $usuario = new Usuario(); #instanciamos la clase Usuario

    // Traemos los datos del formulario
    $nom = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['correo'];
    $pass = $_POST['contrasena'];

    $usuario->agregarUsuario($nom, $apellido, $email, $pass);

}

?>