<!DOCTYPE html>
<html>
<head>
	<title>Upload Single File</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<?php if(count($errors) > 0): ?>
		   <div class="alert alert-danger">
		     Upload Validation Error<br><br>
			     <ul>
				      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				       <li><?php echo e($error); ?></li>
				      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			     </ul>
		    </div>
		<?php endif; ?>

		<?php if($message = Session::get('success')): ?>
		   <div class="alert alert-success alert-block">
		    	<button type="button" class="close" data-dismiss="alert">×</button>
		        <strong><?php echo e($message); ?></strong>
		   </div>
		   <img src="/img/<?php echo e(Session::get('path')); ?>" width="400" />
		<?php endif; ?>

		<br><br>
		<form method="post" action="<?php echo e(url('/upload1')); ?>" enctype="multipart/form-data">
			<?php echo e(csrf_field()); ?>

			<div class="form-group">
				<table class="table">
					<tr>
						<td width="40%" align="right"><label>select file</label></td>
						<td width="30"><input type="file" name="select_image" /></td>
						<td width="30%" align="left"><input type="submit" name="upload" class="btn btn-primary" value="อัพโหลด"></td>
					</tr>
					<tr>
						<td width="40%" align="right"></td>
						<td width="30"><span class="text-muted">jpg, png, gif</span></td>
						<td width="30%" align="left"></td>
					</tr>
					
				</table>
			</div>
		</form>
	</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/upload1.blade.php ENDPATH**/ ?>