<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div id="multijuegos">
                <h1>Multijuegos</h1>
                <?php for($i = 0; $i < 1; $i++): ?>
                    <div class="content">
                        <div class="row offset-md-0 col-12">
                            <?php $__currentLoopData = $juegos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $juego): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div id="contImg" class="col-md-3 col-12">
                                    <a href="<?php echo e(url('juego/'.$juego -> name)); ?>">
                                        <img id="imgJ" src="https://dawjavi.insjoaquimmir.cat/abernadas/UF12/Proyecto/Multijuegos/storage/app/<?php echo e($juego->image); ?>"/>
                                    </a></br>
                                    <li id="listJ" href="<?php echo e(url('multijuegos/'.$juego->name)); ?>"> <?php echo e($juego -> name); ?></li></br>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endfor; ?>
                <?php echo e($juegos->links()); ?>

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
    @media (max-width: 768px) {
        #contImg{
            padding-left: 150px;
        }
        #multijuegos{
            margin-bottom: 700px;
        }
    }
    h1{
        text-align: center;
        margin-bottom: 30px;
    }
    #multijuegos{
        height: 442px;
    }
    #listJ{
        color: black;
        margin-left: 10px;
        list-style-type: none;
    }
    #imgJ{
        height: 160px;
        width: 160px;
        margin-right: 100px;
        margin-top: 10px;
    }
    #contImg{
        margin-bottom: 20px;
    }
    
</style><?php /**PATH /var/www/html/abernadas/UF12/Proyecto/Multijuegos/resources/views/multijuegos.blade.php ENDPATH**/ ?>