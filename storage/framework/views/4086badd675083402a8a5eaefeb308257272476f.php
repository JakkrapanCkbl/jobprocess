<!-- Navbar-->

<header class="header top-header">

	<!-- Navbar Right Menu-->
	<div class="container">
		<div class="d-flex">
			<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
			<a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a>
			<a class="header-brand" href="index.html">
				<img alt="logo" class="header-brand-img main-logo" src="<?php echo e(asset('external2/images/brand/logo1.png')); ?>">
				<img alt="logo" class="header-brand-img mobile-logo" src="<?php echo e(asset('external2/images/brand/icon.png')); ?>">
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

			<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
			<div class="d-flex order-lg-2 ml-auto">
				<div class="d-sm-flex d-none">
					<a href="#" class="nav-link icon full-screen-link">
						<i class="fe fe-maximize-2 fullscreen-button"></i>
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
				<button class="navbar-toggler navresponsive-toggler d-sm-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
				</button>
				<!--Navbar -->
				<div class="dropdown">
					<a class="nav-link pr-0 leading-none d-flex" data-toggle="dropdown" href="#">
						<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo e(asset(Auth::user()->avatar)); ?>"></span>
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
						<!--<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-power"></i> Log Out</a>-->
						<a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
										                     document.getElementById('logout-form').submit();">
							<i class="dropdown-icon fe fe-power"></i> Log Out
						</a>

						<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
							<?php echo csrf_field(); ?>
						</form>








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
<!--/Navbar -->


<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
	<div class="app-sidebar__user">
		<div class="user-body">
			<span class="avatar avatar-lg brround text-center cover-image" data-image-src="../assets/images/users/5.jpg"></span>
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
	</ul>
</aside>
<!--side-menu--><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/valuer-page/nav.blade.php ENDPATH**/ ?>