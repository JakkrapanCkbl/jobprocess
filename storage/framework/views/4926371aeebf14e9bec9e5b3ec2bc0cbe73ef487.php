<?php $__env->startSection('content'); ?>
<div class="container">
  <?php if(Session::has('message')): ?>
  <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
  <?php endif; ?>
  <div class="row">
    <div class="col-md-3">
      <?php echo $__env->make('user.left-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Create New User
        </div>
        <div class="card-body">
          <form action="" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <label class="form-label">Name</label>
              <input type="text" name="name" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>">

              <?php if($errors->has('name')): ?>
              <span class="invalid-feedback" role="alert">
                <strong><?php echo e($errors->first('name')); ?></strong>
              </span>
              <?php endif; ?>
            </div>

            <div class="form-group">
              <label class="form-label">E-mail</label>
              <input type="text" name="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>">

              <?php if($errors->has('email')): ?>
              <span class="invalid-feedback" role="alert">
                <strong><?php echo e($errors->first('email')); ?></strong>
              </span>
              <?php endif; ?>
            </div>

            <div class="form-group">
              <label class="form-label">Password</label>
              <input type="text" name="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>">

              <?php if($errors->has('password')): ?>
              <span class="invalid-feedback" role="alert">
                <strong><?php echo e($errors->first('password')); ?></strong>
              </span>
              <?php endif; ?>
            </div>



            <div class="form-group">
              <label class="form-label">User Type</label>
              <select class="form-control select2 custom-select select2-hidden-accessible" name="user_type" data-placeholder="Choose one" tabindex="-1" aria-hidden="true">
                <option value="visitor">visitor</option>
                <option value="employee">employee</option>
                <option value="admin">admin</option>
              </select>
            </div>

            <div class=" mt-2 mb-0">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button class="btn btn-secondary"><a href="/docsearch">Cancel</a></button>
            </div>

          </form>
        </div>
      </div>
    </div>


  </div>
</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/user/create.blade.php ENDPATH**/ ?>