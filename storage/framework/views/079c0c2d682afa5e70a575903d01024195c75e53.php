<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <!--<script src="<?php echo e(asset('js/app.js')); ?>" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
	<div class="content">
		<div id="app">
			<edit-component id="<?php echo $id; ?>"></edit-component>
		</div>
	</div>
</body>
<script src="/js/app.js" charset="utf-8"></script>
</html><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/jobs\edit.blade.php ENDPATH**/ ?>