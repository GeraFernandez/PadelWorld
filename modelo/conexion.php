<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "padelworld";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if ($enlance->connect_errno) {
    die("Conexion fallida" .  $enlace->connect_errno);
} else {
    echo "conectado";
}

?> 