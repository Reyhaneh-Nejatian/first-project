<?php $__env->startSection('title','لاراول'); ?>

<?php $__env->startSection('content'); ?>
   <h1 style="text-align: center;margin-top: 20px"><?php echo e($number1.'+'.$number2.'='.$sum); ?></h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\laravel\blog\resources\views/slider/index.blade.php ENDPATH**/ ?>