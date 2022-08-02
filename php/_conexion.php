<?php
 require_once('../config/config.php');


function getConexion()
{

    try {
        $conexion = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);
        return $conexion;
    } catch (PDOException $e) {
        echo "Falló la conexión: " . $e->getMessage();
        exit;
    }
}

function getConexionHistorico()
{
    
    try {
        $conexion = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);
        return $conexion;
    } catch (PDOException $e) {
        echo "Falló la conexión: " . $e->getMessage();
        exit;
    }
}



function getSedes(PDO $conexion)
{
    $consulta = $conexion->prepare('
        SELECT *
        FROM sede
    ');
    $consulta->execute();
    return $consulta->fetchAll();
}

function getProgramacion(PDO $conexion)
{
    $consulta = $conexion->prepare('
        SELECT *
        FROM programacion
    ');
    $consulta->execute();
    return $consulta->fetchAll();

    
}



function setConcacto(string $nombre, string $telefono, string $email, string $mensaje, PDO $conexion)
{
   
    if (strlen($mensaje) < 255) {
        $data = [
            'nombre' => $nombre,
            'telefono' => $telefono,
            'email' => $email,
            'mensaje' => $mensaje
        ];
        $sql = "INSERT INTO contacto (nombre, telefono, email, mensaje) VALUES (:nombre, :telefono, :email, :mensaje)";
        $consulta = $conexion->prepare($sql);
        $consulta->execute($data);
        
    } else {
        require_once(BASE_URL."contacto_error.php");
    }
}

function countFilms(PDO $conexion)
{
    $consulta = $conexion->prepare('
        SELECT COUNT(1)
        FROM mytable
    ');
    $consulta->execute();
    return $consulta->fetchColumn();
}


function getFilms(PDO $conexion, $pagina_actual, $cuantos_por_pagina)
{

    $desde = ($pagina_actual - 1) * $cuantos_por_pagina;
    
    $consulta = $conexion->prepare('
    SELECT *
    FROM mytable
        LIMIT :desde, :cuantos_por_pagina
    ');

    $consulta->bindValue(':desde', $desde, PDO::PARAM_INT);
    $consulta->bindValue(':cuantos_por_pagina', $cuantos_por_pagina, PDO::PARAM_INT);

    $consulta->execute();

    return $consulta->fetchAll();
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = str_replace(' ', '-', $data); // Replaces all spaces with hyphens.

   // return preg_replace('/[^A-Za-z0-9\-]/', '', $data); // Removes special chars.
    return $data;
  }

  function setProgramacion( string $id_programacion, string $img, string $titulo,string $director,string $sinopsis, string $funcion, PDO $conexion)
{
   
    if (strlen($sinopsis) < 255) {
        $data = [
            'id_programacion' => $id_programacion,
            'img' => $img,
            'titulo' => $titulo,
            'director' => $director,
            'sinopsis' => $sinopsis,
            'funcion' => $funcion
            
        ];
        $sql = "INSERT INTO programacion (id_programacion, img, titulo, director,sinopsis,funcion) VALUES (:id_programacion, :img, :titulo, :director,:sinopsis,:funcion)";
        $consulta = $conexion->prepare($sql);
        $consulta->execute($data);
        
    } else {
        require_once("contacto_error.php");
    }
}

function updateProgramacion( string $id_programacion, string $img, string $titulo,string $director,string $funcion,string $sinopsis,  PDO $conexion)
{
   

    if (strlen($sinopsis) < 255) {
        $data = [
            'id_programacion' => $id_programacion,
            'img' => $img,
            'titulo' => $titulo,
            'director' => $director,
            'sinopsis' => $sinopsis,
            'funcion' => $funcion
            
        ];

   
        $sql = "UPDATE cine.programacion SET img='".$img."' , titulo='".$titulo."', director='".$director."',sinopsis='".$sinopsis."',funcion='".$funcion."' WHERE id_programacion='".$id_programacion."'";
        $consulta = $conexion->prepare($sql);
        $consulta->execute($data);
        
    } else {
        require_once("contacto_error.php");
    }
}


function deleteProgramacion( string $id_programacion,  PDO $conexion)
{
   

    if (strlen($id_programacion) < 100) {
        $data = [
            'id_programacion' => $id_programacion,
            
            
        ];

       
        $sql = " DELETE FROM  cine.programacion WHERE id_programacion='".$id_programacion."'" ;
        $consulta = $conexion->prepare($sql);
        $consulta->execute($data);
        
    } else {
        require_once("contacto_error.php");
    }
}