<?php
interface Model {
    function get($prop);
    function set($prop, $value);
}




abstract class Persona implements Model
{
        protected $nombre = null;
        private $apellido = null;
        private $email = null;
        private $edad = null;
        private $mensaje = null;

        abstract function toString();

        function nombreCompleto(){
            return $this->nombre ." ". $this->apellido;
        }

        function get($prop){
            return $this->{$prop};
        }
        function set($prop, $value){
            $this->{$prop} = $value;
        }
    
}
class Estudiante extends Persona{
    
    function __construct($nombre, $apellido, $edad){
        $this->set("nombre", $nombre);
        $this->set("apellido", $apellido);
        $this->set("email", "sin definir");
        $this->set("edad", $edad);
        $this->set("mensaje",$mensaje);
    }

    function toString()
    {
        $nombre=$this->nombre;
        $email=$this->get("email");
        $edad=$this->get("edad");
        $mensaje=$this->get("mensaje")
        return "$nombre $email $edad $mensaje";

    }
    function mayorEdad($edad){
        if($edad >= 18){
            $mensaje = "el estudiante es mayor de edad";
        }else{
            $mensaje =  "el estudiante es menor de edad";
        }
        return $mensaje;

    }
}

class Docente extends Persona{

    function __construct($nombre, $apellido){
        $this->set("nombre", $nombre);
        $this->set("apellido", $apellido);
        $this->set("email", "sin definir");

    }


    function toString()
    {
        $nombre=$this->nombreCompleto();
        $email=$this->get("email");
        return "$nombre $email";
    }
}
/*
$estudiante = new Estudiante();
$estudiante-> set("nombre","pedro");
$estudiante->set("apellido","Picapiedra");
$estudiante->set("email","pedro@test.com");
echo $estudiante-> toString() . "<br>";


$docente = new Docente("Ana","Gomez");
echo $docente->toString(). "<br>";
$docente->set("email","ana@test.com");
echo $docente->toString()."<br>";
*/
