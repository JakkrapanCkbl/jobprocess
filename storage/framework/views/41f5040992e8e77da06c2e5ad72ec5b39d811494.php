<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="Spaner - Simple light Bootstrap Nice Admin Panel Dashboard Design Responsive HTML5 Template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="bootstrap panel, bootstrap admin template, dashboard template, bootstrap dashboard, dashboard design, best dashboard, html css admin template, html admin template, admin panel template, admin dashbaord template, bootstrap dashbaord template, it dashbaord, hr dashbaord, marketing dashbaord, sales dashbaord, dashboard ui, admin portal, bootstrap 4 admin template, bootstrap 4 admin"/>

		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('external2/images/brand/favicon.ico')); ?>" />

		<!-- Title -->
		<title>Spaner - Simple light Bootstrap Nice Admin Panel Dashboard Design Responsive HTML5 Template</title>

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

	<body class="app sidebar-mini">

		<!-- Global Loader-->
		<div id="global-loader"><img src="<?php echo e(asset('external2/images/svgs/loader.svg')); ?>" alt="loader"></div>

		<div class="page">
			<div class="page-main">

				<!-- Navbar-->
				<header class="app-header header">
					<!-- Navbar Right Menu-->
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand" href="index.html">
								<img alt="logo" class="header-brand-img main-logo" src="<?php echo e(asset('external2/images/brand/logo1.png')); ?>">
								<img alt="logo" class="header-brand-img mobile-logo" src="<?php echo e(asset('external2/images/brand/icon.png')); ?>">
							</a>
							<!-- Sidebar toggle button-->
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
							<div class="dropdown d-sm-flex d-none">
								<a href="#" class="nav-link icon" data-toggle="dropdown">
									<i class="fe fe-search"></i>
								</a>
								<div class="dropdown-menu header-search dropdown-menu-left dropdown-menu-arrow">
									<div class="input-group w-100 p-2">
										<input type="text" class="form-control " placeholder="Search....">
										<div class="input-group-append ">
											<button type="button" class="btn btn-primary ">
												<i class="fas fa-search" aria-hidden="true"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="dropdown d-sm-flex d-none header-message">
								<a class="nav-link icon" data-toggle="dropdown">
									<i class="fe fe-grid mr-2"></i><span class="lay-outstyle">Menus styles</span>
									<span class="pulse2 bg-warning" aria-hidden="true"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
									<a class="dropdown-item d-flex pb-3" href="toggle.html">Toggle Menu</a>
									<a class="dropdown-item d-flex pb-3" href="sidemenu.html">Icon Closed Menu</a>
									<a class="dropdown-item d-flex pb-3" href="overlay2.html">Icon Overlay Menu</a>
									<a class="dropdown-item d-flex pb-3" href="overlay.html">Closed Overlay Menu</a>
									<a class="dropdown-item d-flex pb-3" href="horizontal.html">Horizontal Menu</a>

								</div>
							</div>
							<div class="d-flex order-lg-2 ml-auto">
								<div class="d-sm-flex d-none">
									<a href="#" class="nav-link icon full-screen-link">
										<i class="fe fe-minimize fullscreen-button"></i>
									</a>
								</div>
								<div class="dropdown d-none d-md-flex">
									<a href="#" class="d-flex nav-link pr-0 country-flag" data-toggle="dropdown">
										<span class="avatar country-Flag mr-3 align-self-center cover-image" data-image-src="<?php echo e(asset('external2/images/svgs/flags/french_flag.jpg')); ?>"></span>
										<div>
											<span class="text-white mr-3 mt-0">English</span>
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a href="#" class="dropdown-item d-flex pb-3">
											<span class="avatar country-Flag mr-3 align-self-center cover-image" data-image-src="<?php echo e(asset('external2/images/svgs/flags/french_flag.jpg')); ?>"></span>
											<div class="d-flex">
												<span class="">French</span>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<span class="avatar country-Flag mr-3 align-self-center cover-image" data-image-src="<?php echo e(asset('external2/images/svgs/flags/germany_flag.jpg')); ?>"></span>
											<div class="d-flex">
												<span class="">Germany</span>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<span class="avatar country-Flag mr-3 align-self-center cover-image" data-image-src="<?php echo e(asset('external2/images/svgs/flags/italy_flag.jpg')); ?>"></span>
											<div class="d-flex">
												<span class="">Italy</span>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<span class="avatar country-Flag  mr-3 align-self-center cover-image" data-image-src="<?php echo e(asset('external2/images/svgs/flags/russia_flag.jpg')); ?>"></span>
											<div class="d-flex">
												<span class="">Russia</span>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<span class="avatar country-Flag mr-3 align-self-center cover-image" data-image-src="<?php echo e(asset('external2/images/svgs/flags/spain_flag.jpg')); ?>"></span>
											<div class="d-flex">
												<span class="">spain</span>
											</div>
										</a>
									</div>
								</div><!-- flag -->
								<div class="dropdown d-sm-flex d-none header-message">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-mail"></i>
										<span class=" nav-unread badge badge-danger badge-pill">4</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a class="dropdown-item text-center" href="#">2 New Messages</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item d-flex pb-3" href="#">
											<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="<?php echo e(asset('external2/images/users/7.jpg')); ?>"></span>
											<div>
												<strong>Madeleine</strong> Hey! there I' am available....
												<div class="small text-muted">
													3 hours ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#"><span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="<?php echo e(asset('external2/images/users/3.jpg')); ?>"></span>
											<div>
												<strong>Anthony</strong> New product Launching...
												<div class="small text-muted">
													5 hour ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#"><span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="<?php echo e(asset('external2/images/users/8.jpg')); ?>"></span>
											<div>
												<strong>Olivia</strong> New Schedule Realease......
												<div class="small text-muted">
													45 mintues ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#"><span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="<?php echo e(asset('external2/images/users/9.jpg')); ?>"></span>
											<div>
												<strong>Sanderson</strong> New Schedule Realease......
												<div class="small text-muted">
													2 days ago
												</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<div class="text-center dropdown-btn pb-3">
											<div class="btn-list">
												<a href="#" class="btn btn-primary btn-sm"><i class="fe fe-plus mr-1"></i>Add New</a>
												<a href="#" class=" btn btn-secondary btn-sm"><i class="fe fe-eye mr-1"></i>View All</a>
											</div>
										</div>
									</div>
								</div>
								<div class="dropdown d-sm-flex d-none header-message">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-bell"></i>
										<span class=" nav-unread badge badge-warning  badge-pill">3</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a class="dropdown-item text-center" href="#">Notifications</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item d-flex pb-4" href="#">
											<span class="avatar brround mr-3 align-self-center avatar-md cover-image bg-primary"><i class="fe fe-mail fs-12"></i></span>
											<div>
												<span class="font-weight-bold"> commented on your post </span>
												<div class="small text-muted d-flex">
													3 hours ago
													<div class="ml-auto">
													<span class="badge badge-primary">New</span>
													</div>
												</div>
												<div class="progress progress-xs mt-1">
													<div class="progress-bar bg-primary w-30"></div>
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-4" href="#">
											<span class="avatar avatar-md brround mr-3 align-self-center cover-image bg-secondary"><i class="fe fe-download"></i>
											</span>
											<div>
												<span class="font-weight-bold"> New file has been Uploaded </span>
												<div class="small text-muted d-flex">
													5 hour ago
													<div class="ml-auto">
													<span class="badge badge-secondary">New</span>
													</div>
												</div>
												<div class="progress progress-xs mt-1">
													<div class="progress-bar bg-secondary w-50"></div>
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-4" href="#">
											<span class="avatar avatar-md brround mr-3 align-self-center cover-image bg-warning"><i class="fe fe-user"></i>
											</span>
											<div>
												<span class="font-weight-bold"> User account has Updated</span>
												<div class="small text-muted d-flex">
													5 hour ago
													<div class="ml-auto">
													<span class="badge badge-warning">New</span>
													</div>
												</div>
												<div class="progress progress-xs mt-1">
													<div class="progress-bar bg-warning w-70"></div>
												</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<div class="text-center dropdown-btn pb-3">
											<div class="btn-list">
												<a href="#" class="btn btn-primary btn-sm"><i class="fe fe-plus mr-1"></i>Add New</a>
												<a href="#" class=" btn btn-secondary btn-sm"><i class="fe fe-eye mr-1"></i>View All</a>
											</div>
										</div>
									</div>
								</div>
								<button class="navbar-toggler navresponsive-toggler d-sm-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
									aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
								</button>
								<!--Navbar -->
								<div class="dropdown">
									<a class="nav-link pr-0 leading-none d-flex" data-toggle="dropdown" href="#">
										<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/5.jpg')); ?>"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="text-center">
												<h5 class="text-dark mb-1">Vanessa Dyer</h5>
												<small class="text-muted">Web Developer</small>
											</div>
										</div>
										<div class="dropdown-divider m-0"></div>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-user"></i>Profile</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-edit"></i>Schedule</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-mail"></i> Inbox</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-unlock"></i> Look Screen</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-power"></i> Log Out</a>
										<div class="dropdown-divider"></div>
										<div class="text-center dropdown-btn pb-3">
											<div class="btn-list">
												<a href="#" class="btn btn-icon btn-facebook btn-sm"><i class="si si-social-facebook"></i></a>
												<a href="#" class="btn btn-icon btn-twitter btn-sm"><i class="si si-social-twitter"></i></a>
												<a href="#" class="btn btn-icon btn-instagram btn-sm"><i class="si si-social-instagram"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="dropdown d-md-flex header-settings">
									<a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
										<i class="fe fe-align-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</header>
				<div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-sm-none bg-white">
					<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
						<div class="d-flex order-lg-2 ml-auto">
							<div class="dropdown d-md-flex">
								<a href="#" class="nav-link icon" data-toggle="dropdown">
									<i class="fe fe-search"></i>
								</a>
								<div class="dropdown-menu  dropdown-menu-right dropdown-menu-arrow">
									<div class="input-group w-100 p-2">
										<input type="text" class="form-control " placeholder="Search....">
										<div class="input-group-append ">
											<button type="button" class="btn btn-primary ">
												<i class="fas fa-search" aria-hidden="true"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="d-md-flex">
								<a href="#" class="nav-link icon full-screen-link text-dark">
									<i class="fe fe-minimize fullscreen-button"></i>
								</a>
							</div>
							<div class="dropdown  d-md-flex header-contact">
								<a class="nav-link icon text-dark" data-toggle="dropdown">
									<i class="fe fe-flag"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
									<a href="#" class="dropdown-item d-flex pb-3">
										<span class="avatar country-Flag mr-3 align-self-center cover-image" data-image-src="<?php echo e(asset('external2/images/svgs/flags/french_flag.jpg')); ?>"></span>
										<div class="d-flex">
											<span class="">French</span>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex pb-3">
										<span class="avatar country-Flag mr-3 align-self-center cover-image" data-image-src="<?php echo e(asset('external2/images/svgs/flags/germany_flag.jpg')); ?>"></span>
										<div class="d-flex">
											<span class="">Germany</span>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex pb-3">
										<span class="avatar country-Flag mr-3 align-self-center cover-image" data-image-src="<?php echo e(asset('external2/images/svgs/flags/italy_flag.jpg')); ?>"></span>
										<div class="d-flex">
											<span class="">Italy</span>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex pb-3">
										<span class="avatar country-Flag  mr-3 align-self-center cover-image" data-image-src="<?php echo e(asset('external2/images/svgs/flags/russia_flag.jpg')); ?>"></span>
										<div class="d-flex">
											<span class="">Russia</span>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex pb-3">
										<span class="avatar country-Flag mr-3 align-self-center cover-image" data-image-src="<?php echo e(asset('external2/images/svgs/flags/spain_flag.jpg')); ?>"></span>
										<div class="d-flex">
											<span class="">spain</span>
										</div>
									</a>
								</div>
							</div>
							<div class="dropdown  d-md-flex header-contact">
								<a class="nav-link icon text-dark" data-toggle="dropdown">
									<i class="fe fe-mail"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
									<a class="dropdown-item text-center" href="#">2 New Messages</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item d-flex pb-3" href="#">
										<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="<?php echo e(asset('external2/images/users/7.jpg')); ?>"></span>
										<div>
											<strong>Madeleine</strong> Hey! there I' am available....
											<div class="small text-muted">
												3 hours ago
											</div>
										</div>
									</a>
									<a class="dropdown-item d-flex pb-3" href="#"><span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="<?php echo e(asset('external2/images/users/3.jpg')); ?>"></span>
										<div>
											<strong>Anthony</strong> New product Launching...
											<div class="small text-muted">
												5 hour ago
											</div>
										</div>
									</a>
									<a class="dropdown-item d-flex pb-3" href="#"><span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="<?php echo e(asset('external2/images/users/8.jpg')); ?>"></span>
										<div>
											<strong>Olivia</strong> New Schedule Realease......
											<div class="small text-muted">
												45 mintues ago
											</div>
										</div>
									</a>
									<a class="dropdown-item d-flex pb-3" href="#"><span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="<?php echo e(asset('external2/images/users/9.jpg')); ?>"></span>
										<div>
											<strong>Sanderson</strong> New Schedule Realease......
											<div class="small text-muted">
												2 days ago
											</div>
										</div>
									</a>
									<div class="dropdown-divider"></div>
									<div class="text-center dropdown-btn pb-3">
										<div class="btn-list">
											<a href="#" class="btn btn-primary btn-sm"><i class="fe fe-plus mr-1"></i>Add New</a>
											<a href="#" class=" btn btn-secondary btn-sm"><i class="fe fe-eye mr-1"></i>View All</a>
										</div>
									</div>
								</div>
							</div>
							<div class="dropdown d-md-flex header-message">
								<a class="nav-link icon text-dark" data-toggle="dropdown">
									<i class="fe fe-bell"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
									<a class="dropdown-item text-center" href="#">Notifications</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item d-flex pb-4" href="#">
										<span class="avatar brround mr-3 align-self-center avatar-md cover-image bg-primary"><i class="fe fe-mail fs-12"></i></span>
										<div>
											<span class="font-weight-bold"> commented on your post </span>
											<div class="small text-muted d-flex">
												3 hours ago
												<div class="ml-auto">
												<span class="badge badge-primary">New</span>
												</div>
											</div>
											<div class="progress progress-xs mt-1">
												<div class="progress-bar bg-primary w-30"></div>
											</div>
										</div>
									</a>
									<a class="dropdown-item d-flex pb-4" href="#">
										<span class="avatar avatar-md brround mr-3 align-self-center cover-image bg-secondary"><i class="fe fe-download"></i>
										</span>
										<div>
											<span class="font-weight-bold"> New file has been Uploaded </span>
											<div class="small text-muted d-flex">
												5 hour ago
												<div class="ml-auto">
												<span class="badge badge-secondary">New</span>
												</div>
											</div>
											<div class="progress progress-xs mt-1">
												<div class="progress-bar bg-secondary w-50"></div>
											</div>
										</div>
									</a>
									<a class="dropdown-item d-flex pb-4" href="#">
										<span class="avatar avatar-md brround mr-3 align-self-center cover-image bg-warning"><i class="fe fe-user"></i>
										</span>
										<div>
											<span class="font-weight-bold"> User account has Updated</span>
											<div class="small text-muted d-flex">
												5 hour ago
												<div class="ml-auto">
												<span class="badge badge-warning">New</span>
												</div>
											</div>
											<div class="progress progress-xs mt-1">
												<div class="progress-bar bg-warning w-70"></div>
											</div>
										</div>
									</a>
									<div class="dropdown-divider"></div>
									<div class="text-center dropdown-btn pb-3">
										<div class="btn-list">
											<a href="#" class="btn btn-primary btn-sm"><i class="fe fe-plus mr-1"></i>Add New</a>
											<a href="#" class=" btn btn-secondary btn-sm"><i class="fe fe-eye mr-1"></i>View All</a>
										</div>
									</div>
								</div>
							</div>
							<div class="dropdown d-md-flex header-message">
								<a class="nav-link icon" data-toggle="dropdown">
									<i class="fe fe-grid"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
									<a class="dropdown-item d-flex pb-3" href="toggle.html">Toggle Menu</a>
									<a class="dropdown-item d-flex pb-3" href="sidemenu.html">Icon Closed Menu</a>
									<a class="dropdown-item d-flex pb-3" href="overlay2.html">Icon Overlay Menu</a>
									<a class="dropdown-item d-flex pb-3" href="overlay.html">Closed Overlay Menu</a>
									<a class="dropdown-item d-flex pb-3" href="horizontal.html">Horizontal Menu</a>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/.Navbar -->

				<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar">
					<div class="app-sidebar__user">
						<div class="user-body">
							<span class="avatar avatar-lg brround text-center cover-image" data-image-src="<?php echo e(asset('external2/images/users/5.jpg')); ?>"></span>
						</div>
						<div class="user-info">
							<a href="#" class="ml-2"><span class="text-dark app-sidebar__user-name font-weight-semibold">Vanessa Dyer</span><br>
								<span class="text-muted app-sidebar__user-name text-sm">Web Developer</span>
							</a>
						</div>
					</div>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-screen-desktop"></i><span class="side-menu__label">Dashboard</span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="index.html">Dashboard 01</a></li>
								<li><a class="slide-item" href="index2.html">Dashboard 02</a></li>
								<li><a class="slide-item" href="index3.html">Dashboard 03</a></li>
								<li><a class="slide-item" href="index4.html">Dashboard 04</a></li>
								<li><a class="slide-item" href="index5.html">Dashboard 05</a></li>
							</ul>
						</li>
						<li>
							<a class="side-menu__item" href="widgets.html"><i class="side-menu__icon si si-layers"></i><span class="side-menu__label">Widgets</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-rocket"></i><span class="side-menu__label">Ui Design</span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="cards.html" class="slide-item">Cards</a>
								</li>
								<li>
									<a href="chat.html" class="slide-item">Chat</a>
								</li>
								<li>
									<a href="notify.html" class="slide-item">Notifications</a>
								</li>
								<li>
									<a href="sweetalert.html" class="slide-item">Sweet alerts</a>
								</li>
								<li>
									<a href="rangeslider.html" class="slide-item">Range slider</a>
								</li>
								<li>
									<a href="scroll.html" class="slide-item">Content Scroll bar</a>
								</li>
								<li>
									<a href="counters.html" class="slide-item">Counters</a>
								</li>
								<li>
									<a href="loaders.html" class="slide-item">Loaders</a>
								</li>
								<li>
									<a href="rating.html" class="slide-item">Rating</a>
								</li>
								<li>
									<a href="time-line.html" class="slide-item">Time Line</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-chart"></i><span class="side-menu__label">Chart Types</span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="chart-morris.html" class="slide-item">Morris Chart </a>
								</li>
								<li>
									<a href="chart-echart.html" class="slide-item">Echarts</a>
								</li>
								<li>
									<a href="charts-peity.html" class="slide-item">Peity Charts</a>
								</li>
								<li>
									<a href="chart-chartist.html" class="slide-item">Chartist Charts</a>
								</li>
								<li>
									<a href="chartjs.html" class="slide-item">Chart js</a>
								</li>
								<li>
									<a href="chart-flot.html" class="slide-item">Chart flot</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-calendar"></i><span class="side-menu__label">Calendar</span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="calendar.html" class="slide-item">Default calendar</a>
								</li>
								<li>
									<a href="calendar2.html" class="slide-item">Full calendar</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-diamond"></i><span class="side-menu__label">Components</span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="modal.html" class="slide-item">Modal</a>
								</li>
								<li>
									<a href="tooltipandpopover.html" class="slide-item">Tooltip and popover</a>
								</li>
								<li>
									<a href="progress.html" class="slide-item">Progress</a>
								</li>

								<li>
									<a href="carousel.html" class="slide-item">Carousels</a>
								</li>
								<li>
									<a href="accordion.html" class="slide-item">Accordions</a>
								</li>
								<li>
									<a href="tabs.html" class="slide-item">Tabs</a>
								</li>
								<li>
									<a href="headers.html" class="slide-item">Headers</a>
								</li>
								<li>
									<a href="footers.html" class="slide-item">Footers</a>
								</li>
								<li>
									<a href="crypto-currencies.html" class="slide-item">Crypto-currencies</a>
								</li>
								<li>
									<a href="users-list.html" class="slide-item">User List</a>
								</li>
								<li>
									<a href="search.html" class="slide-item">Search page</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="side-menu__item" href="maps.html"><i class="side-menu__icon si si-map"></i><span class="side-menu__label">Maps</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-grid"></i><span class="side-menu__label">Elements</span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="alerts.html" class="slide-item">Alerts</a>
								</li>
								<li>
									<a href="buttons.html" class="slide-item">Buttons</a>
								</li>
								<li>
									<a href="colors.html" class="slide-item">Colors</a>
								</li>
								<li>
									<a href="avatars.html" class="slide-item">Avatars</a>
								</li>
								<li>
									<a href="dropdown.html" class="slide-item">Drop downs</a>
								</li>
								<li>
									<a href="thumbnails.html" class="slide-item">Thumbnails</a>
								</li>
								<li>
									<a href="mediaobject.html" class="slide-item">Media Object</a>
								</li>
								<li>
									<a href="list.html" class="slide-item">List</a>
								</li>
								<li>
									<a href="tags.html" class="slide-item">Tags</a>
								</li>
								<li>
									<a href="pagination.html" class="slide-item">Pagination</a>
								</li>
								<li>
									<a href="navigation.html" class="slide-item">Navigation</a>
								</li>
								<li>
									<a href="typography.html" class="slide-item">Typography</a>
								</li>
								<li>
									<a href="breadcrumbs.html" class="slide-item">Breadcrumbs</a>
								</li>
								<li>
									<a href="badge.html" class="slide-item">Badges</a>
								</li>
								<li>
									<a href="jumbotron.html" class="slide-item">Jumbotron</a>
								</li>
								<li>
									<a href="panels.html" class="slide-item">Panels</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-calculator"></i><span class="side-menu__label">Tables</span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="tables.html" class="slide-item">Default table</a>
								</li>
								<li>
									<a href="datatable.html" class="slide-item">Data Table</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-briefcase"></i><span class="side-menu__label">Pages</span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="profile.html" class="slide-item">Profile</a>
								</li>
								<li>
									<a href="editprofile.html" class="slide-item">Edit Profile</a>
								</li>
								<li>
									<a href="email.html" class="slide-item">Email</a>
								</li>
								<li>
									<a href="emailservices.html" class="slide-item">Email Inbox</a>
								</li>
								<li>
									<a href="gallery.html" class="slide-item">Gallery</a>
								</li>
								<li>
									<a href="login.html" class="slide-item">Login</a>
								</li>
								<li>
									<a href="register.html" class="slide-item">Register</a>
								</li>
								<li>
									<a href="forgot-password.html" class="slide-item">Forgot password</a>
								</li>
								<li>
									<a href="lockscreen.html" class="slide-item">Lock screen</a>
								</li>
								<li>
									<a href="empty.html" class="slide-item">Empty Page</a>
								</li>
								<li>
									<a href="construction.html" class="slide-item">Under Construction</a>
								</li>
								<li>
									<a href="about.html" class="slide-item">About Company</a>
								</li>
								<li>
									<a href="services.html" class="slide-item">Services</a>
								</li>
								<li>
									<a href="faq.html" class="slide-item">FAQS</a>
								</li>
								<li>
									<a href="terms.html" class="slide-item">Terms and Conditions</a>
								</li>
								<li>
									<a href="pricing.html" class="slide-item">Pricing Tables</a>
								</li>
								<li>
									<a href="blog.html" class="slide-item">Blog</a>
								</li>
								<li>
									<a href="invoice.html" class="slide-item">Invoice</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-flag"></i><span class="side-menu__label">Icons</span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="icons.html" class="slide-item">Font Awesome</a>
								</li>
								<li>
									<a href="icons2.html" class="slide-item">Material Design Icons</a>
								</li>
								<li>
									<a href="icons3.html" class="slide-item">Simple Line Iocns</a>
								</li>
								<li>
									<a href="icons4.html" class="slide-item">Feather Icons</a>
								</li>
								<li>
									<a href="icons5.html" class="slide-item">Ionic Icons</a>
								</li>
								<li>
									<a href="icons6.html" class="slide-item">Flags Icons</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-docs"></i><span class="side-menu__label">Forms</span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="form-elements.html" class="slide-item">Form Elements</a>
								</li>
								<li>
									<a href="form-wizard.html" class="slide-item">Form-wizard Elements</a>
								</li>
								<li>
									<a href="form-edior.html" class="slide-item">Form Wizard</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-basket-loaded"></i><span class="side-menu__label">E-commerce</span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="shop.html" class="slide-item">Products</a>
								</li>
								<li>
									<a href="shop-des.html" class="slide-item">Product Details</a>
								</li>
								<li>
									<a href="cart.html" class="slide-item">Cart</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-exclamation"></i><span class="side-menu__label">Error pages</span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="400.html" class="slide-item">400 Error</a>
								</li>
								<li>
									<a href="401.html" class="slide-item">401 Error</a>
								</li>
								<li>
									<a href="500.html" class="slide-item">500 Error</a>
								</li>
								<li>
									<a href="503.html" class="slide-item">503 Error</a>
								</li>
							</ul>
						</li>
					</ul>
				</aside>
				<!--side-menu-->

				<div class=" app-content">
					<div class="side-app">

						<div class="page-header">
							<h3 class="page-title"><i class="fe fe-home mr-1"></i>Dashboard 01</h3>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
							</ol>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="d-sm-flex m-0">
											<div class="mr-4">
												<a href="#">
													<img class="avatar avatar-xl brround" src="<?php echo e(asset('external2/images/users/5.jpg')); ?>" alt="media1">
												</a>
											</div>
											<div class="my-4 my-sm-0">
												<div>
													<h4 class="media-heading font-weight-bold">Hi, Welcome !   Vanessa Dyer <span class="text-muted fs-12">( Web Developer )</span> </h4>
													<p class="text-muted">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt. Please Upgrade your Profile.......</p>
												</div>
												<div class="progress progress-sm">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary w-60"></div>
												</div>
											</div>
											<div class="ml-auto mb-0">
												<a href="#" class="btn btn-sm btn-danger" data-toggle="tooltip" title="" data-original-title="Edit Profile"><i class="fe fe-edit"></i> Edit Profile</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-4 col-lg-12">
								<div class="card overflow-hidden bg-gradient-primary text-white">
									<div class="card-body pb-0">
										<div class="float-left">
											<h1 class="mb-3 font-weight-extrabold"><span class="avatar brround mr-3 align-self-center avatar-md cover-image bg-dark-transparent"><i class="fe fe-dollar-sign"></i></span><span class="counter num-font">2,536</span>k </h1>
											<h4 class="mb-3">Today Profit</h4>
											<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there anything embarrassing hidden in the middle of text</p>
											<a href="#" class="btn btn-dark">
												 View Details
											</a>
										</div>
									</div>
									<div class="chart-wrapper overflow-hidden">
										<canvas id="AreaChart1" class="areaChart chart-dropshadow"></canvas>
									</div>
								</div>
								<div class="card">
									<div class="card-header pt-2 pb-0 border-bottom-0">
										<h5 class="text-muted mb-0">Total Visiting Locations</h5>
										<div class="card-options">
											<a class="btn btn-sm btn-secondary" href="#"><i class="fe fe-map-pin"></i></a>
										</div>
									</div>
									<div class="card-body pt-0">
										<h1 class="d-inline-block mb-2 num-font">25,356</h1>
										<div class="progress h-2  mb-0">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-35" role="progressbar"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-8 col-lg-12">
								<div class="card overflow-hidden">
									<div class="card-header">
										<h3 class="card-title">Statistics</h3>
										<div class="card-options d-none d-sm-block">
											<div class="btn-group btn-sm">
												<button type="button" class="btn btn-light btn-sm">
													<span class="">Day</span>
												</button>
												<button type="button" class="btn btn-light btn-sm">
													<span class="">Month</span>
												</button>
												<button type="button" class="btn btn-light btn-sm">
													<span class="">Year</span>
												</button>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div id="echart1" class="chartsh overflow-hidden"></div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-sm-4 col-12  text-center">
												<small class="fs-14 text-muted"><span class="dot-label bg-primary"></span>Visitors</small>
												<h2 class="mb-4 mb-sm-0 counter font-weight-extrabold num-font">69,568</h2>
											</div>
											<div class="col-sm-4 col-12  text-center">
												<small class="fs-14 text-muted"><span class="dot-label bg-secondary"></span>Page Views</small>
												<h2 class="mb-4 mb-sm-0 counter font-weight-extrabold num-font">60,475</h2>
											</div>
											<div class="col-sm-4 col-12  text-center">
												<small class="fs-14 text-muted"><span class="dot-label bg-danger"></span>Clients</small>
												<h2 class="mb-0 mb-sm-0 counter font-weight-extrabold num-font">40,245</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-3 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Project Status</h3>
										<div class="card-options">
											<span class="dropdown-toggle fs-16" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="fe fe-more-vertical " ></i></span>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a href="#"><i class="si si-plus mr-2"></i>Add</a></li>
												<li><a href="#"><i class="si si-trash mr-2"></i>Remove</a></li>
												<li><a href="#"><i class="si si-eye mr-2"></i>View</a></li>
												<li><a href="#"><i class="si si-settings mr-2"></i>More</a></li>
											</ul>
										</div>
									</div>
									<div class="card-body text-center">
										<h3 class="font-weight-semibold">Web page editors</h3>
										<p class="mb-4">Duis aute irure dolor in reprehenderit in voluptate velit Duis aute irure dolor in reprehenderit in voluptate velit</p>
										<div class="d-flex">
											<label class="font-weight-semibold text-muted">Project Status</label>
											<div class="ml-auto">
												<label class="font-weight-bold num-font">70%</label>
											</div>
										</div>
										<div class="progress progress-sm mb-5">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-70"></div>
										</div>
										<div class="avatar-list avatar-list-stacked mb-3">
											<span class="avatar brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/2.jpg')); ?>"></span>
											<span class="avatar brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/1.jpg')); ?>"></span>
											<span class="avatar brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/9.jpg')); ?>"></span>
											<span class="avatar brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/3.jpg')); ?>"></span>
											<span class="avatar brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/4.jpg')); ?>"></span>
											<span class="avatar brround cover-image">+8</span>
										</div>
										<a class="text-center btn btn-pink" href="#">View Details</a>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title m-b-0">People </h5>
										<div class="card-options ">
											<span class="dropdown-toggle fs-16" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="fe fe-more-vertical " ></i></span>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a href="#"><i class="si si-plus mr-2"></i>Add</a></li>
												<li><a href="#"><i class="si si-trash mr-2"></i>Remove</a></li>
												<li><a href="#"><i class="si si-eye mr-2"></i>View</a></li>
												<li><a href="#"><i class="si si-settings mr-2"></i>More</a></li>
											</ul>
										</div>
									</div>
									<div class="list-group list-group-flush ">
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-2">
												<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/1.jpg')); ?>"></span>
											</div>
											<div class="">
												<div class="font-weight-semibold">Mozelle Belt</div>
												<small class="text-muted">Web Designer
												</small>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-white border" data-toggle="tooltip" title="" data-original-title="Follow"><i class="fa fa-rss"></i></a>
											</div>
										</div>

										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-2">
												<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/3.jpg')); ?>"></span>
											</div>
											<div class="">
												<div class="font-weight-semibold">Florinda Carasco</div>
												<small class="text-muted">Project Manager
												</small>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-white border" data-toggle="tooltip" title="" data-original-title="Follow"><i class="fa fa-rss"></i></a>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-2">
												<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/9.jpg')); ?>"></span>
											</div>
											<div class="">
												<div class="font-weight-semibold">Alina Bernier</div>
												<small class="text-muted">Administrator
												</small>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-white border" data-toggle="tooltip" title="" data-original-title="Follow"><i class="fa fa-rss"></i></a>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-2">
												<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/2.jpg')); ?>"></span>
											</div>
											<div class="">
												<div class="font-weight-semibold">Zula Mclaughin</div>
												<small class="text-muted">Web Developer
												</small>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-white border" data-toggle="tooltip" title="" data-original-title="Follow"><i class="fa fa-rss"></i></a>
											</div>
										</div>
										<div class="list-group-item d-flex  align-items-center">
											<div class="mr-2">
												<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/4.jpg')); ?>"></span>
											</div>
											<div class="">
												<div class="font-weight-semibold">Isidro Heide</div>
												<small class="text-muted">Web Designer
												</small>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-sm btn-white border" data-toggle="tooltip" title="" data-original-title="Follow"><i class="fa fa-rss"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12">
								<div class="card overflow-hidden">
									<div class="card-header">
										<h5 class="card-title m-b-0">Weekly Tasks</h5>
										<div class="card-options d-none d-sm-block">
											<div class="btn-group btn-sm">
												<button type="button" class="btn btn-light btn-sm">
													<span class="">Day</span>
												</button>
												<button type="button" class="btn btn-light btn-sm">
													<span class="">Month</span>
												</button>
												<button type="button" class="btn btn-light btn-sm">
													<span class="">Year</span>
												</button>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="dash4 d-none d-sm-block">
											<p class="fs-16 float-right ml-4 text-orange">Pending Tasks: <b class="num-font">3</b></p>
											<p class="fs-16 float-right text-success">Completed Tasks: <b class="num-font">3</b></p>
											<p class="fs-16">Total Tasks: <b class="num-font">6</b></p>
										</div>
										<div class="chart-wrapper ">
											<canvas id="team-chart" class="chart-dropshadow"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-4 col-lg-12">
								<div class="card card-aside">
									<div class="card-aside-column cover-image br-tl-7 br-bl-7" data-image-src="<?php echo e(asset('external2/images/photos/9.jpg')); ?>" ></div>
									<div class="card-body">
										<h4 class="card-title mb-4">Card with Rightside</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing tempor incididunt ut labore.</p>
										<p>Duis aute irure dolor in reprehenderit in voluptate velit Duis aute irure dolor in </p>
									</div>
								</div>
								<div class="card overflow-hidden">
									<div class="card-header">
										<h3 class="card-title">Orders</h3>
										<div class="card-options">
											<a class="btn btn-sm btn-primary" href="#" data-toggle="tooltip" title="" data-original-title="View More">View More</a>
										</div>
									</div>
									<div class="card-body ">
										<div class="d-flex">
											<div>
												<h6 class="text-muted">Total Orders</h6>
												<h2 class="counter mt-0  num-font font-weight-extrabold mb-2">26,536</h2>
												<span><i class="fa fa-caret-up text-green"></i>10% increases</span>
											</div>
											<div class="ml-auto">
												<div class="fs-50 text-center text-info">
													<i class="fe fe-shopping-cart"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Messages</h3>
										<div class="card-options ">
											<span class="dropdown-toggle fs-16" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="fe fe-more-vertical " ></i></span>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a href="#"><i class="si si-plus mr-2"></i>Add</a></li>
												<li><a href="#"><i class="si si-trash mr-2"></i>Remove</a></li>
												<li><a href="#"><i class="si si-eye mr-2"></i>View</a></li>
												<li><a href="#"><i class="si si-settings mr-2"></i>More</a></li>
											</ul>
										</div>
									</div>
									<div class="">
										<div class="list d-flex align-items-center border-bottom p-3">
											<div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo e(asset('external2/images/users/9.jpg')); ?>"></div>
											<div class="wrapper w-100 ml-3">
												<p class="mb-0 d-flex">
													<b>Lisa	Glover</b>
													<small class="text-primary ml-auto">15 mins ago</small>
												</p>
												<div class="justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<p class="mb-0">Hey You it's me again..attached now</p>
													</div>
												</div>
												<div class="mt-1 text-muted">
													<i class="si si-action-undo mr-1"></i>
													<i class="si si-settings"></i>
												</div>
											</div>
										</div>
										<div class="list d-flex align-items-center border-bottom p-3">
											<div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo e(asset('external2/images/users/2.jpg')); ?>"></div>
											<div class="wrapper w-100 ml-3">
												<p class="mb-0 d-flex">
													<b>John	Randall</b>
													<small class="text-danger ml-auto">30 mins ago</small>
												</p>
												<div class="justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<p class="mb-0">Hey I attached some new PSD files...</p>
													</div>
												</div>
												<div class="mt-1 text-muted">
													<i class="si si-action-undo mr-1"></i>
													<i class="si si-settings"></i>
												</div>
											</div>
										</div>
										<div class="list d-flex align-items-center border-bottom p-3">
											<div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo e(asset('external2/images/users/3.jpg')); ?>""></div>
											<div class="wrapper w-100 ml-3">
												<p class="mb-0 d-flex">
													<b>Lisa	Glover</b>
													<small class="text-warning ml-auto">2 days ago</small>
												</p>
												<div class="justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<p class="mb-0">Hi Please Send the Update File.</p>
													</div>
												</div>
												<div class="mt-1 text-muted">
													<i class="si si-action-undo mr-1"></i>
													<i class="si si-settings"></i>
												</div>
											</div>
										</div>
										<div class="list d-flex align-items-center p-3">
											<div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo e(asset('external2/images/users/4.jpg')); ?>"></div>
											<div class="wrapper w-100 ml-3">
												<p class="mb-0 d-flex">
													<b>John	Randall </b>
													<small class="text-success ml-auto">6 days ago</small>
												</p>
												<div class="justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<p class="mb-0">Hello My new Templates Adding.because those who do not know how to pleasure .</p>
													</div>
												</div>
												<div class="mt-1 text-muted">
													<i class="si si-action-undo mr-1"></i>
													<i class="si si-settings"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Recent Activity</h3>
										<div class="card-options ">
											<span class="dropdown-toggle fs-16" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="fe fe-more-vertical " ></i></span>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a href="#"><i class="si si-plus mr-2"></i>Add</a></li>
												<li><a href="#"><i class="si si-trash mr-2"></i>Remove</a></li>
												<li><a href="#"><i class="si si-eye mr-2"></i>View</a></li>
												<li><a href="#"><i class="si si-settings mr-2"></i>More</a></li>
											</ul>
										</div>
									</div>
									<div class="card-body">
										<div class="activity">
											<img src="<?php echo e(asset('external2/images/users/2.jpg')); ?>" alt="" class="img-activity">
											<div class="time-activity">
												<div class="item-activity">
													<p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
													<small class="text-primary">30 mins ago</small>
												</div>
											</div>
											<img src="<?php echo e(asset('external2/images/users/1.jpg')); ?>" alt="" class="img-activity">
											<div class="time-activity">
												<div class="item-activity">
													<p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
													<small class="text-danger">1 days ago</small>
												</div>
											</div>
											<img src="<?php echo e(asset('external2/images/users/4.jpg')); ?>" alt="" class="img-activity">
											<div class="time-activity">
												<div class="item-activity">
													<p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
													<small class="text-warning">3 days ago</small>
												</div>
											</div>
											<img src="<?php echo e(asset('external2/images/users/3.jpg')); ?>" alt="" class="img-activity">
											<div class="time-activity mb-0">
												<div class="item-activity mb-0">
													<p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
													<small class="text-success">5 days ago</small>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Visitors</h3>
										<div class="card-options d-none d-sm-block">
											<div class="btn-group btn-sm">
												<button type="button" class="btn btn-light btn-sm">
													<span class="">Day</span>
												</button>
												<button type="button" class="btn btn-light btn-sm">
													<span class="">Month</span>
												</button>
												<button type="button" class="btn btn-light btn-sm">
													<span class="">Year</span>
												</button>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table card-table table-vcenter  border text-nowrap">
												<thead>
													<tr>
														<th class="w-1">ID</th>
														<th>Visitor Name</th>
														<th>Gender</th>
														<th>Status</th>
														<th>Phone Number</th>
														<th>Date</th>
														<th>Loaction</th>
														<th>Operation</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><span class="text-muted num-font">#6754</span></td>
														<td>Adam Berry</td>
														<td>Male</td>
														<td><span class="badge badge-pill badge-primary">Normal</span></td>
														<td class="num-font">+1 23 456 9876</td>
														<td><i class="mdi mdi-av-timer text-muted mr-1 num-font"></i>10-10-2019</td>
														<td>USA</td>
														<td>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fe fe-edit-2 text-dark fs-16"></i></a>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Check"><i class="fe fe-file text-dark fs-16"></i></a>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Add"><i class="fe fe-folder-plus text-dark fs-16"></i></a>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fe fe-trash-2 text-dark fs-16"></i></a>
														</td>
													</tr>
													<tr>
														<td><span class="text-muted num-font">#5643</span></td>
														<td>Kylie Peake</td>
														<td>Female</td>
														<td><span class="badge badge-pill badge-success">Unusual</span></td>
														<td class="num-font">+0 45 678 9966</td>
														<td><i class="mdi mdi-av-timer text-muted mr-1 num-font"></i>08-10-2019</td>
														<td>Arizona</td>
														<td>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fe fe-edit-2 text-dark fs-16"></i></a>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Check"><i class="fe fe-file text-dark fs-16"></i></a>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Add"><i class="fe fe-folder-plus text-dark fs-16"></i></a>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fe fe-trash-2 text-dark fs-16"></i></a>
														</td>
													</tr>
													<tr>
														<td><span class="text-muted num-font num-font">#8765</span></td>
														<td>Katherine Hart</td>
														<td>Female</td>
														<td><span class="badge badge-pill badge-warning">Normal</span></td>
														<td class="num-font">+1 98 675 4325</td>
														<td><i class="mdi mdi-av-timer text-muted mr-1 num-font"></i>07-10-2019</td>
														<td>Montana</td>
														<td>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fe fe-edit-2 text-dark fs-16"></i></a>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Check"><i class="fe fe-file text-dark fs-16"></i></a>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Add"><i class="fe fe-folder-plus text-dark fs-16"></i></a>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fe fe-trash-2 text-dark fs-16"></i></a>
														</td>
													</tr>
													<tr>
														<td><span class="text-muted num-font">#4563</span></td>
														<td>Sarah Jones</td>
														<td>Male</td>
														<td><span class="badge badge-pill badge-danger">Rare</span></td>
														<td class="num-font">+0 78 654 3456</td>
														<td><i class="mdi mdi-av-timer text-muted mr-1 num-font"></i>05-10-2019</td>
														<td>South Carolina</td>
														<td>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fe fe-edit-2 text-dark fs-16"></i></a>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Check"><i class="fe fe-file text-dark fs-16"></i></a>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Add"><i class="fe fe-folder-plus text-dark fs-16"></i></a>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fe fe-trash-2 text-dark fs-16"></i></a>
														</td>
													</tr>
													<tr>
														<td><span class="text-muted num-font">#2345</span></td>
														<td>Jason Bond</td>
														<td>Male</td>
														<td><span class="badge badge-pill badge-info">Unusual</span></td>
														<td class="num-font">+1 89 675 4563</td>
														<td><i class="mdi mdi-av-timer text-muted mr-1 num-font"></i>04-10-2019</td>
														<td>Virginia</td>
														<td>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fe fe-edit-2 text-dark fs-16"></i></a>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Check"><i class="fe fe-file text-dark fs-16"></i></a>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Add"><i class="fe fe-folder-plus text-dark fs-16"></i></a>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fe fe-trash-2 text-dark fs-16"></i></a>
														</td>
													</tr>
													<tr>
														<td><span class="text-muted num-font">#9876</span></td>
														<td>Victoria Cornish</td>
														<td>Female</td>
														<td><span class="badge badge-pill badge-success">Rare</span></td>
														<td class="num-font">+0 67 345 9876</td>
														<td><i class="mdi mdi-av-timer text-muted mr-1 num-font"></i>03-10-2019</td>
														<td>Washington</td>
														<td>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fe fe-edit-2 text-dark fs-16"></i></a>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Check"><i class="fe fe-file text-dark fs-16"></i></a>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Add"><i class="fe fe-folder-plus text-dark fs-16"></i></a>
															<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fe fe-trash-2 text-dark fs-16"></i></a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!--Sidebar-right-->
					<div class="sidebar sidebar-right sidebar-animate">

						<div class="panel panel-primary">
							<div class="tab-menu-heading border-0">
								<div class="tabs-menu ">
									<!-- Tabs -->
									<ul class="nav panel-tabs">
										<li class=""><a href="#side1" class="active" data-toggle="tab"><i class="fas fa-bell"></i> Notifications</a></li>
										<li><a href="#side2" data-toggle="tab"><i class="fas fa-comments"></i> Chat</a></li>
										<li><a href="#side3" data-toggle="tab"><i class="fas fa-user-friends"></i> Friends</a></li>
									</ul>
								</div>
							</div>
							<div class="panel-body tabs-menu-body p-0 border-0">
								<div class="tab-content">
									<div class="tab-pane active " id="side1">
										<div class="list-group list-group-flush ">
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-3">
													<span class="avatar avatar-lg brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/5.jpg')); ?>"><span class="avatar-status bg-green"></span></span>
												</div>
												<div>
													<strong>Madeleine</strong> Hey! there I' am available....
													<div class="small text-muted">
														3 hours ago
													</div>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-3">
													<span class="avatar avatar-lg brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/4.jpg')); ?>"></span>
												</div>
												<div>
													<strong>Anthony</strong> New product Launching...
													<div class="small text-muted">
														5 hour ago
													</div>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-3">
													<span class="avatar avatar-lg brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/3.jpg')); ?>"><span class="avatar-status bg-green"></span></span>
												</div>
												<div>
													<strong>Olivia</strong> New Schedule Realease......
													<div class="small text-muted">
														45 mintues ago
													</div>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-3">
													<span class="avatar avatar-lg brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/2.jpg')); ?>"><span class="avatar-status bg-green"></span></span>
												</div>
												<div>
													<strong>Madeleine</strong> Hey! there I' am available....
													<div class="small text-muted">
														3 hours ago
													</div>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-3">
													<span class="avatar avatar-lg brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/1.jpg')); ?>"></span>
												</div>
												<div>
													<strong>Anthony</strong> New product Launching...
													<div class="small text-muted">
														5 hour ago
													</div>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-3">
													<span class="avatar avatar-lg brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/9.jpg')); ?>"><span class="avatar-status bg-green"></span></span>
												</div>
												<div>
													<strong>Olivia</strong> New Schedule Realease......
													<div class="small text-muted">
														45 mintues ago
													</div>
												</div>
											</div>
											<div class="pt-4 text-center">
												<a href="#" class="btn btn-primary">View more</a>
											</div>
										</div>
									</div>
									<div class="tab-pane  " id="side2">
										<div class="list d-flex align-items-center border-bottom p-4">
											<div class="">
												<span class="avatar bg-primary brround avatar-md">CH</span>
											</div>
											<div class="wrapper w-100 ml-3">
												<p class="mb-0 d-flex">
													<b>New Websites is Created</b>
												</p>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<i class="mdi mdi-clock text-muted mr-1"></i>
														<small class="text-muted ml-auto">30 mins ago</small>
														<p class="mb-0"></p>
													</div>
												</div>
											</div>
										</div>
										<div class="list d-flex align-items-center border-bottom p-4">
											<div class="">
												<span class="avatar bg-danger brround avatar-md">N</span>
											</div>
											<div class="wrapper w-100 ml-3">
												<p class="mb-0 d-flex">
													<b>Prepare For the Next Project</b>
												</p>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<i class="mdi mdi-clock text-muted mr-1"></i>
														<small class="text-muted ml-auto">2 hours ago</small>
														<p class="mb-0"></p>
													</div>
												</div>
											</div>
										</div>
										<div class="list d-flex align-items-center border-bottom p-4">
											<div class="">
												<span class="avatar bg-info brround avatar-md">S</span>
											</div>
											<div class="wrapper w-100 ml-3">
												<p class="mb-0 d-flex">
													<b>Decide the live Discussion</b>
												</p>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<i class="mdi mdi-clock text-muted mr-1"></i>
														<small class="text-muted ml-auto">3 hours ago</small>
														<p class="mb-0"></p>
													</div>
												</div>
											</div>
										</div>
										<div class="list d-flex align-items-center border-bottom p-4">
											<div class="">
												<span class="avatar bg-warning brround avatar-md">K</span>
											</div>
											<div class="wrapper w-100 ml-3">
												<p class="mb-0 d-flex">
													<b>Meeting at 3:00 pm</b>
												</p>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<i class="mdi mdi-clock text-muted mr-1"></i>
														<small class="text-muted ml-auto">4 hours ago</small>
														<p class="mb-0"></p>
													</div>
												</div>
											</div>
										</div>
										<div class="list d-flex align-items-center border-bottom p-4">
											<div class="">
												<span class="avatar bg-success brround avatar-md">R</span>
											</div>
											<div class="wrapper w-100 ml-3">
												<p class="mb-0 d-flex">
													<b>Prepare for Presentation</b>
												</p>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<i class="mdi mdi-clock text-muted mr-1"></i>
														<small class="text-muted ml-auto">1 days ago</small>
														<p class="mb-0"></p>
													</div>
												</div>
											</div>
										</div>
										<div class="list d-flex align-items-center border-bottom p-4">
											<div class="">
												<span class="avatar bg-pink brround avatar-md">MS</span>
											</div>
											<div class="wrapper w-100 ml-3">
												<p class="mb-0 d-flex">
													<b>Prepare for Presentation</b>
												</p>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<i class="mdi mdi-clock text-muted mr-1"></i>
														<small class="text-muted ml-auto">1 days ago</small>
														<p class="mb-0"></p>
													</div>
												</div>
											</div>
										</div>
										<div class="list d-flex align-items-center border-bottom p-4">
											<div class="">
												<span class="avatar bg-purple brround avatar-md">L</span>
											</div>
											<div class="wrapper w-100 ml-3">
												<p class="mb-0 d-flex">
													<b>Prepare for Presentation</b>
												</p>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<i class="mdi mdi-clock text-muted mr-1"></i>
														<small class="text-muted ml-auto">45 mintues ago</small>
														<p class="mb-0"></p>
													</div>
												</div>
											</div>
										</div>
										<div class="list d-flex align-items-center p-4">
											<div class="">
												<span class="avatar bg-blue brround avatar-md">U</span>
											</div>
											<div class="wrapper w-100 ml-3">
												<p class="mb-0 d-flex">
													<b>Prepare for Presentation</b>
												</p>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<i class="mdi mdi-clock text-muted mr-1"></i>
														<small class="text-muted ml-auto">2 days ago</small>
														<p class="mb-0"></p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane  " id="side3">
										<div class="list-group list-group-flush ">
											<form class="form-inline p-4">
												<div class="search-element">
													<input class="form-control header-search" type="search" placeholder="Search..." aria-label="Search">
												</div>
											</form>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/2.jpg')); ?>"><span class="avatar-status bg-green"></span></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Mozelle Belt</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-light"><i class="fab fa-facebook-messenger"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/1.jpg')); ?>"></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Florinda Carasco</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-light"><i class="fab fa-facebook-messenger"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/9.jpg')); ?>><span class="avatar-status bg-green"></span></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Alina Bernier</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-light"><i class="fab fa-facebook-messenger"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/3.jpg')); ?>"><span class="avatar-status bg-green"></span></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Zula Mclaughin</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-light"><i class="fab fa-facebook-messenger"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/4.jpg')); ?>"></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Isidro Heide</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-light"><i class="fab fa-facebook-messenger"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/5.jpg')); ?>"><span class="avatar-status bg-green"></span></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Mozelle Belt</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-light"><i class="fab fa-facebook-messenger"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/6.jpg')); ?>"></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Florinda Carasco</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-light"><i class="fab fa-facebook-messenger"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/8.jpg')); ?>"></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Alina Bernier</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-light"><i class="fab fa-facebook-messenger"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo e(asset('external2/images/users/7.jpg')); ?>"></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Isidro Heide</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-light"><i class="fab fa-facebook-messenger"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/Sidebar-right-->

					<!--footer-->
					<footer class="footer">
						<div class="container">
							<div class="row align-items-center flex-row-reverse">
								<div class="col-md-12 col-sm-12 text-center">
									Copyright © 2019 <a href="#">Spaner</a>. Designed by <a href="https://spruko.com/">Spruko Technologies Pvt.Ltd</a> All rights reserved.
								</div>
							</div>
						</div>
					</footer>
					<!-- End Footer-->
				</div>
			</div>
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top"><i class="fas fa-angle-up "></i></a>

		<!--Jquery js -->
		<script src="<?php echo e(asset('external2/js/vendors/jquery-3.2.1.min.js')); ?>"></script>

		<!--Jquery.Sparkline js -->
		<script src="<?php echo e(asset('external2/js/vendors/jquery.sparkline.min.js')); ?>"></script>

		<!--Circle-Progress js -->
		<script src="<?php echo e(asset('external2/js/vendors/circle-progress.min.js')); ?>"></script>

		<!--Jquery.rating js -->
		<script src="<?php echo e(asset('external2/plugins/jquery.rating/jquery.rating-stars.js')); ?>"></script>

		<!--Bootstrap.min js-->
		<script src="<?php echo e(asset('external2/plugins/bootstrap/popper.min.js')); ?>"></script>
		<script src="<?php echo e(asset('external2/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>

		<!-- Custom scroll bar Js-->
		<script src="<?php echo e(asset('external2/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>

		<!-- Sidemenu-responsive-tabs js-->
		<script src="<?php echo e(asset('external2/plugins/sidemenu-responsive-tabs/js/sidemenu-responsive-tabs.js')); ?>"></script>
		<script src="<?php echo e(asset('external2/js/left-menu.js')); ?>"></script>

		<!-- Side menu js -->
		<script src="<?php echo e(asset('external2/plugins/sidemenu/js/sidemenu.js')); ?>"></script>

		<!-- Input Mask js -->
		<script src="<?php echo e(asset('external2/plugins/jquery.mask/jquery.mask.min.js')); ?>"></script>

		<!-- Progress js-->
        <script src="<?php echo e(asset('external2/js/vendors/circle-progress.min.js')); ?>"></script>

		<!-- Chart js -->
		<script src="<?php echo e(asset('external2/plugins/chart.js/chart.min.js')); ?>"></script>
		<script src="<?php echo e(asset('external2/plugins/chart.js/chart.extension.js')); ?>"></script>

		<!--Jquery.knob js-->
		<script src="<?php echo e(asset('external2/plugins/othercharts/jquery.knob.js')); ?>"></script>
		<script src="<?php echo e(asset('external2/plugins/othercharts/othercharts.js')); ?>"></script>

		<!--Echart Plugin -->
		<script src="<?php echo e(asset('external2/plugins/echart/echart.js')); ?>"></script>

		<!--Jquery.sparkline js-->
		<script src="<?php echo e(asset('external2/plugins/othercharts/jquery.sparkline.min.js')); ?>"></script>

		<!-- peitychart -->
		<script src="<?php echo e(asset('external2/plugins/peitychart/jquery.peity.min.js')); ?>"></script>

		<!--Counters -->
		<script src="<?php echo e(asset('external2/plugins/counters/counterup.min.js')); ?>"></script>
		<script src="<?php echo e(asset('external2/plugins/counters/waypoints.min.js')); ?>"></script>

		<!-- Sidebar js -->
		<script src="<?php echo e(asset('external2/plugins/sidebar/sidebar.js')); ?>"></script>

		<!--Index js -->
		<script src="<?php echo e(asset('external2/js/index.js')); ?>"></script>

		<!-- custom js -->
		<script src="<?php echo e(asset('external2/js/custom.js')); ?>"></script>

	</body>
</html><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/jobs/index.blade.php ENDPATH**/ ?>