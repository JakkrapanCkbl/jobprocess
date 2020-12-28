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
                            <label class="float-right">รูปแบบห้องชุด</label>
                        </div>
                        <div class="col-md-6">
                            <select name="roomtype" class="form-control">
                                <option value="Studio" <?php echo e($job->roomtype=='Studio'?'selected':''); ?>>Studio</option>
                                <option value="1 นอน/ 1 น้ำ" <?php echo e($job->roomtype=='1 นอน/ 1 น้ำ'?'selected':''); ?>>1 นอน/ 1 น้ำ</option>
                                <option value="2 นอน/ 1 น้ำ" <?php echo e($job->roomtype=='2 นอน/ 1 น้ำ'?'selected':''); ?>>2 นอน/ 1 น้ำ</option>
                                <option value="2 นอน/ 2 น้ำ" <?php echo e($job->roomtype=='2 นอน/ 2 น้ำ'?'selected':''); ?>>2 นอน/ 2 น้ำ</option>
                                <option value="3 นอน/ 2 น้ำ" <?php echo e($job->roomtype=='3 นอน/ 2 น้ำ'?'selected':''); ?>>3 นอน/ 2 น้ำ</option>
                                <option value="3 นอน/ 3 น้ำ" <?php echo e($job->roomtype=='3 นอน/ 3 น้ำ'?'selected':''); ?>>3 นอน/ 3 น้ำ</option>
                                <option value="Duplex" <?php echo e($job->roomtype=='Duplex'?'selected':''); ?>>Duplex</option>
                                <option value="Penthouse" <?php echo e($job->roomtype=='Penthouse'?'selected':''); ?>>Penthouse</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">อายุอาคาร (ปี)</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="buildingyear" class="form-control<?php echo e($errors->has('buildingyear') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->buildingyear); ?>">
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
                            <select name="buildingstatus" class="form-control">
                                <option value="ใหม่" <?php echo e($job->buildingstatus=='ใหม่'?'selected':''); ?>>ใหม่</option>
                                <option value="ดี" <?php echo e($job->buildingstatus=='ดี'?'selected':''); ?>>ดี</option>
                                <option value="ป่นกลาง" <?php echo e($job->buildingstatus=='ป่นกลาง'?'selected':''); ?>>ป่นกลาง</option>
                                <option value="เก่า" <?php echo e($job->buildingstatus=='เก่า'?'selected':''); ?>>เก่า</option>
                            </select>
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
                            <select name="roomlocation" class="form-control">
                                <option value="ห้องกลาง" <?php echo e($job->roomlocation=='ห้องกลาง'?'selected':''); ?>>ห้องกลาง</option>
                                <option value="ห้องมุม" <?php echo e($job->roomlocation=='ห้องมุม'?'selected':''); ?>>ห้องมุม</option>
                                <option value="ห้องริม" <?php echo e($job->roomlocation=='ห้องริม'?'selected':''); ?>>ห้องริม</option>
                            </select>
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
                            <select name="roomview" class="form-control">
                                <option value="วิวเมือง/เปิดโล่ง" <?php echo e($job->roomview=='วิวเมือง/เปิดโล่ง'?'selected':''); ?>>วิวเมือง/เปิดโล่ง</option>
                                <option value="วิวสระว่ายน้ำ" <?php echo e($job->roomview=='วิวสระว่ายน้ำ'?'selected':''); ?>>วิวสระว่ายน้ำ</option>
                                <option value="วิวติดอาคาร" <?php echo e($job->roomview=='วิวติดอาคาร'?'selected':''); ?>>วิวติดอาคาร</option>
                                <option value="วิวสวนสาธารณะ" <?php echo e($job->roomview=='วิวสวนสาธารณะ'?'selected':''); ?>>วิวสวนสาธารณะ</option>
                                <option value="วิวสระว่ายน้ำ/Access Pool" <?php echo e($job->roomview=='วิวสระว่ายน้ำ/Access Pool'?'selected':''); ?>>วิวสระว่ายน้ำ/Access Pool</option>
                            </select>
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
                            <select name="propertiesused" class="form-control">
                                <option value="ที่อยู่อาศัย" <?php echo e($job->propertiesused=='ที่อยู่อาศัย'?'selected':''); ?>>ที่อยู่อาศัย</option>
                                <option value="ปล่อยว่าง" <?php echo e($job->propertiesused=='ปล่อยว่าง'?'selected':''); ?>>ปล่อยว่าง</option>
                                <option value="พณิชยกรรม" <?php echo e($job->propertiesused=='พณิชยกรรม'?'selected':''); ?>>พณิชยกรรม</option>
                                <option value="อุตสาหกรรม" <?php echo e($job->propertiesused=='อุตสาหกรรม'?'selected':''); ?>>อุตสาหกรรม</option>
                                <option value="ที่อยู่อาศัยและพณิชยกรรม" <?php echo e($job->propertiesused=='ที่อยู่อาศัยและพณิชยกรรม'?'selected':''); ?>>ที่อยู่อาศัยและพณิชยกรรม</option>
                            </select>
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
                                <input class="form-check-input" type="radio" name="materialscore" value="ดีมาก" <?php echo e($job->materialscore=='ดีมาก'?'checked':''); ?>>
                                <label class="form-check-label float-right" for="materialRadio1">ดีมาก</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="materialscore" value="ดี" <?php echo e($job->materialscore=='ดี'?'checked':''); ?>>
                                <label class="form-check-label float-right" for="materialRadio2">ดี</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="materialscore" value="ปานกลาง" <?php echo e($job->materialscore=='ปานกลาง'?'checked':''); ?>>
                                <label class="form-check-label float-right" for="materialRadio1">ปานกลาง</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="materialscore" value="ต่ำ" <?php echo e($job->materialscore=='ต่ำ'?'checked':''); ?>>
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
                                <input class="form-check-input" type="radio" name="styleRadioOptions" id="styleRadio1" value="option1" <?php echo e($job->stylescore=='ดีมาก'?'checked':''); ?>>
                                <label class="form-check-label float-right" for="styleRadio1">ดีมาก</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="styleRadioOptions" id="styleRadio2" value="option2" <?php echo e($job->stylescore=='ดี'?'checked':''); ?>>
                                <label class="form-check-label float-right" for="styleRadio2">ดี</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="styleRadioOptions" id="styleRadio3" value="option3" <?php echo e($job->stylescore=='ปานกลาง'?'checked':''); ?>>
                                <label class="form-check-label float-right" for="styleRadio1">ปานกลาง</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="styleRadioOptions" id="styleRadio4" value="option4" <?php echo e($job->stylescore=='ต่ำ'?'checked':''); ?>>
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
                                <input class="form-check-input" type="checkbox" name="roommaterial[]" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">คสล.</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="roommaterial[]" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">เหล็ก</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="roommaterial[]" id="inlineCheckbox3" value="option3">
                                <div class="input-group">
                                    <input type="text" name="valuer_n" class="form-control<?php echo e($errors->has('valuer_n') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->valuer_n); ?>" placeholder="อื่น ๆ">
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
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option4">
                                <div class="input-group">
                                    <input type="text" name="valuer_n" class="form-control<?php echo e($errors->has('valuer_n') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->valuer_n); ?>" placeholder="อื่น ๆ">
                                </div>
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
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option4">
                                <div class="input-group">
                                    <input type="text" name="valuer_n" class="form-control<?php echo e($errors->has('valuer_n') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->valuer_n); ?>" placeholder="อื่น ๆ">
                                </div>
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
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                <div class="input-group">
                                    <input type="text" name="valuer_n" class="form-control<?php echo e($errors->has('valuer_n') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->valuer_n); ?>" placeholder="อื่น ๆ">
                                </div>
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
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                <div class="input-group">
                                    <input type="text" name="valuer_n" class="form-control<?php echo e($errors->has('valuer_n') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->valuer_n); ?>" placeholder="อื่น ๆ">
                                </div>
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
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                <div class="input-group">
                                    <input type="text" name="valuer_n" class="form-control<?php echo e($errors->has('valuer_n') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->valuer_n); ?>" placeholder="อื่น ๆ">
                                </div>
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


            </div>

        </div>
    </div>
    <!-- </div> -->
    <!-- </div> -->
</div>
<?php echo e(csrf_field()); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/report/editcontent/vertical_editcontent3.blade.php ENDPATH**/ ?>