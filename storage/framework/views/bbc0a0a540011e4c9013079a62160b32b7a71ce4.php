<div class="row" >   
    <div class="col-12 card">
        <div class="card-body text-center ">
            <label class="font fs-4">filter type</label>
            <form action="<?php echo e($url); ?>" method="POST">
                <?php echo method_field($method); ?>
                <?php echo csrf_field(); ?>
                <div class="form-group"> 
                    <div class="d-flex justify-content-center align-items-center ">
                        <div class="mx-3">
                            <select name="type" id="type">
                                <option value="normal">normal</option>
                                <option value="fighting">fighting</option>
                                <option value="flying">flying</option>
                                <option value="poison">poison</option>
                                <option value="ground">ground</option>
                                <option value="rock">rock</option>
                                <option value="bug">bug</option>
                                <option value="ghost">ghost</option>
                                <option value="steel">steel</option>
                                <option value="fire">fire</option>
                                <option value="water">water</option>
                                <option value="grass">grass</option>
                                <option value="electric">electric</option>
                                <option value="psychic">psychic</option>
                                <option value="ice">ice</option>
                                <option value="dragon">dragon</option>
                                <option value="dark">dark</option>
                                <option value="fairy">fairy</option>
                            </select>
                        </div>
                        <button type="submit" class="my-3 btn btn-success" ><i class="fas fa-search"></i></button> 
                    </div>
                    
                    <?php $__errorArgs = ['type'];
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
            </form>         
        </div>
    </div>
</div><?php /**PATH /home/kevin/pokemon/resources/views/filterType.blade.php ENDPATH**/ ?>