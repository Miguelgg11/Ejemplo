<?php
/**
 * @author    Bartolomé Sintes Marco - bartolome.sintes+mclibre@gmail.com
 * @license   https://www.gnu.org/licenses/agpl-3.0.txt AGPL 3 or later
 * @link      https://www.mclibre.org
 */

// FUNCIONES ESPECÍFICAS DE LA BASE DE DATOS MYSQL

// MYSQL: Nombres de las tablas


$cfg["tablaPersonas"] = "{$cfg['mysqlDatabase']}.personas";   // Nombre de la tabla Personas

// MYSQL: Conexión con la base de datos

function conectaDb()
{
    global $cfg;

    $options = array(
        PDO::MYSQL_ATTR_SSL_CA => 'ssl/DigiCertGlobalRootCA.crt.pem'
    );
    try {
        $db = new PDO('mysql:host=basedatos-miguelgg.mysql.database.azure.com;port=3306;dbname=prueba1', 'Miguel','00mgze61-', $options);
        return $db;
    } catch (PDOException $e) {
        print "<p class=\"aviso\">Error: No se puede conectar con la base de datos. {$e->getMessage()}</p>\n";
        exit;
    }
}

// MYSQL: Borrado y creación de base de datos y tablas

function borraTodo()
{
    global $cfg;

    $pdo = conectaDb();

    print "<p>Sistema Gestor de Bases de Datos: MySQL.</p>\n";
    print "\n";

    $consulta = "DROP DATABASE IF EXISTS {$cfg['mysqlDatabase']}";

    if (!$pdo->query($consulta)) {
        print "<p class=\"aviso\">Error al borrar la base de datos. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
    } else {
        print "<p>Base de datos borrada correctamente (si existía).</p>\n";
    }
    print "\n";

    $consulta = "CREATE DATABASE {$cfg['mysqlDatabase']}
                 CHARACTER SET utf8mb4
                 COLLATE utf8mb4_unicode_ci";

    if (!$pdo->query($consulta)) {
        print "<p class=\"aviso\">Error al crear la base de datos. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
    } else {
        print "<p>Base de datos creada correctamente.</p>\n";
        print "\n";

        $consulta = "CREATE TABLE {$cfg['tablaPersonas']}  (
                     id INTEGER UNSIGNED AUTO_INCREMENT,
                     nombre VARCHAR({$cfg['tablaPersonasTamNombre']}),
                     apellidos VARCHAR({$cfg['tablaPersonasTamApellidos']}),
                     telefono VARCHAR({$cfg['tablaPersonasTamTelefono']}),
                     correo VARCHAR({$cfg['tablaPersonasTamCorreo']}),
                     PRIMARY KEY(id)
                     )";

        if (!$pdo->query($consulta)) {
            print "<p class=\"aviso\">Error al crear la tabla. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
        } else {
            print "<p>Tabla creada correctamente.</p>\n";
        }
    }
}
?>

