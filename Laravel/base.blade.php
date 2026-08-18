<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>@yield('titulo', 'Almacén Mi Barrio')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/resorces/css/base.css">

    <style>
        * {margin: 0;padding: 0;box-sizing: border-box;}
        html, body {overflow-x: hidden;width: 100%;}
        body {font-family: Arial, sans-serif;background-color: #f4f4f4;color: #333;line-height: 1.6;}
        header {background-color: #1a1a1a;color: #fff;text-align: center;padding: 20px 20px;border-bottom: 4px solid #f4c430;}
        header h1 {font-size: 2rem;margin-bottom: 10px;color: #fff;}
        header p {font-size: 1rem;color: #f4c430;opacity: 0.9;}
        nav {background-color: #1a1a1a;padding: 15px 20px;display: flex; justify-content: center; gap: 20px;}
        nav a {color: #fff;text-decoration: none;font-weight: bold;padding: 5px 10px;border-radius: 4px;transition: background-color 0.3s, color 0.3s;}
        nav a:hover {background-color: #f4c430;color: #1a1a1a;}
        main {max-width: 1100px;margin: 35px auto;padding: 30px;background-color: #fff;border-radius: 8px;box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);min-height: 300px;}
        main h2 {text-align: center;color: #1a1a1a;}
        footer {text-align: center;padding: 15px;background-color: #1a1a1a;color: #f4c430; margin-top: 73px;}
        table {width: 100%;border-collapse: collapse;margin-top: 15px;}
        table th,table td {padding: 10px;border: 1px solid #ddd;text-align: left;}
        table th {background-color: #1a1a1a;color: #f4c430;}
        .btn {display: inline-block;background-color: #f4c430;color: #1a1a1a;padding: 8px 16px;border: none;border-radius: 4px;text-decoration: none;cursor: pointer;font-size: 0.9rem;font-weight: bold;}
        .btn:hover {background-color: #d4a017;}
    </style>

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
        <p>© 2026 Almacén Mi Barrio - Todos los derechos reservados.</p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>

</body>