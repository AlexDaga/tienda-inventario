<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$ci = $_POST["ci"];
$ciudad = $_POST["ciudad"];
$fecha = $_POST["fecha"];

echo "<h3>Felicidades registro realizado con exito</h3>";
echo "<p>Nombre: $nombre</p>";
echo "<p>Apellido: $apellido</p>";
echo "<p>Telefono: $telefono</p>";
echo "<p>Correo: $correo</p>";
echo "<p>CI: $ci</p>";
echo "<p>Ciudad: $ciudad</p>";
echo "<p>Fecha: $fecha</p>";
?>