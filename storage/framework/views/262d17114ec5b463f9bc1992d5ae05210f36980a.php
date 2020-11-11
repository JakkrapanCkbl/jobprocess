<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div class="container">
    <div class="container">
        <?php if(Session::has('message')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('message')); ?>

        </div>
        <?php endif; ?>
    </div>
    <br>
    <form action="docsearch" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="container">

            <div class="row">
                <h2> <span style="margin:10px"> <a href="/docsearch">Document</a> </span></h2>
                <div class="col-md-8 mb-3 mb-md-0">
                    <input type="text" name="search" class="mr-3 form-control  px-4" placeholder="title, keywords or project name ">
                </div>
                <div class="col-md-2">
                    <input type="submit" class="btn btn-search btn-primary btn-block" value="Search">
                </div>
            </div>
        </div>

    </form>
    <br>

</div>
<div class="container">

    <table class="table table-dark">
        <tr>
            <th>id</th>
            <!-- <th>province_code</th> -->
            <th>name_th</th>
            <!-- <th>name_en</th> -->
            <!-- <th>doc_category_id</th> -->
            <!-- <th>filepath</th> -->
            <th>date</th>
            <th>filename</th>

            <td><a href="/docsearch/create"><i class="fa fa-plus fa-2x" style="color:white"></i></a></td>
        </tr>

        <?php $__currentLoopData = $docsearch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $docsearch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($docsearch->id); ?></td>
            <!-- <td><?php echo e($docsearch->province_code); ?></td> -->
            <td><?php echo e($docsearch->name_th); ?></td>
            <!-- <td><?php echo e($docsearch->name_en); ?></td> -->
            <!-- <td><?php echo e($docsearch->doc_category_id); ?></td> -->
            <!-- <td><?php echo e($docsearch->filepath); ?></td> -->

            <?php
            $date = substr($docsearch->created_at, 0, -9);
            $date = date("d/m/Y", strtotime($date));
            $filename = basename($docsearch->filepath); 
            ?>
            <td><?php echo e($date); ?></td>
            <td><a href="<?php echo e(asset($docsearch->filepath)); ?>" target=_blank><?php echo e($filename); ?></a></td>



            <!-- Menu Bar -->

            <!-- <td><a href="<?php echo e(route('docsearch.edit',[$docsearch->id])); ?>"><i class="fa fa-pencil-square-o" style="color:white"></i></a></td> -->
            <td><a href="#"><i class="fa fa-trash" style="color:white" data-toggle="modal" data-target="#deleteModal<?php echo e($docsearch->id); ?>"></i></a></td>

            <!-- Modal -->
            <div class="modal fade" id="deleteModal<?php echo e($docsearch->id); ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Do you want to delete this file?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php (
                        $filename = basename( $docsearch->filepath )
                        ); ?>

                        <div class="modal-body">
                            <?php echo e($filename); ?>

                        </div>

                        <form action="<?php echo e(route('docsearch.delete')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="modal-footer">
                                <input type="hidden" name="id" value="<?php echo e($docsearch->id); ?>">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-danger">
                                    Delete
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>


</div>

<style type="text/css">
    .fa {
        color: white;
    }
</style>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/docsearch/page.blade.php ENDPATH**/ ?>