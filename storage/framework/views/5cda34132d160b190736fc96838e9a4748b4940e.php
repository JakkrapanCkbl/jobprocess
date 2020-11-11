<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <h1>Work in progress</h1>
        <table class="table">
            <thead>
                <th>id</th>
                <th>code</th>                
                <th>client</th>
                <th>customer</th>
                <th>prop type</th>
                <th>Prop size</th>
                <th>prop location</th>
                <th>LC duedate</th>
                <th></th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($job->id); ?></td>
                    <td><?php echo e($job->jobcode); ?></td>                    
                    <td><?php echo e($job->client); ?></td>
                    <td><?php echo e($job->customer); ?></td>
                    <td><?php echo e($job->prop_type); ?></td>
                    <td><?php echo e($job->prop_size); ?></td>
                    <td><?php echo e($job->proplocation); ?></td>
                    <td><?php echo e($job->lcduedate); ?></td>  
                    <td><a href="<?php echo e(route('jobs.show',[$job->id,$job->jobsize])); ?>">
                            <button class="btn btn-success btn-sm">View</button>
                        </a>
                    </td>
                    
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/landmar2/jobprocess.landmarkcon.net/jobprocess/resources/views/welcome.blade.php ENDPATH**/ ?>