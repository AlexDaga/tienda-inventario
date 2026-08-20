<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - {{ config('app.name', 'Almacén Mi Barrio') }}</title>
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
</head>

<body>

    @if (auth()->check())
        <nav>
            <h2>{{ config('app.name', 'Almacén Mi Barrio') }}</h2>
            <div class="nav-derecha">
                <span>¡Bienvenido, {{ auth()->user()->name }}! 👋</span>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="boton-logout">Cerrar sesión</button>
                </form>
            </div>
        </nav>
    @endif

    <div class="contenedor-inicio">
        <img src="{{ asset('img/inicio.png') }}" alt="Logo Almacén Mi Barrio" class="logo-inicio">
        <h1>Almacén Mi Barrio</h1>
        <p>Sistema de gestión de productos, ventas, clientes y reportes para tu negocio de barrio.</p>

        @if (auth()->check())
            <p class="texto-secundario">¡Ya iniciaste sesión, listo para trabajar! 🚀</p>
            <div class="grupo-botones">
                <a href="/login" class="btn">Ir al panel</a>
            </div>
        @else
            <div class="grupo-botones">
                <a href="/login" class="btn">Iniciar sesión</a>
                <a href="/register" class="btn btn-secondary">Registrarse</a>
            </div>
        @endif
    </div>

</body>

</html>