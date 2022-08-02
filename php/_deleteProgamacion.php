<?php
require_once("_conexion.php");
$conexion = getConexion();


$id_programacion = $_POST['id_programacion'] ?? null;

$blogs = deleteProgramacion($id_programacion,$conexion); 

$valid = true;
if($id_programacion==null) $valid = false;


if($valid) require_once("admin.php");
else require_once("contacto_error.php");


?>

