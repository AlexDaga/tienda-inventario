<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <title><?php echo $__env->yieldContent('titulo', 'Librería El Lápiz'); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo e(asset('css/base.css')); ?>">
</head>

<body>

    <header>
        <h1>Librería El Lápiz</h1>
        <p>Libros para aprender, descubrir y disfrutar.</p>
    </header>

    <nav>
        <a href="<?php echo e(url('/libros')); ?>">Libros</a>
        <a href="<?php echo e(url('/libros/nuevo')); ?>">Registrar libro</a>
    </nav>

    <main>
        <?php echo $__env->yieldContent('contenido'); ?>
    </main>

    <footer>
        <p>Integradora - Alex Brayan Flores Daga - 18 de agosto de 2026</p>
    </footer>

</body>

</html><?php /**PATH C:\laragon\www\Almacen-MiBarrio\resources\views/base.blade.php ENDPATH**/ ?>