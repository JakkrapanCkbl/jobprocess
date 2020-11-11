<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e($job->jobcode); ?></div>

                <div class="card-body">                    
                    <p>Client : <?php echo e($job->client); ?></p>
                    <p>ลูกค้าราย : <?php echo e($job->customer); ?></p>
                    <p>ประเภททรัพย์สิน : <?php echo e($job->prop_type); ?></p>                  
                    <p>ที่อยู่ : <?php echo e($job->proplocation); ?></p>
                    <p>เนื้อที่ : <?php echo e($job->prop_size); ?></p>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
             <div class="card">
                <div class="card-header">Progress : <?php echo e($job->percentfinish); ?> %</div>

                <div class="card-body">
                    <p>Head : <?php echo e($job->headvaluer); ?> / Valuer : <?php echo e($job->valuer); ?> </p>
                    
                    <p>Start Date : <?php echo e($job->startdate); ?></p>
                    <p>Inspection Date : <?php echo e($job->inspectiondate); ?></p>
                    <p>LC DueDate : <?php echo e($job->lcduedate); ?></p>
                    <p>Client DueDate : <?php echo e($job->clientduedate); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/landmar2/jobprocess.landmarkcon.net/jobprocess/resources/views/jobs/show.blade.php ENDPATH**/ ?>