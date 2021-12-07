<?php $__env->startSection('content'); ?>
    <section class="row mt-3 m-lg-0">
        <section class="col-8 offset-2">
            <?php echo Form::open(['route'=>['slider.update',$id],'method'=>'put','file'=>true]); ?>

                 <section class="form-group">
                    <?php echo Form::label('title','title',['class'=>'form-label']); ?>

                    <?php echo Form::text('title',old('title'),['class'=>'form-control t','style'=>'border:2px
inset lightgray','placeholder'=>'please enter title?']); ?>


                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <h5 class="text-center text-danger"><?php echo e($message); ?></h5>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                 </section>
                 <section class="form-group">
                    <?php echo Form::label('caption','caption',['class'=>'form-label']); ?>

                    <?php echo Form::text('caption',old('caption'),['class'=>'form-control t','style'=>'border:2px
inset lightgray','placeholder'=>'please enter caption?']); ?>

                    <?php $__errorArgs = ['caption'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <h5 class="text-center text-danger"><?php echo e($message); ?></h5>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                 </section>
                 <section class="form-group">
                    <?php echo Form::label('file','file',['class'=>'form-label']); ?>

                    <?php echo Form::file('file',['class'=>'form-control t','style'=>'border:2px
inset lightgray']); ?>

                    <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <h5 class="text-center text-danger"><?php echo e($message); ?></h5>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                 </section>

                 <section class="form-group">
                    <?php echo Form::submit('register',['class'=>'form-control btn btn-success','style'=>'border:2px
inset lightgray']); ?>

                 </section>


            <?php echo Form::close(); ?>

        </section>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <style>
        .form-group{
            margin-top: 20px;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\laravel\blog\resources\views/slider/edit.blade.php ENDPATH**/ ?>