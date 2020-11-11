		<!--Page Header-->
		<div class="page-header">

			<h4 class="page-title"><i class="fe fe-life-buoy mr-1"></i> Gallery</h4>

			<ol class="breadcrumb">				
				<button type="button" class="btn btn-info btn-sm mb-1" data-toggle="modal" data-target="#exampleModal3">Add</button>			
			</ol>
		</div>
		<!--page header-->
		
		<div class="demo-gallery">
			<ul id="lightgallery"  class="list-unstyled row">
				<?php $__currentLoopData = $listthree; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mygallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					
					<li class="col-xs-6 col-sm-4 col-md-3" 
					data-responsive="<?php echo e(asset('storage/uploads/' . request()->route('id') . '/' . $mygallery->img_path)); ?>" 
					data-src="<?php echo e(asset('storage/uploads/' . request()->route('id') . '/' . $mygallery->img_path)); ?>" 
					data-sub-html="<h4>Gallery Image 1</h4>" >
						<a href="">
							<img class="img-responsive" src="<?php echo e(asset('storage/uploads/' . request()->route('id') . '/' . $mygallery->img_path)); ?>" alt="Thumb-1">
						</a>
						<strong><?php echo e($mygallery->img_path); ?></strong>
						<button type="button" class="btn btn-icon  btn-danger"><i class="fe fe-trash text-white"></i></button>
					</li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				


			</ul>
		</div>


		<!-- Message Modal -->
			<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog"  aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="example-Modal3">Upload Images</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">														
							<label>id = <?php echo e(request()->route('id')); ?></label>
							<?php echo $__env->make('test.upload', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						</div>
						<div class="modal-footer">
							<button type="button" onClick="window.location.reload()" class="btn btn-secondary" data-dismiss="modal">Close</button>
							
						</div>
					</div>
				</div>
			</div>
<?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/admin/gallerylevelplan.blade.php ENDPATH**/ ?>