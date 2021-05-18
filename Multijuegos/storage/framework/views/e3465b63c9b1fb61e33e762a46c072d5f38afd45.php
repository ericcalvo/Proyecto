<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form id="form" action="<?php echo e(url('editgame/'.$juego->id)); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <h3 id="nombreJuego">Editar <?php echo e($juego->name); ?></h3></br>
                <label>Nombre:</label></br>
                <input type="text" name="name" id="" placeholder="<?php echo e($juego->name); ?>"></br></br>
                <label for="categoria">¿Cuál es su categoria?</label></br>
                <select name="categoria" id="">
                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($juego->category == $cat->id): ?>
                        <option value="<?php echo e($cat->id); ?>" selected="selected"><?php echo e($cat->name); ?></option>
                    <?php else: ?>
                        <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select></br></br>
                <label> Descripcion: </label> </br><textarea name="desc" id="" cols="30" rows="5" placeholder="<?php echo e($juego->description); ?>"></textarea></br></br>
                <select name="premium" id="">
                    <?php if($juego->premium === 1): ?>
                        <option value="1" selected="selected">Sí</option>
                        <option value="0">No</option>
                    <?php else: ?>
                        <option value="1">Sí</option>
                        <option value="0" selected="selected">No</option>
                    <?php endif; ?>
                
                </select></br>
                
                <label> Quieres cambiar la imagen? </label> <input type="file" name="image" id="" class="form-control-file"></br></br>
                <button id="button" type="submit">Guardar Cambios</button>
            </form>
        </div>
    </div>
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
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

<style>
    #nombreJuego{
        margin-left: 30px;
    }
    #form{
        text-align: left;
        margin-left: 34%;
    }
    #button{
        border: solid;
        padding: 10px;
        margin-left: 72px;
        border-width: 2px;
    }
</style><?php /**PATH /var/www/html/abernadas/UF12/Proyecto/Multijuegos/resources/views/showgame.blade.php ENDPATH**/ ?>