<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        <?php $__currentLoopData = $juegos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $juego): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($juego->category == $cat_id): ?>
                
                <li> <a href="<?php echo e(url('juego/'.$juego -> name)); ?>"> <?php echo e($juego -> name); ?> </a></li>

            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
</body>
</html><?php /**PATH /var/www/html/abernadas/UF12/Proyecto/Multijuegos/resources/views/juegos_cat.blade.php ENDPATH**/ ?>