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
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('external2/images/brand/favicon.ico')}}" />

		<!-- Title -->
		<title>Spaner - Simple light Bootstrap Nice Admin Panel Dashboard Design Responsive HTML5 Template</title>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="{{asset('external2/plugins/bootstrap/css/bootstrap.min.css')}}">
		

        <!--Font Awesome-->
		<link href="{{asset('external2/plugins/fontawesome-free/css/all.css')}}" rel="stylesheet">

		<!-- Dashboard Css -->
		<link href="{{asset('external2/css/style.css')}}" rel="stylesheet" />
		<link href="{{asset('external2/css/boxed.css')}}" rel="stylesheet" />
		<link href="{{asset('external2/css/color-styles.css')}}" rel="stylesheet" />
		<link href="{{asset('external2/css/skin-modes.css')}}" rel="stylesheet" />

		<!-- Vector-map -->
		<link href="{{asset('external2/plugins/jquery.vmap/jqvmap.min.css')}}" rel="stylesheet">

		<!-- Custom scroll bar css-->
		<link href="{{asset('external2/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />

		<!-- Sidemenu Css -->
		<link href="{{asset('external2/plugins/sidemenu/css/sidemenu.css')}}" rel="stylesheet">

		<!-- morris Charts Plugin -->
		<link href="{{asset('external2/plugins/morris/morris.css')}}" rel="stylesheet" />

		<!---Font icons-->
		<link href="{{asset('external2/plugins/iconfonts/plugin.css')}}" rel="stylesheet" />

		<!-- Sidebar css -->
		<link href="{{asset('external2/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

		<!--Font Awesome-->
		<link href="{{asset('external2/plugins/fontawesome-free/css/all.css')}}" rel="stylesheet">

		<!-- css for popup preview img -->
		<link rel="stylesheet" href="{{asset('external/css/magnific-popup.css')}}">

	
	</head>

	<body class="app sidebar-mini">

		<!-- Global Loader-->
		<div id="global-loader"><img src="{{asset('external2/images/svgs/loader.svg')}}" alt="loader"></div>

		<div class="page">
			<div class="page-main">

				<!-- Navbar-->
				<header class="app-header header">
					<!-- Navbar Right Menu-->
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand" href="index.html">
								<img alt="logo" class="header-brand-img main-logo" src="{{asset('external2/images/brand/logo1.png')}}">
								<img alt="logo" class="header-brand-img mobile-logo" src="{{asset('external2/images/brand/icon.png')}}">
							</a>
							<!-- Sidebar toggle button-->
							
							<a id="autoClickBtn" onclick="autoClick()" aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
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
								<!-- <a class="nav-link icon" data-toggle="dropdown">
									<i class="fe fe-grid mr-2"></i><span class="lay-outstyle">Menus styles</span>
									<span class="pulse2 bg-warning" aria-hidden="true"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
									<a class="dropdown-item d-flex pb-3" href="toggle.html">Toggle Menu</a>
									<a class="dropdown-item d-flex pb-3" href="sidemenu.html">Icon Closed Menu</a>
									<a class="dropdown-item d-flex pb-3" href="overlay2.html">Icon Overlay Menu</a>
									<a class="dropdown-item d-flex pb-3" href="overlay.html">Closed Overlay Menu</a>
									<a class="dropdown-item d-flex pb-3" href="horizontal.html">Horizontal Menu</a>

								</div> -->
							</div>
							<div class="d-flex order-lg-2 ml-auto">
								<div class="d-sm-flex d-none">
									<a href="#" class="nav-link icon full-screen-link">
										<i class="fe fe-minimize fullscreen-button"></i>
									</a>
								</div>
								<!-- <div class="dropdown d-none d-md-flex">
									<a href="#" class="d-flex nav-link pr-0 country-flag" data-toggle="dropdown">
										<span class="avatar country-Flag mr-3 align-self-center cover-image" data-image-src="{{asset('external2/images/svgs/flags/french_flag.jpg')}}"></span>
										<div>
											<span class="text-white mr-3 mt-0">English</span>
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a href="#" class="dropdown-item d-flex pb-3">
											<span class="avatar country-Flag mr-3 align-self-center cover-image" data-image-src="{{asset('external2/images/svgs/flags/french_flag.jpg')}}"></span>
											<div class="d-flex">
												<span class="">French</span>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<span class="avatar country-Flag mr-3 align-self-center cover-image" data-image-src="{{asset('external2/images/svgs/flags/germany_flag.jpg')}}"></span>
											<div class="d-flex">
												<span class="">Germany</span>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<span class="avatar country-Flag mr-3 align-self-center cover-image" data-image-src="{{asset('external2/images/svgs/flags/italy_flag.jpg')}}"></span>
											<div class="d-flex">
												<span class="">Italy</span>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<span class="avatar country-Flag  mr-3 align-self-center cover-image" data-image-src="{{asset('external2/images/svgs/flags/russia_flag.jpg')}}"></span>
											<div class="d-flex">
												<span class="">Russia</span>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<span class="avatar country-Flag mr-3 align-self-center cover-image" data-image-src="{{asset('external2/images/svgs/flags/spain_flag.jpg')}}"></span>
											<div class="d-flex">
												<span class="">spain</span>
											</div>
										</a>
									</div>
								</div>flag -->
								<!-- <div class="dropdown d-sm-flex d-none header-message">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-mail"></i>
										<span class=" nav-unread badge badge-danger badge-pill">4</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a class="dropdown-item text-center" href="#">2 New Messages</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item d-flex pb-3" href="#">
											<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{asset('external2/images/users/7.jpg')}}"></span>
											<div>
												<strong>Madeleine</strong> Hey! there I' am available....
												<div class="small text-muted">
													3 hours ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#"><span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{asset('external2/images/users/3.jpg')}}"></span>
											<div>
												<strong>Anthony</strong> New product Launching...
												<div class="small text-muted">
													5 hour ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#"><span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{asset('external2/images/users/8.jpg')}}"></span>
											<div>
												<strong>Olivia</strong> New Schedule Realease......
												<div class="small text-muted">
													45 mintues ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#"><span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{asset('external2/images/users/9.jpg')}}"></span>
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
								</div> -->
								<div class="dropdown d-none d-md-flex">
									<a href="#" class="d-flex nav-link pr-0 country-flag" data-toggle="dropdown">
										<!-- <span class="avatar country-Flag mr-3 align-self-center cover-image" data-image-src="{{asset('external2/images/svgs/flags/french_flag.jpg')}}"></span> -->
										<div>
											<span class="text-white mr-3 mt-0">Home</span>
										</div>
									</a>
								</div>
								<div class="dropdown d-none d-md-flex">
									<a href="#" class="d-flex nav-link pr-0 country-flag" data-toggle="dropdown">
										<!-- <span class="avatar country-Flag mr-3 align-self-center cover-image" data-image-src="{{asset('external2/images/svgs/flags/french_flag.jpg')}}"></span> -->
										<div>
											<span class="text-white mr-3 mt-0">Admin</span>
										</div>
									</a>
								</div>


								<button class="navbar-toggler navresponsive-toggler d-sm-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
									aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
								</button>
								
								<!--Navbar -->
								
								<div class="dropdown">
									<a class="nav-link pr-0 leading-none d-flex" data-toggle="dropdown" href="#">
										<span class="avatar avatar-md brround cover-image" data-image-src="{{asset(Auth::user()->avatar)}}"></span>
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
										<span class="avatar country-Flag mr-3 align-self-center cover-image" data-image-src="{{asset('external2/images/svgs/flags/french_flag.jpg')}}"></span>
										<div class="d-flex">
											<span class="">French</span>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex pb-3">
										<span class="avatar country-Flag mr-3 align-self-center cover-image" data-image-src="{{asset('external2/images/svgs/flags/germany_flag.jpg')}}"></span>
										<div class="d-flex">
											<span class="">Germany</span>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex pb-3">
										<span class="avatar country-Flag mr-3 align-self-center cover-image" data-image-src="{{asset('external2/images/svgs/flags/italy_flag.jpg')}}"></span>
										<div class="d-flex">
											<span class="">Italy</span>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex pb-3">
										<span class="avatar country-Flag  mr-3 align-self-center cover-image" data-image-src="{{asset('external2/images/svgs/flags/russia_flag.jpg')}}"></span>
										<div class="d-flex">
											<span class="">Russia</span>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex pb-3">
										<span class="avatar country-Flag mr-3 align-self-center cover-image" data-image-src="{{asset('external2/images/svgs/flags/spain_flag.jpg')}}"></span>
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
										<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{asset('external2/images/users/7.jpg')}}"></span>
										<div>
											<strong>Madeleine</strong> Hey! there I' am available....
											<div class="small text-muted">
												3 hours ago
											</div>
										</div>
									</a>
									<a class="dropdown-item d-flex pb-3" href="#"><span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{asset('external2/images/users/3.jpg')}}"></span>
										<div>
											<strong>Anthony</strong> New product Launching...
											<div class="small text-muted">
												5 hour ago
											</div>
										</div>
									</a>
									<a class="dropdown-item d-flex pb-3" href="#"><span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{asset('external2/images/users/8.jpg')}}"></span>
										<div>
											<strong>Olivia</strong> New Schedule Realease......
											<div class="small text-muted">
												45 mintues ago
											</div>
										</div>
									</a>
									<a class="dropdown-item d-flex pb-3" href="#"><span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{asset('external2/images/users/9.jpg')}}"></span>
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
							<span class="avatar avatar-lg brround text-center cover-image" data-image-src="{{asset(Auth::user()->avatar)}}"></span>
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
						
						
						
					</ul>
				</aside>
				<!--side-menu-->

				<div class=" app-content">
					<div class="side-app">

						<div class="row">
							<div class="col-xl-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">
											<div class="title" style="margin-top: 20px;">
												{{$job->jobcode}} 
											</div>
										</h3>
										<div class="card-options d-none d-sm-block">
											<div class="btn-group btn-sm">
												<!-- <button type="button" class="btn btn-light btn-sm">
													<span class="">Day</span>
												</button>
												<button type="button" class="btn btn-light btn-sm">
													<span class="">Month</span>
												</button>
												<button type="button" class="btn btn-light btn-sm">
													<span class="">Year</span>
												</button> -->
												<div class="title" style="margin-top: 20px;">
													{{$job->projectname}} 
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<!-- start topic -->
										
										
										<img src="{{asset('external/images/img_5.jpg')}}" style="width: 100%;">
										

										
										<!--แสดงเมนู ย่อย--->
										<div class=" col-lg-12 mt-4 mb-4">
											<div class="navbar">
											<a href="#home">รายละเอียด</a>
											<a href="#news">แปลนชั้น</a>
											<a href="#contact">แปลนห้อง</a>
											<a href="#home">ทำเลที่ตั้ง</a>
											<a href="#news">เปรียบเทียบ</a>
											<a href="#contact">โบรชัวร์</a>
											<a href="#contact">Price List</a>
											<a href="#home">อช. 10+13</a>
											<a href="#news">ประเมินราชการ</a>
											<a href="#contact">ทรัพย์สินที่ประเมิน</a>
											<a href="#contact">Data Analytic</a>
											</div>
										</div>
										
											
											
										<!-- Left Column -->
										<div class="col-lg-8">
											<div class="row">
											<div class="col-sm-4 mb-0 font-weight-bold">ชื่อโครงการ</div>
											<div class="col-sm-8 mb-2">{{$job->projectname}}</div>
											</div> 
											<div class="row">
												<div class="col-sm-4 mb-0 font-weight-bold">ที่ตั้ง</div>
												<div class="col-sm-8 mb-2">{{$job->proplocation}}x</div>
											</div> 
											<div class="row">
												<div class="col-sm-4 mb-0 font-weight-bold"></div>
												<div class="col-sm-8 mb-2">
												ห่างจากถนนสุขุมวิท ประมาณ 1.30 กิโลเมตรx <br>
												ห่างจากรถไฟฟ้าสถานีพร้อมพงษ์ ประมาณ 1.75 กิโลเมตรx <br>
												</div>
											</div><div class="row">
												<div class="col-sm-4 mb-0 font-weight-bold">ค่าพิกัด GPS</div>
												<div class="col-sm-8 mb-2"><a class="popup-gmaps" href="https://maps.google.com/maps?q=loc:{{$job->lat}},{{$job->lng}}&z=18">{{$job->lat}}, {{$job->lng}}x</a></div>
											</div> 
											<div class="row">
												<div class="col-sm-4 mb-0 font-weight-bold">รูปแบบโครงการ</div>
												<div class="col-sm-8 mb-2">{{$job->project_layout}}คอนโดมิเนียม สูง 7 ชั้น 1 อาคารx</div>
											</div>
											<div class="row">
												<div class="col-sm-4 mb-0 font-weight-bold">เนื้อที่โครงการ</div>
												<div class="col-sm-8 mb-2">{{$job->project_layout}}ประมาณ 1-0-18.0 ไร่x</div>
											</div>
											<div class="row">
												<div class="col-sm-4 mb-0 font-weight-bold">จำนวนห้องชุดที่ขาย</div>
												<div class="col-sm-8 mb-2">{{$job->project_layout}}76 ยูนิตx</div>
											</div>
											<div class="row">
												<div class="col-sm-4 mb-0 font-weight-bold">ยอดขายปัจจุบัน</div>
												<div class="col-sm-8 mb-2">{{$job->project_layout}}ประมาณ 70%x</div>
											</div>
											<div class="row">
												<div class="col-sm-4 mb-0 font-weight-bold">ราคาเริ่มต้น (On Web)</div>
												<div class="col-sm-8 mb-2">{{$job->project_layout}}6,000,000 ขึ้นไปx</div>
											</div>
											<div class="row">
												<div class="col-sm-4 mb-0 font-weight-bold">พื้นที่ใข้สอย</div>
												<div class="col-sm-8 mb-2">
												1 นอน 1 น้ำ | พื้นที่ห้องชุด (ตรม.) : 38.00 | ราคาขายโครงการ  : 163,158 บาท/ตรม. |  ราคาขายโครงการ  : 6,200,000 บาท/ยูนิตx<br><br>
												2 นอน 2 น้ำ | พื้นที่ห้องชุด (ตรม.) : 60.00 | ราคาขายโครงการ  : 166,667 บาท/ตรม. |  ราคาขายโครงการ  : 10,000,000 บาท/ยูนิตx
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4 mb-0 font-weight-bold">สิ่งอำนวยความสะดวกภายในโครงการ</div>
												<div class="col-sm-8 mb-2">สระว่ายน้ำ ฟิตเนส สวนหย่อม ลิฟท์ ที่จอดรถ และระบบรักษาความปลอดภัยx</div>
											</div>
											<div class="row">
												<div class="col-sm-4 mb-0 font-weight-bold">ผู้พัฒนาโครงการ</div>
												<div class="col-sm-8 mb-2">บริษัท อนันดา ดีเวลลอปเม้นท์ จำกัด (มหาชน)x</div>
											</div>
											<div class="row">
												<div class="col-sm-4 mb-0 font-weight-bold">เริ่มเปิดโครงการ</div>
												<div class="col-sm-8 mb-2">ธันวาคม 2560x</div>
											</div>
											<div class="row">
												<div class="col-sm-4 mb-0 font-weight-bold">ความคืบหน้าโครงการ</div>
												<div class="col-sm-8 mb-2">ก่อสร้างแล้วเสร็จ 100%x</div>
											</div>              
											<div class="row">
												<div class="col-sm-4 mb-0 font-weight-bold">วันที่ (Modified Date)</div>
												<div class="col-sm-8 mb-2">ธันวาคม 2562x</div>
											</div>
											<div class="row">
												<div class="col-sm-4 mb-0 font-weight-bold">แหล่งช้อมูล</div>
												<div class="col-sm-8 mb-2">ผู้ติดต่อ คุณเพชร (สำนักงานขายโครงการ) โทรศัพท์ 095-371-6873, 02-316-2222x</div>
											</div>
										</div>

										<!-- Right Column -->
										<div class="col-md-12 p-4 site-section bg-light">
											        
												<div class="company-logo blank-logo text-center text-md-left pl-3 popup-gallery">
													<a href="{{asset('external/images/gal_1.jpg')}}" title="The Cleaner"><img src="{{asset('external/images/gal_1.jpg')}}" width="150" height="80" class="rounded"></a>
													<a href="{{asset('external/images/gal_2.jpg')}}" title="The Cleaner"><img src="{{asset('external/images/gal_2.jpg')}}" width="150" height="80" class="rounded"></a>
													<a href="{{asset('external/images/gal_3.jpg')}}" title="The Cleaner"><img src="{{asset('external/images/gal_3.jpg')}}" width="150" height="80" class="rounded"></a>
													<a href="{{asset('external/images/gal_4.jpg')}}" title="The Cleaner"><img src="{{asset('external/images/gal_4.jpg')}}" width="150" height="80" class="rounded"></a>
													<a href="{{asset('external/images/gal_6.jpg')}}" title="The Cleaner"><img src="{{asset('external/images/gal_6.jpg')}}" width="150" height="80" class="rounded"></a>
													<a href="{{asset('external/images/gal_7.jpg')}}" title="The Cleaner"><img src="{{asset('external/images/gal_7.jpg')}}" width="150" height="80" class="rounded"></a>
												</div>
												
											<p></p>
											
														
											<p><a href="#" class="btn btn-warning" style="width: 100%;">Visit Official Page</a></p>
											<p>
												@if(Auth::check()&&Auth::user()->user_type=='employee')                 
													<!--     
													employee login                
													<apply-component :jobid={{$job->id}}></apply-component>
													<center><span style="color: #000;">You applied this job</span></center>
													-->               
												@else                  
												<!--Please login to apply this job-->
												@endif
											</p>  
										</div>


										<!-- end topic -->
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
													<span class="avatar avatar-lg brround cover-image" data-image-src="{{asset('external2/images/users/5.jpg')}}"><span class="avatar-status bg-green"></span></span>
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
													<span class="avatar avatar-lg brround cover-image" data-image-src="{{asset('external2/images/users/4.jpg')}}"></span>
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
													<span class="avatar avatar-lg brround cover-image" data-image-src="{{asset('external2/images/users/3.jpg')}}"><span class="avatar-status bg-green"></span></span>
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
													<span class="avatar avatar-lg brround cover-image" data-image-src="{{asset('external2/images/users/2.jpg')}}"><span class="avatar-status bg-green"></span></span>
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
													<span class="avatar avatar-lg brround cover-image" data-image-src="{{asset('external2/images/users/1.jpg')}}"></span>
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
													<span class="avatar avatar-lg brround cover-image" data-image-src="{{asset('external2/images/users/9.jpg')}}"><span class="avatar-status bg-green"></span></span>
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
													<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('external2/images/users/2.jpg')}}"><span class="avatar-status bg-green"></span></span>
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
													<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('external2/images/users/1.jpg')}}"></span>
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
													<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('external2/images/users/9.jpg')}}><span class="avatar-status bg-green"></span></span>
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
													<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('external2/images/users/3.jpg')}}"><span class="avatar-status bg-green"></span></span>
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
													<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('external2/images/users/4.jpg')}}"></span>
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
													<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('external2/images/users/5.jpg')}}"><span class="avatar-status bg-green"></span></span>
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
													<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('external2/images/users/6.jpg')}}"></span>
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
													<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('external2/images/users/8.jpg')}}"></span>
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
													<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('external2/images/users/7.jpg')}}"></span>
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
		<script src="{{asset('external2/js/vendors/jquery-3.2.1.min.js')}}"></script>

		<!--Jquery.Sparkline js -->
		<script src="{{asset('external2/js/vendors/jquery.sparkline.min.js')}}"></script>

		<!--Circle-Progress js -->
		<script src="{{asset('external2/js/vendors/circle-progress.min.js')}}"></script>

		<!--Jquery.rating js -->
		<script src="{{asset('external2/plugins/jquery.rating/jquery.rating-stars.js')}}"></script>

		<!--Bootstrap.min js-->
		<script src="{{asset('external2/plugins/bootstrap/popper.min.js')}}"></script>
		<script src="{{asset('external2/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

		<!-- Custom scroll bar Js-->
		<script src="{{asset('external2/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

		<!-- Sidemenu-responsive-tabs js-->
		<script src="{{asset('external2/plugins/sidemenu-responsive-tabs/js/sidemenu-responsive-tabs.js')}}"></script>
		<script src="{{asset('external2/js/left-menu.js')}}"></script>

		<!-- Side menu js -->
		<script src="{{asset('external2/plugins/sidemenu/js/sidemenu.js')}}"></script>

		<!-- Input Mask js -->
		<script src="{{asset('external2/plugins/jquery.mask/jquery.mask.min.js')}}"></script>

		<!-- Progress js-->
        <script src="{{asset('external2/js/vendors/circle-progress.min.js')}}"></script>

		<!-- Chart js -->
		<script src="{{asset('external2/plugins/chart.js/chart.min.js')}}"></script>
		<script src="{{asset('external2/plugins/chart.js/chart.extension.js')}}"></script>

		<!--Jquery.knob js-->
		<script src="{{asset('external2/plugins/othercharts/jquery.knob.js')}}"></script>
		<script src="{{asset('external2/plugins/othercharts/othercharts.js')}}"></script>

		<!--Echart Plugin -->
		<script src="{{asset('external2/plugins/echart/echart.js')}}"></script>

		<!--Jquery.sparkline js-->
		<script src="{{asset('external2/plugins/othercharts/jquery.sparkline.min.js')}}"></script>

		<!-- peitychart -->
		<script src="{{asset('external2/plugins/peitychart/jquery.peity.min.js')}}"></script>

		<!--Counters -->
		<script src="{{asset('external2/plugins/counters/counterup.min.js')}}"></script>
		<script src="{{asset('external2/plugins/counters/waypoints.min.js')}}"></script>

		<!-- Sidebar js -->
		<script src="{{asset('external2/plugins/sidebar/sidebar.js')}}"></script>

		<!--Index js -->
		<script src="{{asset('external2/js/index.js')}}"></script>

		<!-- custom js -->
		<script src="{{asset('external2/js/custom.js')}}"></script>

		
		<!-- popup preview img -->
  		<script src="{{asset('external/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('external/js/bootstrap-datepicker.min.js')}}"></script>
  		<script src="{{asset('external/js/aos.js')}}"></script>
  		<script src="{{asset('external/js/mediaelement-and-player.min.js')}}"></script>
  		<script src="{{asset('external/js/main.js')}}"></script>
 
		<script>
		function autoClick(){
				// alert("I am loaded and automatically clicked");
			}
				window.onload = function(){
				document.getElementById('autoClickBtn').click();
			}
		</script>

	</body>
</html>