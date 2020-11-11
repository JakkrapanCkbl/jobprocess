<?php $__env->startSection('content'); ?>
      <div class="container"> 
        <div class="row">
		<div class="col-md-12"> <br />
			<h3 align="center">เพิ่มข้อมูล</h3> <br/>
                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <ul><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>			
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul>
                            </div>
                        <?php endif; ?>
                        <?php if(\Session::has('success')): ?>
                            <div class="alert alert-success">
                                <p><?php echo e(\Session::get('success')); ?></p>
                            </div>
                        <?php endif; ?>
                        
			<form method="post" action="<?php echo e(url('jobproject')); ?>">
				<?php echo e(csrf_field()); ?>

				<div class="form-group">
					<input type="text" name="jobcode" class="form-control" placeholder="jobcode" />
				</div>
				<div class="form-group">
					<input type="text" name="projectname" class="form-control" placeholder="projectname" />
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" />
				</div>
			</form>
		</div>
	</div>	
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.usermenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/jobproject/create.blade.php ENDPATH**/ ?>