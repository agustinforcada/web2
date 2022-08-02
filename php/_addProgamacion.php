<?php
require_once("_conexion.php");
$conexion = getConexion();


$id_programacion = $_POST['id_programacion'] ?? null;
$img = $_POST['img'] ?? null;
$titulo = $_POST['titulo'] ?? null;
$director = $_POST['director'] ?? null;
$sinopsis = $_POST['sinopsis'] ?? null;
$funcion = $_POST['funcion'] ?? null;
$blogs = setProgramacion($id_programacion,$img,$titulo,$director,$sinopsis,$funcion, $conexion); 

$valid = true;
if($id_programacion==null) $valid = false;
if($img==null) $valid = false;
if($titulo==null) $valid = false;
if($director==null) $valid = false;
if($sinopsis==null) $valid = false;
if($funcion==null) $valid = false;


if($valid) require_once("admin.php");
else require_once("contacto_error.php");


?>

