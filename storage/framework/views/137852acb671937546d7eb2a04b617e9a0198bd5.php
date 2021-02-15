<!doctype html>
<html lang="en" dir="ltr">

<head>

	<?php echo $__env->make('dashboard.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('external2/images/brand/favicon.ico')); ?>" />

	<!-- Title -->
	<title>Valuer</title>

	<!--Bootstrap.min css-->
	<link rel="stylesheet" href="<?php echo e(asset('external2/plugins/bootstrap/css/bootstrap.min.css')); ?>">

	<!--Font Awesome-->
	<link href="<?php echo e(asset('external2/plugins/fontawesome-free/css/all.css')); ?>" rel="stylesheet">

	<!-- Dashboard Css -->
	<link href="<?php echo e(asset('external2/css/style.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('external2/css/boxed.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('external2/css/color-styles.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('external2/css/skin-modes.css')); ?>" rel="stylesheet" />

	<!-- Vector-map -->
	<link href="<?php echo e(asset('external2/plugins/jquery.vmap/jqvmap.min.css')); ?>" rel="stylesheet">

	<!-- Custom scroll bar css-->
	<link href="<?php echo e(asset('external2/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.css')); ?>" rel="stylesheet" />

	<!-- Sidemenu Css -->
	<link href="<?php echo e(asset('external2/plugins/sidemenu/css/sidemenu.css')); ?>" rel="stylesheet">

	<!-- morris Charts Plugin -->
	<link href="<?php echo e(asset('external2/plugins/morris/morris.css')); ?>" rel="stylesheet" />

	<!---Font icons-->
	<link href="<?php echo e(asset('external2/plugins/iconfonts/plugin.css')); ?>" rel="stylesheet" />

	<!-- Sidebar css -->
	<link href="<?php echo e(asset('external2/plugins/sidebar/sidebar.css')); ?>" rel="stylesheet">

</head>

<body class="app">

	<!-- Global Loader-->
	<div id="global-loader"><img src="<?php echo e(asset('external2/images/svgs/loader.svg')); ?>" alt="loader"></div>

	<div class="page">
		<div class="page-main">

			<?php echo $__env->make('valuer-page.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<?php echo $__env->make('dashboard.menubar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


			<div class="container content-area">

				<a href="file:///C:/Users/note3/OneDrive/Documents/">
					<h1>CLICK THIS CLICK THIS CLICK THIS </h1>
				</a>
				<?php echo $__env->make('valuer-page.show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

				<?php echo $__env->make('dashboard.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/valuer-page/index.blade.php ENDPATH**/ ?>