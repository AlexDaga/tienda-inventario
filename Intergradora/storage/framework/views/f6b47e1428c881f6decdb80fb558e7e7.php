<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta - <?php echo e(config('app.name', 'Almacén Mi Barrio')); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/register.css')); ?>">
</head>

<body>

    <form action="/register" method="POST" class="form-container">
        <?php echo csrf_field(); ?>

        <h2>Crear cuenta</h2>

        <label for="name">Nombre completo</label>
        <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" placeholder="Juan Pérez" required>
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="error-message"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <label for="email">Correo electrónico</label>
        <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="juan@ejemplo.com" required>
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
        <input type="password" id="password" name="password" placeholder="Mínimo 8 caracteres" required>
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

        <label for="password_confirmation">Confirmar contraseña</label>
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirma tu contraseña" required>

        <button type="submit" class="btn">Crear cuenta</button>

        <div class="link">
            ¿Ya tienes cuenta? <a href="/login">Inicia sesión aquí</a>
        </div>

    </form>

</body>

</html><?php /**PATH C:\laragon\www\Almacen-MiBarrio\resources\views/auth/register.blade.php ENDPATH**/ ?>