<h3><?php echo e($titulo); ?></h3>
<a href="<?php echo e(route('clientes.create')); ?>">Novo Cliente</a>

<?php if(count($clientes)>0): ?>  <!-- Todos os comados do blade iram começar com @ -->

<ul>
    <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <?php echo e($c['id']); ?> | <?php echo e($c['nome']); ?> | 
            <a href="<?php echo e(route('clientes.edit', $c['id'] )); ?>">Editar</a> |
            <a href="<?php echo e(route('clientes.show', $c['id'] )); ?>">Info</a>
            <form action="<?php echo e(route('clientes.destroy', $c['id'])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <input type="submit" value="Apagar">
            </form>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php else: ?>

<h4>Não exitem clientes cadastrados</h4>

<?php endif; ?><?php /**PATH /home/gabriel/code/projetoUdemy/resources/views/clientes/index.blade.php ENDPATH**/ ?>