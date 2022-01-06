<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
               
          
                <?php echo $__env->make('search', ['method' => 'POST', 'url' => route('search')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
              
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex w-100 align-items-center justify-content-around">
                            <h1 class="text-center" style="font-family: cursive;"><?php echo e(isset($pokemonfined ['name']) ? 'pokemon :':''); ?> <?php echo e(isset($pokemonfined ['name']) ? $pokemonfined ['name'] :''); ?></h1>
                        </div>
                        <?php if(isset($pokemonfined ['abilities'] )): ?>
                            <h2 class=" text-center" style="font-family: cursive;">abilities :</h2>
                            <?php $__currentLoopData = $pokemonfined ['abilities']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poke): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <h3 class="text-center" style="font-family: cursive;"> <?php echo e($poke['ability']['name']); ?></h3>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <h2 class="text-center" style="font-family: cursive;"> <?php echo e(isset($pokemonfined ['id'] ) ? 'pokedex :' :''); ?> <?php echo e(isset($pokemonfined ['id'] ) ? $pokemonfined ['id'] :''); ?></h2>
                        <div class="card-footer">
                            <img class="card-img-top"  style="font-family: cursive;" src=" <?php echo e(isset( $pokemonfined ['sprites']['front_default']) ? $pokemonfined ['sprites']['front_default'] :''); ?>" alt="">
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kevin/pokemon/resources/views/home.blade.php ENDPATH**/ ?>