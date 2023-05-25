<?php
/**
 * @author    Bartolomé Sintes Marco - bartolome.sintes+mclibre@gmail.com
 * @license   https://www.gnu.org/licenses/agpl-3.0.txt AGPL 3 or later
 * @link      https://www.mclibre.org
 */

// OPCIONES DISPONIBLES PARA EL ADMINISTRADOR DE LA APLICACIÓN

// Base de datos utilizada por la aplicación

$cfg["dbMotor"] = MYSQL;                                   // Valores posibles: MYSQL o SQLITE

// Configuración para SQLite

$cfg["sqliteDatabase"] = "/tmp/iaw-agenda.sqlite";          // Ubicación de la base de datos

// Configuración para MySQL

$cfg["mysqlHost"]     = "basedatos-miguelgg.mysql.database.azure.com";                        // Nombre de host
$cfg["mysqlUser"]     = "Miguel";                       // Nombre de usuario
$cfg["mysqlPassword"] = "00mgze61-";                                 // Contraseña de usuario
$cfg["mysqlDatabase"] = "prueba1";                       // Nombre de la base de datos

// Tamaño de los campos en la tabla Personas

$cfg["tablaPersonasTamNombre"]    = 40;                     // Tamaño de la columna Personas > Nombre
$cfg["tablaPersonasTamApellidos"] = 60;                     // Tamaño de la columna Personas > Apellidos
$cfg["tablaPersonasTamTelefono"]  = 10;                     // Tamaño de la columna Personas > Teléfono
$cfg["tablaPersonasTamCorreo"]    = 50;                     // Tamaño de la columna Personas > Correo

// Tamaño de los controles en los formularios

$cfg["formPersonasTamNombre"]    = $cfg["tablaPersonasTamNombre"];     // Tamaño de la caja de texto Personas > Nombre
$cfg["formPersonasTamApellidos"] = $cfg["tablaPersonasTamApellidos"];  // Tamaño de la caja de texto Personas > Apellidos
$cfg["formPersonasTamTelefono"]  = $cfg["tablaPersonasTamTelefono"];   // Tamaño de la caja de texto Personas > Teléfono
$cfg["formPersonasTamCorreo"]    = $cfg["tablaPersonasTamCorreo"];     // Tamaño de la caja de texto Personas > Correo

// Número máximo de registros en las tablas

$cfg["tablaPersonasMaxReg"] = 20;                           // Número máximo de registros en la tabla Personas

// Método de envío de formularios

$cfg["formMethod"] = "get";                                 // Valores posibles: get o post
