<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mx-3">
            <?php echo $__env->make('filterType', ['method' => 'POST', 'url' => route('filterPokemon')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    
        </div>
        <div class="col-12 my-3">
            <div class="card">
                <div class="card-header bg-secondary">
                    <span class="fs-3">type : <?php echo e($type); ?></span>
                </div>
                <div class="card-body">
                    <h5 class="card-title"></h5>

                    <table class="table table-light">
                        <thead class="thead-light">
                            <tr>
                                <th>
                                    name
                                </th>
                                <th>
                                    slot
                                </th>
                                <th>
                                    url
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $pokemon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poke): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($poke->pokemon->name); ?></td>
                                    <td><?php echo e($poke->slot); ?></td>
                                    <td><a href="<?php echo e(route('show_pokemon', $poke->pokemon->name )); ?>">ver</a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>   
                     
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kevin/pokemon/resources/views/filterpokemon.blade.php ENDPATH**/ ?>