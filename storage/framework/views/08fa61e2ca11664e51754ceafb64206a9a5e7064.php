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
                            <label class="float-right">การใช้ประโยชน์ที่ดินใกล้เคียง</label>
                        </div>
                        <div class="col-md-6">
                            <select name="prop_type" class="form-control">
                                <option value="ที่อยู่อาศัย" <?php echo e($job->prop_type=='ที่อยู่อาศัย'?'selected':''); ?>>ที่อยู่อาศัย</option>
                                <option value="ปล่อยว่าง" <?php echo e($job->prop_type=='ปล่อยว่าง'?'selected':''); ?>>ปล่อยว่าง</option>
                                <option value="พณิชยกรรม" <?php echo e($job->prop_type=='พณิชยกรรม'?'selected':''); ?>>พณิชยกรรม</option>
                                <option value="อุตสาหกรรม" <?php echo e($job->prop_type=='อุตสาหกรรม'?'selected':''); ?>>อุตสาหกรรม</option>
                                <option value="ที่อยู่อาศัยและพณิชยกรรม" <?php echo e($job->prop_type=='ที่อยู่อาศัยและพณิชยกรรม'?'selected':''); ?>>ที่อยู่อาศัยและพณิชยกรรม</option>
                            </select>
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">การเติบโตในบริเวณใกล้เคียง</label>
                        </div>
                        <div class="col-md-6">
                            <select name="prop_type" class="form-control">
                                <option value="เจริญมาก" <?php echo e($job->prop_type=='เจริญมาก'?'selected':''); ?>>เจริญมาก</option>
                                <option value="เจริญปานกลาง" <?php echo e($job->prop_type=='เจริญปานกลาง'?'selected':''); ?>>เจริญปานกลาง</option>
                                <option value="เจริญน้อย" <?php echo e($job->prop_type=='เจริญน้อย'?'selected':''); ?>>เจริญน้อย</option>
                            </select>
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">สภาพคล่องในการซื้อ-ขาย</label>
                        </div>
                        <div class="col-md-6">
                            <select name="prop_type" class="form-control">
                                <option value="สูง" <?php echo e($job->prop_type=='สูง'?'selected':''); ?>>สูง</option>
                                <option value="ปานกลาง" <?php echo e($job->prop_type=='ปานกลาง'?'selected':''); ?>>ปานกลาง</option>
                                <option value="ต่ำ" <?php echo e($job->prop_type=='ต่ำ'?'selected':''); ?>>ต่ำ</option>
                            </select>
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ข้อบังคับกฎหมายผังเมือง</label>
                        </div>
                        <div class="col-md-6">
                            <select name="prop_type" class="form-control">
                                <option value="สีเหลือง (ที่อยู่อาศัยหนาแน่นน้อย)" <?php echo e($job->prop_type=='สีเหลือง (ที่อยู่อาศัยหนาแน่นน้อย)'?'selected':''); ?>>สีเหลือง (ที่อยู่อาศัยหนาแน่นน้อย)</option>
                                <option value="สีส้ม (ที่อยู่อาศัยหนาแน่นปานกลาง) " <?php echo e($job->prop_type=='สีส้ม (ที่อยู่อาศัยหนาแน่นปานกลาง) '?'selected':''); ?>>สีส้ม (ที่อยู่อาศัยหนาแน่นปานกลาง) </option>
                                <option value="สีน้ำตาล (ที่อยู่อาศัยหนาแน่นมาก) " <?php echo e($job->prop_type=='สีน้ำตาล (ที่อยู่อาศัยหนาแน่นมาก) '?'selected':''); ?>>สีน้ำตาล (ที่อยู่อาศัยหนาแน่นมาก) </option>
                                <option value="สีแดง  (พาณิชยกรรม) " <?php echo e($job->prop_type=='สีแดง  (พาณิชยกรรม) '?'selected':''); ?>>สีแดง (พาณิชยกรรม) </option>
                                <option value="สีเขียว (ชนบทและเกษตรกรรม)" <?php echo e($job->prop_type=='สีเขียว (ชนบทและเกษตรกรรม)'?'selected':''); ?>>สีเขียว (ชนบทและเกษตรกรรม)</option>
                                <option value="ถนนลูกรัง" <?php echo e($job->prop_type=='ถนนลูกรัง'?'selected':''); ?>>ถนนลูกรัง</option>
                                <option value="สีม่วง (อุตสาหกรรม) " <?php echo e($job->prop_type=='สีม่วง (อุตสาหกรรม) '?'selected':''); ?>>สีม่วง (อุตสาหกรรม) </option>
                                <option value="สีชมพู (ชุมชน)" <?php echo e($job->prop_type=='สีชมพู (ชุมชน)'?'selected':''); ?>>สีชมพู (ชุมชน)</option>
                                <option value="สีขาวมีกรอบและเส้นทแยงสีเขียว  (อนุรักษ์ชนบทและเกษตรกรรม)" <?php echo e($job->prop_type=='สีขาวมีกรอบและเส้นทแยงสีเขียว  (อนุรักษ์ชนบทและเกษตรกรรม)'?'selected':''); ?>>สีขาวมีกรอบและเส้นทแยงสีเขียว (อนุรักษ์ชนบทและเกษตรกรรม)</option>
                                <option value="นอกเขตบังคับกำหนดผังเมืองรวม" <?php echo e($job->prop_type=='นอกเขตบังคับกำหนดผังเมืองรวม'?'selected':''); ?>>นอกเขตบังคับกำหนดผังเมืองรวม</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">มูลค่าตลาดทรัพย์สิน</label>
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
                            <label class="float-right">มูลค่าบังคับขาย (%)</label>
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
                            <label class="float-right">ผู้ประเมิน</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="roomtype" class="form-control<?php echo e($errors->has('roomtype') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->roomtype); ?>">
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ผู้ตรวจสอบรายงาน</label>
                        </div>
                        <div class="col-md-6">
                            <select name="prop_type" class="form-control">
                                <option value="นายสาโรจน์ พ่วงศรี - ผู้ประเมินหลักชั้นวุฒิ วฒ. 157" <?php echo e($job->prop_type=='นายสาโรจน์ พ่วงศรี - ผู้ประเมินหลักชั้นวุฒิ วฒ. 157'?'selected':''); ?>>นายสาโรจน์ พ่วงศรี - ผู้ประเมินหลักชั้นวุฒิ วฒ. 157</option>
                                <option value="นายมนต์ชัย มณีวงศ์ - ผู้ประเมินหลักชั้นสามัญ สม. 671" <?php echo e($job->prop_type=='นายมนต์ชัย มณีวงศ์ - ผู้ประเมินหลักชั้นสามัญ สม. 671'?'selected':''); ?>>นายมนต์ชัย มณีวงศ์ - ผู้ประเมินหลักชั้นสามัญ สม. 671</option>
                                <option value="นายนิรันดร เอื้อเฟื้อ - ผู้ประเมินหลักชั้นวิสามัญ วส. 566" <?php echo e($job->prop_type=='นายนิรันดร เอื้อเฟื้อ - ผู้ประเมินหลักชั้นวิสามัญ วส. 566'?'selected':''); ?>>นายนิรันดร เอื้อเฟื้อ - ผู้ประเมินหลักชั้นวิสามัญ วส. 566</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">มูลค่าประกันอัคคีภัย (บาท/ตร.ม.)</label>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <?php if($errors->has('roomtype')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('roomtype')); ?></strong>
                                </span>
                                <?php endif; ?>

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <p>บาท/ตร.ม.</p>
                                    </div>
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
<?php echo e(csrf_field()); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/report/editcontent/editcontent6.blade.php ENDPATH**/ ?>