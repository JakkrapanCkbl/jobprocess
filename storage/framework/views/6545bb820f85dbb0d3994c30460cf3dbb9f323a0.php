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
                            <label class="float-right">บ้านเลขที่ / เลขที่ห้อง</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="address_no" class="form-control<?php echo e($errors->has('address_no') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->address_no); ?>">
                            <?php if($errors->has('address_no')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('address_no')); ?></strong>
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
                                    <select name="areaunit" class="form-control">
                                        <option value="ตร.ม." <?php echo e($job->areaunit=='ตร.ม.'?'selected':''); ?>>ตร.ม.</option>
                                        <option value="ตร.ว." <?php echo e($job->areaunit=='ตร.ว.'?'selected':''); ?>>ตร.ว.</option>
                                        <option value="ไร่" <?php echo e($job->areaunit=='ไร่'?'selected':''); ?>>ไร่</option>
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
                            <label class="float-right">อำเภอ/เขต (ตามเขตปกครอง)</label>
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
                            <label class="float-right">ตำบล/แขวง (ตามเขตปกครอง)</label>
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

               



                

               

            </div>

        </div>
    </div>
    <!-- </div> -->
    <!-- </div> -->
</div>
<?php echo e(csrf_field()); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/admin/editcontent/vertical_editcontent2.blade.php ENDPATH**/ ?>