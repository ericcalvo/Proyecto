<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h3>Añadir Juego</h3></br>
            <?php if($errors->any()): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><?php echo e($error); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>            
            <form id="addGame" action="<?php echo e(url('savegame')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                    <label>¿Cómo se llama el juego?</label></br>
                    <input type="text" name="name" id=""></br></br>
                    <label for="categoria">¿Cuál es su categoria?</label></br>
                    <select name="categoria" id="">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select></br></br>
                    <label> Haz una pequeña descripción:</label> </br><textarea name="desc" id="" cols="30" rows="5" placeholder="Maximo 255 caracteres"></textarea></br></br>
                    <label> El juego sera Premium?</label></br>
                    <select name="premium" id="">
                    <option value="0" selected="selected">No</option>
                    <option value="1">Si</option>
                    </select> </br></br>
                    <label> Sube una imagen para usar como icono: </label>
                    <input type="file" name="image" id="" class="form-control-file"></br></br>
                    <label> Zip del juego: </label>
                    <input type="file" name="game" id="" class="form-control-file"></br></br>
                    <button id="button" type="submit">Crear Juego</button>
            </form>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
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

<style>
    #addGame{
        text-align: left;
        margin-left: 34%;
        padding-bottom: 40px;
        padding-bottom: 120px;
    }
    h3{
        text-align: center;
    }
    #button{
        border: solid;
        padding: 10px;
        margin-left: 72px;
        border-width: 2px;
    }
</style><?php /**PATH /var/www/html/abernadas/UF12/Proyecto/Multijuegos/resources/views/addgame.blade.php ENDPATH**/ ?>