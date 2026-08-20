<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>@yield('titulo', 'Almacén Mi Barrio')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">

</head>

<body>

    <header>
        <h1>Almacén Mi Barrio 🏪</h1>
        <p>Sistema de gestión de productos, ventas y registro de pedido de clientes para tu negocio de barrio. </p>
    </header>
    <nav>
        <a href="{{ url('/saludo') }}">Inicio</a>
        <a href="{{ url('/productos') }}">Productos</a>
        <a href="{{ url('/ventas') }}">Ventas</a>
        <a href="{{ url('/pedidos') }}">Pedidos</a>
        <a href="{{ url('/contactos') }}">Contactanos</a>

         @auth
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn-logout-nav">🚪 Cerrar sesion</button>
        </form>
        @endauth
        
    </nav>

    <main>
        @yield('contenido')
    </main>

    <footer>
        <p>© 2026 Almacén Mi Barrio - Todos los derechos reservados.</p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>

</body>