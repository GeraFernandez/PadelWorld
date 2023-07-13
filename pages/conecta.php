<?php 


$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "padelworld";

$conecta = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if($conecta->connect_errno){
  die("Falló la conexión a la base de datos " . $conecta->connect_error);
  
}


?>