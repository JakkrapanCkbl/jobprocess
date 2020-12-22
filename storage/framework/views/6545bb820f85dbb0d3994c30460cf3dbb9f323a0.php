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
                </style>


                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ประเภททรัพย์สิน</label>
                        </div>
                        <div class="col-md-6">
                            <select name="prop_type" class="form-control">
                                <option value="ห้องชุด" <?php echo e($job->prop_type=='ห้องชุด'?'selected':''); ?>>ห้องชุด</option>
                                <option value="บ้านเดี่ยว" <?php echo e($job->prop_type=='บ้านเดี่ยว'?'selected':''); ?>>บ้านเดี่ยว</option>
                                <option value="บ้านแฝด" <?php echo e($job->prop_type=='บ้านแฝด'?'selected':''); ?>>บ้านแฝด</option>
                                <option value="ทาวน์เฮาส์/ทาวน์โฮม" <?php echo e($job->prop_type=='ทาวน์เฮาส์/ทาวน์โฮม'?'selected':''); ?>>ทาวน์เฮาส์/ทาวน์โฮม</option>
                                <option value="ตึกแถว" <?php echo e($job->prop_type=='ตึกแถว'?'selected':''); ?>>ตึกแถว</option>
                                <option value="ที่ดินว่างเปล่า" <?php echo e($job->prop_type=='ที่ดินว่างเปล่า'?'selected':''); ?>>ที่ดินว่างเปล่า</option>
                                <option value="โรงงาน/โกดัง" <?php echo e($job->prop_type=='โรงงาน/โกดัง'?'selected':''); ?>>โรงงาน/โกดัง</option>
                                <option value="อพาร์ทเม้นท์" <?php echo e($job->prop_type=='อพาร์ทเม้นท์'?'selected':''); ?>>อพาร์ทเม้นท์</option>
                                <option value="โรงแรม" <?php echo e($job->prop_type=='โรงแรม'?'selected':''); ?>>โรงแรม</option>
                                <option value="อาคารสำนักงาน" <?php echo e($job->prop_type=='อาคารสำนักงาน'?'selected':''); ?>>อาคารสำนักงาน</option>
                                <option value="โฮมออฟฟิศ/มินิออฟฟิศ" <?php echo e($job->prop_type=='โฮมออฟฟิศ/มินิออฟฟิศ'?'selected':''); ?>>โฮมออฟฟิศ/มินิออฟฟิศ</option>
                                <option value="ที่ดินพร้อมสิ่งปลูกสร้าง" <?php echo e($job->prop_type=='ที่ดินพร้อมสิ่งปลูกสร้าง'?'selected':''); ?>>ที่ดินพร้อมสิ่งปลูกสร้าง</option>
                                <option value="สิทธิการเช่า" <?php echo e($job->prop_type=='สิทธิการเช่า'?'selected':''); ?>>สิทธิการเช่า</option>
                                <option value="เครื่องจักร" <?php echo e($job->prop_type=='อื่น ๆ'?'selected':''); ?>>เครื่องจักร</option>
                                <option value="อื่น ๆ" <?php echo e($job->prop_type=='อื่น ๆ'?'selected':''); ?>>อื่น ๆ</option>
                            </select>
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ชื่่อโครงการ</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="projectname" class="form-control<?php echo e($errors->has('projectname') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->projectname); ?>">
                            <?php if($errors->has('projectname')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('projectname')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>

                    </div>

                </div>



                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right" name="level">ชั้น</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="level" class="form-control<?php echo e($errors->has('level') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->level); ?>">
                            <?php if($errors->has('level')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('level')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right" name="moo">หมู่</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="moo" placeholder="หมู่" class="form-control<?php echo e($errors->has('moo') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->moo); ?>">
                            <?php if($errors->has('moo')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('msoo')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">พื้นที่</label>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <select name="areaUnit" class="form-control">
                                        <option value="ตร.ม." <?php echo e($job->easydiff=='NORM'?'selected':''); ?>>ตร.ม.</option>
                                        <option value="ไร่" <?php echo e($job->easydiff=='DIFF'?'selected':''); ?>>ไร่</option>
                                    </select>
                                </div>
                                <input type="text" name="area" placeholder="00.00" class="form-control<?php echo e($errors->has('prop_size') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->prop_size); ?>">

                            </div>
                        </div>

                    </div>

                </div>




                <!-- RAI  -->
                <!-- <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ขนาดพื้นที่่</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="prop_size" class="form-control<?php echo e($errors->has('prop_size') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->prop_size); ?>">
                                <?php if($errors->has('prop_size')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('prop_size')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>

                        </div>

                    </div> -->

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ซอย</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="soi" placeholder="ซอย" class="form-control<?php echo e($errors->has('soi') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->soi); ?>">
                            <?php if($errors->has('soi')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('soi')); ?></strong>
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
                            <input type="text" name="road" placeholder="ถนน" class="form-control<?php echo e($errors->has('road') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->road); ?>">
                            <?php if($errors->has('road')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('road')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>

                    </div>

                </div>

                <br>
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ตำบล (HL-ตามโฉนด/อ.ช.2)</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="deedtumbon" placeholder="ตำบล" class="form-control<?php echo e($errors->has('deedtumbon') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->deedtumbon); ?>">
                            <?php if($errors->has('deedtumbon')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('deedtumbon')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">อำเภอ (HL-ตามโฉนด/อ.ช.2) </label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="deedamphur" placeholder="อำเภอ" class="form-control<?php echo e($errors->has('deedamphur') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->deedamphur); ?>">
                            <?php if($errors->has('deedamphur')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('deedamphur')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">จังหวัด (ตามเขตปกครอง)</label>
                        </div>
                        <div class="col-md-6">
                            <select name="province_code" id="province_code" class="form-control province<?php echo e($errors->has('province_code') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->province_code); ?>">
                                <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($row->code); ?>" <?php echo e(($job->province_code == $row->code) ? 'selected' : ''); ?>>
                                    <?php echo e($row->name_th); ?>

                                </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('province_code')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('province_code')); ?></strong>
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
                            <select name="amphure_code" class="form-control amphures<?php echo e($errors->has('amphure_code') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->amphure_code); ?>">
                                <?php $__currentLoopData = $listtwo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($city->code); ?>" <?php echo e(($job->amphure_code == $city->code) ? 'selected' : ''); ?>>
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
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-block btn-success">Update</button>
                        </div>
                    </div>
                </div>

                </form>

                <script>
                    $(document).ready(function() {
                        if ($('select[name = "prop_type"]').val() == 'ห้องชุด') {
                            document.getElementsByName("moo")[0].style.visibility = "hidden";
                            document.getElementsByName("moo")[1].style.visibility = "hidden";
                            document.getElementsByName("area")[0].placeholder = "00.00";
                            document.getElementsByName("areaUnit")[0].value = "ตร.ม.";
                        } else {
                            document.getElementsByName("moo")[0].style.visibility = "visible";
                            document.getElementsByName("moo")[1].style.visibility = "visible";
                            document.getElementsByName("area")[0].placeholder = "00-0-00";
                            document.getElementsByName("areaUnit")[0].value = "ไร่";
                        }
                        $('select[name = "prop_type"]').change(function() {
                            if ($(this).val() == 'ห้องชุด') {
                                document.getElementsByName("moo")[0].style.visibility = "hidden";
                                document.getElementsByName("moo")[1].style.visibility = "hidden";
                                document.getElementsByName("level")[0].style.visibility = "visible";
                                document.getElementsByName("level")[1].style.visibility = "visible";
                                document.getElementsByName("area")[0].placeholder = "00.00";
                                document.getElementsByName("areaUnit")[0].value = "ตร.ม.";
                            } else {
                                document.getElementsByName("moo")[0].style.visibility = "visible";
                                document.getElementsByName("moo")[1].style.visibility = "visible";
                                document.getElementsByName("level")[0].style.visibility = "hidden";
                                document.getElementsByName("level")[1].style.visibility = "hidden";
                                document.getElementsByName("area")[0].placeholder = "00-0-00";
                                document.getElementsByName("areaUnit")[0].value = "ไร่";
                            }

                        });
                    });
                </script>

            </div>

        </div>
    </div>
    <!-- </div> -->
    <!-- </div> -->
</div>
<?php echo e(csrf_field()); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/admin/editcontent/vertical_editcontent2.blade.php ENDPATH**/ ?>