<?php

    //$conexion=mysqli_connect("localhost","infocal_alexf","BNbCIriLtSzM","infocal_alex");
    $conexion=mysqli_connect("localhost","root","","login_register");
    
    /*if($conexion){
        echo 'Conexion con exito a la Base de Datos';
    }else{
        echo 'No se logro conectar a la Base de Datos';
    }*/
    
    //solucion!
    
    if (!$conexion) {
        die("Error en la conexión: " . mysqli_connect_error());
    }
?>