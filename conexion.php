<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "rincon_libro";

$conexion = new mysqli($host, $usuario, $contrasena, $basedatos);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
