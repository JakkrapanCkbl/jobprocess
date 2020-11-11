<?php $__env->startSection('content'); ?>




<?php echo $__env->make('test/fraction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div class="container">

    <?php if(Session::has('message')): ?>
        <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
    <?php endif; ?>
    <a class="navbar-brand" href="https://www.jobprocess.landmarkcon.net/welcomalbum">back</a>
    <h1><?php echo e($albums->name); ?>(<?php echo e($albums->images->count()); ?>)</h1>
	<div class="row">
		<?php $__currentLoopData = $albums->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-sm-4">           
			<div class="item">
				<img src="<?php echo e(asset('storage/'.$album->name)); ?>" class="img-thubnail" style="width:300px;height:300px;border:2px solid red;">
			</div>
          

           <!-- Button delete modal -->
             <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo e($album->id); ?>">Delete</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal<?php echo e($album->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Do you want to delete?
                  </div>
                  <div class="modal-footer">
                        <form action="<?php echo e(route('image.delete')); ?>" method="POST"><?php echo csrf_field(); ?>
                            <input type="hidden" name="id" value="<?php echo e($album->id); ?>">
                             <button class="btn btn-danger" type="submit">Delete</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- end model -->



		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>	
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/test/gallery.blade.php ENDPATH**/ ?>