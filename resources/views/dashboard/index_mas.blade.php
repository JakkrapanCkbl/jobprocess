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

		<!-- Horizontal css -->
		<link href="{{asset('external2/plugins/horizontal-menu/dropdown-effects/fade-down.css')}}" rel="stylesheet">
		<link href="{{asset('external2/plugins/horizontal-menu/horizontal-menu.css')}}" rel="stylesheet">

		<!-- morris Charts Plugin -->
		<link href="{{asset('external2/plugins/morris/morris.css')}}" rel="stylesheet" />

		<!---Font icons-->
		<link href="{{asset('external2/plugins/iconfonts/plugin.css')}}" rel="stylesheet" />

		<!-- Sidebar css -->
		<link href="{{asset('external2/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

	</head>

	<body class="app">

		<!-- Global Loader-->
		<div id="global-loader"><img src="{{asset('external2/images/svgs/loader.svg')}}" alt="loader"></div>

		<div class="page">
			<div class="page-main">

				<!-- Navbar-->
				<header class="header top-header">
					<!-- Navbar Right Menu-->
					<div class="container">
						<div class="d-flex">
							 <a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a>
							<a class="header-brand" href="index.html">
								<img alt="logo" class="header-brand-img main-logo" src="{{asset('external2/images/brand/logo1.png')}}">
								<img alt="logo" class="header-brand-img mobile-logo" src="{{asset('external2/images/brand/icon.png')}}">
							</a>
							<!-- Sidebar toggle button-->
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
							
							<div class="d-flex order-lg-2 ml-auto">
								<div class="d-sm-flex d-none">
									<a href="#" class="nav-link icon full-screen-link">
										<i class="fe fe-minimize fullscreen-button"></i>
									</a>
								</div>
								
								<div class="dropdown d-sm-flex d-none header-message">
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
									<a class="dropdown-item d-flex pb-3" href="left-menu.html">Icon Menu</a>
									<a class="dropdown-item d-flex pb-3" href="sidemenu.html">Icon Closed Menu</a>
									<a class="dropdown-item d-flex pb-3" href="overlay2.html">Icon Overlay Menu</a>
									<a class="dropdown-item d-flex pb-3" href="overlay.html">Closed Overlay Menu</a>
									<a class="dropdown-item d-flex pb-3" href="toggle.html">Toggle Menu</a>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/Navbar -->

				<!-- Horizontal-Menu -->
				<div class="sticky">
					<div class="horizontal-main hor-menu clearfix">
						<div class="horizontal-mainwrapper container clearfix">
							<nav class="horizontalMenu clearfix">
								<ul class="horizontalMenu-list">
									<li aria-haspopup="true"><a href="#" class="sub-icon active"><i class="fe fe-home"></i> Dashboard <i class="fa fa-angle-down horizontal-icon"></i></a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="index.html">Zone 1</a></li>
											<li aria-haspopup="true"><a href="index2.html">Zone 2</a></li>
											
										</ul>
									</li>
									
									<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-layers"></i>Admin <i class="fa fa-angle-down horizontal-icon"></i></a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="maps.html">Maps</a></li>
											<li aria-haspopup="true"><a href="crypto-currencies.html">Crypto-currencies</a></li>
											<li aria-haspopup="true"><a href="users-list.html">User List</a></li>
											<li aria-haspopup="true"><a href="time-line.html">Timeline</a></li>
											<li aria-haspopup="true"><a href="rating.html">Rating</a></li>
											<li aria-haspopup="true" class="sub-menu-sub"><span class="horizontalMenu-click02"></span><a href="#">Calendar</a>
												<ul class="sub-menu">
													<li aria-haspopup="true"><a href="calendar.html">Default calendar</a></li>
													<li aria-haspopup="true"><a href="calendar2.html">Full calendar</a></li>
												</ul>
											</li>
											<li aria-haspopup="true" class="sub-menu-sub"><a href="#">Mail</a>
												<ul class="sub-menu">
													<li aria-haspopup="true"><a href="email.html">Mail-Compose</a></li>
													<li aria-haspopup="true"><a href="emailservices.html">Mail-inbox</a></li>
												</ul>
											</li>
											<li aria-haspopup="true" class="sub-menu-sub"><span class="horizontalMenu-click02"></span><a href="#">Tables</a>
												<ul class="sub-menu">
													<li aria-haspopup="true"><a href="tables.html">Default table</a></li>
													<li aria-haspopup="true"><a href="datatable.html">Data Table</a></li>
												</ul>
											</li>
											<li aria-haspopup="true"><a href="search.html">Search page</a></li>
										</ul>
									</li>
									<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-pie-chart"></i> Jobs  <i class="fa fa-angle-down horizontal-icon"></i></a>
										<ul class="sub-menu">
											<li aria-haspopup="true">
												<a href="chart-morris.html">Morris Chart </a>
											</li>
											<li aria-haspopup="true">
												<a href="chart-echart.html">Echarts</a>
											</li>
											<li aria-haspopup="true">
												<a href="charts-peity.html">Peity Charts</a>
											</li>
											<li aria-haspopup="true">
												<a href="chart-chartist.html">Chartist Charts</a>
											</li>
											<li aria-haspopup="true">
												<a href="chartjs.html">Chart js</a>
											</li>
											<li aria-haspopup="true">
												<a href="chart-flot.html">Chart flot</a>
											</li>
										</ul>
									</li>
									<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-package"></i> Support Docuents  <i class="fa fa-angle-down horizontal-icon"></i></a>
										<ul class="sub-menu">
											<li aria-haspopup="true">
												<a href="chart-morris.html">ผังเมือง </a>
											</li>
											<li aria-haspopup="true">
												<a href="chart-echart.html">โบชัว</a>
											</li>
											
										</ul>
									</li>
								
									
									
								</ul>
							</nav>
							<!-- Nav End -->
						</div>
					</div>
				</div>
				<!-- Horizontal-Menu End -->

				<!-- Content Area -->
				<div class="container content-area">
					<div class="horizontal-content">

						<div class="page-header">
							<h3 class="page-title"><i class="fe fe-home mr-1"></i>Employee Dashboard</h3>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Employee Dashboard</li>
							</ol>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="d-sm-flex m-0">
											<div class="mr-4">
												<a href="#">
													<img class="avatar avatar-xl brround" src="{{asset(Auth::user()->avatar)}}" alt="media1">
												</a>
											</div>
											<div class="my-4 my-sm-0">
												<div>
													<h4 class="media-heading font-weight-bold">Hi, Welcome !   <span>{{ Auth::user()->name }}</span> <span class="text-muted fs-12">( Web Developer )</span> </h4>
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
											<span class="avatar brround cover-image" data-image-src="{{asset('external2/images/users/2.jpg')}}"></span>
											<span class="avatar brround cover-image" data-image-src="{{asset('external2/images/users/1.jpg')}}"></span>
											<span class="avatar brround cover-image" data-image-src="{{asset('external2/images/users/9.jpg')}}"></span>
											<span class="avatar brround cover-image" data-image-src="{{asset('external2/images/users/3.jpg')}}"></span>
											<span class="avatar brround cover-image" data-image-src="{{asset('external2/images/users/4.jpg')}}"></span>
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
												<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('external2/images/users/1.jpg')}}"></span>
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
												<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('external2/images/users/3.jpg')}}"></span>
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
												<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('external2/images/users/9.jpg')}}"></span>
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
												<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('external2/images/users/2.jpg')}}"></span>
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
												<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('external2/images/users/4.jpg')}}"></span>
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
									<div class="card-aside-column cover-image br-tl-7 br-bl-7" data-image-src="{{asset('external2/images/photos/9.jpg')}}" ></div>
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
											<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{asset('external2/images/users/9.jpg')}}"></div>
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
											<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{asset('external2/images/users/2.jpg')}}"></div>
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
											<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{asset('external2/images/users/3.jpg')}}"></div>
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
											<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{asset('external2/images/users/4.jpg')}}"></div>
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
											<img src="{{asset('external2/images/users/2.jpg')}}" alt="" class="img-activity">
											<div class="time-activity">
												<div class="item-activity">
													<p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
													<small class="text-primary">30 mins ago</small>
												</div>
											</div>
											<img src="{{asset('external2/images/users/1.jpg')}}" alt="" class="img-activity">
											<div class="time-activity">
												<div class="item-activity">
													<p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
													<small class="text-danger">1 days ago</small>
												</div>
											</div>
											<img src="{{asset('external2/images/users/4.jpg')}}" alt="" class="img-activity">
											<div class="time-activity">
												<div class="item-activity">
													<p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
													<small class="text-warning">3 days ago</small>
												</div>
											</div>
											<img src="{{asset('external2/images/users/3.jpg')}}" alt="" class="img-activity">
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
													<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('external2/images/users/9.jpg')}}"><span class="avatar-status bg-green"></span></span>
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
				<!-- Content Area End-->

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


		<!--Sticky JS -->
		<script src="{{asset('external2/js/sticky.js')}}"></script>


		<!--Sidemenu js-->
		<script src="{{asset('external2/plugins/side-menu/side-menu.js')}}"></script>

		<!-- Sidemenu-responsive-tabs js-->
		<script src="{{asset('external2/plugins/sidemenu-responsive-tabs/js/sidemenu-responsive-tabs.js')}}"></script>
		<script src="{{asset('external2/js/left-menu.js')}}"></script>

		<!--Horizontal js -->
		<script src="{{asset('external2/plugins/horizontal-menu/horizontal-menu.js')}}"></script>

		<!--Sticky JS -->
		<script src="{{asset('external2/js/sticky.js')}}"></script>

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

	</body>
</html>