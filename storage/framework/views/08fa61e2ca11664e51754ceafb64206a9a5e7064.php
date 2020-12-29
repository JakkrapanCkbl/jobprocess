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


            <div class="card-body" style="background-color: #f8ede4;">

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
                            <select name="propertiesnearused" class="form-control">
                                <option value="ที่อยู่อาศัย" <?php echo e($job->propertiesnearused=='ที่อยู่อาศัย'?'selected':''); ?>>ที่อยู่อาศัย</option>
                                <option value="ปล่อยว่าง" <?php echo e($job->propertiesnearused=='ปล่อยว่าง'?'selected':''); ?>>ปล่อยว่าง</option>
                                <option value="พณิชยกรรม" <?php echo e($job->propertiesnearused=='พณิชยกรรม'?'selected':''); ?>>พณิชยกรรม</option>
                                <option value="อุตสาหกรรม" <?php echo e($job->propertiesnearused=='อุตสาหกรรม'?'selected':''); ?>>อุตสาหกรรม</option>
                                <option value="ที่อยู่อาศัยและพณิชยกรรม" <?php echo e($job->propertiesnearused=='ที่อยู่อาศัยและพณิชยกรรม'?'selected':''); ?>>ที่อยู่อาศัยและพณิชยกรรม</option>
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
                            <select name="prosperity" class="form-control">
                                <option value="เจริญมาก" <?php echo e($job->prosperity=='เจริญมาก'?'selected':''); ?>>เจริญมาก</option>
                                <option value="เจริญปานกลาง" <?php echo e($job->prosperity=='เจริญปานกลาง'?'selected':''); ?>>เจริญปานกลาง</option>
                                <option value="เจริญน้อย" <?php echo e($job->prosperity=='เจริญน้อย'?'selected':''); ?>>เจริญน้อย</option>
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
                            <select name="liquidity" class="form-control">
                                <option value="สูง" <?php echo e($job->liquidity=='สูง'?'selected':''); ?>>สูง</option>
                                <option value="ปานกลาง" <?php echo e($job->liquidity=='ปานกลาง'?'selected':''); ?>>ปานกลาง</option>
                                <option value="ต่ำ" <?php echo e($job->liquidity=='ต่ำ'?'selected':''); ?>>ต่ำ</option>
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
                            <select name="planlaw" class="form-control">
                                <option value="สีเหลือง (ที่อยู่อาศัยหนาแน่นน้อย)" <?php echo e($job->planlaw=='สีเหลือง (ที่อยู่อาศัยหนาแน่นน้อย)'?'selected':''); ?>>สีเหลือง (ที่อยู่อาศัยหนาแน่นน้อย)</option>
                                <option value="สีส้ม (ที่อยู่อาศัยหนาแน่นปานกลาง)" <?php echo e($job->planlaw=='สีส้ม (ที่อยู่อาศัยหนาแน่นปานกลาง)'?'selected':''); ?>>สีส้ม (ที่อยู่อาศัยหนาแน่นปานกลาง)</option>
                                <option value="สีน้ำตาล (ที่อยู่อาศัยหนาแน่นมาก)" <?php echo e($job->planlaw=='สีน้ำตาล (ที่อยู่อาศัยหนาแน่นมาก)'?'selected':''); ?>>สีน้ำตาล (ที่อยู่อาศัยหนาแน่นมาก)</option>
                                <option value="สีแดง (พาณิชยกรรม)" <?php echo e($job->planlaw=='สีแดง (พาณิชยกรรม)'?'selected':''); ?>>สีแดง (พาณิชยกรรม)</option>
                                <option value="สีเขียว (ชนบทและเกษตรกรรม)" <?php echo e($job->planlaw=='สีเขียว (ชนบทและเกษตรกรรม)'?'selected':''); ?>>สีเขียว (ชนบทและเกษตรกรรม)</option>
                                <option value="ถนนลูกรัง" <?php echo e($job->planlaw=='ถนนลูกรัง'?'selected':''); ?>>ถนนลูกรัง</option>
                                <option value="สีม่วง (อุตสาหกรรม)" <?php echo e($job->planlaw=='สีม่วง (อุตสาหกรรม)'?'selected':''); ?>>สีม่วง (อุตสาหกรรม)</option>
                                <option value="สีชมพู (ชุมชน)" <?php echo e($job->planlaw=='สีชมพู (ชุมชน)'?'selected':''); ?>>สีชมพู (ชุมชน)</option>
                                <option value="สีขาวมีกรอบและเส้นทแยงสีเขียว (อนุรักษ์ชนบทและเกษตรกรรม)" <?php echo e($job->planlaw=='สีขาวมีกรอบและเส้นทแยงสีเขียว (อนุรักษ์ชนบทและเกษตรกรรม)'?'selected':''); ?>>สีขาวมีกรอบและเส้นทแยงสีเขียว (อนุรักษ์ชนบทและเกษตรกรรม)</option>
                                <option value="นอกเขตบังคับกำหนดผังเมืองรวม" <?php echo e($job->planlaw=='นอกเขตบังคับกำหนดผังเมืองรวม'?'selected':''); ?>>นอกเขตบังคับกำหนดผังเมืองรวม</option>
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
                                <input type="text" name="marketvalue" class="form-control<?php echo e($errors->has('marketvalue') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->marketvalue); ?>">
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
                                <input type="text" name="forcesale" class="form-control<?php echo e($errors->has('forcesale') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->forcesale); ?>">
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
                            <input type="text" name="valuer_n" class="form-control<?php echo e($errors->has('valuer_n') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->valuer_n); ?>">
                        </div>

                    </div>
                </div>

                <div class="container">

                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ผู้ตรวจสอบรายงาน</label>
                        </div>
                        <div class="col-md-6">
                            <select name="headvaluer_n" class="form-control">
                                <option value="สาโรจน์ พ่วงศรี" <?php echo e($job->headvaluer_n=='สาโรจน์ พ่วงศรี'?'selected':''); ?>>สาโรจน์ พ่วงศรี</option>
                                <option value="มนต์ชัย มณีวงศ์" <?php echo e($job->headvaluer_n=='มนต์ชัย มณีวงศ์'?'selected':''); ?>>มนต์ชัย มณีวงศ์</option>
                                <option value="นิรันดร เอื้อเฟื้อ" <?php echo e($job->headvaluer_n=='นิรันดร เอื้อเฟื้อ'?'selected':''); ?>>นิรันดร เอื้อเฟื้อ</option>
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
                                <input type="text" name="fireinsurance" class="form-control<?php echo e($errors->has('fireinsurance') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->fireinsurance); ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <p>บาท/ตร.ม.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <br>

                <div class="container">

                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">เนื้อที่ตามเอกสารสิทธิ์ห้องชุด</label>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group">
                                <input type="text" name="govprice_row1a" class="form-control<?php echo e($errors->has('roomarea') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->roomarea); ?>">
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

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">- พื้นที่ภายในห้องชุด</label>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group">
                                <input type="text" name="govprice_row2a" class="form-control<?php echo e($errors->has('room_indoor_area') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->room_indoor_area); ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <p>ตร.ม.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <input type="text" name="govprice_row2b" class="form-control<?php echo e($errors->has('room_indoor_price') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->room_indoor_price); ?>">
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="govprice_row2c" class="form-control<?php echo e($errors->has('govprice_row2c') ? ' is-invalid' : ''); ?>" disabled>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="govprice_row2d" class="form-control<?php echo e($errors->has('room_indoor_gov_price') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->room_indoor_gov_price); ?>">
                        </div>

                    </div>
                </div>
                <div class="container">

                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">- ระเบียงที่วางแอร์</label>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group">
                                <input type="text" name="govprice_row3a" class="form-control<?php echo e($errors->has('room_balcony_area') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->room_balcony_area); ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <p>ตร.ม.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <input type="text" name="govprice_row3b" class="form-control<?php echo e($errors->has('room_balcony_price') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->room_balcony_price); ?>">
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="govprice_row3c" class="form-control<?php echo e($errors->has('govprice_row3c') ? ' is-invalid' : ''); ?>" disabled>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="govprice_row3d" class="form-control<?php echo e($errors->has('room_balcony_gov_price	') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->room_balcony_gov_price); ?>">
                        </div>

                    </div>
                </div>

                <div class="container">

                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">- ที่จอดรถส่วนบุคคล</label>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group">
                                <input type="text" name="govprice_row4a" class="form-control<?php echo e($errors->has('room_parking_area') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->room_parking_area); ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <p>ตร.ม.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <input type="text" name="govprice_row4b" class="form-control<?php echo e($errors->has('govprice_row4b') ? ' is-invalid' : ''); ?>" disabled>
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="govprice_row4c" class="form-control<?php echo e($errors->has('room_parking_price') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->room_parking_price); ?>">
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="govprice_row4d" class="form-control<?php echo e($errors->has('room_parking_gov_price') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->room_parking_gov_price); ?>">
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                            <input type="text" name="govprice_row5a" class="form-control<?php echo e($errors->has('room_total_gov_price') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->room_total_gov_price); ?>">
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