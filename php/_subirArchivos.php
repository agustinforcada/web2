<?php

    if ( isset($_FILES['archivo']) ) {

        $origen = $_FILES['archivo']['tmp_name'];
        $destino ='../' .'img' . '/' . $_FILES['archivo']['name'];

        if( move_uploaded_file($origen, $destino) ) {
            echo 'El archivo se ha subido correctamente.';
        }else{
            echo 'Error al intentar subir el archivo.';
        }

    }

?>