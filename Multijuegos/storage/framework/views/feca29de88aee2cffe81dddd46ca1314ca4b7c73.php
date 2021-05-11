<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Multijuegos</h1>
                    <?php $__currentLoopData = $juegos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $juego): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="content">
                            <div class="row offset-md-3">
                                <a href="<?php echo e(url('juego/'.$juego -> name)); ?>">
                                    <img id="imgJ" src="https://dawjavi.insjoaquimmir.cat/abernadas/UF12/Proyecto/Multijuegos/storage/app/<?php echo e($juego->image); ?>"/>
                                </a></br>
                                <li id="listJ" href="<?php echo e(url('multijuegos/'.$juego->name)); ?>"> <?php echo e($juego -> name); ?></li></br>

                                <a href="<?php echo e(url('juego/'.$juego -> name)); ?>">
                                    <img id="imgJ" src="https://dawjavi.insjoaquimmir.cat/abernadas/UF12/Proyecto/Multijuegos/storage/app/<?php echo e($juego->image); ?>"/>
                                </a></br>
                                <li id="listJ" href="<?php echo e(url('multijuegos/'.$juego->name)); ?>"> <?php echo e($juego -> name); ?></li></br>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.application-footer','data' => []]); ?>
<?php $component->withName('application-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

<style>
    h1{
        text-align: center;
        margin-bottom: 25px;
    }
    #listJ{
        color: black;
        margin-left: 10px;
        list-style-type: none;
    }
    #imgJ{
        height: 160px;
        width: 160px;
    }
    .imagenesJuegos {
        height: 160px;
        width: 160px;
        margin-bottom: 20px;
        margin-left: 100px;
    }
</style><?php /**PATH /var/www/html/abernadas/UF12/Proyecto/Multijuegos/resources/views/multijuegos.blade.php ENDPATH**/ ?>