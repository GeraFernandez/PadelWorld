<?php


/* Creando una nueva conexión a la base de datos. */
$con = mysqli_connect("localhost", "root", "", "padelworld");


/* Comprobando si hay un error de conexión. */
if (!$con) {
    die('Error de conexion '.mysqli_connect_error());
}

?>

