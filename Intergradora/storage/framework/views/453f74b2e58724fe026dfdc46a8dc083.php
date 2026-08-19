<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - <?php echo e(config('app.name', 'Almacén Mi Barrio')); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
</head>

<body>

    <form action="/login" method="POST" class="form-container">
        <?php echo csrf_field(); ?>

        <h2>Iniciar sesión</h2>

        <label for="email">Correo electrónico</label>
        <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="juan@ejemplo.com" required autofocus>
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="error-message"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="error-message"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <button type="submit" class="btn">Iniciar sesión</button>

        <div class="link">
            ¿No tienes cuenta? <a href="/register">Regístrate aquí</a>
        </div>

    </form>

</body>

</html><?php /**PATH C:\laragon\www\Almacen-MiBarrio\resources\views/auth/login.blade.php ENDPATH**/ ?>