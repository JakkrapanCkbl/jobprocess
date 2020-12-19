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
                            <label class="float-right">GPS</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="lat" class="form-control<?php echo e($errors->has('lat') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->lat); ?>" placeholder="latitude">
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="lng" class="form-control<?php echo e($errors->has('lng') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->lng); ?>" placeholder="longitude">
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <!-- todo -->
                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ห้องชุดเลขที่</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="roomno" class="form-control<?php echo e($errors->has('roomno') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->roomno); ?>">
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ชื่ออาคารชุด</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="roomno" class="form-control<?php echo e($errors->has('roomno') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->roomno); ?>">
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ชั้น</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="level" class="form-control<?php echo e($errors->has('level') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->level); ?>">
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">โฉนดที่ดินเลขที่</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="deedno" class="form-control<?php echo e($errors->has('deedno') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->deedno); ?>">
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">อาคารเลขที่</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="buildingno" class="form-control<?php echo e($errors->has('buildingno') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->buildingno); ?>">
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ทะเบียนอาคารชุดเลขที่</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="buildingregno" class="form-control<?php echo e($errors->has('buildingregno') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->buildingregno); ?>">
                        </div>

                    </div>
                </div>

                <!-- <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">จังหวัด (ตามเขตปกครอง)</label>
                        </div>
                        <div class="col-md-6">
                            <select name="province_code" class="form-control province_code<?php echo e($errors->has('province_code') ? ' is-invalid' : ''); ?>">
                                <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($row->name_th); ?>" <?php echo e(($job->province_code == $row->code) ? 'selected' : ''); ?>>
                                    <?php echo e($row->name_th); ?>

                                </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                </div> -->

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ตำบล (HL-ตามโฉนด/อ.ช.2)</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="deedtumbon" class="form-control<?php echo e($errors->has('deedtumbon') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->deedtumbon); ?>">
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">อำเภอ (HL-ตามโฉนด/อ.ช.2) </label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="deedamphur" class="form-control<?php echo e($errors->has('deedamphur') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->deedamphur); ?>">
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
                            <label class="float-right">เนื้อที่ดินโครงการ</label>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" name="landsize" class="form-control<?php echo e($errors->has('landsize') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->landsize); ?>" placeholder="0.00">
                                <?php if($errors->has('landsize')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('landsize')); ?></strong>
                                </span>
                                <?php endif; ?>

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <p>ตร.ม.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <!-- todo -->
                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">เนื้อที่ห้องชุด</label>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" name="roomarea" class="form-control<?php echo e($errors->has('roomarea') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->roomarea); ?>" placeholder="0-0-00.0">
                                <?php if($errors->has('roomarea')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('roomarea')); ?></strong>
                                </span>
                                <?php endif; ?>

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <p>ไร่</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ผู้ถือกรรมสิทธิ์</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="ownership" class="form-control<?php echo e($errors->has('ownership') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->ownership); ?>">
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">การจดจำนองเป็นหลักประกัน</label>
                        </div>
                        <div class="col-md-6">
                            <select name="mortgage" class="form-control">
                                <option value="ไม่มี" <?php echo e($job->mortgage=='ไม่มี'?'selected':''); ?>>ไม่มี</option>
                                <option value="ธนาคารยูโอบี จำกัด (มหาชน)" <?php echo e($job->mortgage=='ธนาคารยูโอบี จำกัด (มหาชน)'?'selected':''); ?>>ธนาคารยูโอบี จำกัด (มหาชน)</option>
                                <option value="ธนาคารกรุงเทพ จำกัด (มหาชน)" <?php echo e($job->mortgage=='ธนาคารกรุงเทพ จำกัด (มหาชน)'?'selected':''); ?>>ธนาคารกรุงเทพ จำกัด (มหาชน)</option>
                                <option value="ธนาคารกสิกรไทย จำกัด (มหาชน)" <?php echo e($job->mortgage=='ธนาคารกสิกรไทย จำกัด (มหาชน)'?'selected':''); ?>>ธนาคารกสิกรไทย จำกัด (มหาชน)</option>
                                <option value="ธนาคารกรุงไทย จำกัด (มหาชน)" <?php echo e($job->mortgage=='ธนาคารกรุงไทย จำกัด (มหาชน)'?'selected':''); ?>>ธนาคารกรุงไทย จำกัด (มหาชน)</option>
                                <option value="ธนาคารไทยพาณิชย์ จำกัด (มหาชน)" <?php echo e($job->mortgage=='ธนาคารไทยพาณิชย์ จำกัด (มหาชน)'?'selected':''); ?>>ธนาคารไทยพาณิชย์ จำกัด (มหาชน)</option>
                                <option value="ธนาคารธนชาต จำกัด (มหาชน)" <?php echo e($job->mortgage=='ธนาคารธนชาต จำกัด (มหาชน)'?'selected':''); ?>>ธนาคารธนชาต จำกัด (มหาชน)</option>
                                <option value="ธนาคารทหารไทย จำกัด (มหาชน)" <?php echo e($job->mortgage=='ธนาคารทหารไทย จำกัด (มหาชน)'?'selected':''); ?>>ธนาคารทหารไทย จำกัด (มหาชน)</option>
                                <option value="ธนาคารกรุงศรีอยุธยา จำกัด (มหาชน)" <?php echo e($job->mortgage=='ธนาคารกรุงศรีอยุธยา จำกัด (มหาชน)'?'selected':''); ?>>ธนาคารกรุงศรีอยุธยา จำกัด (มหาชน)</option>
                                <option value="ธนาคารอาคารสงเคราะห์" <?php echo e($job->mortgage=='ธนาคารอาคารสงเคราะห์'?'selected':''); ?>>ธนาคารอาคารสงเคราะห์</option>
                                <option value="ธนาคารออมสิน จำกัด" <?php echo e($job->mortgage=='ธนาคารออมสิน จำกัด'?'selected':''); ?>>ธนาคารออมสิน จำกัด</option>
                                <option value="ธนาคารเกียรตินาคิน จำกัด (มหาชน)" <?php echo e($job->mortgage=='ธนาคารเกียรตินาคิน จำกัด (มหาชน)'?'selected':''); ?>>ธนาคารเกียรตินาคิน จำกัด (มหาชน)</option>
                                <option value="ธนาคารซีไอเอ็มบีไทย จำกัด (มหาชน)" <?php echo e($job->mortgage=='ธนาคารซีไอเอ็มบีไทย จำกัด (มหาชน)'?'selected':''); ?>>ธนาคารซีไอเอ็มบีไทย จำกัด (มหาชน)</option>
                                <option value="ธนาคารไทยเครดิตเพื่อรายย่อย จำกัด (มหาชน)" <?php echo e($job->mortgage=='ธนาคารไทยเครดิตเพื่อรายย่อย จำกัด (มหาชน)'?'selected':''); ?>>ธนาคารไทยเครดิตเพื่อรายย่อย จำกัด (มหาชน)</option>
                                <option value="ธนาคารอิสลามแห่งประเทศไทย จำกัด" <?php echo e($job->mortgage=='ธนาคารอิสลามแห่งประเทศไทย จำกัด'?'selected':''); ?>>ธนาคารอิสลามแห่งประเทศไทย จำกัด</option>
                                <option value="ธนาคารทีสโก้ จำกัด (มหาชน)" <?php echo e($job->mortgage=='ธนาคารทีสโก้ จำกัด (มหาชน)'?'selected':''); ?>>ธนาคารทีสโก้ จำกัด (มหาชน)</option>
                                <option value="ธนาคารแสตนดาร์ด ชาเตอร์ (ไทย) จำกัด (มหาชน)" <?php echo e($job->mortgage=='ธนาคารแสตนดาร์ด ชาเตอร์ (ไทย) จำกัด (มหาชน)'?'selected':''); ?>>ธนาคารแสตนดาร์ด ชาเตอร์ (ไทย) จำกัด (มหาชน)</option>
                                <option value="ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดหย่อมแห่งประเทศไทย" <?php echo e($job->mortgage=='ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดหย่อมแห่งประเทศไทย'?'selected':''); ?>>ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดหย่อมแห่งประเทศไทย</option>
                                <option value="บริษัท เอ็มบีเค การันตี จำกัด" <?php echo e($job->mortgage=='บริษัท เอ็มบีเค การันตี จำกัด'?'selected':''); ?>>บริษัท เอ็มบีเค การันตี จำกัด</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">การอายัดทรัพย์สิน</label>
                        </div>
                        <div class="col-md-6">
                            <select name="sequester" class="form-control">
                                <option value="ไม่มี" <?php echo e($job->sequester=='ไม่มี'?'selected':''); ?>>ไม่มี</option>
                                <option value="มีคำสั่งอายัดห้ามโอน ให้งดการจดทะเบียนหรือเปลี่ยนแปลงทางทะเบียน ที่ ยธ....... ลงวันที่ ... พ.ศ. 25.. คดีแดงเลขที่ ........ ระหว่าง .......(โจทก์) กับ ……...(จำเลย) เรื่องอายัด .......วันที่อายัด ....พ.ศ. 25..." <?php echo e($job->sequester!='ไม่มี'?'selected':''); ?>>มีคำสั่งอายัดห้ามโอน ให้งดการจดทะเบียนหรือเปลี่ยนแปลงทางทะเบียน ที่ ยธ....... ลงวันที่ ... พ.ศ. 25.. คดีแดงเลขที่ ........ ระหว่าง .......(โจทก์) กับ ……...(จำเลย) เรื่องอายัด .......วันที่อายัด ....พ.ศ. 25...</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">การรอนสิทธิ์</label>
                        </div>
                        <div class="col-md-6">
                            <select name="deprive" class="form-control">
                                <option value="ไม่มี" <?php echo e($job->deprive=='ไม่มี'?'selected':''); ?>>ไม่มี</option>
                                <option value="มีได้แก่ ทรัพย์สินมีภาระสัญญาเช่า เป็นเวลา ... ปี เริ่มตั้งแต่ ...... ถึง ..... ปัจจุบันคงเหลือระยะเวลา ... ปี" <?php echo e($job->deprive=='มีได้แก่ ทรัพย์สินมีภาระสัญญาเช่า เป็นเวลา ... ปี เริ่มตั้งแต่ ...... ถึง ..... ปัจจุบันคงเหลือระยะเวลา ... ปี'?'selected':''); ?>>มีได้แก่ ทรัพย์สินมีภาระสัญญาเช่า เป็นเวลา ... ปี เริ่มตั้งแต่ ...... ถึง ..... ปัจจุบันคงเหลือระยะเวลา ... ปี</option>
                                <option value="มีปัญหาผู้บุกรุกครอบครองทรัพย์สิน .............." <?php echo e($job->deprive=='มีปัญหาผู้บุกรุกครอบครองทรัพย์สิน ..............'?'selected':''); ?>>มีปัญหาผู้บุกรุกครอบครองทรัพย์สิน ..............</option>
                                <option value="มีเสาไฟฟ้าแรงสูงพาดผ่านบนที่ดิน เนื้อที่ประมาณ .... ตารางวา (รายละเอียดตามผังที่ดินประกอบ)" <?php echo e($job->deprive=='มีเสาไฟฟ้าแรงสูงพาดผ่านบนที่ดิน เนื้อที่ประมาณ .... ตารางวา (รายละเอียดตามผังที่ดินประกอบ)'?'selected':''); ?>>มีเสาไฟฟ้าแรงสูงพาดผ่านบนที่ดิน เนื้อที่ประมาณ .... ตารางวา (รายละเอียดตามผังที่ดินประกอบ)</option>
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
<?php echo e(csrf_field()); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/report/editcontent/editcontent2.blade.php ENDPATH**/ ?>