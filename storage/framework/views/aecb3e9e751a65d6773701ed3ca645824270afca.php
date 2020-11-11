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
													<img class="avatar avatar-xl brround" src="<?php echo e(asset(Auth::user()->avatar)); ?>" alt="media1">
												</a>
											</div>
											<div class="my-4 my-sm-0">
												<div>
													<h4 class="media-heading font-weight-bold">Hi, Welcome !   <span><?php echo e(Auth::user()->name); ?></span> <span class="text-muted fs-12">( Web Developer )</span> </h4>
													<p class="text-muted">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt. Please Upgrade your Profile.......</p>
												</div>
												<div class="progress progress-sm">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary w-60"></div>
												</div>
											</div>
											<div class="ml-auto mb-0">
												<a href="<?php echo e(route('user.edit',Auth::user()->id)); ?>" class="btn btn-sm btn-danger" data-toggle="tooltip" title="" data-original-title="Edit Profile"><i class="fe fe-edit"></i> Edit Profile</a>
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
												<small class="fs-14 text-muted"><span class="dot-label bg-primary"></span>Job List</small>
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
											<div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo e(asset('external2/images/users/3.jpg')); ?>"></div>
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
										<h3 class="card-title">Job List </h3>
										
										<div class="card-options d-none d-sm-block">
											<div class="btn-group btn-sm">
												<form action="/dashboardsearch" method="get">	
													<div class="input-group w-100 p-2">
														<input type="search" name="search" class="form-control " placeholder="Search....">
														<div class="input-group-append ">
															<button type="submit" class="btn btn-primary ">
																<i class="fas fa-search" aria-hidden="true"></i>
															</button>
														</div>
													</div>
												</form>

												 
												
												
												<!--
												<button type="button" class="btn btn-light btn-sm">
													<span class="">Add</span>
												</button>												
												<button type="button" class="btn btn-light btn-sm">
													<span class="">Month</span>
												</button>
												<button type="button" class="btn btn-light btn-sm">
													<span class="">Year</span>
												</button>
												-->
											</div>

										</div>
									</div>
									<div class="card-body">
										<?php if(Session::has('message')): ?>
										    <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
										 <?php endif; ?>
										<div class="table-responsive">
											<table class="table card-table table-vcenter  border text-nowrap">
												<thead>
													<tr>
														<th class="w-1">Client</th>
														<th>Code</th>
														<th>Project</th>
														<th>Progress</th>
														<th>Size</th>
														<th>Start Date</th>
														<th><a href="/admininput/create" class="btn btn-secondary btn-sm"><i class="fe fe-folder-plus "></i> Add</a></th>
													</tr>
												</thead>
												<tbody>
													<?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<tr>
														<td><span class="text-muted num-font"><?php echo e($job->client); ?></span></td>
														<td><?php echo e($job->jobcode); ?></td>
														<td><?php echo e($job->projectname); ?></td>
														<td>
															<?php if($job->percentfinish ==100): ?>
																<img src="<?php echo e(url('storage/images/users/pks.jpg')); ?>" alt="valuer" class="brround  avatar-sm w-32">
																<img src="<?php echo e(url('storage/images/users/mkc.jpg')); ?>" alt="headvaluer" class="brround  avatar-sm w-32">        
      															<span class="badge badge-pill badge-primary">  
      																<?php echo e($job->percentfinish); ?>&nbsp;%&nbsp;<a href="javascript:void(0)" class="mr-3" title="" data-original-title="Normal" data-toggle="modal" data-target="#progressModal<?php echo e($job->id); ?>"><i class="fe fe-edit-2 text-dark fs-16"></i></a>
																</span>      
															<?php elseif($job->percentfinish > 50 and $job->percentfinish < 100): ?>
																<img src="<?php echo e(url('storage/images/users/mcm.jpg')); ?>" alt="valuer" class="brround  avatar-sm w-32">
																<img src="<?php echo e(url('storage/images/users/srp.jpg')); ?>" alt="headvaluer" class="brround  avatar-sm w-32"> 
																<span class="badge badge-pill badge-warning">  
      																<?php echo e($job->percentfinish); ?>&nbsp;%&nbsp;<a href="javascript:void(0)" class="mr-3" title="" data-original-title="Normal" data-toggle="modal" data-target="#progressModal<?php echo e($job->id); ?>"><i class="fe fe-edit-2 text-dark fs-16"></i></a>
																</span>   
															<?php else: ?>
															    <img src="<?php echo e(url('storage/images/users/avatar.jpg')); ?>" alt="valuer" class="brround  avatar-sm w-32">
																<img src="<?php echo e(url('storage/images/users/nda.jpg')); ?>" alt="headvaluer" class="brround  avatar-sm w-32">
															    <span class="badge badge-pill badge-danger">  
      																<?php echo e($job->percentfinish); ?>&nbsp;%&nbsp;<a href="javascript:void(0)" class="mr-3" title="" data-original-title="Normal" data-toggle="modal" data-target="#progressModal<?php echo e($job->id); ?>"><i class="fe fe-edit-2 text-dark fs-16"></i></a>
																</span>        
															<?php endif; ?>
															

															
														
														</td>
														<td class="num-font"><?php echo e($job->prop_size); ?></td>
														<td><i class="mdi mdi-av-timer text-muted mr-1 num-font"></i><?php echo e(date('d-m-Y', strtotime($job->startdate))); ?></td>
														<td<img src="<?php echo e(asset(Auth::user()->avatar)); ?>" style="height:65px;width:65px; border-radius:50%; margin-right:15px;" alt=""></td>
														<td>
																														
															<a href="<?php echo e(route('admininputjob.edit',[$job->id])); ?>" class="mr-3" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fe fe-edit-2 text-dark fs-16"></i></a>
															<a href="<?php echo e(route('print-order.show',[$job->id])); ?>" class="mr-3" data-toggle="tooltip" title="" data-original-title="Check"><i class="fe fe-file text-dark fs-16"></i></a>
															
															<a href="/admininput/create" class="mr-3" data-toggle="tooltip" title="" data-original-title="Folder"><i class="fe fe-folder-plus text-dark fs-16"></i></a>
															
															<a href="javascript:void(0)" class="mr-3" title="" data-original-title="Delete" data-toggle="modal" data-target="#exampleModal<?php echo e($job->id); ?>"><i class="fe fe-trash-2 text-dark fs-16"></i></a>															


															 <!-- Modal -->
									                        <div class="modal fade" id="exampleModal<?php echo e($job->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									                          <div class="modal-dialog" role="document">
									                            <div class="modal-content">
									                              <div class="modal-header">
									                                  <h5 class="modal-title" id="exampleModalLabel">Delete Post</h5>
									                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									                                    <span aria-hidden="true">&times;</span>
									                                  </button>
									                              </div>
									                              <div class="modal-body">Do you want to delete?</div>                             
									                              <form action="<?php echo e(route('admininputjob.delete')); ?>" method="POST"><?php echo csrf_field(); ?>
									                                  <div class="modal-footer">
									                                      <input type="hidden" name="id" value="<?php echo e($job->id); ?>">
									                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									                                      <button type="submit" class="btn btn-danger">delete</button>
									                                  </div>
									                              </form>
									                            </div>
									                          </div>
									                        </div>
									                        <!-- End Button trigger modal -->  

									                         <!-- Modal -->
									                        <div class="modal fade" id="progressModal<?php echo e($job->id); ?>" tabindex="-1" role="dialog" aria-labelledby="progressModalLabel" aria-hidden="true">
									                          <div class="modal-dialog" role="document">
									                            <div class="modal-content">
									                              <div class="modal-header">
									                                  <h5 class="modal-title" id="progressModalLabel">Update % Completed</h5>
									                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									                                    <span aria-hidden="true">&times;</span>
									                                  </button>
									                              </div>
									                              <form action="<?php echo e(route('admininputjob.updateprogress')); ?>" method="POST"><?php echo csrf_field(); ?>
									                              	<div class="modal-body">									                              	
									                              		
										                                <div class="form-group">
										                                	<input type="hidden" name="id" value="<?php echo e($job->id); ?>">
																			<label for="mypercent" class="form-control-label">Input %:</label>
																			<select name="mypercent" class="form-control">
																				<option value="50">50</option>
																				<option value="60">60</option>
																				<option value="70">70</option>
																				<option value="80">80</option>
																				<option value="90">90</option>
																				<option value="100">100</option>								
																			</select>



																			<!--<input name="mypercent" type="text" class="form-control" id="mypercent" placeholder="0 to 100" value="<?php echo e($job->percentfinish); ?>">-->
																		</div>

									                              	</div>  

									                             
									                                  <div class="modal-footer">								
									                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									                                      <button type="submit" class="btn btn-primary">OK</button>
									                                  </div>
									                              </form>

									                            </div>
									                          </div>
									                        </div>
									                        <!-- End Button trigger modal -->  


														</td>
													</tr>
													 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/dashboard/content1.blade.php ENDPATH**/ ?>