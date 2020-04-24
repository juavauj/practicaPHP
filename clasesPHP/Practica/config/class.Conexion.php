<?php

// La clase Conexion es una extensión de la clase Padre mysqli, ya que necesitamos que la clase Conexion herede los métodos y atributos de la clase mysqli
class Conexion extends mysqli{
    
    // Declaramos las variables
    private $DB_HOST = 'localhost';
    private $DB_USER = 'root';
    private $DB_PASS = '';
    private $DB_NAME = 'fullstack';
    
    // declarar el constructor de la clase Conexion
    public function __construct(){
        // heredamos el constructor de la clase Padre mysqli
        parent:: __construct($this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB_NAME); #así heredamos el constructor Padre de mysqli con ::

        $this->set_charset('utf-8'); #indicamos como se deben enviar los datos desde PHP

        // Declaramos la conexión
        $this->connect_errno ? die('Erorr en la conexión'. mysqli_connect_errno()) : $mensaje = 'Conectado';
    
        /* 
            Operadores Ternarios
            if(connect_errno){
                'Error en la conexión'
            } else {
                'Conectado';
            }

        */
    }
}

?>