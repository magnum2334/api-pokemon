<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row my-4 ">
        <h1 class="text-center font"> pokemon search for :   <a href="<?php echo e(route('pokedex')); ?>" class="font btn btn-danger">pokedex</a> </h1>
        <h1 class="text-center font"> search for  :   <a href="<?php echo e(route('filter')); ?>" class="font btn btn-primary">type_filter</a> </h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <?php echo $__env->make('search', ['method' => 'POST', 'url' => route('search')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    
        </div>
        <div class="col-4">
            <div class="card p-3">
                <div class="card-header">
                    <h3 class="mx-1 font text-center"  ><?php echo e(isset($pokemonfined ['id']) ? '': 'search by pokemon'); ?></h3>
                    <h2 class=" card-title text-center font"><?php echo e(isset($pokemonfined ['name']) ? 'pokemon :':''); ?> <?php echo e(isset($pokemonfined ['name']) ? $pokemonfined ['name'] :''); ?></h2>
                </div>
                <div class="card-body">
                    <h3 class="text-center font" > <?php echo e(isset($pokemonfined ['id'] ) ? 'pokedex :' :''); ?> <?php echo e(isset($pokemonfined ['id'] ) ? $pokemonfined ['id'] :''); ?></h3>
                    <h3 class="text-center mb-1"><?php echo e(isset($pokemonfined ['id']) ? 'types': ''); ?><br>  
                        <?php if(isset($pokemonfined['types']  )): ?>
                            <?php
                                 foreach ($pokemonfined['types']  as $poke) {
                                     ($poke['slot'] == 1) ? $poketype = $poke['type'] ['name']: $poketype2 = $poke['type'] ['name'];
                                 }  
                             ?> 
                        <?php endif; ?>
                        <h4 class="text-center font"> <?php echo e(isset($poketype) ? $poketype : ''); ?>  <?php echo e(isset($poketype2) ?  '|' :''); ?>  <?php echo e(isset($poketype2) ?  $poketype2 :''); ?></h4>
                    </h3>
                    <?php if(isset($pokemonfined ['abilities'] )): ?>
                        <h3 class=" text-center font">abilities :</h3>
                        <div class="d-flex justify-content-center">
                            <?php $__currentLoopData = $pokemonfined ['abilities']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poke): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <h5 class=" mx-1 text-center font"> <?php echo e($poke['ability']['name']); ?> </h5>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                        </div>
                    <?php endif; ?>
                    <div class="card-footer">
                        <img class="card-img-top font" src=" <?php echo e(isset( $pokemonfined ['sprites']['front_default']) ? $pokemonfined ['sprites']['front_default'] :''); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kevin/pokemon/resources/views/home.blade.php ENDPATH**/ ?>