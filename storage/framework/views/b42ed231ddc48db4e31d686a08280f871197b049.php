<?php $__env->startSection('titulo', 'Departementos'); ?>

<?php $__env->startSection('conteudo'); ?>
    <h3>Departamentos</h3>

    <ul>
        <li>Computadores</li>
        <li>Eletronicos</li>
        <li>Acessórios</li>
        <li>Roupas</li>
    </ul>

<?php $__env->startComponent('components.alerta'); ?>
    
<?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gabriel/code/projetoUdemy/resources/views/outras/departamentos.blade.php ENDPATH**/ ?>