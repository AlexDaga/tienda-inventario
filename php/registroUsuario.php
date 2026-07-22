<?php

    include'conexion.php';

    $nombre_completo=htmlspecialchars($_POST['nombre_completo']);
    $correo=htmlspecialchars($_POST['correo']);
    $usuario=htmlspecialchars($_POST['usuario']);
    $contrasena=htmlspecialchars($_POST['contrasena']);
    //$contrasena=hash('sha512',$contrasena);
    
    $query="INSERT INTO usuarios(nombre_completo,correo,usuario,contrasena)
    VALUES('$nombre_completo','$correo','$usuario','$contrasena')";

    //Verifica que los datos no se repitan

   

    //$ejecutar=mysqli_query($conexion,$query);
    //Solucion!
    if (mysqli_query($conexion, $query)) {
        echo '<script> 
                alert("Usuario registrado exitosamente");
                window.location="../index.php";      
        </script>';
    } else {
        echo '<script> 
                alert("Intente de nuevo,usuario no registrado");
                window.location="../index.php"        
        </script>';
    }
    mysqli_close($conexion);
?>