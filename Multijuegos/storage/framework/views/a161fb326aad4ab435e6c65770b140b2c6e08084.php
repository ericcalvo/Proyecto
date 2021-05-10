<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="<?php echo e(url('addgame')); ?>">Crear Juego</a>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Imagen/logo</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
        <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th><?php echo e($cat->name); ?></th>
                <th><?php echo e($cat->image); ?></th>
  
                <th><img src="<?php echo e(url('/storage/'.$cat->image)); ?>" alt="no va"></th>
                <th><a href="<?php echo e(url('showcat/'.$cat->id)); ?>">Editar</a></th>
                <th><a href="<?php echo e(url('deletecat/'.$cat->id)); ?>">Borrar</a></th>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html><?php /**PATH /var/www/html/abernadas/UF12/Proyecto/Multijuegos/resources/views/category/index.blade.php ENDPATH**/ ?>