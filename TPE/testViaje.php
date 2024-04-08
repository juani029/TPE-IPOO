<?php
include_once 'Viaje.php';
include_once 'Pasajero.php';
include_once 'ResponsableViaje.php';

echo "**********************************\n";
echo "Ingrese los datos del viaje: \n";
echo "Codigo de Viaje: ";
$origen = trim(fgets(STDIN));
echo "Destino: ";
$destino = trim(fgets(STDIN));
echo "Cantidad maxima de pasajeros: ";
$cantMaximaPasajeros = trim(fgets(STDIN));
echo "**********************************\n\n";

echo "**********************************\n";
echo "Ahora ingrese la informacion del primer pasajero: \n";
echo "Nombre: ";
$nombrePasajero1 = trim(fgets(STDIN));
echo "Apellido: ";
$apellidoPasajero1 = trim(fgets(STDIN));
echo "DNI: ";
$dniPasajero1 = trim(fgets(STDIN));
echo "**********************************\n\n";

echo "**********************************\n";
echo "Ahora ingrese la informacion del segundo pasajero: \n";
echo "Nombre: ";
$nombrePasajero2 = trim(fgets(STDIN));
echo "Apellido: ";
$apellidoPasajero2 = trim(fgets(STDIN));
echo "DNI: ";
$dniPasajero2 = trim(fgets(STDIN));
echo "**********************************\n\n";

// echo "Ahora ingrese la informacion del tercer pasajero: \n";
// echo "Nombre: \n";
// $nombrePasajero3 = trim(fgets(STDIN));
// echo "Apellido: \n";
// $apellidoPasajero3 = trim(fgets(STDIN));
// echo "DNI: \n";
// $dniPasajero3 = trim(fgets(STDIN));

// echo "Ahora ingrese la informacion del cuarto pasajero: \n";
// echo "Nombre: \n";
// $nombrePasajero4 = trim(fgets(STDIN));
// echo "Apellido: \n";
// $apellidoPasajero4 = trim(fgets(STDIN));
// echo "DNI: \n";
// $dniPasajero4 = trim(fgets(STDIN));

$pasajero1 = new Pasajero($nombrePasajero1, $apellidoPasajero1, $dniPasajero1);
$pasjaero2 = new Pasajero($nombrePasajero2, $apellidoPasajero2, $dniPasajero2);
$responsableV = new ResponsableViaje("8812", "12342245", "Juan", "Perez");
// $pasajero3 = new Pasajero($nombrePasajero3, $apellidoPasajero3, $dniPasajero3);
// $pasajero4 = new Pasajero($nombrePasajero4, $apellidoPasajero4, $dniPasajero4);

$col_Pasajeros = array($pasajero1, $pasjaero2);

$viaje = new Viaje($origen, $destino, $cantMaximaPasajeros, $col_Pasajeros, $responsableV);

echo $viaje;
