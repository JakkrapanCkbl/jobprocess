<div class="container">
    <?php if(Session::has('message')): ?>
    <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
    <?php endif; ?>
    <div class="row">

        <div class="col-md-12">
            <!-- <div class="card">
                <div class="card-header">
                    Edit Job
                </div> -->


            <div class="card-body" style="background-color: #B0C4DE;">
                <form action="<?php echo e(route('admininputjob.update',[$job->id])); ?>" method="POST" enctype="multipart/form-data"><?php echo csrf_field(); ?>

                    <style>
                        .row {
                            padding-top: 7px;
                        }

                        .float-right {
                            font-size: 19px;
                        }

                        .form-check {
                            padding-top: 5px;
                        }
                    </style>


                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ซอย</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="roomtype" class="form-control<?php echo e($errors->has('roomtype') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->roomtype); ?>">
                                <?php if($errors->has('roomtype')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('roomtype')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ถนน</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="roomtype" class="form-control<?php echo e($errors->has('roomtype') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->roomtype); ?>">
                                <?php if($errors->has('roomtype')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('roomtype')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">อำเภอ/เขต</label>
                            </div>
                            <div class="col-md-6">
                                <select name="amphure_id" class="form-control amphures<?php echo e($errors->has('amphure_id') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->amphure_id); ?>">
                                    <?php $__currentLoopData = $listtwo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($city->code); ?>" <?php echo e(($job->amphure_id == $city->code) ? 'selected' : ''); ?>>
                                        <?php echo e($city->name_th); ?>

                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ตำบล/แขวง</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="district" class="form-control<?php echo e($errors->has('district') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->district); ?>">
                                <?php if($errors->has('district')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('district')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">จังหวัด</label>
                            </div>
                            <div class="col-md-6">
                                <select name="province_id" id="province_id" class="form-control province<?php echo e($errors->has('province_id') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->province_id); ?>">
                                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($row->code); ?>" <?php echo e(($job->province_id == $row->code) ? 'selected' : ''); ?>>
                                        <?php echo e($row->name_th); ?>

                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('province_id')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('province_id')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">เงื่อนไขการประเมินมูลค่า</label>
                            </div>
                            <div class="col-md-6">
                                <select name="prop_type" class="form-control">
                                    <option value="ห้องชุด" <?php echo e($job->prop_type=='ห้องชุด'?'selected':''); ?>>ไม่มี</option>
                                    <option value="บ้านเดี่ยว" <?php echo e($job->prop_type=='บ้านเดี่ยว'?'selected':''); ?>>บ้านเดี่ยว</option>
                                    <option value="บ้านแฝด" <?php echo e($job->prop_type=='บ้านแฝด'?'selected':''); ?>>บ้านแฝด</option>
                                    <option value="ทาวน์เฮาส์/ทาวน์โฮม" <?php echo e($job->prop_type=='ทาวน์เฮาส์/ทาวน์โฮม'?'selected':''); ?>>ทาวน์เฮาส์/ทาวน์โฮม</option>
                                    <option value="ตึกแถว" <?php echo e($job->prop_type=='ตึกแถว'?'selected':''); ?>>ตึกแถว</option>
                                </select>
                            </div>

                        </div>

                    </div>


                    <div class="container">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-block btn-success">Update</button>
                            </div>
                        </div>
                    </div>

                </form>

            </div>

        </div>
    </div>
    <!-- </div> -->
    <!-- </div> -->
</div>
<?php echo e(csrf_field()); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/admin/editcontent/vertical_editcontent5.blade.php ENDPATH**/ ?>