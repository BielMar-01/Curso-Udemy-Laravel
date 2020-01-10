<h3>Novo Cliente</h3>

<form action="<?php echo e(route('clientes.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="nome">
    <input type="submit" value="Salvar">
</form><?php /**PATH /home/gabriel/code/projetoUdemy/resources/views/clientes/create.blade.php ENDPATH**/ ?>