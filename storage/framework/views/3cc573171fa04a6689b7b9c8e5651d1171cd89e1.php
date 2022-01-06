<div class="row">   
    <div class="col-8 card my-3">
        <div class="card-body  ">
            <form action="<?php echo e($url); ?>" method="POST">
                <?php echo method_field($method); ?>
                <?php echo csrf_field(); ?>
                <div class="form-group"> 
                    <label class="form-label"><?php echo e(__('name or pokemon id')); ?></label>
                    <input class="form-control" type="text-area" name="name" id="name" required <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  class="form-control my-2 rounded-lg" placeholder="<?php echo e(__('name or pokemon id')); ?>" >
                   
                    
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?> </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>
                <button type="submit" class="my-3 btn btn-success" ><?php echo e(__('Send player')); ?></button>
            </form>         
        </div>
    </div>
</div><?php /**PATH /home/kevin/pokemon/resources/views/search.blade.php ENDPATH**/ ?>