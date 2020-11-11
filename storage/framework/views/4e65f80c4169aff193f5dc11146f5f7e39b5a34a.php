<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php echo $__env->make('../partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>
	<?php echo $__env->make('../partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<br><br><br><br>	
	<?php echo $__env->yieldContent('content'); ?>
	<br><br>
	<?php echo $__env->make('../partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/layouts/main.blade.php ENDPATH**/ ?>