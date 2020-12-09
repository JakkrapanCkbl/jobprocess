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
                        .float-right {
                            font-size: 19px;
                        }
                    </style>

                    <div class="container">
                        <div class="row ">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">( BF/R )</label>
                            </div>
                            <div class="col-md-6">
                                <select name="jobtype" class="form-control">
                                    <option value="BF" selected>BF</option>
                                    <option value="R">R</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">รายงานเลขที่</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="jobcode" class="form-control<?php echo e($errors->has('jobcode') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->jobcode); ?>">
                                <?php if($errors->has('jobcode')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('jobcode')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ส่งธนาคาร</label>
                            </div>
                            <div class="col-md-6">
                                <select name="client" id="client" class="form-control" tabindex="-1" aria-hidden="true" onchange="selectElement('client', this.value)">
                                    <option value="UOB" <?php echo e($job->client=='UOB'?'selected':''); ?>>UOB</option>
                                    <option value="KK" <?php echo e($job->client=='KK'?'selected':''); ?>>KK</option>
                                    <option value="CIMB" <?php echo e($job->client=='CIMB'?'selected':''); ?>>CIMB</option>
                                    <option value="SCB" <?php echo e($job->client=='SCB'?'selected':''); ?>>SCB</option>
                                    <option value="BOC" <?php echo e($job->client=='UOB'?'selected':''); ?>>BOC</option>
                                    <option value="ICBC" <?php echo e($job->client=='ICBC'?'selected':''); ?>>ICBC</option>
                                    <option value="LHB" <?php echo e($job->client=='LHB'?'selected':''); ?>>LHB</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ID (KK/UOB)</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="reportcode" class="form-control<?php echo e($errors->has('reportcode') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->reportcode); ?>">
                                <?php if($errors->has('reportcode')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('reportcode')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">รายงานภาษา</label>
                            </div>
                            <div class="col-md-6">
                                <select name="jobtype" class="form-control">
                                    <option value="ไทย 1 ชุด" <?php echo e($job->jobtype=='ไทย 1 ชุด'?'selected':''); ?>>ไทย 1 ชุด</option>
                                    <option value="ไทย 2 ชุด" <?php echo e($job->jobtype=='ไทย 2 ชุด'?'selected':''); ?>>ไทย 2 ชุด</option>
                                    <option value="อังกฤษ 2 ชุด" <?php echo e($job->jobtype=='อังกฤษ 2 ชุด'?'selected':''); ?>>อังกฤษ 2 ชุด</option>
                                    <option value="ไทย 2 ชุด + อังกฤษ 2 ชุด" <?php echo e($job->jobtype=='ไทย 2 ชุด + อังกฤษ 2 ชุด'?'selected':''); ?>>ไทย 2 ชุด + อังกฤษ 2 ชุด</option>
                                    <option value="-" <?php echo e($job->jobtype=='-'?'selected':''); ?>>-</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">วัตถุประสงค์การประเมิน</label>
                            </div>
                            <div class="col-md-6">
                                <select name="obj_id" class="form-control">
                                    <option value="1" <?php echo e($job->obj_id=='1'?'selected':''); ?>>เพื่อประกอบการพิจารณาสินเชื่อ</option>
                                    <option value="2" <?php echo e($job->obj_id=='2'?'selected':''); ?>>เพื่อทบทวนราคาประเมิน</option>
                                    <option value="3" <?php echo e($job->obj_id=='3'?'selected':''); ?>>ทราบมูลค่าตลาด</option>
                                    <option value="4" <?php echo e($job->obj_id=='4'?'selected':''); ?>>สาธารณะ</option>
                                    <option value="5" <?php echo e($job->obj_id=='5'?'selected':''); ?>>บันทึกมูลค่าทางบัญชี</option>
                                    <option value="6" <?php echo e($job->obj_id=='6'?'selected':''); ?>>พิจารณาภายในบริษัท, ใช้เป็นข้อมูลภายในบริษัท</option>
                                    <option value="7" <?php echo e($job->obj_id=='7'?'selected':''); ?>>เพื่ออ้างอิงในการเจรจาต่อรองราคา</option>
                                    <option value="8" <?php echo e($job->obj_id=='8'?'selected':''); ?>>เพื่อกำหนดราคาซื้อขายทอดตลาด</option>
                                    <option value="9" <?php echo e($job->obj_id=='9'?'selected':''); ?>>เพื่อประกอบการตั้งราคาขายทรัพย์สิน</option>
                                    <option value="10" <?php echo e($job->obj_id=='10'?'selected':''); ?>>ปรับปรุงโครงสร้างหนี้</option>
                                    <option value="11" <?php echo e($job->obj_id=='11'?'selected':''); ?>>อื่น ๆ</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ลูกค้าราย / ผู้ติดต่อ</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="customer" class="form-control<?php echo e($errors->has('customer') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->customer); ?>">
                                <?php if($errors->has('customer')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('customer')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">โทร</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="customer_tel" class="form-control<?php echo e($errors->has('customer_tel') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->customer_tel); ?>">
                                <?php if($errors->has('customer_tel')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('customer_tel')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">Job Size</label>
                            </div>
                            <div class="col-md-6">
                                <select name="jobsize" class="form-control">
                                    <option value="HL" <?php echo e($job->jobsize=='HL'?'selected':''); ?>>HL</option>
                                    <option value="S" <?php echo e($job->jobsize=='S'?'selected':''); ?>>S</option>
                                    <option value="L" <?php echo e($job->jobsize=='L'?'selected':''); ?>>L</option>
                                    <option value="-" <?php echo e($job->jobsize=='-'?'selected':''); ?>>-</option>
                                </select>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">Job Difficulty</label>
                            </div>
                            <div class="col-md-6">
                                <select name="easydiff" class="form-control">
                                    <option value="NORM" <?php echo e($job->easydiff=='NORM'?'selected':''); ?>>Normal</option>
                                    <option value="DIFF" <?php echo e($job->easydiff=='DIFF'?'selected':''); ?>>Difficult</option>
                                </select>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ด่วน</label>
                            </div>
                            <div class="col-md-6">
                                <select name="easydiff" class="form-control">
                                    <option value="0" <?php echo e($job->easydiff=='NORM'?'selected':''); ?>>ไม่</option>
                                    <option value="1" <?php echo e($job->easydiff=='DIFF'?'selected':''); ?>>ด่วน</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ค่าประเมิน (Net)</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="valuationfee" id="valuationfee" class="form-control<?php echo e($errors->has('valuationfee') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->valuationfee); ?>" 
                                oninput="valuationfeeVat.value=parseInt(valuationfee.value)*107/100">
                                <?php if($errors->has('valuationfee')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('valuationfee')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ค่าประเมิน (+VAT)</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="valuationfeeVat" id="valuationfeeVat" class="form-control<?php echo e($errors->has('valuationfee') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->valuationfee*107/100); ?>">
                                    <?php if($errors->has('valuationfee')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('valuationfee')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">เงื่อนไขการเก็บเงินลูกค้า</label>
                            </div>
                            <div class="col-md-6">
                                <select name="valuationfee_case" class="form-control">
                                    <option value="100% วางบิลธนาคาร" <?php echo e($job->valuationfee_case=='100% วางบิลธนาคาร'?'selected':''); ?>>100% วางบิลธนาคาร</option>
                                    <option value="100% เก็บเงินลูกค้าหน้างาน" <?php echo e($job->valuationfee_case=='100% เก็บเงินลูกค้าหน้างาน'?'selected':''); ?>>100% เก็บเงินลูกค้าหน้างาน</option>
                                    <option value="50/50 หน้างาน" <?php echo e($job->valuationfee_case=='50/50 หน้างาน'?'selected':''); ?>>50/50 หน้างาน</option>
                                    <option value="100% ณ วันที่มอบรายงาน" <?php echo e($job->valuationfee_case=='100% ณ วันที่มอบรายงาน'?'selected':''); ?>>100% ณ วันที่มอบรายงาน</option>
                                </select>
                            </div>

                        </div>


                        <!-- add -->
                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">Valuer</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="valuer_n" class="form-control<?php echo e($errors->has('valuer_n') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->valuer_n); ?>">
                                    <?php if($errors->has('valuer_n')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('valuer_n')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </div>

                        <!-- add -->
                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">Approver</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="headvaluer_n" class="form-control<?php echo e($errors->has('headvaluer_n') ? ' is-invalid' : ''); ?>" value="<?php echo e($job->headvaluer_n); ?>">
                                <?php if($errors->has('headvaluer_n')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('headvaluer_n')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>

                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="form-group col-md-2"></div>
                                <div class="form-group col-md-2">
                                    <label>วันที่รับงาน</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-calendar tx-16 lh-0 op-6"></i>
                                            </div>
                                        </div>
                                        <input name="startdate" class="form-control fc-datepicker" placeholder="d/m/y" type="text" value="<?php echo e(date('d/m/y', strtotime($job->startdate))); ?>">
                                    </div>
                                </div>

                                <div class="form-group col-md-2">
                                    <label>วันที่สำรวจ</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-calendar tx-16 lh-0 op-6"></i>
                                            </div>
                                        </div>
                                        <input name="inspectiondate" class="form-control fc-datepicker" placeholder="d/m/y" type="text" value="<?php echo e(date('d/m/y', strtotime($job->inspectiondate))); ?>">
                                    </div>
                                </div>

                                <div class="form-group col-md-2">
                                    <label>วันที่ส่ง</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-calendar tx-16 lh-0 op-6"></i>
                                            </div>
                                        </div>
                                        <input name="lcduedate" class="form-control fc-datepicker" placeholder="d/m/y" type="text" value="<?php echo e(date('d/m/y', strtotime($job->lcduedate))); ?>">
                                    </div>
                                </div>



                                <div class="form-group col-md-2">
                                    <label>Due Date</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-calendar tx-16 lh-0 op-6"></i>
                                            </div>
                                        </div>
                                        <input name="clientduedate" class="form-control fc-datepicker" placeholder="d/m/y" type="text" value="<?php echo e(date('d/m/y', strtotime($job->clientduedate))); ?>">
                                    </div>
                                </div>


                            </div>
                        </div>



                        <!-- </div> -->

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
<?php echo e(csrf_field()); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/admin/editcontent/vertical_editcontent1.blade.php ENDPATH**/ ?>