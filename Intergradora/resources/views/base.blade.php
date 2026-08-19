<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <title>@yield('titulo', 'Librería El Lápiz')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
</head>

<body>

    <header>
        <h1>Librería El Lápiz</h1>
        <p>Libros para aprender, descubrir y disfrutar.</p>
    </header>

    <nav>
        <a href="{{ url('/libros') }}">Libros</a>
        <a href="{{ url('/libros/nuevo') }}">Registrar libro</a>
    </nav>

    <main>
        @yield('contenido')
    </main>

    <footer>
        <p>Integradora - Alex Brayan Flores Daga - 18 de agosto de 2026</p>
    </footer>

</body>

</html>