<!DOCTYPE html>
<html>

<head>
	<title></title>
	@include('../partials.head')

	<!-- Custom styles for this template -->
	<link href="../css/simple-sidebar.css" rel="stylesheet">


	<style>
		/* .glyphicon {
			position: relative;
			top: 1px;
			display: inline-block;
			font: normal normal 16px/1 'Glyphicons Halflings';
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			margin-right: 4px;
		} */

		/* Add icons you will be using below */
		.glyphicon-chevron-right:before {
			content: "\2a";
		}

		.glyphicon-chevron-down:before {
			content: '\e105';
		}
	</style>
</head>

<body>

	<div class="d-flex" id="wrapper">

		<!-- Sidebar -->
		<div class="bg-light border-right" id="sidebar-wrapper">
			<div class="sidebar-heading">Dummy</div>
			<div class="sidebar-heading">Dummy</div>
			<div class="sidebar-heading">Menu</div>
			<div class="list-group list-group-flush">
				<a href="#item-1" class="list-group-item" data-toggle="collapse">
					<i class="glyphicon glyphicon-chevron-right"></i> Valuer / Checker
				</a>
				<div class="list-group collapse" id="item-1">
					<a href="#" class="list-group-item">ผังเมือง</a>
					<a href="#" class="list-group-item">กฎหมายควบคุมอาคาร</a>
					<a href="#" class="list-group-item">โครงการพัฒนา/เวนคืนรัฐบาล</a>
					<a href="#" class="list-group-item">ตรวจสอบป่าไม้</a>
					<a href="#" class="list-group-item">เสาไฟฟ้าแรงสูง</a>
					<a href="#" class="list-group-item">ค่าก่อสร้างทางราชการ</a>
					<a href="#" class="list-group-item">ค่าก่อสร้างของสมาคม</a>
					<a href="#" class="list-group-item">ต้นทุนค่าก่อสร้าง LC</a>
					<a href="#" class="list-group-item">วัสดุก่อสร้าง</a>
				</div>
				<a href="#item-2" class="list-group-item" data-toggle="collapse">
					<i class="glyphicon glyphicon-chevron-right"></i>ตัวอย่างรายงาน
				</a>
				<div class="list-group collapse" id="item-2">
					<a href="#" class="list-group-item">1. ห้องชุด</a>
					<a href="#" class="list-group-item">2. บ้านเดี่ยว</a>
					<a href="#" class="list-group-item">3. บ้านแฝด</a>
					<a href="#" class="list-group-item">4. ทาวน์เฮ้าส์/ทาวน์โฮม</a>
					<a href="#" class="list-group-item">5. ตึกแถว</a>
					<a href="#" class="list-group-item">6. ที่ดินว่างเปล่า</a>
					<a href="#" class="list-group-item">7. โรงงาน/โกดัง</a>
					<a href="#" class="list-group-item">8. อพาร์ทเม้นท์</a>
					<a href="#" class="list-group-item">9. โรงแรม</a>
					<a href="#" class="list-group-item">10. อาคารสำนักงาน</a>
					<a href="#" class="list-group-item">11. โฮมออฟฟิศ/มินิออฟฟิศ</a>
					<a href="#" class="list-group-item">12. ที่ดินพร้อมสิ่งปลูกสร้าง</a>
					<a href="#" class="list-group-item">13. สิทธิการเช่า</a>
					<a href="#" class="list-group-item">14. เครื่องจักร</a>
					<a href="#" class="list-group-item">15. อื่นๆ</a>
				</div>

				<a href=""></a>
				<a href="#item-3" class="list-group-item" data-toggle="collapse">
					<i class="fas fa-chevron-right click-toggle">&#xe073;</i>Template
				</a>
				<div class="list-group collapse" id="item-3">

					<a href="#item-3-1" class="list-group-item" data-toggle="collapse">
						<i class="glyphicon glyphicon-chevron-right"></i>Appendix
					</a>
					<div class="list-group collapse" id="item-3-1">

						<a href="#item-3-1-1" class="list-group-item" data-toggle="collapse">
							<i class="glyphicon glyphicon-chevron-right"></i>1. CD
						</a>
						<div class="list-group collapse" id="item-3-1-1">
							<a href="#" class="list-group-item">แผนที่</a>
							<a href="#" class="list-group-item">ภาพถ่ายทางอากาศ</a>
							<a href="#" class="list-group-item">ผังโครงการ</a>
							<a href="#" class="list-group-item">แปลนชั้น</a>
							<a href="#" class="list-group-item">แปลนห้องชุด</a>
						</div>

						<a href="#item-3-1-2" class="list-group-item" data-toggle="collapse">
							<i class="glyphicon glyphicon-chevron-right"></i>2. DH/SDH/TW/TH
						</a>
						<div class="list-group collapse" id="item-3-1-2">
							<a href="#" class="list-group-item">แผนที่</a>
							<a href="#" class="list-group-item">ภาพถ่ายทางอากาศ</a>
							<a href="#" class="list-group-item">ผังเมือง</a>
							<a href="#" class="list-group-item">ผังโครงการ</a>
							<a href="#" class="list-group-item">ผังที่ดิน</a>
							<a href="#" class="list-group-item">ถนนภาระจำยอมระวางที่ดิน</a>
							<a href="#" class="list-group-item">ผังบริเวณ</a>
							<a href="#" class="list-group-item">แปลนอาคาร</a>
						</div>

						<a href="#item-3-1-3" class="list-group-item" data-toggle="collapse">
							<i class="glyphicon glyphicon-chevron-right"></i>3. VL
						</a>
						<div class="list-group collapse" id="item-3-1-3">
							<a href="#" class="list-group-item">แผนที่</a>
							<a href="#" class="list-group-item">ภาพถ่ายทางอากาศ</a>
							<a href="#" class="list-group-item">ผังเมือง</a>
							<a href="#" class="list-group-item">ผังที่ดิน</a>
							<a href="#" class="list-group-item">ถนนภาระจำยอมระวางที่ดิน</a>
						</div>

						<a href="#item-3-1-4" class="list-group-item" data-toggle="collapse">
							<i class="glyphicon glyphicon-chevron-right"></i>4. FA
						</a>
						<div class="list-group collapse" id="item-3-1-4">
							<a href="#" class="list-group-item">แผนที่</a>
							<a href="#" class="list-group-item">ภาพถ่ายทางอากาศ</a>
							<a href="#" class="list-group-item">ผังเมือง</a>
							<a href="#" class="list-group-item">ผังที่ดิน</a>
							<a href="#" class="list-group-item">ถนนภาระจำยอมระวางที่ดิน</a>
							<a href="#" class="list-group-item">ผังบริเวณ</a>
							<a href="#" class="list-group-item">แปลนอาคาร</a>
						</div>

						<a href="#item-3-1-5" class="list-group-item" data-toggle="collapse">
							<i class="glyphicon glyphicon-chevron-right"></i>5. HP(สภาพเป็นที่ดินว่างเปล่า)
						</a>
						<div class="list-group collapse" id="item-3-1-5">
							<a href="#" class="list-group-item">แผนที่</a>
							<a href="#" class="list-group-item">ภาพถ่ายทางอากาศ</a>
							<a href="#" class="list-group-item">ผังเมือง</a>
							<a href="#" class="list-group-item">ผังโครงการ</a>
							<a href="#" class="list-group-item">ผังที่ดิน</a>
							<a href="#" class="list-group-item">ถนนภาระจำยอมระวางที่ดิน</a>
							<a href="#" class="list-group-item">แปลนอาคาร</a>
						</div>

						<a href="#item-3-1-6" class="list-group-item" data-toggle="collapse">
							<i class="glyphicon glyphicon-chevron-right"></i>6. HP(กำลังพัฒนาโครงการ)
						</a>
						<div class="list-group collapse" id="item-3-1-6">
							<a href="#" class="list-group-item">แผนที่</a>
							<a href="#" class="list-group-item">ภาพถ่ายทางอากาศ</a>
							<a href="#" class="list-group-item">ผังเมือง</a>
							<a href="#" class="list-group-item">ผังโครงการ/Work-in-Progress</a>
							<a href="#" class="list-group-item">ผังที่ดิน</a>
							<a href="#" class="list-group-item">ถนนภาระจำยอมระวางที่ดิน</a>
							<a href="#" class="list-group-item">แปลนอาคาร</a>
						</div>

					</div>

					<!-- 2222222222222 -->
					<a href="#item-3-2" class="list-group-item" data-toggle="collapse">
						<i class="glyphicon glyphicon-chevron-right"></i>Photo
					</a>
					<div class="list-group collapse" id="item-3-2">

						<a href="#item-3-2-1" class="list-group-item" data-toggle="collapse">
							<i class="glyphicon glyphicon-chevron-right"></i>1. CD
						</a>
						<div class="list-group collapse" id="item-3-2-1">
							<a href="#" class="list-group-item">ถนนหลักซอย</a>
							<a href="#" class="list-group-item">ด้านหน้าอาคารชุด</a>
							<a href="#" class="list-group-item">บริเวณส่วนกลาง</a>
							<a href="#" class="list-group-item">ทางเดินหน้าห้องชุด</a>
							<a href="#" class="list-group-item">ภายในห้องชุด</a>
							<a href="#" class="list-group-item">วิว</a>
							<a href="#" class="list-group-item">Data</a>

						</div>

						<a href="#item-3-2-2" class="list-group-item" data-toggle="collapse">
							<i class="glyphicon glyphicon-chevron-right"></i>2. DH/SDH/TW/TH
						</a>
						<div class="list-group collapse" id="item-3-2-2">
							<a href="#" class="list-group-item">ถนนหลักซอย</a>
							<a href="#" class="list-group-item">ด้านหน้าโครงการ</a>
							<a href="#" class="list-group-item">บริเวณส่วนกลาง</a>
							<a href="#" class="list-group-item">ถนนด้านหน้าอาคาร</a>
							<a href="#" class="list-group-item">ด้านหน้าอาคาร</a>
							<a href="#" class="list-group-item">ภายในอาคาร</a>
							<a href="#" class="list-group-item">Data</a>
						</div>

						<a href="#item-3-2-3" class="list-group-item" data-toggle="collapse">
							<i class="glyphicon glyphicon-chevron-right"></i>3. VL
						</a>
						<div class="list-group collapse" id="item-3-2-3">
							<a href="#" class="list-group-item">ถนนหลักถนนรองซอย</a>
							<a href="#" class="list-group-item">ด้านหน้าด้านข้างด้านหลังที่ดิน</a>
							<a href="#" class="list-group-item">ฝั่งตรงข้ามที่ดิน</a>
							<a href="#" class="list-group-item">ภายในแปลนที่ดินทั่วทั้งแปลน</a>
							<a href="#" class="list-group-item">Data</a>
						</div>

						<a href="#item-3-2-4" class="list-group-item" data-toggle="collapse">
							<i class="glyphicon glyphicon-chevron-right"></i>4. FA
						</a>
						<div class="list-group collapse" id="item-3-2-4">
							<a href="#" class="list-group-item">ถนนหลักถนนรองซอย</a>
							<a href="#" class="list-group-item">ด้านหน้าด้านข้างด้านหลังที่ดิน</a>
							<a href="#" class="list-group-item">ฝั่งตรงข้ามที่ดิน</a>
							<a href="#" class="list-group-item">ภายในทรัพย์สิน</a>
							<a href="#" class="list-group-item">อาคารและสิ่งปลูกสร้างอื่นๆ</a>
							<a href="#" class="list-group-item">Data</a>
						</div>

						<a href="#item-3-2-5" class="list-group-item" data-toggle="collapse">
							<i class="glyphicon glyphicon-chevron-right"></i>5. HP(สภาพเป็นที่ดินว่างเปล่า)
						</a>
						<div class="list-group collapse" id="item-3-2-5">
							<a href="#" class="list-group-item">ถนนหลักถนนรองซอย</a>
							<a href="#" class="list-group-item">ด้านหน้าด้านข้างด้านหลังที่ดิน</a>
							<a href="#" class="list-group-item">ฝั่งตรงข้ามที่ดิน</a>
							<a href="#" class="list-group-item">ภายในแปลงที่ดินทั่วทั้งแปลง</a>
							<a href="#" class="list-group-item">อาคารและสิ่งปลูกสร้างอื่นๆ</a>
							<a href="#" class="list-group-item">Data</a>
						</div>

						<a href="#item-3-2-6" class="list-group-item" data-toggle="collapse">
							<i class="glyphicon glyphicon-chevron-right"></i>6. HP(กำลังพัฒนาโครงการ)
						</a>
						<div class="list-group collapse" id="item-3-2-6">
							<a href="#" class="list-group-item">ถนนหลักถนนรองซอย</a>
							<a href="#" class="list-group-item">ด้านหน้าด้านข้างด้านหลังที่ดิน</a>
							<a href="#" class="list-group-item">ฝั่งตรงข้ามที่ดิน</a>
							<a href="#" class="list-group-item">ภายในแปลงที่ดิน</a>
							<a href="#" class="list-group-item">อาคารและสิ่งปลูกสร้างอื่นๆ</a>
							<a href="#" class="list-group-item">Data</a>
						</div>
					</div>
					<a href="#item-3-3" class="list-group-item" data-toggle="collapse">
						<i class="glyphicon glyphicon-chevron-right"></i>Visio
					</a>
					<a href="#item-3-4" class="list-group-item" data-toggle="collapse">
						<i class="glyphicon glyphicon-chevron-right"></i>ใบปะหน้า Appendix
					</a>

				</div>
				<a href="#item-4" class="list-group-item" data-toggle="collapse">
					<i class="glyphicon glyphicon-chevron-right"></i>E-library
				</a>
				<div class="list-group collapse" id="item-4">
					<a href="#" class="list-group-item">VDO-การประเมิน</a>
					<a href="#" class="list-group-item">VDO-อสังหาริมทรัพย์</a>
					<a href="#" class="list-group-item">VDO/PODCAST สัมมนา</a>
					<a href="#" class="list-group-item">เอกสารประกอบสัมมนา</a>
					<a href="#" class="list-group-item">กฎหมายที่ดิน</a>
					<a href="#" class="list-group-item">กฎหมายเกี่ยวกับการประเมิน</a>
					<a href="#" class="list-group-item">เอกสารประกอบการสอบวิชาชีพ</a>
					<a href="#" class="list-group-item">อื่นๆ</a>
				</div>

			</div>
		</div>
		<!-- /#sidebar-wrapper -->

		<!-- Page Content -->
		<div id="page-content-wrapper">

			<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
				<span class="navbar-toggler-icon" id="menu-toggle" style="cursor: pointer;"></span>
			</nav> -->

			@include('../partials.nav')
			<br><br><br><br>
			@yield('content')
			<br><br>
			@include('../partials.footer')

		</div>
		<!-- /#page-content-wrapper -->
	</div>
	<!-- /#wrapper -->

	<!-- Bootstrap core JavaScript -->
	<script src="../vendor/jquery/jquery.min.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Menu Toggle Script -->
	<script>
		$("#menu-toggle").click(function(e) {
			e.preventDefault();
			$("#wrapper").toggleClass("toggled");
		});
		$('.list-group-item').on('click', function() {
			// $('.fa-chevron-right', this)
			// 	.toggleClass('fa-chevron-right')
			// 	.toggleClass('fa-chevron-down');
			// 	console.log("toggle right");

			// $('.fa-chevron-down', this)
			// 	.toggleClass('fa-chevron-right')
			// 	.toggleClass('fa-chevron-down');
			// 	console.log("toggle down");


			$('click-toggle', this)
				.toggleClass('fa-chevron-right fa-chevron-down')
			// .toggleClass('fa-chevron-down');
			console.log("toggle");


		});
	</script>


</body>

</html>