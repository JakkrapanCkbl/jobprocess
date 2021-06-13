<?php $__env->startSection('content'); ?> 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?> 
                   <img src="<?php echo e(asset(Auth::user()->avatar)); ?>" style="height:60px;width:60px; border-radius:50%; margin-right:15px;" alt="">You are logged in!
                    <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
                    <input type="button" value="Add" onclick="msg()">
                    <?php else: ?>
                    <input type="button" value="Add" onclick="msg()">
                    <?php endif; ?>
                   
                </div>
                
            </div>
           
           
        </div>
        
    </div>
    <!-- <div class="form-row justify-content-center">
        <div class="form-group col-md-8">
            <label for="image_label">Image</label>
            <div class="input-group">
                <input type="text" id="image_label" class="form-control" name="image"
                    aria-label="Image" aria-describedby="button-image">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
                </div>
            </div>
        </div>
    </div> -->
</div>

<div class="container">
    
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('button-image').addEventListener('click', (event) => {
      event.preventDefault();
      window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
    });
  });
  // set file link
  function fmSetLink($url) {
    document.getElementById('image_label').value = $url;
  }
</script>

<script>
    function msg() {
    alert("My role is ");
    }
</script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/home.blade.php ENDPATH**/ ?>