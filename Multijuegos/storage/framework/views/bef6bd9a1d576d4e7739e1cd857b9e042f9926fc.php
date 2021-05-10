<ol>
    <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li> <a id="listC" href="<?php echo e(url('categoria/'.$cat->name)); ?>"> <?php echo e($cat -> name); ?></a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ol>

<style>
    #listC{
        color: black;
    }
</style><?php /**PATH /var/www/html/abernadas/UF12/Proyecto/Multijuegos/resources/views/components/list-category.blade.php ENDPATH**/ ?>