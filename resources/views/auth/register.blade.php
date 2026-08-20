<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta - {{ config('app.name', 'Almacén Mi Barrio') }}</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>

    <form action="/register" method="POST" class="form-container">
        @csrf

        <h2>Crear cuenta</h2>

        <label for="name">Nombre completo</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Juan Pérez" required>
        @error('name')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <label for="email">Correo electrónico</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="juan@ejemplo.com" required>
        @error('email')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Mínimo 8 caracteres" required>
        @error('password')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <label for="password_confirmation">Confirmar contraseña</label>
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirma tu contraseña" required>

        <button type="submit" class="btn">Crear cuenta</button>

        <div class="link">
            ¿Ya tienes cuenta? <a href="/login">Inicia sesión aquí</a>
        </div>

    </form>

</body>

</html>