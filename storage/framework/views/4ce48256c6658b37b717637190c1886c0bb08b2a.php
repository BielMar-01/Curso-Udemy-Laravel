<h3>Clientes</h3>
<a href="<?php echo e(route('clientes.create')); ?>">Novo Cliente</a>

<ol>
    <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <?php echo e($c['nome']); ?> | 
            <a href="<?php echo e(route('clientes.edit', $c['id'] )); ?>">Editar</a>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ol><?php /**PATH /home/gabriel/code/projetoUdemy/resources/views/clientes/index.blade.php ENDPATH**/ ?>