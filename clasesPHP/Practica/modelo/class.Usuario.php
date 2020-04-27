<?php

/* 
    Declarar la clase Usuario, con su respectivo constructor y sus métodos de iniciar sesión, registro, actualizar datos y demás
*/

require(__DIR__ . '/../config/class.Conexion.php'); #requireOnce / include / includeOnce

class Usuario{
    
    public function __construct(){
    }

    // Creeamos el método agregarUsuario que recibirá los parámetros cuando al isntancias el objeto Usuario le enviemos los datos del formulario
    public function agregarUsuario($nombre, $apellido, $email, $pass){
        $db = new Conexion(); #realizamos la isntancia del objeto conexion

        $sql = "INSERT INTO usuarios (nombre, apellido, correo, contrasena) 
                VALUES ('$nombre', '$apellido', '$email', '$pass')";

        #$resultado = mysqli_query($conexion, $sql)
        $db->query($sql) ? header('Location: ../index.php?res=registrado') : header('Location: ../index.php?res=error'); #operador ternario
    }

    // Crear el método de login de usuario de la clase usuario
    public function iniciarSesion($email, $pass){
        
        $db = new Conexion();

        $sql = "SELECT * FROM usuarios WHERE correo = '$email' AND contrasena = '$pass'";
        
        $result = $db->query($sql); #busqueda en basededatos de la varibale sql, sql es una sentencia.

        // Preguntamos si la variable resultado es diferente a 0, es decir, si tiene un usuario que coincuda con la busqueda
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc(); #busqueda asociada ['nombre'], ['correo'], ['constrasena']
            return $row;
        } else {
            return 'error'; #devolvemos al control el mensaje de error
        }
    }

}

?>