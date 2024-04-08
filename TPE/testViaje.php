<?php

include_once 'Viaje.php';
include_once 'Pasajero.php';

echo "Ingrese los datos del viaje:\n . ";
echo "Origen: \n";
$origen = trim(fgets(STDIN));
echo "Destino: \n";
$destino = trim(fgets(STDIN));
echo "Cantidad maxima de pasajeros: \n";
$cantMaximaPasajeros = trim(fgets(STDIN));

echo "Ahora ingrese la informacion del primer pasajero: \n";
echo "Nombre: \n";
$nombrePasajero1 = trim(fgets(STDIN));
echo "Apellido: \n";
$apellidoPasajero1 = trim(fgets(STDIN));
echo "DNI: \n";
$dniPasajero1 = trim(fgets(STDIN));

echo "Ahora ingrese la informacion del segundo pasajero: \n";
echo "Nombre: \n";
$nombrePasajero2 = trim(fgets(STDIN));
echo "Apellido: \n";
$apellidoPasajero2 = trim(fgets(STDIN));
echo "DNI: \n";
$dniPasajero2 = trim(fgets(STDIN));

echo "Ahora ingrese la informacion del tercer pasajero: \n";
echo "Nombre: \n";
$nombrePasajero3 = trim(fgets(STDIN));
echo "Apellido: \n";
$apellidoPasajero3 = trim(fgets(STDIN));
echo "DNI: \n";
$dniPasajero3 = trim(fgets(STDIN));

echo "Ahora ingrese la informacion del cuarto pasajero: \n";
echo "Nombre: \n";
$nombrePasajero4 = trim(fgets(STDIN));
echo "Apellido: \n";
$apellidoPasajero4 = trim(fgets(STDIN));
echo "DNI: \n";
$dniPasajero4 = trim(fgets(STDIN));

$pasajero1 = new Pasajero($nombrePasajero1, $apellidoPasajero1, $dniPasajero1);
$pasjaero2 = new Pasajero($nombrePasajero2, $apellidoPasajero2, $dniPasajero2);
$pasajero3 = new Pasajero($nombrePasajero3, $apellidoPasajero3, $dniPasajero3);
$pasajero4 = new Pasajero($nombrePasajero4, $apellidoPasajero4, $dniPasajero4);

$col_Pasajeros = array($pasajero1, $pasjaero2, $pasajero3, $pasajero4);

$viaje = new Viaje($origen, $destino, $cantMaximaPasajeros, $col_Pasajeros);

echo $viaje;
