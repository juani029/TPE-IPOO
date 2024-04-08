<?php

class ResponsableViaje
{
    private $numeroEmpleado;
    private $numeroLicencia;
    private $nombre;
    private $apellido;

    public function __construct($numeroEmpleado, $numeroLicencia, $nombre, $apellido)
    {
        $this->numeroEmpleado = $numeroEmpleado;
        $this->numeroLicencia = $numeroLicencia;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function __toString()
    {
        return "Numero de empleado: " . $this->getNumeroEmpleado() . "\nNumero de licencia: " . $this->getNumeroLicencia() . "\nNombre: " . $this->getNombre() . "\nApellido: " . $this->getApellido();
    }

    //Getters
    public function getNumeroEmpleado()
    {
        return $this->numeroEmpleado;
    }

    public function getNumeroLicencia()
    {
        return $this->numeroLicencia;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    //Setters

    public function setNumeroEmpleado($numeroEmpleado)
    {
        $this->numeroEmpleado = $numeroEmpleado;
    }

    public function setNumeroLicencia($numeroLicencia)
    {
        $this->numeroLicencia = $numeroLicencia;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
}
