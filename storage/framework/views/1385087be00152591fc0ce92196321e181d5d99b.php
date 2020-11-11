<!doctype html>
<html lang="en" dir="ltr">
	<head>
		
		<?php echo $__env->make('invoice.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	

	</head>

	<body class="app">

		<!-- Global Loader-->
		<div id="global-loader"><img src="<?php echo e(asset('external2/images/svgs/loader.svg')); ?>" alt="loader"></div>

		<div class="page">
			<div class="page-main">

				<?php echo $__env->make('invoice.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

				<?php echo $__env->make('invoice.menubar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				
				<div class="container content-area">
					<div class="container">
						<div class="row">
							
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										Add Invoice
									</div>
									<div class="card-body">
										<form action="<?php echo e(route('invoice.store')); ?>" method="POST" enctype="multipart/form-data"><?php echo csrf_field(); ?>

											<div class="form-group">
												<label>รหัสใบแจ้งหนี้</label>
												<input type="text" id="invoiceno" name="invoiceno" class="form-control<?php echo e($errors->has('invoiceno') ? ' is-invalid' : ''); ?>" 
												value="<?php echo e(old('invoiceno')); ?>">
												  <?php if($errors->has('invoiceno')): ?>
					                                    <span class="invalid-feedback" role="alert">
					                                        <strong><?php echo e($errors->first('invoiceno')); ?></strong>                                       
					                                    </span>
					                                <?php endif; ?>
											</div>

											<div class="form-group">
							<label>วันที่ใบแจ้งหนี้</label>
							<div class="input-group">												
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-calendar tx-16 lh-0 op-6"></i>
									</div>
								</div>
								<input id="invoicedate" name="invoicedate" class="form-control fc-datepicker" placeholder="y-m-d" type="text" value = "<?php echo e(date('y-m-d')); ?>">
							</div>	
						</div>

						<div class="form-group">
							<label>ลูกค้า</label>
							<input type="text" id="customer" name="customer" class="form-control<?php echo e($errors->has('customer') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e(old('customer')); ?>">
							  <?php if($errors->has('customer')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('customer')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>

						<div class="form-group">
							<label>ที่อยู่</label>
							<input type="text" id="address" name="address" class="form-control<?php echo e($errors->has('address') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e(old('address')); ?>">
							  <?php if($errors->has('address')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('address')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>
						
						<div class="form-group">
							<label>รายการ</label>
							<input type="text" id="description" name="description" class="form-control<?php echo e($errors->has('description') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e(old('description')); ?>">
							  <?php if($errors->has('description')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('description')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>
						<div class="form-group">
							<label>จำนวน</label>
							<input type="text" id="qty" name="qty" class="form-control<?php echo e($errors->has('qty') ? ' is-invalid' : ''); ?>" 
							value="1">
							  <?php if($errors->has('qty')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('qty')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>
						<div class="form-group">
							<label>ค่า fee</label>
							<input type="text" id="amountjob" name="amountjob" class="form-control<?php echo e($errors->has('amountjob') ? ' is-invalid' : ''); ?>" 
							value="3000">
							  <?php if($errors->has('amountjob')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('amountjob')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>
						<div class="form-group">
							<label>หมายเหตุ</label>
							<input type="text" id="remark" name="remark" class="form-control<?php echo e($errors->has('remark') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e(old('remark')); ?>">
							  <?php if($errors->has('remark')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('remark')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>
						

						<div class="form-group">
							<button type="submit" class="btn btn-success">Submit</button>
						</div>


										</form>
									</div>
							</div>
						</div>
						</div>
					</div>
					<?php echo e(csrf_field()); ?>









<?php echo $__env->make('invoice.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/invoice/create.blade.php ENDPATH**/ ?>