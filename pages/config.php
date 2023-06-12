<?php 
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "padelworld";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if($enlace->connect_errno){
  echo "Falló la conexión a la base de datos " . $enlace->connect_error;
}
?>