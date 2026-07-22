<?php

session_start();
    include 'conexion.php';

    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $contrasena = mysqli_real_escape_string($conexion, $_POST['contrasena']);
    
    // Verificar si el usuario existe
    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'");

    // Verificar si hay alguna fila devuelta
    if (mysqli_num_rows($validar_login) > 0) {
        // Si las credenciales son correctas, redirigir a la página de bienvenida
            //$_SESSION['nombre_completo'];
        $usuario = mysqli_fetch_assoc($validar_login);
        $_SESSION['nombre_completo'] = $usuario['nombre_completo'];
        header("location: ../menuinicio.php");
        exit();
    } else {
        // Si las credenciales no coinciden, mostrar alerta y redirigir de nuevo al login
        echo '<script> 
                alert("Correo o contraseña incorrectos. Por favor, verifique los datos.");
                window.location = "../index.php";      
              </script>';
        exit();
    }
?>