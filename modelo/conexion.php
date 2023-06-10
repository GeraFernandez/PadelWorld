<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "padelworld";

$conexion = new mysqli($server, $correo, $password, $db);

if ($conexion->connect_errno) {
    die("Conexion fallida" .  $conexion->connect_errno);
} else {
    echo "conectado";
}

?>