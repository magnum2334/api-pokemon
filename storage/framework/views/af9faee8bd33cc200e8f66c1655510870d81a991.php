<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="mx-1 font"  ><?php echo e(isset($pokedex ['id']) ? '': 'there are no pokemon, press next'); ?></h1>
                    <h2 class=" card-title text-center font"><?php echo e(isset($pokedex ['name']) ? 'pokemon :':''); ?> <?php echo e(isset($pokedex ['name']) ? $pokedex ['name'] :''); ?></h2>
                </div>
                <div class="card-body">
                    <h3 class="text-center font" > <?php echo e(isset($pokedex ['id'] ) ? 'pokedex :' :''); ?> <?php echo e(isset($pokedex ['id'] ) ? $pokedex ['id'] :''); ?></h3>
                    <h3 class="text-center mb-1"><?php echo e(isset($pokedex ['id']) ? 'types': ''); ?><br>  
                        <?php if(isset($pokedex['types']  )): ?>
                            <?php
                                 foreach ($pokedex['types']  as $poke) {
                                     ($poke['slot'] == 1) ? $poketype = $poke['type'] ['name']: $poketype2 = $poke['type'] ['name'];
                                 }  
                             ?> 
                        <?php endif; ?>
                        <h4 class="text-center font"> <?php echo e(isset($poketype) ? $poketype : ''); ?>  <?php echo e(isset($poketype2) ?  '|' :''); ?>  <?php echo e(isset($poketype2) ?  $poketype2 :''); ?></h4>
                    </h3>
                    <?php if(isset($pokedex ['abilities'] )): ?>
                        <h3 class=" text-center font">abilities :</h3>
                        <div class="d-flex justify-content-center">
                            <?php $__currentLoopData = $pokedex ['abilities']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poke): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <h5 class=" mx-1 text-center font"> <?php echo e($poke['ability']['name']); ?> </h5>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                        </div>
                    <?php endif; ?>
                    <div class="card-footer">
                        <img class="card-img-top font" src=" <?php echo e(isset( $pokedex ['sprites']['front_default']) ? $pokedex ['sprites']['front_default'] :''); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-primary" style="position: fixed; top: 50%; right: 255px; width: 100px;" href="<?php echo e(route('next' ,isset($pokedex ['id']) ? $pokedex ['id'] : '0')); ?>">Next</a>
        <a class="btn btn-primary" style="position: fixed; top: 50%;left: 255px;width: 100px;" href="<?php echo e(route('before' ,isset($pokedex ['id']) ? $pokedex ['id'] : '0')); ?>" >Before</a >
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kevin/pokemon/resources/views/pokedex.blade.php ENDPATH**/ ?>