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
                                <label class="float-right">รูปแบบห้องชุด</label>
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
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">อายุอาคาร (ปี)</label>
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
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">สภาพอาคาร</label>
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
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ตำแหน่งห้องชุด</label>
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
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ทัศนียภาพ / วิว</label>
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
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">การใช้ประโยชน์ของทรัพย์สิน</label>
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

                    <br>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">วัสดุ</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="materialRadioOptions" id="materialRadio1" value="ดีมาก">
                                    <label class="form-check-label float-right" for="materialRadio1">ดีมาก</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="materialRadioOptions" id="materialRadio2" value="ดี">
                                    <label class="form-check-label float-right" for="materialRadio2">ดี</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="materialRadioOptions" id="materialRadio3" value="ปานกลาง">
                                    <label class="form-check-label float-right" for="materialRadio1">ปานกลาง</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="materialRadioOptions" id="materialRadio4" value="ต่ำ">
                                    <label class="form-check-label float-right" for="materialRadio2">ต่ำ</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">รูปแบบ</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="styleRadioOptions" id="styleRadio1" value="option1">
                                    <label class="form-check-label float-right" for="styleRadio1">ดีมาก</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="styleRadioOptions" id="styleRadio2" value="option2">
                                    <label class="form-check-label float-right" for="styleRadio2">ดี</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="styleRadioOptions" id="styleRadio3" value="option3">
                                    <label class="form-check-label float-right" for="styleRadio1">ปานกลาง</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="styleRadioOptions" id="styleRadio4" value="option4">
                                    <label class="form-check-label float-right" for="styleRadio2">ต่ำ</label>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">โครงสร้างทั่วไป</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">คสล.</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">เหล็ก</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    <div class="input-group">
                                        <input type="text" name="valuer_n" class="form-control<?php echo e($errors->has('valuer_n') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->valuer_n); ?>" placeholder="อื่น ๆ">
                                        <?php if($errors->has('valuer_n')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('valuer_n')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">วัสดุพื้น</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">กระเบื้อง</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">ไม้ลามิเนต</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">เอ็นจิเนียริ่งวู้ด</label>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ผนัง</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">ก่ออิฐ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">พรีแคสคอนกรีต</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">ฉาบปูนเรียบ</label>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ฝ้าเพดาน</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">ยิบซั่มบอร์ดฉาบเรียบ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">ฉาบปูนเรียบ</label>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">พื้น-ผนังห้องน้ำ</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">กระเบื้อง</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">หินอ่อน</label>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ประตู</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">บานไม้</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">บานไม้ปิดผิววีเนียร์</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">กระจกกรอบอลูมิเนียม</label>
                                </div>
                            </div>

                        </div>

                    </div>
                    <style>
                        .form-check-input {
                            width: 20px;
                            height: 20px;
                        }
                    </style>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">หน้าต่าง</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">บานไม้</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">บานไม้ปิดกรุกระจก</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">กระจกกรอบอลูมิเนียม</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <div class="input-group">
                                        <input type="text" name="valuer_n" class="form-control<?php echo e($errors->has('valuer_n') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->valuer_n); ?>" placeholder="อื่น ๆ">
                                        <?php if($errors->has('valuer_n')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('valuer_n')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
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
<?php echo e(csrf_field()); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/admin/editcontent/vertical_editcontent3.blade.php ENDPATH**/ ?>