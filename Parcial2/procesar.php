<?php

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$sabores = $_POST["sabores"];

echo "<h1>Pedido recibido en Heladeria Doña Nieves</h1>";
echo "<p>Nombre: $nombre</p>";
echo "<p>Correo: $correo</p>";
echo "<p>Sabores: $sabores</p>";

$carta = [
    "Cono simple: Bs 8",
    "Copa dobles:Bs 15",
    "Litro para llevar:Bs 35"
];

echo "<h3>Nuestra carta</h3>";
echo "<ul>";

foreach ($carta as $item) {
    echo "<li>$item</li>";
}

echo "</ul>";
echo "<p>Te atiende Alex Brayan Flores Daga</p>";

?>