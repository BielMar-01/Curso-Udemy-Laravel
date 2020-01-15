<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Views</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/principal.css')); ?>"> <!--Asset serve para pegar arquivos do public -->
</head>
<body>
    <div class="row">
        <div class="col1">
            <div class="menu">
                <ul>
                    <li><a class="<?php echo e(request()->routeIs('clientes.*') ? 'active' : ''); ?>" 
                        href="<?php echo e(route('clientes.index')); ?>">Clientes</a></li>
                    <li><a class="<?php echo e(request()->routeIs('produtos') ? 'active' : ''); ?>"
                        href="<?php echo e(route('produtos')); ?>">Produtos</a></li>
                    <li><a class="<?php echo e(request()->routeIs('departamentos') ? 'active' : ''); ?>"
                        href="<?php echo e(route('departamentos')); ?>">Departamentos</a></li>
                </ul>
            </div>
            
        </div>
        <div class="col2">
            <?php echo $__env->yieldContent('conteudo'); ?> <!-- Serve para chamar layputs especificos -->
        </div>
    </div>
</body>
</html><?php /**PATH /home/gabriel/code/projetoUdemy/resources/views/layouts/principal.blade.php ENDPATH**/ ?>