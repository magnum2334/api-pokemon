<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex w-100 align-items-center justify-content-around">
                        <h1 class="text-center"> name : <?php echo e($pokemon['name']); ?></h1>
                    </div>
                    <h2 class="text-center"><strong>types</strong></h2>
                    <strong class="text-center"><p><?php echo e($pokemonName); ?> and <?php echo e($pokemonName1); ?></p></strong>
                    <h2 class="text-center">abilities</h2> 
                    <?php $__currentLoopData = $pokemon['abilities']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poke): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="text-center">   <?php echo e($poke['ability']['name']); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <h2 class="text-center"><strong>base experience </strong></h2>
                    <h2 class="text-center"><?php echo e($pokemon['base_experience']); ?></h2>
                    <div class="card-footer">
                        <img class="card-img-top" src=" <?php echo e($pokemon['sprites']['front_shiny']); ?>" alt="">
                    </div>
                </div>
          </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kevin/pokemon/resources/views/home.blade.php ENDPATH**/ ?>