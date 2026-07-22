<?php
session_start();

if (isset($_SESSION['nombre_completo'])) {
    $nombre_completo = $_SESSION['nombre_completo'];
} else {
    $nombre_completo = "Invitado";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Inventario</title>

    <link rel="stylesheet" href="recursos/css/dashboard.css">

</head>
<body>

<div class="container">

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <div class="logo">
            <h2>Inventario</h2>
        </div>

        <ul class="menu">
            <li class="active">
                <a href="#">
                    <span>🏠</span> Menu Inicio
                </a>
            </li>

            <li>
                <a href="#">
                    <span>📦</span> Productos
                </a>
            </li>

            <li>
                <a href="#">
                    <span>📋</span> Categorías
                </a>
            </li>

            <li>
                <a href="#">
                    <span>🛒</span> Ventas
                </a>
            </li>

            <li>
                <a href="#">
                    <span>👥</span> Usuarios
                </a>
            </li>

            <li>
                <form action="php/logout.php" method="post">
                    <button class="logout-btn">
                        🚪 Cerrar sesión
                    </button>
                </form>
            </li>
        </ul>
    </aside>

    <!-- MAIN -->
    <main class="main-content">

        <!-- NAVBAR -->
        <header class="navbar">
            <h1>Menu Inicio</h1>

            <div class="user-info">
                <span>Bienvenido, <?php echo $nombre_completo; ?></span>
            </div>
        </header>

        <!-- CARDS -->
        <section class="cards">

            <div class="card">
                <h3>Total Productos</h3>
                <p>250</p>
            </div>

            <div class="card">
                <h3>Stock Bajo</h3>
                <p>15</p>
            </div>

            <div class="card">
                <h3>Ventas Hoy</h3>
                <p>5</p>
            </div>

            <div class="card">
                <h3>Usuarios</h3>
                <p>8</p>
            </div>

        </section>

        <!-- TABLA -->
        <section class="table-section">

            <div class="table-header">
                <h2>Productos recientes</h2>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Producto</th>
                        <th>Categoría</th>
                        <th>Stock</th>
                        <th>Estado</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Jeans</td>
                        <td>Casual</td>
                        <td>12</td>
                        <td><span class="status active">Disponible</span></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Blusas</td>
                        <td>Formal</td>
                        <td>4</td>
                        <td><span class="status low">Stock Bajo</span></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Sorts</td>
                        <td>Deportiva</td>
                        <td>20</td>
                        <td><span class="status active">Disponible</span></td>
                    </tr>

                </tbody>
            </table>

        </section>

    </main>

</div>

<script src="/inventario/public/js/dashboard.js"></script>

</body>
</html>