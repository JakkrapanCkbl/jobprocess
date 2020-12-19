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
                            <label class="float-right">ปีที่โครงการเปิดขาย</label>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <p>พ.ศ.</p>
                                    </div>
                                </div>
                                <input type="text" name="yearstart" class="form-control<?php echo e($errors->has('yearstart') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->yearstart); ?>">
                            </div>
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">อาคารชุดสูง (ชั้น)</label>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" name="buildinghight" class="form-control<?php echo e($errors->has('buildinghight') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->buildinghight); ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <p>ชั้น</p>
                                    </div>
                                </div>
                            </div>
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
                                <input type="text" name="units" class="form-control<?php echo e($errors->has('units') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->units); ?>">


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
                            <label class="float-right">ยอดขายโครงการ (%)</label>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" name="percentsell" class="form-control<?php echo e($errors->has('percentsell') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->percentsell); ?>">

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
                            <label class="float-right">ยอดโอน (%)</label>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" name="percenttransfer" class="form-control<?php echo e($errors->has('percenttransfer') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->percenttransfer); ?>">


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
                            <label class="float-right">ชื่อตัวแทนขาย</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="salesname" class="form-control<?php echo e($errors->has('salesname') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->salesname); ?>">

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
                                <input type="text" name="percenliverate" class="form-control<?php echo e($errors->has('percenliverate') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->percenliverate); ?>">


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
                                <input type="text" name="commonfee" class="form-control<?php echo e($errors->has('commonfee') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->commonfee); ?>">


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
                                <input type="text" name="commonoverdue" class="form-control<?php echo e($errors->has('commonoverdue') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->commonoverdue); ?>">


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
                            <input type="text" name="facilities" class="form-control<?php echo e($errors->has('facilities') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->facilities); ?>">


                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">สภาพการดูแลรักษา</label>
                        </div>
                        <div class="col-md-6">
                            <select name="prop_type" class="form-control">
                                <option value="ดี" <?php echo e($job->prop_type=='ดี'?'selected':''); ?>>ดี</option>
                                <option value="ปานกลาง" <?php echo e($job->prop_type=='ปานกลาง'?'selected':''); ?>>ปานกลาง</option>
                                <option value="แย่" <?php echo e($job->prop_type=='แย่'?'selected':''); ?>>แย่</option>
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


            </div>

        </div>
    </div>
    <!-- </div> -->
    <!-- </div> -->
</div>
<?php echo e(csrf_field()); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/report/editcontent/editcontent4.blade.php ENDPATH**/ ?>