<?php

class Pasajero
{

    private $nombre;
    private $apellido;
    private $dni;
    private $telofono;

    public function __construct($nombre, $apellido, $dni, $telofono)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
        $this->telofono = $telofono;
    }

    public function __toString()
    {
        return "Nombre: " . $this->getNombre() . "\n" . "Apellido: " . $this->getApellido() . "\n" . "Dni: " . $this->getDni() . "\n" . "Telofono: " . $this->getTelofono();
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

    public function getTelofono()
    {
        return $this->telofono;
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

    public function setTelofono($telofono)
    {
        $this->telofono = $telofono;
    }
}
