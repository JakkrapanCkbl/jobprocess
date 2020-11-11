<?php $__env->startSection('content'); ?>
<div class="container">
  <?php if(Session::has('message')): ?>
  <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
  <?php endif; ?>
  <div class="row">
    <div class="col-md-3">
      <?php echo $__env->make('docsearch.left-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Document Form
        </div>
        <div class="card-body">
          <form action="" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="form-group">
              <label>ไฟล์แนบ</label>
              <input type="file" name="docfile[]" multiple="multiple" class="form-control">
            </div>

            <div class="form-group">
              <label class="form-label">จังหวัด</label>
              <select class="form-control select2 custom-select select2-hidden-accessible" name="province" data-placeholder="Choose one" tabindex="-1" aria-hidden="true">

                <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($province->code); ?>" 
                  <?php echo e($province->name_th); ?>

                </option>
                <td><?php echo e($province->name_th); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </select>
            </div>

            <div class="form-group">
              <label class="form-label">ประเภท</label>
              <select class="form-control select2 custom-select select2-hidden-accessible" name="doc_category_id"data-placeholder="Choose one" tabindex="-1" aria-hidden="true">
                <option value="1">ผังเมือง</option>
              </select>
            </div>

            <div class=" mt-2 mb-0">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button  class="btn btn-secondary"><a href="/docsearch">Cancel</a></button>
            </div>

          </form>
        </div>
      </div>
    </div>


  </div>
</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/docsearch/create.blade.php ENDPATH**/ ?>