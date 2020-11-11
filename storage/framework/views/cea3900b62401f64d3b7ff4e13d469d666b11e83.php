<?php $__env->startSection('content'); ?>

<div class="container">
    <?php if(Session::has('message')): ?>
        <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
    <?php endif; ?>
    <h1>Albums</h1>
    <!-- <?php if(Auth::check()&&Auth::user()->user_type=='admin'): ?>
        <a href="album/create">Create album</a> 
    <?php endif; ?> -->
    <a href="album/create">Create album</a>
	<div class="row">
		<?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-sm-4">
			<div class="item">
				<a href="albums/<?php echo e($album->id); ?>">
                    <?php if(empty($album->image)): ?>
					   <img src="img/logo.png" class="img-thumbnail" style="width:150px;height: 150px;">
                    <?php else: ?>
                        <img src="<?php echo e(asset('storage/'.$album->image)); ?>" class="img-thubnail" style="width:150px;height: 150px;">
                    <?php endif; ?>
					<a href="albums/<?php echo e($album->id); ?>" class="centered"><?php echo e($album->name); ?></a>
				</a>
			</div>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo e($album->id); ?>">
                Change Album Image
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal<?php echo e($album->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="<?php echo e(route('add.album.image')); ?>" method="POST" enctype="multipart/form-data"><?php echo csrf_field(); ?>
                  <div class="modal-body">
                    <input type="file" name="image" class="form-control">
                    <input type="hidden" name="id" value="<?php echo e($album->id); ?>">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save changes</button>
                  </div>
              </form>
                </div>
              </div>
            </div>
            <!-- Modal end-->


		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>	
</div>

<?php $__env->stopSection(); ?>

<style>
    .item{
        left: 0;
        top: 0;
        position: relative;
        overflow: hidden;
        margin-top: 50px;
    }
    .item img{
        -webkit-transition:0.6s ease;
        transition: 0.6s ease;
    }
    .item img:hover{
        -webkit-transform:scale(1.2);
        transform:scale(1.2);
    }
    .centered{
        position: absolute;
        top: 50%;
        left: 50%;
        transform:translate(-50%,-50%);
        color: #808080;
        font-size: 24px;
        font-weight: bold;

    }
    .img-thumbnail{
        border: 0px;
        border-radius: 0px;
    }

</style>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/test/welcomalbum.blade.php ENDPATH**/ ?>