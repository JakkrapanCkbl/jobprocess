<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <form id="form" action="<?php echo e(route('album.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <input type="text" name="album" class="form-control" placeholder = "your album name"><br>
            <input type="file" name="image[]" class="form-control">
            <input type="file" name="image[]" class="form-control">
            <input type="file" name="image[]" class="form-control">
            <button class="btn btn-primary" type="submit">Submit</button>
        </form> 
        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        	<img srcset="<?php echo e(asset('storage/'.$image->name)); ?>" class="img-thumbnail">
        	
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/test/inputmultiimage.blade.php ENDPATH**/ ?>