<div class="container">
	@if(Session::has('message'))
	<div class="alert alert-success">{{Session::get('message')}}</div>
	@endif
	<div class="row">


		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Edit Job
				</div>
				<div class="card-body" style="background-color: #B0C4DE;">
					<form action="{{route('admininputjob.update',[$job->id])}}" method="POST" enctype="multipart/form-data">@csrf

						<div class="container">
							<div class="row">
								<div class="form-group col-md-1">
									<label>( BF/R )</label>
									<select name="jobtype" class="form-control">
										<option value="BF" selected>BF</option>
										<option value="R">R</option>
									</select>
								</div>
								<div class="form-group col-md-2">
									<label>รายงานเลขที่</label>
									<input type="text" name="jobcode" class="form-control{{ $errors->has('jobcode') ? ' is-invalid' : '' }}" value="{{ $job->jobcode }}">
									@if ($errors->has('jobcode'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('jobcode') }}</strong>
									</span>
									@endif
								</div>

								<div class="form-group col-md-2">
									<label>ส่งธนาคาร</label>
									<select name="client" id="client" class="form-control" tabindex="-1" aria-hidden="true" onchange="selectElement('client', this.value)">
										<option value="UOB" {{$job->client=='UOB'?'selected':''}}>UOB</option>
										<option value="KK" {{$job->client=='KK'?'selected':''}}>KK</option>
										<option value="CIMB" {{$job->client=='CIMB'?'selected':''}}>CIMB</option>
										<option value="SCB" {{$job->client=='SCB'?'selected':''}}>SCB</option>
										<option value="BOC" {{$job->client=='UOB'?'selected':''}}>BOC</option>
										<option value="ICBC" {{$job->client=='ICBC'?'selected':''}}>ICBC</option>
										<option value="LHB" {{$job->client=='LHB'?'selected':''}}>LHB</option>
									</select>
								</div>

								<div class="form-group col-md-2">
									<label>ID (KK/UOB)</label>
									<input type="text" name="reportcode" class="form-control{{ $errors->has('reportcode') ? ' is-invalid' : '' }}" value="{{ $job->reportcode }}">
									@if ($errors->has('reportcode'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('reportcode') }}</strong>
									</span>
									@endif
								</div>

								<div class="form-group col-md-2">
									<label class="form-label">รายงานภาษา</label>
									<select name="jobtype" class="form-control">
										<option value="ไทย 1 ชุด" {{$job->jobtype=='ไทย 1 ชุด'?'selected':''}}>ไทย 1 ชุด</option>
										<option value="ไทย 2 ชุด" {{$job->jobtype=='ไทย 2 ชุด'?'selected':''}}>ไทย 2 ชุด</option>
										<option value="อังกฤษ 2 ชุด" {{$job->jobtype=='อังกฤษ 2 ชุด'?'selected':''}}>อังกฤษ 2 ชุด</option>
										<option value="ไทย 2 ชุด + อังกฤษ 2 ชุด" {{$job->jobtype=='ไทย 2 ชุด + อังกฤษ 2 ชุด'?'selected':''}}>ไทย 2 ชุด + อังกฤษ 2 ชุด</option>
										<option value="-" {{$job->jobtype=='-'?'selected':''}}>-</option>
									</select>
								</div>



								<div class="form-group col-md-3">
									<label>วัตถุประสงค์การประเมิน</label>
									<select name="obj_id" class="form-control">
										<option value="1" {{$job->obj_id=='1'?'selected':''}}>เพื่อประกอบการพิจารณาสินเชื่อ</option>
										<option value="2" {{$job->obj_id=='2'?'selected':''}}>เพื่อทบทวนราคาประเมิน</option>
										<option value="3" {{$job->obj_id=='3'?'selected':''}}>ทราบมูลค่าตลาด</option>
										<option value="4" {{$job->obj_id=='4'?'selected':''}}>สาธารณะ</option>
										<option value="5" {{$job->obj_id=='5'?'selected':''}}>บันทึกมูลค่าทางบัญชี</option>
										<option value="6" {{$job->obj_id=='6'?'selected':''}}>พิจารณาภายในบริษัท, ใช้เป็นข้อมูลภายในบริษัท</option>
										<option value="7" {{$job->obj_id=='7'?'selected':''}}>เพื่ออ้างอิงในการเจรจาต่อรองราคา</option>
										<option value="8" {{$job->obj_id=='8'?'selected':''}}>เพื่อกำหนดราคาซื้อขายทอดตลาด</option>
										<option value="9" {{$job->obj_id=='9'?'selected':''}}>เพื่อประกอบการตั้งราคาขายทรัพย์สิน</option>
										<option value="10" {{$job->obj_id=='10'?'selected':''}}>ปรับปรุงโครงสร้างหนี้</option>
										<option value="11" {{$job->obj_id=='11'?'selected':''}}>อื่น ๆ</option>
									</select>
								</div>


							</div>
						</div>

						<div class="container">
							<div class="row">
								<div class="form-group col-md-3">
									<label>ลูกค้าราย / ผู้ติดต่อ</label>
									<input type="text" name="customer" class="form-control{{ $errors->has('customer') ? ' is-invalid' : '' }}" value="{{ $job->customer }}">
									@if ($errors->has('customer'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('customer') }}</strong>
									</span>
									@endif
								</div>

								<!-- add more -->
								<div class="form-group col-md-2">
									<label>โทรศัพท์</label>
									<input type="text" name="customer" class="form-control{{ $errors->has('customer') ? ' is-invalid' : '' }}" value="{{ $job->customer }}">
									@if ($errors->has('customer'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('customer') }}</strong>
									</span>
									@endif
								</div>


								<div class="form-group col-md-2">
									<label>ค่าประเมิน (Net)</label>
									<div class="input-group">
										<input type="text" name="valuationfee" class="form-control{{ $errors->has('valuationfee') ? ' is-invalid' : '' }}" value="{{ $job->valuationfee }}">
										@if ($errors->has('valuationfee'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('valuationfee') }}</strong>
										</span>
										@endif
									</div>
								</div>
								<!-- add -->
								<div class="form-group col-md-2">
									<label>ค่าประเมิน (+VAT)</label>
									<div class="input-group">
										<input type="text" name="valuationfee" class="form-control{{ $errors->has('valuationfee') ? ' is-invalid' : '' }}" value="{{ $job->valuationfee }}">
										@if ($errors->has('valuationfee'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('valuationfee') }}</strong>
										</span>
										@endif
									</div>
								</div>

								<div class="form-group col-md-3">
									<label>เงื่อนไขการเก็บเงินลูกค้า</label>
									<select name="valuationfee_case" class="form-control">
										<option value="100% วางบิลธนาคาร" {{$job->valuationfee_case=='100% วางบิลธนาคาร'?'selected':''}}>100% วางบิลธนาคาร</option>
										<option value="100% เก็บเงินลูกค้าหน้างาน" {{$job->valuationfee_case=='100% เก็บเงินลูกค้าหน้างาน'?'selected':''}}>100% เก็บเงินลูกค้าหน้างาน</option>
										<option value="50/50 หน้างาน" {{$job->valuationfee_case=='50/50 หน้างาน'?'selected':''}}>50/50 หน้างาน</option>
										<option value="100% ณ วันที่มอบรายงาน" {{$job->valuationfee_case=='100% ณ วันที่มอบรายงาน'?'selected':''}}>100% ณ วันที่มอบรายงาน</option>
									</select>
								</div>



							</div>
						</div>

						<div class="container">
							<div class="row">

								<!-- combo for select jobsize -->
								<div class="form-group col-md-1">
									<label class="form-label">Job Size</label>
									<select name="jobsize" class="form-control">
										<option value="HL" {{$job->jobsize=='HL'?'selected':''}}>HL</option>
										<option value="S" {{$job->jobsize=='S'?'selected':''}}>S</option>
										<option value="L" {{$job->jobsize=='L'?'selected':''}}>L</option>
										<option value="-" {{$job->jobsize=='-'?'selected':''}}>-</option>
									</select>
								</div>

								<div class="form-group col-md-2">
									<label class="form-label">Job Difficulty</label>
									<select name="easydiff" class="form-control">
										<option value="NORM" {{$job->easydiff=='NORM'?'selected':''}}>Normal</option>
										<option value="DIFF" {{$job->easydiff=='DIFF'?'selected':''}}>Difficult</option>
									</select>
								</div>

								<!-- add -->
								<div class="form-group col-md-2">
									<label class="form-label">ด่วน</label>
									<select name="easydiff" class="form-control">
										<option value="0" {{$job->easydiff=='NORM'?'selected':''}}>ไม่</option>
										<option value="1" {{$job->easydiff=='DIFF'?'selected':''}}>ด่วน</option>
									</select>
								</div>

								<!-- add -->
								<div class="form-group col-md-2">
									<label class="form-label">Valuer</label>
									<select name="easydiff" class="form-control">
										<option value="NORM" {{$job->easydiff=='NORM'?'selected':''}}>NORM</option>
										<option value="DIFF" {{$job->easydiff=='DIFF'?'selected':''}}>DIFF</option>
									</select>
								</div>

								<!-- add -->
								<div class="form-group col-md-2">
									<label class="form-label">Approver</label>
									<select name="easydiff" class="form-control">
										<option value="NORM" {{$job->easydiff=='NORM'?'selected':''}}>NORM</option>
										<option value="DIFF" {{$job->easydiff=='DIFF'?'selected':''}}>DIFF</option>
									</select>
								</div>

							</div>
						</div>



						<div class="container">
							<div class="row">
								<div class="form-group col-md-2">
									<label>วันที่รับงาน</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<i class="fas fa-calendar tx-16 lh-0 op-6"></i>
											</div>
										</div>
										<input name="startdate" class="form-control fc-datepicker" placeholder="d/m/y" type="text" value="{{date('d/m/y', strtotime($job->startdate))}}">
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
										<input name="inspectiondate" class="form-control fc-datepicker" placeholder="d/m/y" type="text" value="{{date('d/m/y', strtotime($job->inspectiondate))}}">
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
										<input name="lcduedate" class="form-control fc-datepicker" placeholder="d/m/y" type="text" value="{{date('d/m/y', strtotime($job->lcduedate))}}">
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
										<input name="clientduedate" class="form-control fc-datepicker" placeholder="d/m/y" type="text" value="{{date('d/m/y', strtotime($job->clientduedate))}}">
									</div>
								</div>


							</div>
						</div>


						<div class="container">
							<div class="row">

								<div class="form-group col-md-5">
									<label>ประเภททรัพย์สิน</label>
									<select name="prop_type" class="form-control">
										<option value="ห้องชุด" {{$job->prop_type=='ห้องชุด'?'selected':''}}>ห้องชุด</option>
										<option value="บ้านเดี่ยว" {{$job->prop_type=='บ้านเดี่ยว'?'selected':''}}>บ้านเดี่ยว</option>
										<option value="บ้านแฝด" {{$job->prop_type=='บ้านแฝด'?'selected':''}}>บ้านแฝด</option>
										<option value="ทาวน์เฮาส์/ทาวน์โฮม" {{$job->prop_type=='ทาวน์เฮาส์/ทาวน์โฮม'?'selected':''}}>ทาวน์เฮาส์/ทาวน์โฮม</option>
										<option value="ตึกแถว" {{$job->prop_type=='ตึกแถว'?'selected':''}}>ตึกแถว</option>
										<option value="ที่ดินว่างเปล่า" {{$job->prop_type=='ที่ดินว่างเปล่า'?'selected':''}}>ที่ดินว่างเปล่า</option>
										<option value="โรงงาน/โกดัง" {{$job->prop_type=='โรงงาน/โกดัง'?'selected':''}}>โรงงาน/โกดัง</option>
										<option value="อพาร์ทเม้นท์" {{$job->prop_type=='อพาร์ทเม้นท์'?'selected':''}}>อพาร์ทเม้นท์</option>
										<option value="โรงแรม" {{$job->prop_type=='โรงแรม'?'selected':''}}>โรงแรม</option>
										<option value="อาคารสำนักงาน" {{$job->prop_type=='อาคารสำนักงาน'?'selected':''}}>อาคารสำนักงาน</option>
										<option value="โฮมออฟฟิศ/มินิออฟฟิศ" {{$job->prop_type=='โฮมออฟฟิศ/มินิออฟฟิศ'?'selected':''}}>โฮมออฟฟิศ/มินิออฟฟิศ</option>
										<option value="ที่ดินพร้อมสิ่งปลูกสร้าง" {{$job->prop_type=='ที่ดินพร้อมสิ่งปลูกสร้าง'?'selected':''}}>ที่ดินพร้อมสิ่งปลูกสร้าง</option>
										<option value="สิทธิการเช่า" {{$job->prop_type=='สิทธิการเช่า'?'selected':''}}>สิทธิการเช่า</option>
										<option value="เครื่องจักร" {{$job->prop_type=='อื่น ๆ'?'selected':''}}>เครื่องจักร</option>
										<option value="อื่น ๆ" {{$job->prop_type=='อื่น ๆ'?'selected':''}}>อื่น ๆ</option>
									</select>
								</div>

							</div>
						</div>

						<div class="container">
							<div class="row">

								<div class="form-group col-md-3">
									<label>ชื่่อโครงการ</label>
									<input type="text" name="projectname" class="form-control{{ $errors->has('projectname') ? ' is-invalid' : '' }}" value="{{ $job->projectname }}">
									@if ($errors->has('projectname'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('projectname') }}</strong>
									</span>
									@endif
								</div>


								<div class="form-group col-md-1">
									<label name="level">ชั้น</label>
									<input type="text" name="level" class="form-control{{ $errors->has('level') ? ' is-invalid' : '' }}" value="{{ $job->level }}">
									@if ($errors->has('level'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('level') }}</strong>
									</span>
									@endif
								</div>
								<!-- <div class="form-group col-md-3">
								<label>พื้นที่</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<select name="areaUnit" class="form-control">
											<option value="ตร.ม." {{$job->easydiff=='NORM'?'selected':''}}>ตร.ม.</option>
											<option value="ตร.ว." {{$job->easydiff=='DIFF'?'selected':''}}>ตร.ว.</option>
										</select>
									</div>
									<input type="text" name="area" placeholder="" class="form-control{{ $errors->has('soi') ? ' is-invalid' : '' }}" value="{{ $job->soi }}">

								</div>

							</div> -->
								<div class="form-group col-md-2">
									<label>พื้นที่</label>
									<div class="input-group">
										<input type="text" name="area" class="form-control{{ $errors->has('sprop_sizeoi') ? ' is-invalid' : '' }}" value="{{ $job->prop_size }}">
										<div class="input-group-append">
											<div class="input-group-text">
												<p name="areaUnit">ตร.ว.</p>
											</div>
										</div>
									</div>

								</div>

							</div>
						</div>

						<div class="container">
							<div class="row">
								<!-- end combo for select id type -->
								<div class="form-group col-md-1">
									<label>ขนาดพื้นที่่</label>
									<input type="text" name="prop_size" class="form-control{{ $errors->has('prop_size') ? ' is-invalid' : '' }}" value="{{ $job->prop_size }}">
									@if ($errors->has('prop_size'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('prop_size') }}</strong>
									</span>
									@endif
								</div>

								<!-- <div class="form-group col-md-2">
									<label class="form-label">หน่วย</label>
									<select name="jobtype" class="form-control">
										<option value="ตร.ม.">ตร.ม.</option>
										<option value="ตร.ว.">ตร.ว.</option>
										<option value="ไร่">ไร่</option>
									</select>
								</div> -->


								<div class="form-group col-md-2">
									<label>ซอย</label>
									<input type="text" name="soi" placeholder="ซอย" class="form-control{{ $errors->has('soi') ? ' is-invalid' : '' }}" value="{{ $job->soi }}">
									@if ($errors->has('soi'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('soi') }}</strong>
									</span>
									@endif
								</div>

								<div class="form-group col-md-3">
									<label>ถนน</label>
									<input type="text" name="road" placeholder="ถนน" class="form-control{{ $errors->has('road') ? ' is-invalid' : '' }}" value="{{ $job->road }}">
									@if ($errors->has('road'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('road') }}</strong>
									</span>
									@endif
								</div>
							</div>
						</div>

						<div class="container">
							<div class="row">
								<div class="form-group col-md-3">
									<label>ตำบล ( HL - ตามเอกสารสิทธิ์/อ.ช.2 ) </label>
									<input type="text" name="deedtumbon" placeholder="ตำบล" class="form-control{{ $errors->has('deedtumbon') ? ' is-invalid' : '' }}" value="{{ $job->deedtumbon }}">
									@if ($errors->has('deedtumbon'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('deedtumbon') }}</strong>
									</span>
									@endif
								</div>
								<div class="form-group col-md-3">
									<label>อำเภอ ( HL - ตามเอกสารสิทธิ์/อ.ช.2 ) </label>
									<input type="text" name="deedamphur" placeholder="อำเภอ" class="form-control{{ $errors->has('deedamphur') ? ' is-invalid' : '' }}" value="{{ $job->deedamphur }}">
									@if ($errors->has('deedamphur'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('deedamphur') }}</strong>
									</span>
									@endif
								</div>

								<div class="form-group col-md-2">
									<label>จังหวัด ( ตามเขตปกครอง )</label>
									<select name="province_id" id="province_id" class="form-control province{{ $errors->has('province_id') ? ' is-invalid' : '' }}" value="{{ $job->province_id }}">
										@foreach($list as $row)
										<option value="{{ $row->code }}" {{ ($job->province_id == $row->code) ? 'selected' : '' }}>
											{{ $row->name_th }}
										</option>
										@endforeach
									</select>
									@if ($errors->has('province_id'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('province_id') }}</strong>
									</span>
									@endif
								</div>

								<div class="form-group col-md-2">
									<label>อำเภอ/เขต</label>
									<select name="amphure_id" class="form-control amphures{{ $errors->has('amphure_id') ? ' is-invalid' : '' }}" value="{{ $job->amphure_id }}">
										@foreach($listtwo as $city)
										<option value="{{ $city->code }}" {{ ($job->amphure_id == $city->code) ? 'selected' : '' }}>
											{{ $city->name_th }}
										</option>
										@endforeach
									</select>
								</div>

								<div class="form-group col-md-2">
									<label>ตำบล/แขวง</label>
									<input type="text" name="district" class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" value="{{ $job->district }}">
									@if ($errors->has('district'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('district') }}</strong>
									</span>
									@endif
								</div>
							</div>
						</div>

						<br>

						<div class="container">
							<div class="row">
								<div class="form-group col-md-12">
									<button type="submit" class="btn btn-block btn-success">Update</button>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">


								<div class="form-group col-md-1">
									<label name="moo">หมู่ </label>
									<input type="text" name="moo" placeholder="หมู่" class="form-control{{ $errors->has('moo') ? ' is-invalid' : '' }}" value="{{ $job->moo }}">
									@if ($errors->has('moo'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('msoo') }}</strong>
									</span>
									@endif
								</div>



							</div>
						</div>

						<div class="container">
							<div class="row">
								<div class="form-group col-md-6">
									<label>ทำเลที่ตั้ง (เลขที่ / ชื่อสถานที่ / หมู่ / ซอย / ถนน) (งาน HL ระบุตำบล, อำเภอ ตามเอกสารสิทธ์ หรือ อช.) </label>
									<input type="text" name="proplocation" placeholder="เลขที่ / ชื่อสถานที่ / หมู่ / ซอย / ถนน" class="form-control{{ $errors->has('proplocation') ? ' is-invalid' : '' }}" value="{{ $job->proplocation }}">
									@if ($errors->has('proplocation'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('proplocation') }}</strong>
									</span>
									@endif
								</div>

							</div>
						</div>

						<!--jobtype-->


						<script>
							$(document).ready(function() {
								if ($('select[name = "prop_type"]').val() == 'ห้องชุด') {
									document.getElementsByName("moo")[0].style.visibility = "hidden";
									document.getElementsByName("moo")[1].style.visibility = "hidden";
									document.getElementsByName("area")[0].placeholder = "00.00";
									document.getElementsByName("areaUnit")[0].innerHTML = "ตร.ม.";
								} else {
									document.getElementsByName("moo")[0].style.visibility = "visible";
									document.getElementsByName("moo")[1].style.visibility = "visible";
									document.getElementsByName("area")[0].placeholder = "00.00";
									document.getElementsByName("areaUnit")[0].innerHTML = "ตร.ว.";
								}
								$('select[name = "prop_type"]').change(function() {
									if ($(this).val() == 'ห้องชุด') {
										document.getElementsByName("moo")[0].style.visibility = "hidden";
										document.getElementsByName("moo")[1].style.visibility = "hidden";
										document.getElementsByName("areaUnit")[0].innerHTML = "ตร.ม.";
									} else {
										document.getElementsByName("moo")[0].style.visibility = "visible";
										document.getElementsByName("moo")[1].style.visibility = "visible";
										document.getElementsByName("areaUnit")[0].innerHTML = "ตร.ว.";
									}

								});
							});
						</script>



					</form>
				</div>
			</div>
		</div>
	</div>
</div>
{{csrf_field()}}