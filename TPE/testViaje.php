<?php
include_once 'Viaje.php';
include_once 'Pasajero.php';
include_once 'ResponsableViaje.php';


$pasajero1 = new Pasajero("Juan Ignacio", "Santillan", "42653692", "2994644818");
$pasajero2 = new Pasajero("Jose Eduardo", "Santillan", "24648662", "2994746412");
$pasajero3 = new Pasajero("Cecilia Noemi", "Molina", "30234124", "2994748346");
$responsableV = new ResponsableViaje("8812", "12342245", "Juan", "Perez");


$col_Pasajeros = array($pasajero1, $pasajero2, $pasajero3);
$viaje = new Viaje("123123", "Cancun", 30, $col_Pasajeros, $responsableV);

do {
    echo "**********************************\n";
    echo "Ingrese una opción: \n";
    echo "1. Ingresar Informacion.\n";
    echo "2. Modificar Informacion.\n";
    echo "3. Mostrar Informacion.\n";
    echo "4. Salir.\n";
    echo "**********************************\n";
    $opción = trim(fgets(STDIN));
    switch ($opción) {
        case 1:
            do {
                echo "**********************************\n";
                echo "Ingrese que tipo de información desea registrar: \n";
                echo "1. Información del Viaje.\n";
                echo "2. Información de un Pasajero.\n";
                echo "3. Información de el Responsable del viaje.\n";
                echo "4. Volver.\n";
                echo "**********************************\n";
                $opcion2 = trim(fgets(STDIN));
                switch ($opcion2) {
                    case 1:
                        echo "**********************************\n";
                        echo "Ahora ingrese la informacion del viaje: \n";
                        echo "Codigo de viaje:";
                        $codigoViaje = trim(fgets(STDIN));
                        echo "Destino: ";
                        $destino = trim(fgets(STDIN));
                        echo "Cantidad maxima de pasajeros: ";
                        $cantMaximaPasajeros = trim(fgets(STDIN));
                        $viaje->modificarInformacionViaje($codigoViaje, $destino, $cantMaximaPasajeros);
                        echo "**********************************\n";
                        echo "Información del viaje ingresada correctamente.\n";
                        break;
                    case 2:
                        echo "**********************************\n";
                        echo "Ahora ingrese la informacion de un pasajero: \n";
                        echo "Nombre: ";
                        $nombrePasajero = trim(fgets(STDIN));
                        echo "Apellido: ";
                        $apellidoPasajero = trim(fgets(STDIN));
                        echo "DNI: ";
                        $dniPasajero = trim(fgets(STDIN));
                        echo "Número de teléfono: ";
                        $numTelPasajero = trim(fgets(STDIN));
                        echo "**********************************\n";

                        if ($viaje->verificarPasajero($viaje->getCol_pasajeros(), $dniPasajero)) {
                            echo "Este usuario ya se encuentra registrado.\n";
                            break;
                        }
                        $pasajero = new Pasajero($nombrePasajero, $apellidoPasajero, $dniPasajero, $numTelPasajero);
                        $viaje->setearNuevaColecciónPasajeros($pasajero);
                        echo "**********************************\n";
                        echo "Información del pasajero ingresada correctamente.\n";
                        break;
                    case 3:
                        echo "**********************************\n";
                        echo "Ahora ingrese la informacion del responsable del viaje: \n";
                        echo "Numero de empleado: ";
                        $numeroEmpleado = trim(fgets(STDIN));
                        echo "Numero de licencia: ";
                        $numeroLicencia = trim(fgets(STDIN));
                        echo "Nombre: ";
                        $nombre = trim(fgets(STDIN));
                        echo "Apellido: ";
                        $apellido = trim(fgets(STDIN));
                        echo "**********************************\n";

                        if ($viaje->verificarResponsableViaje($numeroEmpleado)) {
                            echo "Este responsable ya se encuentra registrado.\n";
                            break;
                        }
                        $responsableV = new ResponsableViaje($numeroEmpleado, $numeroLicencia, $nombre, $apellido);
                        $viaje->setResponsableViaje($responsableV);
                        echo "**********************************\n";
                        echo "Información del responsable del viaje ingresada correctamente.\n";
                        break;
                    case 4:
                        break;
                    default:
                        echo "**********************************\n";
                        echo "Opción ingresada no válida. Ingrese una opción del 1 al 4.\n";
                        break;
                }
            } while ($opcion2 != 4);
            break;

        case 2:
            do {
                echo "**********************************\n";
                echo "Ahora ingrese que tipo de información desea modificar: \n";
                echo "1. Información del Viaje.\n";
                echo "2. Información de un Pasajero.\n";
                echo "3. Información de el Responsable del viaje.\n";
                echo "4. Volver.\n";
                echo "**********************************\n";
                $opcion3 = trim(fgets(STDIN));
                switch ($opcion3) {
                    case 1:
                        do {
                            echo "**********************************\n";
                            echo "Ahora ingrese que tipo de información del viaje desea modificar: \n";
                            echo "1. Codigo de Viaje.\n";
                            echo "2. Destino.\n";
                            echo "3. Cantidad máxima de pasajeros.\n";
                            echo "4. Volver.\n";
                            echo "**********************************\n";
                            $opcion4 = trim(fgets(STDIN));
                            switch ($opcion4) {
                                case 1:
                                    echo "Ingrese el nuevo codigo de viaje: ";
                                    $nuevoCodigoViaje = trim(fgets(STDIN));
                                    $viaje->setCodigoViaje($nuevoCodigoViaje);
                                    echo "**********************************\n";
                                    echo "Código del viaje modificado correctamente.\n";
                                    break;
                                case 2:
                                    echo "Ingrese el nuevo destino: ";
                                    $nuevoDestino = trim(fgets(STDIN));
                                    $viaje->setDestino($nuevoDestino);
                                    echo "**********************************\n";
                                    echo "Destino modificado correctamente.\n";
                                    break;
                                case 3:
                                    echo "Ingrese la nueva cantidad maxima de pasajeros: ";
                                    $nuevaCantMaxPasajeros = trim(fgets(STDIN));
                                    $viaje->setcantMaximaPasajeros($nuevaCantMaxPasajeros);
                                    echo "**********************************\n";
                                    echo "Cant. maxima de pasajeros modificado correctamente.\n";
                                    break;
                                default:
                                    echo "**********************************\n";
                                    echo "Opción ingresada no válida. Ingrese una opción del 1 al 4.\n";
                                    break;
                            }
                        } while ($opcion4 != 4);
                        break;
                    case 2:
                        echo "Ahora ingresa el dni del pasajero que desea modificar: \n";
                        $dniPasajero = trim(fgets(STDIN));
                        if ($viaje->verificarPasajero($viaje->getCol_pasajeros(), $dniPasajero)) {
                            echo "Pasajero encontrado.\n";
                            do {
                                $pasajero = $viaje->obtenerPasajero($dniPasajero);
                                echo "**********************************\n";
                                echo "Ingrese que tipo de información del pasajero desea modificar: \n";
                                echo "1. Nombre.\n";
                                echo "2. Apellido.\n";
                                echo "3. DNI.\n";
                                echo "4. Número de teléfono.\n";
                                echo "5. Volver.\n";
                                echo "**********************************\n";
                                $opcion5 = trim(fgets(STDIN));
                                switch ($opcion5) {
                                    case 1:
                                        echo "Ingrese el nuevo nombre: ";
                                        $nuevoNombre = trim(fgets(STDIN));
                                        $pasajero->setNombre($nuevoNombre);
                                        echo "**********************************\n";
                                        echo "Nombre modificado correctamente.\n";
                                        break;
                                    case 2:
                                        echo "Ingrese el nuevo apellido: ";
                                        $nuevoApellido = trim(fgets(STDIN));
                                        $pasajero->setApellido($nuevoApellido);
                                        echo "**********************************\n";
                                        echo "Apellido modificado correctamente.\n";
                                        break;
                                    case 3:
                                        echo "Ingrese el nuevo dni: ";
                                        $nuevoDni = trim(fgets(STDIN));
                                        $pasajero->setDni($nuevoDni);
                                        echo "**********************************\n";
                                        echo "DNI modificado correctamente.\n";
                                        break;
                                    case 4:
                                        echo "Ingrese el nuevo número de telefono: ";
                                        $nuevoNumTel = trim(fgets(STDIN));
                                        $pasajero->setTelefono($nuevoNumTel);
                                        echo "**********************************\n";
                                        echo "Número de teléfono modificado correctamente.\n";
                                        break;
                                    default:
                                        echo "**********************************\n";
                                        echo "Opción ingresada no válida. Ingrese una opción del 1 al 5.\n";
                                        break;
                                }
                            } while ($opcion5 != 5);
                        }
                        echo "Pasajero no encontrado, ingrese un dni correcto.\n";
                        break;
                    case 3:
                        echo "**********************************\n";
                        echo "Ingresé el número de empleado del responsable del viaje: \n";
                        $numEmpleado = trim(fgets(STDIN));
                        if ($viaje->verificarResponsableViaje($numEmpleado)) {
                            do {
                                $responsableV = $viaje->getResponsableViaje();
                                echo "**********************************\n";
                                echo "Ahora ingrese que tipo de información del responsable del viaje desea modificar: \n";
                                echo "1. Numero Empleado.\n";
                                echo "2. Numero Licencia.\n";
                                echo "3. Nombre.\n";
                                echo "4. Apellido.\n";
                                echo "5. Volver.\n";
                                echo "**********************************\n";
                                $opcion6 = trim(fgets(STDIN));
                                switch ($opcion6) {
                                    case 1:
                                        echo "Ingrese el nuevo numero de empleado: ";
                                        $nuevoNumEmpleado = trim(fgets(STDIN));
                                        $responsableV->setNumEmpleado($nuevoNumEmpleado);
                                        echo "**********************************\n";
                                        echo "Numero de empleado modificado correctamente.\n";
                                        break;
                                    case 2:
                                        echo "Ingrese el nuevo numero de licencia: ";
                                        $nuevoNumLicencia = trim(fgets(STDIN));
                                        $responsableV->setNumLicencia($nuevoNumLicencia);
                                        echo "**********************************\n";
                                        echo "Numero de licencia modificado correctamente.\n";
                                        break;
                                    case 3:
                                        echo "Ingrese el nuevo nombre: ";
                                        $nuevoNombre = trim(fgets(STDIN));
                                        $responsableV->setNombre($nuevoNombre);
                                        echo "**********************************\n";
                                        echo "Nombre modificado correctamente.\n";
                                        break;
                                    case 4:
                                        echo "Ingrese el nuevo nombre: ";
                                        $nuevoNombre = trim(fgets(STDIN));
                                        $responsableV->setNombre($nuevoNombre);
                                        echo "Nombre modificado correctamente.\n";
                                        break;
                                    case 5:
                                        break;
                                    default:
                                        echo "**********************************\n";
                                        echo "Opción ingresada no válida. Ingrese una opción del 1 al 5.\n";
                                        break;
                                }
                            } while ($opcion6 != 5);
                        }
                        echo "Responsable no encontrado, ingrese un numero de empleado correcto.\n";
                        break;
                    case 4:
                        break;
                    default:
                        echo "**********************************\n";
                        echo "Opción ingresada no válida. Ingrese una opción del 1 al 4.\n";
                        break;
                }
            } while ($opcion3 != 4);

            break;

        case 3:
            do {
                echo "**********************************\n";
                echo "Ingrese la informacion que quiere mostrar: \n";
                echo "1. Información del viaje.\n";
                echo "2. Información de los pasajeros.\n";
                echo "3. Información del responsable del viaje.\n";
                echo "4. Volver.\n";
                echo "**********************************\n";
                $opcion7 = trim(fgets(STDIN));
                switch ($opcion7) {
                    case 1:
                        do {
                            echo "**********************************\n";
                            echo "Elegi que información del viaje queres mostrar: \n";
                            echo "1. Codigo de viaje.\n";
                            echo "2. Destino.\n";
                            echo "3. Cantidad maxima de pasajeros.\n";
                            echo "4. Volver.\n";
                            echo "**********************************\n";
                            $opcion8 = trim(fgets(STDIN));
                            switch ($opcion8) {
                                case 1:
                                    echo "El codigo de viaje es: " . $viaje->getCodigoViaje() . "\n";
                                    break;
                                case 2:
                                    echo "El destino es: " . $viaje->getDestino() . "\n";
                                    break;
                                case 3:
                                    echo "La cantidad maxima de pasajeros es: " . $viaje->getCantMaximaPasajeros() . "\n";
                                    break;
                                case 4:
                                    break;
                                default:
                                    echo "**********************************\n";
                                    echo "Opción ingresada no válida. Ingrese una opción del 1 al 4.\n";
                                    break;
                            }
                        } while ($opcion8 != 4);
                        break;
                    case 2:
                        do {
                            echo "**********************************\n";
                            echo "Elegi que tipo de informacion de los pasajeros queres mostrar: \n";
                            echo "1. Un pasajero en especifico.\n";
                            echo "2. Todos los pasajeros.\n";
                            echo "3. Volver.\n";
                            echo "**********************************\n";
                            $opcion9 = trim(fgets(STDIN));
                            switch ($opcion9) {
                                case 1:
                                    echo "Ingrese el DNI del pasajero: \n";
                                    $dniPasajero = trim(fgets(STDIN));
                                    $pasajero = $viaje->obtenerPasajero($dniPasajero);
                                    if ($pasajero != null) {
                                        echo "**********************************\n";
                                        echo $pasajero . "\n";
                                        echo "**********************************\n";
                                    } else {
                                        echo "Pasajero no encontrado, ingrese un DNI correcto.\n";
                                    }
                                    break;
                                case 2:
                                    echo $viaje->mostrarPasajeros();
                                    break;
                                case 3:
                                    break;
                                default:
                                    echo "Opción ingresada no válida. Ingrese una opción del 1 al 3.\n";
                            }
                        } while ($opcion9 != 3);
                        break;
                    case 3:
                        do {
                            $responsableV = $viaje->getResponsableViaje();
                            echo "**********************************\n";
                            echo "Elige el tipo de informacion del responsable del viaje que quieres mostrar: \n";
                            echo "1. Número de empleado.\n";
                            echo "2. Número de licencia.\n";
                            echo "3. Nombre.\n";
                            echo "4. Apellido.\n";
                            echo "5. Volver.\n";
                            echo "**********************************\n";
                            $opcion10 = trim(fgets(STDIN));
                            switch ($opcion10) {
                                case 1:
                                    echo "El numero de empleado es: " . $responsableV->getNumeroEmpleado() . "\n";
                                    break;
                                case 2:
                                    echo "El numero de licencia es: " . $responsableV->getNumeroLicencia() . "\n";
                                    break;
                                case 3:
                                    echo "El nombre es: " . $responsableV->getNombre() . "\n";
                                    break;
                                case 4:
                                    echo "El apellido es: " . $responsableV->getApellido() . "\n";
                                    break;
                                case 5:
                                    break;
                                default:
                                    echo "**********************************\n";
                                    echo "Opción ingresada no válida. Ingrese una opción del 1 al 5.\n";
                                    break;
                            }
                        } while ($opcion10 != 5);
                        break;
                }
            } while ($opcion7 != 4);
            break;
        case 4:
            break;
        default:
            echo "**********************************\n";
            echo "Opción ingresada no válida. Ingrese una ópción del 1 al 4.\n";
            break;
    }
} while ($opción != 4);
