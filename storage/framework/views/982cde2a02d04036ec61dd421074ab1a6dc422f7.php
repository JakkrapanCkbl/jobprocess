<?php $__env->startSection('content'); ?>



<div class="container">
    <div class="row">
    <form action="<?php echo e(route('alljobs')); ?>" method="GET">
    <!--    
    <div class="form-inline">
        <div class="form-group">
            <label>Position&nbsp;</label>
            <input type="text" name="position" class="form-control" placeholder="job position">&nbsp;&nbsp;&nbsp;
        </div>
        <div class="form-group">
            <label>Employment &nbsp;</label>
            <select class="form-control" name="type">
                    <option value="">-select-</option>
                    <option value="fulltime">fulltime</option>
                    <option value="parttime">parttime</option>
                    <option value="casual">casual</option>
                </select>
                &nbsp;&nbsp;
        </div>
        <div class="form-group">
            <label>category</label>
            <select name="category_id" class="form-control">
                <option value="">-select-</option>

                    
                        <option value="x1"></option>
                        <option value="x2"></option>
                   
                </select>
                &nbsp;&nbsp;
        </div>

        <div class="form-group">
            <label>address</label>
            <input type="text" name="address" class="form-control" placeholder="address">&nbsp;&nbsp;
        </div>
        
        <div class="form-group">
            <input type="submit" class="btn btn-search btn-primary btn-block" value="Search">

        </div>
    </div>    <br>
    -->
    
    </form>

    <div class="col-md-12">
        <div class="rounded border jobs-wrap">
            <?php if(count($jobs)>0): ?>
                <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  <a href="<?php echo e(route('jobs.show',[$job->id,$job->jobsize])); ?>" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime;">
                    <div class="company-logo blank-logo text-center text-md-left pl-3">
                      <img src="" alt="Image" class="img-fluid mx-auto">
                    </div>
                    <div class="job-details h-100">
                      <div class="p-3 align-self-center">
                        <h3><?php echo e($job->jobcode); ?> : <?php echo e($job->projectname); ?></h3>
                        <div class="d-block d-lg-flex">
                          <div class="mr-3"><span class="icon-suitcase mr-1"></span> <?php echo e($job->jobcode); ?></div>
                          <div class="mr-3"><span class="icon-room mr-1"></span> <?php echo e(str_limit($job->projectname,10)); ?></div>
                          <div><span class="icon-money mr-1"></span><?php echo e($job->jobcode); ?></div>
                          <div>&nbsp;<span class="fa fa-clock-o mr-1"></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="job-category align-self-center">
                      
                      <div class="p-3">
                        <span class="text-info p-2 rounded border border-info">Completed</span>
                      </div>
                      

                    </div>  
                  </a>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php else: ?>
                No jobs found
              <?php endif; ?>


            </div>
        </div>

        <?php echo e($jobs->appends(Illuminate\Support\Facades\Input::except('page'))->links()); ?>


    </div>

</div>




<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/jobs/alljobs.blade.php ENDPATH**/ ?>