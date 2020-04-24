<?php

class Persona{


    // Declarar las variables que utilizará la clase
    public $nombre; #una variable public es aquella que permite que cualquier parte del proyecto acceda a su valor
    public $apellido;
    public $edad;


    // Declaración e incialización del constructor
    public function __construct($nombre, $apellido, $edad){
        $this->nombre = $nombre; #de esta forma a partir del $this->
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    // Método
    public function saludar(){
        echo "Hola, soy $this->nombre $this->apellido y tengo $this->edad años";
        }
    
    public function persona(){
        echo "$this->nombre $this->apellido";
    }
}

$persona1 = new Persona('Kamilo', 'Munevar', 28);
$persona2 = new Persona('Juan', 'Castañeda', 45); #instancia del objeto Persona
$persona1->saludar(); #accedemos desde la instancia del objeto a la ejecución de un método
$persona2->saludar();
$persona1->persona(); 

?>