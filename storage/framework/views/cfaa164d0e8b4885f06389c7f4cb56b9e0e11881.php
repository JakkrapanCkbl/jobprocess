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
                            <select name="district" class="form-control district<?php echo e($errors->has('district') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->district); ?>">
                                <?php $__currentLoopData = $listfive; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($district->name_th); ?>" <?php echo e(($job->district == $district->name_th) ? 'selected' : ''); ?>>
                                    <?php echo e($district->name_th); ?>

                                </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <!-- <input type="text" name="district" class="form-control<?php echo e($errors->has('district') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->district); ?>"> -->
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
                                <option value="บ้านเดี่ยว" <?php echo e($job->prop_type=='บ้านเดี่ยว'?'selected':''); ?>>ประเมินภายใต้เงื่อนไขบ้านก่อสร้างแล้วเสร็จ 100% ปัจจุบันก่อสร้างแล้วเสร็จ ...% เหลืองานเก็บและทาสี</option>
                            </select>
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">หมายเหตุ</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="district" class="form-control<?php echo e($errors->has('district') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->district); ?>">
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">สถานีรถไฟฟ้า</label>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <select name="transname" class="form-control transname<?php echo e($errors->has('transname') ? ' is-invalid' : ''); ?>">
                                        <option value="" <?php echo e(($listfour[$job->transport_id]->transname == "") ? 'selected' : ''); ?>>
                                            ไม่มี
                                        </option> 
                                        <option value="BTS" <?php echo e(($listfour[$job->transport_id]->transname == "BTS") ? 'selected' : ''); ?>>
                                            BTS
                                        </option>
                                        <option value="MRT" <?php echo e(($listfour[$job->transport_id]->transname == "MRT") ? 'selected' : ''); ?>>
                                            MRT
                                        </option>
                                        <option value="ARL" <?php echo e(($listfour[$job->transport_id]->transname == "ARL") ? 'selected' : ''); ?>>
                                            ARL
                                        </option>
                                        <option value="BRT" <?php echo e(($listfour[$job->transport_id]->transname == "BRT") ? 'selected' : ''); ?>>
                                            BRT
                                        </option>
                                        <option value="Monorail" <?php echo e(($listfour[$job->transport_id]->transname == "Monorail") ? 'selected' : ''); ?>>
                                            Monorail
                                        </option>
                                    </select>
                                </div>

                                <select name="transtation" class="form-control transtation<?php echo e($errors->has('transtation') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->transport_id); ?>">
                                    <?php $__currentLoopData = $listfour; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $station): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($station->id); ?>" <?php echo e(($job->transport_id == $station->id) ? 'selected' : ''); ?>>
                                        <?php echo e($station->name_th); ?> 
                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>


                        </div>

                    </div>

                </div>


                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ระยะห่าง</label>
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
                                        <p>เมตร</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ถนนผ่านหน้าทรัพย์สิน</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="roomtype" class="form-control<?php echo e($errors->has('roomtype') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->roomtype); ?>">
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">สิทธิทางเข้า-ออก</label>
                        </div>
                        <div class="col-md-6">
                            <select name="prop_type" class="form-control">
                                <option value="สาธารณประโยชน์" <?php echo e($job->prop_type=='สาธารณประโยชน์'?'selected':''); ?>>สาธารณประโยชน์</option>
                                <option value="ทางส่วนบุคคลภายใต้การจัดสรรที่ดิน" <?php echo e($job->prop_type=='ทางส่วนบุคคลภายใต้การจัดสรรที่ดิน'?'selected':''); ?>>ทางส่วนบุคคลภายใต้การจัดสรรที่ดิน</option>
                                <option value="ทางส่วนบุคคลที่มีการแบ่งแยกหรือแบ่งโอนกัน (เฉพาะแปลงคง) และมีเจตนาให้เป็นทางเข้า-ออก" <?php echo e($job->prop_type=='ทางส่วนบุคคลที่มีการแบ่งแยกหรือแบ่งโอนกัน (เฉพาะแปลงคง) และมีเจตนาให้เป็นทางเข้า-ออก'?'selected':''); ?>>ทางส่วนบุคคลที่มีการแบ่งแยกหรือแบ่งโอนกัน (เฉพาะแปลงคง) และมีเจตนาให้เป็นทางเข้า-ออก</option>
                                <option value="ทางภารจำยอม (ทางส่วนบุคคลที่มีการจดทะเบียนแล้ว)" <?php echo e($job->prop_type=='ทางภารจำยอม (ทางส่วนบุคคลที่มีการจดทะเบียนแล้ว)'?'selected':''); ?>>ทางภารจำยอม (ทางส่วนบุคคลที่มีการจดทะเบียนแล้ว)</option>
                                <option value="ทางในเขตชานคลองสาธารณะ (เป็นส่วนของทางที่อยู่บนหรือเป็นส่วนหนึ่งของคลองสาธารณะ)" <?php echo e($job->prop_type=='ทางในเขตชานคลองสาธารณะ (เป็นส่วนของทางที่อยู่บนหรือเป็นส่วนหนึ่งของคลองสาธารณะ)'?'selected':''); ?>>ทางในเขตชานคลองสาธารณะ (เป็นส่วนของทางที่อยู่บนหรือเป็นส่วนหนึ่งของคลองสาธารณะ)</option>
                                <option value="ทางส่วนบุคคลที่มีเจ้าของทางนั้นยินยอมให้ใช้ผ่านทางเข้า-ออก โดยเปิดเผย ไม่โต้แย้งสิทธิ ระยะเวลาการใช้เกิน 10 ปีขึ้นไป" <?php echo e($job->prop_type=='ทางส่วนบุคคลที่มีเจ้าของทางนั้นยินยอมให้ใช้ผ่านทางเข้า-ออก โดยเปิดเผย ไม่โต้แย้งสิทธิ ระยะเวลาการใช้เกิน 10 ปีขึ้นไป'?'selected':''); ?>>ทางส่วนบุคคลที่มีเจ้าของทางนั้นยินยอมให้ใช้ผ่านทางเข้า-ออก โดยเปิดเผย ไม่โต้แย้งสิทธิ ระยะเวลาการใช้เกิน 10 ปีขึ้นไป</option>
                                <option value="ทางส่วนบุคคลในโครงการจัดสรรที่ไม่ได้รับอนุญาตจัดสรรที่ดิน มีเจตนาแบ่งที่ดินออกเป็นแปลงย่อย ๆ เพื่อขาย ตั้งแต่ 10 แปลงขึ้นไป" <?php echo e($job->prop_type=='ทางส่วนบุคคลในโครงการจัดสรรที่ไม่ได้รับอนุญาตจัดสรรที่ดิน มีเจตนาแบ่งที่ดินออกเป็นแปลงย่อย ๆ เพื่อขาย ตั้งแต่ 10 แปลงขึ้นไป'?'selected':''); ?>>ทางส่วนบุคคลในโครงการจัดสรรที่ไม่ได้รับอนุญาตจัดสรรที่ดิน มีเจตนาแบ่งที่ดินออกเป็นแปลงย่อย ๆ เพื่อขาย ตั้งแต่ 10 แปลงขึ้นไป</option>
                                <option value="ทางในโครงการจัดสรรของการเคหะแห่งชาติ" <?php echo e($job->prop_type=='ทางในโครงการจัดสรรของการเคหะแห่งชาติ'?'selected':''); ?>>ทางในโครงการจัดสรรของการเคหะแห่งชาติ</option>
                                <option value="ทางส่วนบุคคลที่ทางหน่วยงานราชการ เข้าไปพัฒนาแล้ว" <?php echo e($job->prop_type=='ทางส่วนบุคคลที่ทางหน่วยงานราชการ เข้าไปพัฒนาแล้ว'?'selected':''); ?>>ทางส่วนบุคคลที่ทางหน่วยงานราชการ เข้าไปพัฒนาแล้ว</option>
                                <option value="ทางที่เจ้าของที่ดินได้อุทิศ (ยกให้) ให้เป็นทางสาธารณะ" <?php echo e($job->prop_type=='ทางที่เจ้าของที่ดินได้อุทิศ (ยกให้) ให้เป็นทางสาธารณะ'?'selected':''); ?>>ทางที่เจ้าของที่ดินได้อุทิศ (ยกให้) ให้เป็นทางสาธารณะ</option>
                                <option value="ทางสาธารณประโยชน์ ไม่มีสภาพเป็นทาง (รถยนต์เข้า-ออกไม่ได้, วัชพืชปกคลุมหนาแน่น)" <?php echo e($job->prop_type=='ทางสาธารณประโยชน์ ไม่มีสภาพเป็นทาง (รถยนต์เข้า-ออกไม่ได้, วัชพืชปกคลุมหนาแน่น)'?'selected':''); ?>>ทางสาธารณประโยชน์ ไม่มีสภาพเป็นทาง (รถยนต์เข้า-ออกไม่ได้, วัชพืชปกคลุมหนาแน่น)</option>
                                <option value="ทางจำเป็นตามคำสั่งศาล" <?php echo e($job->prop_type=='ทางจำเป็นตามคำสั่งศาล'?'selected':''); ?>>ทางจำเป็นตามคำสั่งศาล</option>
                                <option value="รายละเอียด ตามหมายเหตุ ด้านล่าง" <?php echo e($job->prop_type=='รายละเอียด ตามหมายเหตุ ด้านล่าง'?'selected':''); ?>>รายละเอียด ตามหมายเหตุ ด้านล่าง</option>
                            </select>
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">มีสภาพเป็นถนน</label>
                        </div>
                        <div class="col-md-6">
                            <select name="prop_type" class="form-control">
                                <option value="ถนนคอนกรีต" <?php echo e($job->prop_type=='ถนนคอนกรีต'?'selected':''); ?>>ถนนคอนกรีต</option>
                                <option value="ถนนลาดยาง" <?php echo e($job->prop_type=='ถนนลาดยาง'?'selected':''); ?>>ถนนลาดยาง</option>
                                <option value="ถนนลูกรัง" <?php echo e($job->prop_type=='ถนนลูกรัง'?'selected':''); ?>>ถนนลูกรัง</option>
                                <option value="ถนนหินคลุก" <?php echo e($job->prop_type=='ถนนหินคลุก'?'selected':''); ?>>ถนนหินคลุก</option>
                            </select>
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ถนนกว้าง</label>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" name="roomtype" class="form-control<?php echo e($errors->has('roomtype') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->roomtype); ?>" placeholder="0.00">
                                <?php if($errors->has('roomtype')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('roomtype')); ?></strong>
                                </span>
                                <?php endif; ?>

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <p>เมตร</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">เขตทางกว้าง</label>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" name="roomtype" class="form-control<?php echo e($errors->has('roomtype') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->roomtype); ?>" placeholder="0.00">
                                <?php if($errors->has('roomtype')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('roomtype')); ?></strong>
                                </span>
                                <?php endif; ?>

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <p>เมตร</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">สาธารณูปโภค</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="roomtype" class="form-control<?php echo e($errors->has('roomtype') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->roomtype); ?>">
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">มีสภาพเป็นถนน</label>
                        </div>
                        <div class="col-md-6">
                            <select name="prop_type" class="form-control">
                                <option value="รถยนต์ รถเมล์" <?php echo e($job->prop_type=='รถยนต์ รถเมล์'?'selected':''); ?>>รถยนต์ รถเมล์</option>
                                <option value="รถยนต์ รถเมล์ รถไฟฟ้า" <?php echo e($job->prop_type=='รถยนต์ รถเมล์ รถไฟฟ้า'?'selected':''); ?>>รถยนต์ รถเมล์ รถไฟฟ้า</option>
                                <option value="รถยนต์ รถเมล์ รถโดยสารด่วนพิเศษ (BRT)" <?php echo e($job->prop_type=='รถยนต์ รถเมล์ รถโดยสารด่วนพิเศษ (BRT)'?'selected':''); ?>>รถยนต์ รถเมล์ รถโดยสารด่วนพิเศษ (BRT)</option>
                                <option value="รถยนต์ รถเมล์ประจำทาง เรือ" <?php echo e($job->prop_type=='รถยนต์ รถเมล์ประจำทาง เรือ'?'selected':''); ?>>รถยนต์ รถเมล์ประจำทาง เรือ</option>
                                <option value="ทางเดิน" <?php echo e($job->prop_type=='ทางเดิน'?'selected':''); ?>>ทางเดิน</option>
                            </select>
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">หมายเหตุ</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="roomtype" class="form-control<?php echo e($errors->has('roomtype') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->roomtype); ?>">
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
<?php echo e(csrf_field()); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/report/editcontent/editcontent5.blade.php ENDPATH**/ ?>