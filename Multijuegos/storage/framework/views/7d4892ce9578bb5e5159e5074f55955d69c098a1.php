<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="py-12">
        <div id="indexCats" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3>Categorias</h3></br>
            <a href="<?php echo e(url('addcat')); ?>">Crear cateogria</a>
            <table>
                <tr>
                    <th class="name">Nombre</th>
                    <th class="img">Imagen/logo</th>
                    <th class="edit">Editar</th>
                    <th class="delete">Borrar</th>
                </tr>

                <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($cat->name); ?></td>        
                        <td><img id="imgC" src="https://dawjavi.insjoaquimmir.cat/abernadas/UF12/Proyecto/Multijuegos/storage/app/<?php echo e($cat->image); ?>" alt="no va"></td>
                        <td><a href="<?php echo e(url('showcat/'.$cat->id)); ?>">Editar</a></td>
                        <td><a href="<?php echo e(url('deletecat/'.$cat->id)); ?>">Borrar</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table></br>
            <p> Acuerdate que borrar una categoria también eliminará los juegos relacionados con ella</p>
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
    #indexCats{
        padding-bottom: 159px;
    }
    table{
        width: 100%;
    }
    th.name{
        width: 13%;
    }
    th.img{
        width: 74%;
        margin-right: 10px;
    }

    h3{
        text-align: center;
    }
    #imgC{
        height: 50px;
        width: auto;
    }
</style><?php /**PATH /var/www/html/abernadas/UF12/Proyecto/Multijuegos/resources/views/indexcats.blade.php ENDPATH**/ ?>