<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- css bootstrap -->
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/bootstrap.min.css')); ?>">
    <?php echo $__env->yieldContent('css'); ?>
</head>
<body>
    <?php echo $__env->yieldContent('content'); ?>

<!-- js -->
    <script src="<?php echo e(asset('dist/js/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/bootstrap.min.js')); ?>"></script>
<?php echo $__env->yieldContent('js'); ?>
</body>
</html>
<?php /**PATH C:\wamp\www\laravel\blog\resources\views/layouts/master.blade.php ENDPATH**/ ?>