<?php $__env->startSection('content'); ?>
       <div class="container"> 
        <div class="row">
		<div class="col-md-12"> <br />
			<h3 align="center">แก้ไขข้อมูลงานประเมินราคา</h3> <br/>
                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <ul><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>			
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul>
                            </div>
                        <?php endif; ?>
                                              
			<form method="post" action="<?php echo e(action('JobProject_Controller@update',$id)); ?>">
				<?php echo e(csrf_field()); ?>

				<div class="form-group">
					<input type="text" name="jobcode" class="form-control" placeholder="รหัสโครงการ" value="<?php echo e($job->jobcode); ?>" />
				</div>
				<div class="form-group">
					<input type="text" name="projectname" class="form-control" placeholder="ชื่อโครงการ" value="<?php echo e($job->projectname); ?>" />
				</div>
				<div class="form-group">
					<input type="text" name="่jobsize" class="form-control" placeholder="ขนาดของงานประเมิน"  value="<?php echo e($job->jobsize); ?>" />
				</div>
				<div class="form-group">
					<input type="text" name="jobtype" class="form-control" placeholder="ประเภทงานประเมิน" value="<?php echo e($job->jobtype); ?>" />
				</div>
				<div class="form-group">
					<input type="text" name="client" class="form-control" placeholder="ผู้ว่าจ้าง" value="<?php echo e($job->client); ?>" />
				</div>
				<div class="form-group">
					<input type="text" name="customer" class="form-control" placeholder="ลูกค้าของผู้ว่าจ้าง" value="<?php echo e($job->customer); ?>" />
				</div>
				<div class="form-group">
					<input type="text" name="prop_type" class="form-control" placeholder="ประเภททรัพย์สิน" value="<?php echo e($job->prop_type); ?>" />
				</div>
				<div class="form-group">
					<input type="text" name="prop_size" class="form-control" placeholder="ขนาดทรัพย์สิน" value="<?php echo e($job->prop_size); ?>" />
				</div>
				<div class="form-group">
					<input type="text" name="proplocation" class="form-control" placeholder="ทำเลที่ตั้ง" value="<?php echo e($job->proplocation); ?>" />
				</div>
				
				<div class="form-group">					
					วันที่เริ่มงาน :
					<input type="date" name="startdate" value="<?php echo e($job->startdate); ?>">
					วันที่สำรวจ :
					<input type="date" name="inspectiondate" value="<?php echo e($job->inspectiondate); ?>" />
					กำหนดส่งงานของ LC : 
					<input type="date" name="lcduedate" value="<?php echo e($job->lcduedate); ?>" />
					กำหนดส่งงานให้ผู้ว่าจ้าง :
					<input type="date" name="clientduedate" value="<?php echo e($job->clientduedate); ?>" />
				</div>
				<div class="form-group">
					<input type="text" name="headvaluer" class="form-control" placeholder="ผู้ประเมินราคาหลัก" value="<?php echo e($job->headvaluer); ?>" />
				</div>
				<div class="form-group">
					<input type="text" name="valuer" class="form-control" placeholder="ผู้ประเมินราคา" value="<?php echo e($job->valuer); ?>" />
				</div>
				<div class="form-group">
					<input type="text" name="percentfinish" class="form-control" placeholder="เปอร์เซ็นความคืบหน้า" value="<?php echo e($job->percentfinish); ?>" />
				</div>
										        
				<div class="form-group">
					<a href="<?php echo e(URL::previous()); ?>" class="btn btn-primary">&nbsp;&nbsp;Back&nbsp;&nbsp;</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" class="btn btn-success" value="Update" />					
				</div>             
				<input type="hidden" name="_method" value="PATCH" />
				
			</form>
			
		</div>
	  </div>	
    </div>

	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.usermenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/jobproject/edit.blade.php ENDPATH**/ ?>