<?php
function regresarConexion(){

$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "padelworld";

$conexion = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos) or die ("Conexion fallida");
mysqli_set_charset($conexion, 'utf8');
return $conexion;


}


?> 