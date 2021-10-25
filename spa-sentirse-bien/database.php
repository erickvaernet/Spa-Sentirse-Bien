<?php
$servidor = "remotemysql.com";
$usuario = "lj0SNYIAIM";
$clave = "sWxLgSU8ej";
$baseDeDatos = "lj0SNYIAIM";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
if (!$enlace) {
    echo "ERROR EN LA CONEXION AL SERVIDORAAAAAAAA";
}
?>