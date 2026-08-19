<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - <?php echo e(config('app.name', 'Almacén Mi Barrio')); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/inicio.css')); ?>">
</head>

<body>

    <?php if(auth()->check()): ?>
        <nav>
            <h2><?php echo e(config('app.name', 'Almacén Mi Barrio')); ?></h2>
            <div class="nav-derecha">
                <span>¡Bienvenido, <?php echo e(auth()->user()->name); ?>! 👋</span>
                <form action="<?php echo e(route('logout')); ?>" method="POST" style="display: inline;">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="boton-logout">Cerrar sesión</button>
                </form>
            </div>
        </nav>
    <?php endif; ?>

    <div class="contenedor-inicio">
        <h1>Almacén Mi Barrio</h1>
        <p>Sistema de gestión de productos, ventas, clientes y reportes para tu negocio de barrio.</p>

        <?php if(auth()->check()): ?>
            <p class="texto-secundario">¡Ya iniciaste sesión, listo para trabajar! 🚀</p>
            <div class="grupo-botones">
                <a href="/login" class="btn">Ir al panel</a>
            </div>
        <?php else: ?>
            <div class="grupo-botones">
                <a href="/login" class="btn">Iniciar sesión</a>
                <a href="/register" class="btn btn-secondary">Registrarse</a>
            </div>
        <?php endif; ?>
    </div>

</body>

</html><?php /**PATH C:\laragon\www\Almacen-MiBarrio\resources\views/inicio.blade.php ENDPATH**/ ?>