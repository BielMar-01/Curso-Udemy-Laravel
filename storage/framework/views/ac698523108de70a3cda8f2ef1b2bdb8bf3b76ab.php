<?php $__env->startSection('titulo', 'Clientes - Novo'); ?>

<?php $__env->startSection('conteudo'); ?>
    <h3>Novo Cliente</h3>

    <form action="<?php echo e(route('clientes.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" name="nome">
        <input type="submit" value="Salvar">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gabriel/code/projetoUdemy/resources/views/clientes/create.blade.php ENDPATH**/ ?>