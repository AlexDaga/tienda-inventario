<?php
session_start(); // Inicia la sesión para obtener los datos del usuario

// Verifica si existe el nombre del usuario en la sesión
if (isset($_SESSION['nombre_completo'])) {
    $nombre_completo = $_SESSION['nombre_completo'];
} else {
    $nombre_completo = "Invitado"; // Valor por defecto si no hay un usuario registrado
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
</head>
<body>
    <h1>Inicio de sesion exitoso,Bienvenido </h1>

    <form action="php/logout.php" method="post">
        <button type="submit">Cerrar sesión</button>
    </form>
</body>
</html>