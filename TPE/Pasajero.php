<?php

class Pasajero
{

    private $nombre;
    private $apellido;
    private $dni;

    public function __construct($nombre, $apellido, $dni)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
    }

    public function __toString()
    {
        return "Nombre: " . $this->getNombre() . "\n" . "Apellido: " . $this->getApellido() . "\n" . "Dni: " . $this->getDni() . "\n";
    }

    //getters 

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getDni()
    {
        return $this->dni;
    }

    //setters 

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function setDni($dni)
    {
        $this->dni = $dni;
    }
}
