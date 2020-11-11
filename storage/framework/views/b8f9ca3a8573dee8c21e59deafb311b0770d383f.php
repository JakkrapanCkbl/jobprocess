<?php $__env->startSection('content'); ?>


<div class="container">

    <div class="row justify-content-center">
    	<div class="col-md-8">
    		<div class="card">
    			<form action="<?php echo e(route('upload')); ?>" method="post" enctype="multipart/form-data"><?php echo csrf_field(); ?>
    				<input type="file" name="image" class="form-control">
    				<button type="submit" class="btn btn-success">Upload</button>
    			</form>
    		</div>
    	</div>
        <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <img src="<?php echo e(asset('avatars')); ?>/<?php echo e($album->image); ?>">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/test/upload2.blade.php ENDPATH**/ ?>