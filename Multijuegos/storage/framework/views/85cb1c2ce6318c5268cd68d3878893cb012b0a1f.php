<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div id="JuegosCategorias" class="p-6 bg-white border-b">
                    <ol>
                        <?php $__currentLoopData = $juegos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $juego): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img id="imgG" src="https://dawjavi.insjoaquimmir.cat/abernadas/UF12/Proyecto/Multijuegos/storage/app/<?php echo e($juego->image); ?>"/>
                            <li> <a id="listG" href="<?php echo e(url('juego/'.$juego -> name)); ?>"> <?php echo e($juego -> name); ?> </a></li></br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
                </div>
                <?php echo e($juegos->links()); ?>

            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.application-footer-down','data' => []]); ?>
<?php $component->withName('application-footer-down'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

<style>
    #JuegosCategorias{
        height: 404px;
    }
    #listG{
        color: black;
    }
    #imgG{
        height: 38px;
        width: 40px;
        float: left;
    }
</style><?php /**PATH /var/www/html/abernadas/UF12/Proyecto/Multijuegos/resources/views/juegos_cat.blade.php ENDPATH**/ ?>