<!-- Horizontal-Menu -->
				<div class="sticky">
					<div class="horizontal-main hor-menu clearfix">
						<div class="horizontal-mainwrapper container clearfix">
							<nav class="horizontalMenu clearfix">
								<ul class="horizontalMenu-list">
									<li aria-haspopup="true"><a href="#" class="sub-icon active"><i class="fe fe-home"></i> Dashboard <i class="fa fa-angle-down horizontal-icon"></i></a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="<?php echo e(route('welcome')); ?>">Home</a></li>
											<li aria-haspopup="true"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
											
										</ul>
									</li>

									<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-pie-chart"></i> Jobs  <i class="fa fa-angle-down horizontal-icon"></i></a>
										<ul class="sub-menu">
											<li aria-haspopup="true">
												<?php if(Auth::user()->roles()->pluck('name')->contains('admin') ): ?>
											         
											    <?php else: ?>
											        
											        <a href="<?php echo e(route('dashboard')); ?>">Work in Progress</a>
											    <?php endif; ?>			
											</li>
											
										</ul>
									</li>
									<?php if(Auth::user()->roles()->pluck('name')->contains('admin') ): ?>
								         
									    <li aria-haspopup="true">
									    	<a href="#" class="sub-icon"><i class="fe fe-layers"></i>Admin<i class="fa fa-angle-down horizontal-icon"></i></a>
											<ul class="sub-menu">
												<li aria-haspopup="true">
													<?php if(Auth::user()->roles()->pluck('name')->contains('admin') ): ?>
												         
												         <a href="<?php echo e(route('admininputjob.create')); ?>">New Job</a>
												         <a href="<?php echo e(route('invoice')); ?>">Invoice / Receive</a>
												    <?php else: ?>
												        
												    <?php endif; ?>
												</li>
											</ul>
										</li>

								     <?php else: ?>
								        							        
								    <?php endif; ?>
									
									<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-package"></i> Support Docuents  <i class="fa fa-angle-down horizontal-icon"></i></a>
										<ul class="sub-menu">
											<li aria-haspopup="true">
												<a href="<?php echo e(route('docsearch')); ?>">ผังเมือง </a>
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
				<!-- Horizontal-Menu End --><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/dashboard/menubar.blade.php ENDPATH**/ ?>