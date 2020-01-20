<?php $__env->startSection('titulo', 'Opcoes'); ?>

<?php $__env->startSection('conteudo'); ?>
<div>
    <ul class="options">
        <li><a class="warning href="<?php echo e(route('opcoes',1)); ?>">warning</a></li>
        <li><a class="info    href="<?php echo e(route('opcoes',2)); ?>">info</a></li>
        <li><a class="success href="<?php echo e(route('opcoes',3)); ?>">success</a></li>
        <li><a class="error   href="<?php echo e(route('opcoes',4)); ?>">error</a></li>
    </ul>
</div>

<?php if(isset($opcao)): ?>
   
    <?php switch($opcao):
        case (1): ?>
            <?php $__env->startComponent('components.alerta', ['titulo'=>'Erro Fatal', 'tipo'=>'warning']); ?>
            <p><Strong>Warning</Strong></p>
            <p>Ocorreu um erro inesperado</p>
            <?php echo $__env->renderComponent(); ?>
            <?php break; ?>
        <?php case (2): ?>
            <?php $__env->startComponent('components.alerta', ['titulo'=>'Erro Fatal', 'tipo'=>'info']); ?>
            <p><Strong>Info</Strong></p>
            <p>Ocorreu um erro inesperado</p>
            <?php echo $__env->renderComponent(); ?>
            <?php break; ?>
        <?php case (3): ?>
            <?php $__env->startComponent('components.alerta', ['titulo'=>'Erro Fatal', 'tipo'=>'success']); ?>
            <p><Strong>Success</Strong></p>
            <p>Ocorreu um erro inesperado</p>
            <?php echo $__env->renderComponent(); ?>
            <?php break; ?>
        <?php case (4): ?>
            <?php $__env->startComponent('components.alerta', ['titulo'=>'Erro Fatal', 'tipo'=>'error']); ?>
            <p><Strong>Error</Strong></p>
            <p>Ocorreu um erro inesperado</p>
            <?php echo $__env->renderComponent(); ?>
            <?php break; ?>
        <?php default: ?>
            
    <?php endswitch; ?>

<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gabriel/code/projetoUdemy/resources/views/outras/opcoes.blade.php ENDPATH**/ ?>