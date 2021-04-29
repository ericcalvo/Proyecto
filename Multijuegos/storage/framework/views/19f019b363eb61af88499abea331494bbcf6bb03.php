<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ol>
        <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <li> <a href="<?php echo e(url('categoria/'.$cat->name)); ?>"> <?php echo e($cat -> name); ?></a></li>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
</body>
</html><?php /**PATH /var/www/html/abernadas/UF12/Proyecto/Multijuegos/resources/views/categorias.blade.php ENDPATH**/ ?>