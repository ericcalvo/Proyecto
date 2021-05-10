<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3>Juegos</h3></br>
            <a href="<?php echo e(url('addgame')); ?>">Crear Juego</a>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>Descripcion</th>
                    <th>Premium</th>
                    <th>Imagen/logo</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
                <?php $__currentLoopData = $juegos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $juego): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th class="name"><?php echo e($juego->name); ?></th>
                        <th class="category">
                        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($cat->id === $juego->category): ?>
                                <?php echo e($cat->name); ?>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </th>
                        <th class="desc"><?php echo e($juego->description); ?></th>
                        <th class="premium">
                            <?php if($juego->is_premium === 1): ?>
                                Sí
                            <?php else: ?>
                                No
                            <?php endif; ?>
                        </th>

                        <th class="img"><img class="imagen" src="https://dawjavi.insjoaquimmir.cat/abernadas/UF12/Proyecto/Multijuegos/storage/app/<?php echo e($juego->image); ?>" alt="no va"></th>
                        <th class="editar"><a href="<?php echo e(url('showgame/'.$juego->id)); ?>">Editar</a></th>
                        <th><a href="<?php echo e(url('deletegame/'.$juego->id)); ?>">Borrar</a></th>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
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
    table{
        width: 100%;
    }
    th.name, th.category {
        width: 11%;
    }
    th.desc{
        width: 40%;
    }
    th.premium{
        width: 10%;
    }
    th.img{
        width: 12%;
    }
    .imagen{
        width: 80%;
    }
    h3{
        text-align: center;
    }
</style>
<?php /**PATH /var/www/html/abernadas/UF12/Proyecto/Multijuegos/resources/views/indexgames.blade.php ENDPATH**/ ?>