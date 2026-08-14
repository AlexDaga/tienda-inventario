<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Almacén Mi Barrio')</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Almacén Mi Barrio')</title>

    <style>
        * {margin: 0;padding: 0;box-sizing: border-box;}
        body {font-family: Arial, sans-serif;background-color: #f4f4f4;color: #333;line-height: 1.6;}
        nav {background-color: #2c3e50;padding: 15px 20px;display: flex;gap: 20px;}
        nav a {color: #fff;text-decoration: none;font-weight: bold;padding: 5px 10px;border-radius: 4px;transition: background-color 0.3s;}
        nav a:hover {background-color: #34495e;}
        header {background-color: #3498db;color: #fff;text-align: center;padding: 40px 20px;}
        header h1 {font-size: 2rem;margin-bottom: 10px;}
        header p {font-size: 1rem;opacity: 0.9;}
        main {max-width: 1100px;margin: 30px auto;padding: 20px;background-color: #fff;border-radius: 8px;box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);min-height: 300px;}
        footer {text-align: center;padding: 15px;background-color: #2c3e50;color: #fff; margin-top: 30px;}
        table {width: 100%;border-collapse: collapse;margin-top: 15px;}
        table th,table td {padding: 10px;border: 1px solid #ddd;text-align: left;}
        table th {background-color: #ecf0f1;}
        .btn {display: inline-block;background-color: #3498db;color: #fff;padding: 8px 16px;border: none;border-radius: 4px;text-decoration: none;cursor: pointer;font-size: 0.9rem;}
        .btn:hover {background-color: #2980b9;}</style>

</head>

<body>

    <header>
        <h1>Almacén Mi Barrio 🏪</h1>
        <p>Sistema de gestión de productos, ventas, clientes y reportes para tu negocio de barrio. </p>
    </header>
    <nav>
        <a href="{{ url('/') }}">Inicio</a>
        <a href="{{ url('/productos') }}">Productos</a>
        <a href="{{ url('/ventas') }}">Ventas</a>
        <a href="{{ url('/clientes') }}">Clientes</a>
        <a href="{{ url('/reportes') }}">Reportes</a>
    </nav>

    <main>
        @yield('contenido')
    </main>

    <footer>
        <p>&copy; 2026 Almacén Mi Barrio - Todos los derechos reservados.</p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>

</body>