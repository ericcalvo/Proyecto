<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div id="divJuego" class="p-6 bg-white border-b border-gray-300">
                <label id="juegoNombre"><?php echo e($juego_nom); ?></label>
                <iframe id="juego" scrolling="no" src="../../storage/app/<?php echo e($game); ?>"></iframe></br>
                
                <label id="descripcionJuego"><?php echo e($juego_desc); ?></label>
            </div>
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
    #juegoNombre{
        font-size: 22px;
        margin-bottom: 28px;
        display: block;
        text-align: center;
        font-weight: bold;
        font-family: Helvetica;
    }
    #divJuego{
        text-align: left;
        margin-top: -20px;
    }
    #juego {
        width: 90%;
        height: 780px;
        display: block;
        margin: auto;
    }
    #descripcionJuego{
        font-size: 17px;
        margin-left: 50px;
        padding-bottom: 20px;
    }
</style>

<script>
    let documento = document.getElementById("documentoo");
    let juego = document.getElementById("juego");

    juego.addEventListener("mouseenter", function( event ) {
        documento.style.overflow = "hidden";

    });

    juego.addEventListener("mouseout", function( event ) {
        documento.style.overflow = "auto";
    });
</script><?php /**PATH /var/www/html/abernadas/UF12/Proyecto/Multijuegos/resources/views/juego.blade.php ENDPATH**/ ?>