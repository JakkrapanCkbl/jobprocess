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
                                <label class="float-right">โครงการเปิดขายประมาณ</label>
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
                                <label class="float-right">อาคารชุดสูง (ชั้น)</label>
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
                                <label class="float-right">จำนวนห้องชุดในโครงการ (ยูนิต)</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="roomtype" class="form-control<?php echo e($errors->has('roomtype') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->roomtype); ?>">
                                    <?php if($errors->has('roomtype')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('roomtype')); ?></strong>
                                    </span>
                                    <?php endif; ?>

                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>ยูนิต</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ยอดขายโครงการ (ประมาณ)</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="roomtype" class="form-control<?php echo e($errors->has('roomtype') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->roomtype); ?>">
                                    <?php if($errors->has('roomtype')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('roomtype')); ?></strong>
                                    </span>
                                    <?php endif; ?>

                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>ยูนิต</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ยอดโอน (ประมาณ)</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="roomtype" class="form-control<?php echo e($errors->has('roomtype') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->roomtype); ?>">
                                    <?php if($errors->has('roomtype')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('roomtype')); ?></strong>
                                    </span>
                                    <?php endif; ?>

                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>ยูนิต</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ตัวแทนขาย</label>
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
                                <label class="float-right">อัตราการเข้าอยู่อาศัย (%)</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="roomtype" class="form-control<?php echo e($errors->has('roomtype') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->roomtype); ?>">
                                    <?php if($errors->has('roomtype')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('roomtype')); ?></strong>
                                    </span>
                                    <?php endif; ?>

                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>%</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">อัตราค่าส่วนกลาง (CAM FEE)</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="roomtype" class="form-control<?php echo e($errors->has('roomtype') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->roomtype); ?>">
                                    <?php if($errors->has('roomtype')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('roomtype')); ?></strong>
                                    </span>
                                    <?php endif; ?>

                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>บาท/ตร.ม./เดือน</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ยอดค้างชำระส่วนกลาง</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="roomtype" class="form-control<?php echo e($errors->has('roomtype') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->roomtype); ?>">
                                    <?php if($errors->has('roomtype')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('roomtype')); ?></strong>
                                    </span>
                                    <?php endif; ?>

                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>บาท</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">สิ่งอำนวยความสะดวกในโครงการ</label>
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
<?php echo e(csrf_field()); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/admin/editcontent/vertical_editcontent4.blade.php ENDPATH**/ ?>