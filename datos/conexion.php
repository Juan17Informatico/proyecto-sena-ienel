<?php
$host = "localhost";
$usuario = "root";
$clave = "";
$base_de_datos = "ienel";

$mysqli = new mysqli($host, $usuario, $clave, $base_de_datos);

if ($mysqli->connect_error) {
    die('Error en la conexion' . $mysqli->connect_error);
}
