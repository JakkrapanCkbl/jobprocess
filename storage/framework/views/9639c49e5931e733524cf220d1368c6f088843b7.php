<!doctype html>
<html lang="en" dir="ltr">
	<head>
		
		<?php echo $__env->make('dashboard.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	</head>

	<body class="app">

		<!-- Global Loader-->
		<div id="global-loader"><img src="<?php echo e(asset('external2/images/svgs/loader.svg')); ?>" alt="loader"></div>

		<div class="page">
			<div class="page-main">

				<?php echo $__env->make('dashboard.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

				<?php echo $__env->make('dashboard.menubar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				

				<div class="container content-area">

					<!-- Content -->
					
					<div class="container">
					 <?php if(Session::has('message')): ?>
					    <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
					  <?php endif; ?>
					  <div class="row">
					      <div class="col-md-4">                
					          <?php echo $__env->make('admin.left-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>      
					      </div>
					      <div class="col-md-8">
					          <div class="card">Job Order
					            <div class="card-body">
					              <table class="table table-striped">
					                <thead>
					                  <tr>
					                    <th scope="col">เลขที่รายงาน</th>
					                    <th scope="col">id</th>
					                    <th scope="col">วันที่</th>                    
					                    <th scope="col">ทำเลที่ตั้ง</th>
					                    <th scope="col">Action</th>
					                  </tr>
					                </thead>
					                <tbody> 
					                  <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>         
					                    <tr>
					                      <td><?php echo e($job->jobcode); ?></td>
					                      <td><?php echo e($job->reportcode); ?></td>
					                      <td><?php echo e($job->startdate); ?></td>                      
					                      <td><?php echo e($job->proplocation); ?></td>                     
					                      <td>
					                        <a href="<?php echo e(route('admininputjob.restore',[$job->id])); ?>"><button class="btn btn-success">Restore</button></a>
					                        
					                      </td>              
					                    </tr> 
					                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                </tbody>
					             </table>
					             <?php echo e($jobs->links()); ?>

					            </div>
					          </div>
					      </div>
					  </div>
					</div>

					<!-- End Content -->

		<?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/admin/trash.blade.php ENDPATH**/ ?>