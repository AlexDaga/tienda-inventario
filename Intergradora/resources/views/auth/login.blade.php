<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - {{ config('app.name', 'Almacén Mi Barrio') }}</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>

    <form action="/login" method="POST" class="form-container">
        @csrf

        <h2>Iniciar sesión</h2>

        <label for="email">Correo electrónico</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="juan@ejemplo.com" required autofocus>
        @error('email')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
        @error('password')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn">Iniciar sesión</button>

        <div class="link">
            ¿No tienes cuenta? <a href="/register">Regístrate aquí</a>
        </div>

    </form>

</body>

</html>