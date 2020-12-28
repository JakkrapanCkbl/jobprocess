<div class="col-md-12 col-xl-12">
	<div class="card">

		<!-- <div class="card-body p-6"> -->
		<div class="panel panel-primary">
			<div class="tab-menu-heading">
				<div class="tabs-menu ">
					<!-- Tabs -->
					<ul class="nav panel-tabs">
						<li class=""><a href="#tab1" class="active" data-toggle="tab">ข้อมูลงาน</a></li>
						<li><a href="#tab2" data-toggle="tab" class="">รายละเอียดทรัพย์สิน</a></li>
					</ul>
				</div>
			</div>
			<div class="panel-body tabs-menu-body">
				<div class="tab-content">
					<div class="tab-pane active" id="tab1">
						<?php echo $__env->make('admin.editcontent.vertical_editcontent1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</div>
					<div class="tab-pane" id="tab2">
						<?php echo $__env->make('admin.editcontent.vertical_editcontent2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- </div> -->
	</div>
</div><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/admin/tab.blade.php ENDPATH**/ ?>