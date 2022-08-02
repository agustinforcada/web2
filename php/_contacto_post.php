<?php
require_once("_conexion.php");
$conexion = getConexion();


$nombre = test_input($_POST['nombre'] ?? null);
$telefono = test_input($_POST['telefono'] ?? null);
$email = test_input($_POST['email'] ?? null);
$mensaje = test_input($_POST['mensaje'] ?? null);
$funciones = test_input(setConcacto($nombre,$telefono,$email,$mensaje, $conexion)); 

$valid = true;
if($nombre==null) $valid = false;
if($telefono==null) $valid = false;
if($email==null) $valid = false;
if($mensaje==null) $valid = false;



if($valid) require_once("contacto_exito.php");
else require_once("contacto_error.php");


?>



