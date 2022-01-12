<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row d-flex justify-contect-center">
            <div class="offset-4 col-4">
                <div class="card p-3">
                    <div class="card-header">
                        <h2 class="card-title text-center font"><?php echo e(isset($pokemonfined ['name']) ? 'pokemon :':''); ?> <?php echo e(isset($pokemon ['name']) ? $pokemon ['name'] :''); ?></h2>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center font" > <?php echo e(isset($pokemon ['id'] ) ? 'pokedex :' :''); ?> <?php echo e(isset($pokemon ['id'] ) ? $pokemon ['id'] :''); ?></h3>
                        <h3 class="text-center mb-1"><?php echo e(isset($pokemon ['id']) ? 'types': ''); ?><br>  
                            <?php if(isset($pokemon['types']  )): ?>
                                <?php
                                    foreach ($pokemon['types']  as $poke) {
                                        ($poke['slot'] == 1) ? $poketype = $poke['type'] ['name']: $poketype2 = $poke['type'] ['name'];
                                    }  
                                 ?> 
                            <?php endif; ?>
                            <h4 class="text-center font"> <?php echo e(isset($poketype) ? $poketype : ''); ?>  <?php echo e(isset($poketype2) ?  '|' :''); ?>  <?php echo e(isset($poketype2) ?  $poketype2 :''); ?></h4>
                        </h3>
                        <?php if(isset($pokemon ['abilities'] )): ?>
                            <h3 class=" text-center font">abilities :</h3>
                            <div class="d-flex justify-content-center">
                                <?php $__currentLoopData = $pokemon ['abilities']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poke): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <h5 class=" mx-1 text-center font"> <?php echo e($poke['ability']['name']); ?> </h5>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                            </div>
                        <?php endif; ?>
                        <div class="card-footer">
                            <img class="card-img-top font" src=" <?php echo e(isset( $pokemon ['sprites']['front_default']) ? $pokemon ['sprites']['front_default'] :''); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kevin/pokemon/resources/views/show.blade.php ENDPATH**/ ?>