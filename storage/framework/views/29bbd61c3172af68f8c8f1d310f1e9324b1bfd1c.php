<div class="container">
	<?php if(Session::has('message')): ?>
		<div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
	<?php endif; ?>
	<div class="row">
		
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Edit Job
				</div>
				<div class="card-body">

					<form action="<?php echo e(route('admininputjob.update2',[$job->id])); ?>" method="POST" enctype="multipart/form-data"><?php echo csrf_field(); ?>
						
						

						<div class="form-group">
							<label>เนื้อที่ดิน (ที่ดินโครงการ)</label>
							<input type="text" name="landsize" class="form-control<?php echo e($errors->has('landsize') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e($job->landsize); ?>">
							  <?php if($errors->has('landsize')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('landsize')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>

																	
						<div class="form-group">
							<label>จำนวนห้องชุดในโครงการ (ยูนิต)</label>
							<input type="text" name="units" class="form-control<?php echo e($errors->has('units') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e($job->units); ?>">
							  <?php if($errors->has('units')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('units')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>


						<div class="form-group">
							<label>ยอดขายโครงการประมาณ</label>
							<input type="text" name="percentsell" class="form-control<?php echo e($errors->has('percentsell') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e($job->percentsell); ?>">
							  <?php if($errors->has('percentsell')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('percentsell')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>

						
						<div class="form-group">
							<label>ราคาเริ่มต้น</label>
							<input type="text" name="startprice" class="form-control<?php echo e($errors->has('startprice') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e($job->startprice); ?>">
							  <?php if($errors->has('startprice')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('startprice')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>
						
						<div class="form-group">
							<label>รูปแบบห้องชุด</label>
							<input type="text" name="roomtype" class="form-control<?php echo e($errors->has('roomtype') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e($job->roomtype); ?>">
							  <?php if($errors->has('roomtype')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('roomtype')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>

						<div class="form-group">
							<label>สิ่งอำนวยความสะดวกภายในโครงการ</label>
							<input type="text" name="convenient" class="form-control<?php echo e($errors->has('convenient') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e($job->convenient); ?>">
							  <?php if($errors->has('convenient')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('convenient')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>

						<div class="form-group">
							<label>ตัวแทนขาย</label>
							<input type="text" name="broker" class="form-control<?php echo e($errors->has('broker') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e($job->broker); ?>">
							  <?php if($errors->has('broker')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('broker')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>

						<div class="form-group">
							<label>เริ่มเปิดโครงการ (เดือน ปี)</label>
							<input type="text" name="yearstart" class="form-control<?php echo e($errors->has('yearstart') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e($job->yearstart); ?>">
							  <?php if($errors->has('yearstart')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('yearstart')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>

						<div class="form-group">
							<label>ความคืบหน้าของโครงการ (%)</label>
							<input type="text" name="buildingprogress" class="form-control<?php echo e($errors->has('buildingprogress') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e($job->buildingprogress); ?>">
							  <?php if($errors->has('buildingprogress')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('buildingprogress')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>

						<div class="form-group">
							<label>Latitude</label>
							<input type="text" name="lat" class="form-control<?php echo e($errors->has('lat') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e($job->lat); ?>">
							  <?php if($errors->has('lat')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('lat')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>

						<div class="form-group">
							<label>Longtitude</label>
							<input type="text" name="lng" class="form-control<?php echo e($errors->has('lng') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e($job->lng); ?>">
							  <?php if($errors->has('lng')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('lng')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>

						<div class="form-group">
							<label>แหล่งข้อมูล</label>
							<input type="text" name="inforesource" class="form-control<?php echo e($errors->has('inforesource') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e($job->inforesource); ?>">
							  <?php if($errors->has('inforesource')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('inforesource')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>

						<div class="form-group">
							<label>สรุปราคา ราคาประเมินทางราชการ</label>
							<input type="text" name="assessmentvalue" class="form-control<?php echo e($errors->has('assessmentvalue') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e($job->assessmentvalue); ?>">
							  <?php if($errors->has('assessmentvalue')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('assessmentvalue')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>

						

						<div class="form-group">
							<label>สรุปราคา มูลค่าตลาดของทรัพย์สิน</label>
							<input type="text" name="marketvalue" class="form-control<?php echo e($errors->has('marketvalue') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e($job->marketvalue); ?>">
							  <?php if($errors->has('marketvalue')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('marketvalue')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-success">Update</button>
						</div>


					</form>
				</div>
		</div>
	</div>
	</div>
</div>
<?php echo e(csrf_field()); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/admin/editcontent2.blade.php ENDPATH**/ ?>