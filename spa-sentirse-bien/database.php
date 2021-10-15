<?php
$servidor = "spa-sentirse-bien.mysql.database.azure.com";
$usuario = "erick9512@spa-sentirse-bien";
$clave = "*Spasentirsebien";
$baseDeDatos = "spa-sentirse-bien";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
if (!$enlace) {
    echo "ERROR EN LA CONEXION AL SERVIDORAAAAAAAA";
}
?>