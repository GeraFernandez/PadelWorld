<?php
session_start();
include '../pages/conecta.php';

header('Content-Type: application/json');

$accion=(isset($_GET['accion']))?$_GET['accion']:'leer';
switch($accion){
    case 'agregar':
        //Intruccion de agregar
        $sentenciaSQL= $conecta->prepare("INSERT INTO reservas(tittle, descripcion, color, textColor, start, end) VALUES (:title,:descripcion, :color,:textColor,:start,:end)");
        $ejecuta2= $conecta->query($sentenciaSQL);

        $repuesta=$sentenciaSQL->execute(array (
            "title"=>$_POST['title'],
            "descripcion"=>$_POST['descripcion'],
            "color"=> $_POST['color'], 
            "textColor"=>$_POST['textColor'],
            "start"=>$_POST['start'],
            "end"=>$_POST['end']
        ));
        echo '['.json_decode($repuesta).']';
        break;
    case 'modificar':
        //Intruccion de modificar
        $sentenciaSQL= $conecta->prepare("UPDATE reservas SET 
            title=:title,
            descripcion=:descripcion,
            color=:color, 
            textColor=:textColor,
            start=:start,
            end=:end
            WHERE ID=:ID        
        ");
$repuesta=$sentenciaSQL->execute(array (
    "title"=>$_POST['title'],
    "descripcion"=>$_POST['descripcion'],
    "color"=> $_POST['color'], 
    "textColor"=>$_POST['textColor'],
    "start"=>$_POST['start'],
    "end"=>$_POST['end']
));
echo '['.json_decode($repuesta).']';


        break;
    case 'eliminar':
            //Intruccion de eliminar
            //echo "Instruccion eliminar";
            $repuesta=false;

            if(isset($_POST['id'])){
            $sentenciaSQL= $conecta->prepare("DELETE FROM reservas WHERE ID=:ID");
            $repuesta=$sentenciaSQL->execute(array("ID"=>$_POST['id']));
            }
            echo '['.json_encode($repuesta).']';

            break;
    default:
    //seleccionar las reservas del calendario
$sentenciaSQL = "SELECT * FROM reservas";
$ejecuta2= $conecta->query($sentenciaSQL);

$resultado=$ejecuta2->fetch_assoc();
echo '['.json_encode($resultado).']';

        break;
}



?>