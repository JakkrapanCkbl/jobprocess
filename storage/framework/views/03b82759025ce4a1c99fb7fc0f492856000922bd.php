<?php $__env->startSection('content'); ?>
         
   <div class="container">
    <div class="row">
        <div class="col-md-12">
        <h3>Work in progress</h3>
        <div align="right"><a href="<?php echo e(route('jobproject.create')); ?>"><button class="btn btn-primary btn-sm">เพิ่มข้อมูล</button></a></div>
        <table class="table">
            <thead>
                <th>no</th>
                <th>code</th>
                <th>projectname</th>                 
                <th>client</th>
                <th>customer</th>
                <th>prop type</th>
                <th>Prop size</th>
                <th>prop location</th>
                <th>LC duedate</th>
                <th>Action</th>
                
            </thead>
            <tbody>
                <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>                    
                    <td><?php echo e(++$i); ?></td>
                    <td><?php echo e($job->jobcode); ?></td> 
                    <td><?php echo e($job->projectname); ?></td>                   
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
                    <td><a href="<?php echo e(action('JobProject_Controller@edit',$job['id'])); ?>" class="btn btn-primary btn-sm">&nbsp&nbspEdit&nbsp&nbsp</a></td>
                    <td>
                        <form method="post" class="delete_form" action="<?php echo e(action('JobProject_Controller@destroy', $job['id'])); ?>">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($jobs->links()); ?>

      </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){ 
    $('.delete_form').on('submit',function(){
    if(confirm("Do you want delete ?")) {
        return true;
    }
    else {
        return false;
            }
        });
});
</script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.usermenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/jobproject/index.blade.php ENDPATH**/ ?>