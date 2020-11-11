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
					
					<!-- Tab -->
						<?php echo $__env->make('admin.tab', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>				
					<!-- End Tab -->

				

		<?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/admin/edit.blade.php ENDPATH**/ ?>