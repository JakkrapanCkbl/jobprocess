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
    <h1>User List</h1>

</div>
<div class="container">

    <table class="table table-dark">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>user_type</th>
            <th>email_verified_at</th>
            <th>created_at</th>
            <th>updated_at</th>

            <td><a href="/user/create"><i class="fa fa-plus fa-2x" style="color:white"></i></a></td>
        </tr>

        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user->id); ?></td>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->user_type); ?></td>
            <td><?php echo e($user->email_verified_at); ?></td>
            <td><?php echo e($user->created_at); ?></td>
            <td><?php echo e($user->updated_at); ?></td>

            <td><a href="<?php echo e(route('user.edit',[$user->id])); ?>"><i class="fa fa-pencil-square-o" style="color:white"></i></a></td>
            <td><a href="#"><i class="fa fa-trash" style="color:white" data-toggle="modal" data-target="#deleteModal<?php echo e($user->id); ?>"></i></a></td>

        </tr>
        <!-- Modal -->
        <div class="modal fade" id="deleteModal<?php echo e($user->id); ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Do you want to delete this user?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo e($user->name); ?>

                    </div>

                    <form action="<?php echo e(route('user.delete')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="modal-footer">
                            <input type="hidden" name="id" value="<?php echo e($user->id); ?>">
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/user/index.blade.php ENDPATH**/ ?>