<div class="col-md-12 col-xl-12">
	<div class="card">

		<!-- <div class="card-body p-6"> -->
		<div class="panel panel-primary">
			<div class="tab-menu-heading">
				<div class="tabs-menu ">
					<!-- Tabs -->
					<ul class="nav panel-tabs">
						<li><a href="#tab1" class="active" data-toggle="tab">1. ลูกค้า/Date</a></li>
						<li><a href="#tab2" data-toggle="tab">2. ข้อมูลอช.2</a></li>
						<li><a href="#tab3" data-toggle="tab">3. ห้องชุดที่ประเมิน</a></li>
						<li><a href="#tab4" data-toggle="tab">4. ข้อมูลอาคารชุด</a></li>
						<li><a href="#tab5" data-toggle="tab">5. ทำเลที่ตั้ง</a></li>
						<li><a href="#tab6" data-toggle="tab">6. Land Use/กม./Value</a></li>
					</ul>
				</div>
			</div>
			<div class="panel-body tabs-menu-body">
				<div class="tab-content">
					<div class="tab-pane active" id="tab1">
						@include('report.editcontent.editcontent1')
					</div>
					<div class="tab-pane" id="tab2">
						@include('report.editcontent.editcontent2')
					</div>
					<div class="tab-pane" id="tab3">
						@include('report.editcontent.editcontent3')
					</div>
					<div class="tab-pane" id="tab4">
						@include('report.editcontent.editcontent4')
					</div>
					<div class="tab-pane" id="tab5">
						@include('report.editcontent.editcontent5')
					</div>
					<div class="tab-pane" id="tab6">
						@include('report.editcontent.editcontent6')
					</div>
				</div>
			</div>
		</div>
		<!-- </div> -->
	</div>
</div>