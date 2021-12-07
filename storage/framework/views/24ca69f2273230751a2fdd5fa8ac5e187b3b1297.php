<?php $__env->startSection('content'); ?>
    <section class="row mt-5  m-lg-0">
        <section class="col-4 offset-4 mt-5">
            <form action="<?php echo e(route('slider.store')); ?>" method="post" >
                <?php echo csrf_field(); ?>
                <section class="form-group">
                    <label for="number1">number1</label>
                    <input type="number" name="number1" id="number1" class="form-control">
                </section>
                <section class="form-group">
                    <label for="number2">number2</label>
                    <input type="number" name="number2" id="number2" class="form-control">
                </section>
                <section class="form-group">
                    <input type="submit" name="sum" value="sum" class="btn btn-success form-control">
                </section>

            </form>
        </section>
    </section>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\laravel\blog\resources\views/slider/create.blade.php ENDPATH**/ ?>
