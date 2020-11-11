<?php $__env->startSection('content'); ?>

<div class="container">
 <?php if(Session::has('message')): ?>
    <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
  <?php endif; ?>
  <div class="row">
      <div class="col-md-3">                
          <?php echo $__env->make('admin.left-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>      
      </div>
      <div class="col-md-9">
          <div class="card">Job Order
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">เลขที่รายงาน</th>
                    <th scope="col">id</th>
                    <th scope="col">วันที่</th>                    
                    <th scope="col">ทำเลที่ตั้ง</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody> 
                  <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>         
                    <tr>
                      <td><?php echo e($job->jobcode); ?></td>
                      <td><?php echo e($job->reportcode); ?></td>
                      <td><?php echo e($job->startdate); ?></td>                      
                      <td><?php echo e($job->proplocation); ?></td>                     
                      <td>
                        <a href="<?php echo e(route('admininputjob.edit',[$job->id])); ?>"><button style="width:70px" class="btn btn-primary">Edit</button></a>
                        <!-- Delete Button trigger modal -->
                        <button style="width:70px" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo e($job->id); ?>">Delete</button>
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
                      </td>              
                    </tr> 
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
             </table>
             <?php echo e($jobs->links()); ?>

            </div>
          </div>
      </div>
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/admin/index.blade.php ENDPATH**/ ?>