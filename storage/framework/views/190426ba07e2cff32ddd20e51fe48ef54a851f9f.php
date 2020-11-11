<div class="container">
	<?php if(Session::has('message')): ?>
		<div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
	<?php endif; ?>
	<div class="row">
		<!--<div class="col-md-2">
		  	
		</div>-->
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Edit Invoice
				</div>
				<div class="card-body">

					<form action="<?php echo e(route('invoice.update',[$invoice->id])); ?>" method="POST" enctype="multipart/form-data"><?php echo csrf_field(); ?>
						<div class="form-group">
							<label>รหัสใบแจ้งหนี้</label>
							<input type="text" name="invoiceno" class="form-control<?php echo e($errors->has('invoiceno') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e($invoice->invoiceno); ?>">
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
								<input name="invoicedate" class="form-control fc-datepicker" placeholder="y-m-d" type="text" value = "<?php echo e(date('y-m-d', strtotime($invoice->invoicedate))); ?>">
							</div>	
						</div>

						<div class="form-group">
							<label>ลูกค้า</label>
							<input type="text" name="customer" class="form-control<?php echo e($errors->has('customer') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e($invoice->customer); ?>">
							  <?php if($errors->has('customer')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('customer')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>

						<div class="form-group">
							<label>ที่อยู่</label>
							<input type="text" name="address" class="form-control<?php echo e($errors->has('address') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e($invoice->address); ?>">
							  <?php if($errors->has('address')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('address')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>
						
						<div class="form-group">
							<label>รายการ</label>
							<input type="text" name="description" class="form-control<?php echo e($errors->has('description') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e($invoice->description); ?>">
							  <?php if($errors->has('description')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('description')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>
						<div class="form-group">
							<label>จำนวน</label>
							<input type="text" name="qty" class="form-control<?php echo e($errors->has('qty') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e($invoice->qty); ?>">
							  <?php if($errors->has('qty')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('qty')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>
						<div class="form-group">
							<label>ค่า fee</label>
							<input type="text" name="amountjob" class="form-control<?php echo e($errors->has('amountjob') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e($invoice->amountjob); ?>">
							  <?php if($errors->has('amountjob')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('amountjob')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>
						<div class="form-group">
							<label>หมายเหตุ</label>
							<input type="text" name="remark" class="form-control<?php echo e($errors->has('remark') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e($invoice->remark); ?>">
							  <?php if($errors->has('remark')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('remark')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>
						<div class="form-group">
							<label>รหัสใบเสร็จรับเงิน</label>
							<input type="text" name="receiptno" class="form-control<?php echo e($errors->has('receiptno') ? ' is-invalid' : ''); ?>" 
							value="<?php echo e($invoice->receiptno); ?>">
							  <?php if($errors->has('receiptno')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('receiptno')); ?></strong>                                       
                                    </span>
                                <?php endif; ?>
						</div>

						<div class="form-group">
							<label>วันที่ใบเสร็จรับเงิน</label>
							<div class="input-group">												
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-calendar tx-16 lh-0 op-6"></i>
									</div>
								</div>
								<input name="receiptdate" class="form-control fc-datepicker" placeholder="y-m-d" type="text" value = "<?php echo e(date('y-m-d', strtotime($invoice->receiptdate))); ?>">
							</div>	
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
<?php echo e(csrf_field()); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/invoice/editcontent1.blade.php ENDPATH**/ ?>