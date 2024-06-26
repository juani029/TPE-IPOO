<?php

class Pasajero
{

    private $nombre;
    private $apellido;
    private $dni;
    private $teléfono;

    public function __construct($nombre, $apellido, $dni, $teléfono)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
        $this->teléfono = $teléfono;
    }

    public function __toString()
    {
        return "Nombre: " . $this->getNombre() . "\n" . "Apellido: " . $this->getApellido() . "\n" . "Dni: " . $this->getDni() . "\n" . "Teléfono: " . $this->getTelefono();
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

    public function getTelefono()
    {
        return $this->teléfono;
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

    public function setTelefono($teléfono)
    {
        $this->teléfono = $teléfono;
    }
}
