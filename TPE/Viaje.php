<?php
// Importante: Deben enviar el link a la resolución en su repositorio en GitHub del ejercicio.

// La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes. De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.

// Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar los atributos de dicha clase (incluso los datos de los pasajeros). Utilice clases y arreglos  para   almacenar la información correspondiente a los pasajeros. Cada pasajero guarda  su “nombre”, “apellido” y “numero de documento”.

// Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita cargar la información del viaje, modificar y ver sus datos.

// Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los atributos nombre, apellido, numero de documento y teléfono. El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero. También se desea guardar la información de la persona responsable de realizar el viaje, para ello cree una clase ResponsableV que registre el número de empleado, número de licencia, nombre y apellido. La clase Viaje debe hacer referencia al responsable de realizar el viaje.

// Implementar las operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero. Luego implementar la operación que agrega los pasajeros al viaje, solicitando por consola la información de los mismos. Se debe verificar que el pasajero no este cargado mas de una vez en el viaje. De la misma forma cargue la información del responsable del viaje.

class Viaje
{
    private $codigoViaje;
    private $destino;
    private $cantMaximaPasajeros;
    private $col_pasajeros;
    private $responsableViaje;

    public function __construct($codigoViaje, $destino, $cantMaximaPasajeros, $col_pasajeros, $responsableViaje)
    {
        $this->codigoViaje = $codigoViaje;
        $this->destino = $destino;
        $this->cantMaximaPasajeros = $cantMaximaPasajeros;
        $this->col_pasajeros = $col_pasajeros;
        $this->responsableViaje = $responsableViaje;
    }

    public function __toString()
    {
        $col_pasajeros = $this->convertirArregloAString($this->getCol_pasajeros());
        return "Informacion del Viaje:\n\n" . "Codigo de Viaje: " . $this->getCodigoViaje() . "\nDestino: " . $this->getDestino() . "\nMax Pasajeros: " . $this->getCantMaximaPasajeros() . "\n\nColeccion de Pasajeros:\n\n" . $col_pasajeros . "Responsable:\n\n" . $this->getResponsableViaje();
    }

    // getters

    public function getCodigoViaje()
    {
        return $this->codigoViaje;
    }

    public function getDestino()
    {
        return $this->destino;
    }

    public function getCantMaximaPasajeros()
    {
        return $this->cantMaximaPasajeros;
    }

    public function getCol_pasajeros()
    {
        return $this->col_pasajeros;
    }

    public function getResponsableViaje()
    {
        return $this->responsableViaje;
    }

    // setters

    public function setCodigoViaje($codigoViaje)
    {
        $this->codigoViaje = $codigoViaje;
    }

    public function setDestino($destino)
    {
        $this->destino = $destino;
    }

    public function setCantMaximaPasajeros($cantMaximaPasajeros)
    {
        $this->cantMaximaPasajeros = $cantMaximaPasajeros;
    }

    public function setCol_pasajeros($col_pasajeros)
    {
        $this->col_pasajeros = $col_pasajeros;
    }

    public function setResponsableViaje($responsableViaje)
    {
        $this->responsableViaje = $responsableViaje;
    }

    // metodos

    public function convertirArregloAString($col_pasajeros)
    {
        $string = "";
        foreach ($col_pasajeros as $pasajero) {
            $string = $string . "*******************\n" . "Nombre: " . $pasajero->getNombre() . "\n" . "Apellido: " . $pasajero->getApellido() . "\n" . "Documento: " . $pasajero->getDni() . "\n" . "Teléfono: " . $pasajero->getTelefono() . "\n";
        }
        return $string;
    }

    public function verificarPasajero($col_pasajeros, $dni)
    {
        $existe = false;
        foreach ($col_pasajeros as $pasajero) {
            if ($pasajero->getDni() == $dni) {
                $existe = true;
                break;
            }
        }
        return $existe;
    }

    public function modificarInformacionViaje($codigoViaje, $destino, $cantMaximaPasajeros)
    {
        $this->setCodigoViaje($codigoViaje);
        $this->setDestino($destino);
        $this->setCantMaximaPasajeros($cantMaximaPasajeros);
    }

    public function setearNuevaColecciónPasajeros(Pasajero $objPasajero)
    {
        $newCol_pasajeros = $this->getCol_pasajeros();
        array_push($newCol_pasajeros, $objPasajero);
        $this->setCol_pasajeros($newCol_pasajeros);
    }

    public function verificarResponsableViaje($numeroEmpleado)
    {
        $existe = false;
        $responsableViajeActual = $this->getResponsableViaje();
        if ($responsableViajeActual->getNumeroEmpleado() == $numeroEmpleado) {
            $existe = true;
        }
        return $existe;
    }

    public function obtenerPasajero($dni)
    {
        $col_pasajeros = $this->getCol_pasajeros();
        foreach ($col_pasajeros as $pasajero) {
            if ($pasajero->getDni() == $dni) {
                return $pasajero;
            }
        }
    }

    public function mostrarPasajeros()
    {
        $col_pasajeros = $this->getCol_pasajeros();
        $stringPasajeros = $this->convertirArregloAString($col_pasajeros);
        return $stringPasajeros;
    }
}
