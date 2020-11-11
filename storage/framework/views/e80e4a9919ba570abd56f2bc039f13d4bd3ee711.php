<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-8">
    		<div class="card">
    			<?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    				
    				<a href="<?php echo e(asset('storage/'.substr($file, 7))); ?>"><?php echo e(substr($file, 7)); ?></a> <br>
    				
    			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    		</div>
    	</div>      
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/test/showfilelist.blade.php ENDPATH**/ ?>