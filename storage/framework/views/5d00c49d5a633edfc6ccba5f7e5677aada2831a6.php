<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>activePotato</title>
        
        <?php echo $__env->make('myLayouts.styles', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>

    <body class="index-page sidebar-collapse">
    	<?php echo $__env->make('myLayouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    	<?php echo $__env->yieldContent('content'); ?>

    </body>
    	<?php echo $__env->make('myLayouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</html>
