<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="py-12 body">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <?php if($errors->any()): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><?php echo e($error); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

            <form action="<?php echo e(url( 'updateuser' )); ?>" method="post" id="editUser" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
                <h3>Editar Usuario </h3> </br>
                <label>Nombre: </label></br>
                <input type="text" name="name" id="" placeholder="<?php echo e(Auth::user()->name); ?>"> </br></br>

                <label>Correo: </label></br>
                <input type="email" name="email" id="" placeholder="<?php echo e(Auth::user()->email); ?>"></br></br>

                <label>Contraseña:</label></br>
                <input type="password" name="password" id=""></br></br>

                <label>Repite Contraseña: </label></br>
                <input type="password" name="passwd2" id=""></br></br>

                <label>Pon aqui tu foto:</label>
                <input type="file" name="profileimage" id="" class="form-control-file"></br>

                <input type="hidden" id="" value='<?php echo e(Auth::user()->id); ?>'>

                <input type="submit" id="button" value="Editar Usuario"></br>
            </form>
        </div>
    </div>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.application-footer','data' => ['class' => 'block h-10 w-auto fill-current']]); ?>
<?php $component->withName('application-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'block h-10 w-auto fill-current']); ?>
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
    #editUser{
        text-align: left;
        margin-left: 32%;
        padding-bottom: 40px;
        margin-top: -30px;
        padding-bottom: 120px;
    }
    #button{
        border: solid;
        padding: 10px;
        margin-left: 60px;
        border-width: 2px;
    }
</style><?php /**PATH /var/www/html/abernadas/UF12/Proyecto/Multijuegos/resources/views/editauser.blade.php ENDPATH**/ ?>