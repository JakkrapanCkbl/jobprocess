<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Project Condos from web</div>
                <div class="card-body">
                    <!--<a href="<?php echo e(route('excel_condoexport')); ?>" class="btn btn-primary">Export to excel</a>-->
                    <br><br>
                    <hr />
                    <form action="<?php echo e(route('excel_condoimport')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="file" name="import_file" />
                        <br>
                        <input type="submit" value="Import" class="btn btn-info" />
                    </form>
                    <!--<?php echo e($tempdatas); ?>-->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>web_scraper_order</th>
                                <th>web_scraper_start_url</th>
                                <th>pagination</th>
                                <th>pagination_href</th>
                                <th>list_project_name</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php $__empty_1 = true; $__currentLoopData = $tempdatas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tempdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($tempdata->web_scraper_order); ?></td>
                                    <td><?php echo e($tempdata->web_scraper_start_url); ?></td>
                                    <td><?php echo e($tempdata->pagination); ?></td>
                                    <td><?php echo e($tempdata->pagination_href); ?></td>
                                    <td><?php echo e($tempdata->list_project_name); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="2" class="text-center">No temp data found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/importdata/import_web_condo_temp.blade.php ENDPATH**/ ?>