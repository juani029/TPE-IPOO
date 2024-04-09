<?php
include_once 'Viaje.php';
include_once 'Pasajero.php';
include_once 'ResponsableViaje.php';

$nombrePasajero1 =

    $pasajero1 = new Pasajero($nombrePasajero1, $apellidoPasajero1, $dniPasajero1, "2994644818");
$pasajero2 = new Pasajero($nombrePasajero2, $apellidoPasajero2, $dniPasajero2, "12312312312");
$responsableV = new ResponsableViaje("8812", "12342245", "Juan", "Perez");


$col_Pasajeros = array($pasajero1, $pasjaero2);

$viaje = new Viaje($origen, $destino, $cantMaximaPasajeros, $col_Pasajeros, $responsableV);

do {
    echo "**********************************\n";
    echo "Ingrese una opcion: \n";
    echo "1. Ingresar Informacion del viaje.\n";
    echo "2. Modificar Informacion del viaje.\n";
    echo "3. Mostrar Informacion del viaje.\n";
    echo "4. Salir.\n";
    echo "**********************************\n";
    $opcion = trim(fgets(STDIN));
    switch ($opcion) {
        case 1:
            do {
                echo "**********************************\n\n";
                echo "Ingrese que tipo de información deseas registrar: \n";
                echo "1. Viaje.\n";
                echo "2. Pasajeros.\n";
                echo "3. Responsable del viaje.\n";
                echo "4. Finalice.\n";
                echo "**********************************\n\n";
                $opcion2 = trim(fgets(STDIN));
                switch ($opcion2) {
                    case 1:
                        echo "**********************************\n\n";
                        echo "Ahora ingrese la informacion del viaje: \n";
                        echo "Codigo de viaje:\n";
                        $codigoViaje = trim(fgets(STDIN));
                        echo "Destino: \n";
                        $destino = trim(fgets(STDIN));
                        echo "Cantidad maxima de pasajeros: \n";
                        $cantMaximaPasajeros = trim(fgets(STDIN));
                        echo "**********************************\n\n";
                        break;
                    case 2:
                        echo "**********************************\n\n";
                        echo "Ahora ingrese la informacion de un pasajero: \n";
                        echo "Nombre: \n";
                        $nombrePasajero = trim(fgets(STDIN));
                        echo "Apellido: \n";
                        $apellidoPasajero = trim(fgets(STDIN));
                        echo "DNI: \n";
                        $dniPasajero = trim(fgets(STDIN));
                        echo "Número de telefono: \n";
                        $numTelPasajero = trim(fgets(STDIN));

                        echo "**********************************\n\n";
                        break;
                    case 3:

                    default:
                        echo "Opcion ingresada no valida. Ingrese una opcion del 1 al 4.\n";
                        break;
                }
            } while ($opcion2 != 4);
            break;

        case 2:
            echo "**********************************\n";
            echo "Ahora ingrese la informacion de un : \n";
            echo "Nombre: ";
            $nombrePasajero1 = trim(fgets(STDIN));
            echo "Apellido: ";
            $apellidoPasajero1 = trim(fgets(STDIN));
            echo "DNI: ";
            $dniPasajero1 = trim(fgets(STDIN));
            echo "**********************************\n\n";

            break;

        case 3:
            echo $viaje;

        case 4:
            break;
        default:
            echo "Ingrese una opcion valida.\n";
            break;
    }
} while ($opcion != 4);






// echo "**********************************\n";
// echo "Ahora ingrese la informacion del segundo pasajero: \n";
// echo "Nombre: ";
// $nombrePasajero2 = trim(fgets(STDIN));
// echo "Apellido: ";
// $apellidoPasajero2 = trim(fgets(STDIN));
// echo "DNI: ";
// $dniPasajero2 = trim(fgets(STDIN));
// echo "**********************************\n\n";

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



// echo $viaje;
