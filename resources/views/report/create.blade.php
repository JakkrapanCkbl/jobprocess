<!doctype html>
<html lang="en" dir="ltr">
	<head>
		
		@include('dashboard.head')


		<script type="text/javascript">

			function selectElement(id, valueToSelect) {    
    			let element = document.getElementById(id);
    			element.value = valueToSelect;   			
    			if (valueToSelect=='BF') {   				
    				document.getElementById("jobcode").value = '{{ \App\Http\Controllers\AdminInputController::gennewbfid() }}';
    			} else if (valueToSelect=='R') {
    				document.getElementById("jobcode").value = '{{ \App\Http\Controllers\AdminInputController::gennewrid() }}';
    			} else if (valueToSelect=='ที่ดินว่างเปล่า') {
    				document.getElementById('lblprojectname').innerHTML = 'ซอย+ถนน+อำเภอ+จังหวัด';	
    			} else if (valueToSelect=='ห้องชุด') {
    				document.getElementById('lblprojectname').innerHTML = 'ชื่่อโครงการ / ชื่อคอนโด (ตัวอย่าง format : ชื่่อโครงการ / ชื่อคอนโด + ถนน)';	
    			} else if (valueToSelect=='UOB') {
    				document.getElementById('jobtype').selectedIndex = "0";
    			} else if (valueToSelect=='KK') {
    				document.getElementById('jobtype').selectedIndex = "0";
    			} else if (valueToSelect=='CIMB') {
    				document.getElementById('jobtype').selectedIndex = "1";
    			} else if (valueToSelect=='SCB') {
    				document.getElementById('jobtype').selectedIndex = "0";
    			} else if (valueToSelect=='BOC') {
    				document.getElementById('jobtype').selectedIndex = "1";
    			} else if (valueToSelect=='ICBC') {
    				document.getElementById('jobtype').selectedIndex = "0";
    			} else if (valueToSelect=='LHB') {
    				document.getElementById('jobtype').selectedIndex = "0";
    			}	
			}
		
  		</script>
	</head>

	<body class="app">

		<!-- Global Loader-->
		<div id="global-loader"><img src="{{asset('external2/images/svgs/loader.svg')}}" alt="loader"></div>

		<div class="page">
			<div class="page-main">

				@include('dashboard.nav')

				@include('dashboard.menubar')
				

				<div class="container content-area">

					<!-- Content1 -->
					
					<div class="container">
						<div class="row">
							
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										Add Job
									</div>
									<div class="card-body">

										<form action="{{ route('admininputjob.store') }}" method="POST" enctype="multipart/form-data">@csrf
											
											<!-- combo for select id type -->
											<div class="form-group">
												<label class="form-label">ประเภทรหัสงาน  (BF / R)</label>
												<select name="idtype" id="idtype" class="form-control" tabindex="-1" aria-hidden="true" onchange="selectElement('idtype', this.value)">
													<option value="BF" selected>BF</option>
													<option value="R" >R</option>
												</select>													
											</div>
											<!-- end combo for select id type -->

											<div class="form-group">
												<label>รหัสใบเสนองาน</label>
												<input type="text" name="jobcode" id="jobcode" class="form-control{{ $errors->has('jobcode') ? ' is-invalid' : '' }}" 
												value="{{ \App\Http\Controllers\AdminInputController::gennewbfid() }}">
												  @if ($errors->has('jobcode'))
					                                    <span class="invalid-feedback" role="alert">
					                                        <strong>{{ $errors->first('jobcode') }}</strong>                                       
					                                    </span>
					                                @endif
											</div>
																	
											<div class="form-group">
												<label>KK-ID</label>
												<input type="text" id="reportcode" name="reportcode" class="form-control{{ $errors->has('reportcode') ? ' is-invalid' : '' }}"
												value="{{ old('reportcode') }}">
												  @if ($errors->has('reportcode'))
					                                    <span class="invalid-feedback" role="alert">
					                                        <strong>{{ $errors->first('reportcode') }}</strong>
					                                    </span>
					                               @endif
											</div>

											<div class="form-group">
												<label>ประเภททรัพย์สิน</label>
												<select name="prop_type" id="prop_type" class="form-control" tabindex="-1" aria-hidden="true" onchange="selectElement('prop_type', this.value)">																					
													<option value="ห้องชุด" selected>ห้องชุด</option>
													<option value="บ้านเดี่ยว">บ้านเดี่ยว</option>
													<option value="บ้านแฝด">บ้านแฝด</option>
													<option value="ทาวน์เฮาส์/ทาวน์โฮม">ทาวน์เฮาส์/ทาวน์โฮม</option>
													<option value="ตึกแถว">ตึกแถว</option>
													<option value="ที่ดินว่างเปล่า">ที่ดินว่างเปล่า</option>
													<option value="โรงงาน/โกดัง">โรงงาน/โกดัง</option>
													<option value="อพาร์ทเม้นท์">อพาร์ทเม้นท์</option>
													<option value="โรงแรม">โรงแรม</option>
													<option value="อาคารสำนักงาน">อาคารสำนักงาน</option>
													<option value="โฮมออฟฟิศ/มินิออฟฟิศ">โฮมออฟฟิศ/มินิออฟฟิศ</option>	
													<option value="ที่ดินพร้อมสิ่งปลูกสร้าง">ที่ดินพร้อมสิ่งปลูกสร้าง</option>
													<option value="สิทธิการเช่า">สิทธิการเช่า</option>
													<option value="เครื่องจักร">เครื่องจักร</option>
													<option value="อื่นๆ">อื่นๆ</option>
												</select>							
											</div>

											<div class="form-group">
												<label id="lblprojectname">ชื่่อโครงการ / ชื่อคอนโด (ตัวอย่าง format : ชื่่อโครงการ / ชื่อคอนโด + ถนน)</label>
												<input type="text" name="projectname" id="projectname"
												class="form-control{{ $errors->has('projectname') ? ' is-invalid' : '' }}"
												value="{{ old('projectname') }}">
												@if ($errors->has('projectname'))
					                                <span class="invalid-feedback" role="alert">
					                                    <strong>{{ $errors->first('projectname') }}</strong>
					                                </span>
					                             @endif
											</div>

											<!--jobsize-->
											<div class="form-group">
												<label class="form-label">SIZE</label>
												<select name="jobsize" class="form-control">
													<option value="HL" selected>HL</option>
													<option value="S">S</option>
													<option value="L">L</option>
													<option value="-">-</option>
												</select>													
											</div>						
											<!--jobtype-->
											<div class="form-group">
												<label class="form-label">Normal / Difficult</label>
												<select name="easydiff" class="form-control">
													<option value="NORM" selected>NORM</option>
													<option value="DIFF">DIFF</option>
												</select>													
											</div>

											

											<div class="form-group">
												<label>ที่อยู่ในรายงาน / ธนาคาร</label>
												<select name="client" id="client" class="form-control" tabindex="-1" aria-hidden="true" onchange="selectElement('client', this.value)">
													<option value="UOB" selected>UOB</option>
													<option value="KK">KK</option>
													<option value="CIMB">CIMB</option>
													<option value="SCB">SCB</option>
													<option value="BOC">BOC</option>
													<option value="ICBC">ICBC</option>
													<option value="LHB">LHB</option>							
												</select>							
											</div>

											<!--จำนวนชุด Report-->
											<div class="form-group">
												<label class="form-label">จำนวนชุด Report</label>
												<select name="jobtype" id="jobtype" class="form-control">
													<option value="ไทย 1 ชุด" selected>ไทย 1 ชุด</option>
													<option value="ไทย 2 ชุด">ไทย 2 ชุด</option>
													<option value="ไทย 2 ชุด + CD">ไทย 2 ชุด + CD</option>
													<option value="อังกฤษ 2 ชุด">อังกฤษ 2 ชุด</option>
													<option value="ไทย 2 ชุด + อังกฤษ 2 ชุด">ไทย 2 ชุด + อังกฤษ 2 ชุด</option>
													<option value="-">-</option>
												</select>													
											</div>

											

											
											
											

											<div class="form-group">
												<label>ขนาดพื้นที่่ (ตัวอย่าง format : 99-0-99.9 ไร่ หรือ 99.99 ตร.ม.)</label>
												<input type="text" name="prop_size" class="form-control{{ $errors->has('prop_size') ? ' is-invalid' : '' }}"
												value="{{ old('prop_size') }}">
												  @if ($errors->has('prop_size'))
					                                    <span class="invalid-feedback" role="alert">
					                                        <strong>{{ $errors->first('prop_size') }}</strong>
					                                    </span>
					                              @endif
											</div>

											
											<div class="form-group">
												<label>ทำเลที่ตั้ง (เลขที่ / ชื่อสถานที่ / หมู่ / ซอย / ถนน)   (งาน HL ระบุตำบล, อำเภอ ตามเอกสารสิทธ์ หรือ อช.) </label>
												<input type="text" name="proplocation" placeholder="" 
												class="form-control{{ $errors->has('proplocation') ? ' is-invalid' : '' }}"
												value="{{ old('proplocation') }}">
												  @if ($errors->has('proplocation'))
					                                    <span class="invalid-feedback" role="alert">
					                                        <strong>{{ $errors->first('proplocation') }}</strong>
					                                    </span>
					                                @endif
											</div>

											<!-- province -->
											<div class="form-group">
												<select name="province" id="province" class="form-control province">
													<option value="">เลือกจังหวัด</option>
													@foreach($list as $row)
														<option value="{{$row->id}}">{{$row->name_th}}</option>
													@endforeach
												</select>
											</div>											
											<!-- end province -->
											<!-- ampher -->
											<div class="form-group">
												<select name="amphures" class="form-control amphures">
													<option value="">เลือกอำเภอ</option>				
												</select>
											</div>

											

											<!-- end ampher -->
											<div class="form-group">
												<label>ตำบล</label>
												<input type="text" name="district" 
												class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}"
												value="{{ old('district') }}">
												  @if ($errors->has('district'))
					                                    <span class="invalid-feedback" role="alert">
					                                        <strong>{{ $errors->first('district') }}</strong>
					                                    </span>
					                              @endif
											</div>

											<div class="form-group">
												<label>ลูกค้าราย / ผู้ติดต่อ</label>
												<input type="text" name="customer" class="form-control{{ $errors->has('customer') ? ' is-invalid' : '' }}"
												value="{{ old('customer') }}">
												  @if ($errors->has('customer'))
					                                    <span class="invalid-feedback" role="alert">
					                                        <strong>{{ $errors->first('customer') }}</strong>
					                                    </span>
					                                @endif
											</div>

											

											<div class="form-group">
												<label>วัตถุประสงค์การประเมิน</label>
												<select name="obj_id" class="form-control">							
													<option value="1" selected>เพื่อประกอบการพิจารณาสินเชื่อ</option>
													<option value="2">เพื่อทบทวนราคาประเมิน</option>
													<option value="3">ทราบมูลค่าตลาด</option>
													<option value="4">สาธารณะ</option>
													<option value="5">บันทึกมูลค่าทางบัญชี</option>
													<option value="6">พิจารณาภายในบริษัท, ใช้เป็นข้อมูลภายในบริษัท</option>
													<option value="7">เพื่ออ้างอิงในการเจรจาต่อรองราคา</option>
													<option value="8">เพื่อกำหนดราคาซื้อขายทอดตลาด</option>
													<option value="9">เพื่อประกอบการตั้งราคาขายทรัพย์สิน</option>
													<option value="10">ปรับปรุงโครงสร้างหนี้</option>
													<option value="11">อื่น ๆ</option>
													
												</select>
											</div>

											
											
											<div class="form-group">
												<label>วันที่รับงาน</label>
												<input name="startdate" type="text" class="form-control"
												placeholder = "Valid To" data-date-start-date="yy-m-d" 
												value = "{{date('yy-m-d')}}">
											</div>
											
											<div class="form-group">
												<label>วันที่สำรวจ</label>							
												<input name = "inspectiondate" type="text" class = "form-control"
												placeholder = "Valid To" data-date-start-date="yy-m-d" 					
												value = "{{date('yy-m-d')}}">
											</div>

											<div class="form-group">
												<label>วันที่ส่ง</label>							
												<input name = "lcduedate" type="text" class = "form-control"
												placeholder = "Valid To" data-date-start-date="yy-m-d" 					
												value = "{{date('yy-m-d', strtotime('+3 day'))}}">
											</div>

											<div class="form-group">
												<label>Due Date</label>							
												<input name = "clientduedate" type="text" class = "form-control"
												placeholder = "Valid To" data-date-start-date="yy-m-d" 					
												value = "{{date('yy-m-d', strtotime('+3 day'))}}">
											</div>


											<div class="form-group">
												<label>ค่าประเมิน (ไม่รวม VAT)</label>
												<input type="text" name="valuationfee" placeholder="3000" 
												class="form-control{{ $errors->has('valuationfee') ? ' is-invalid' : '' }}"
												value="{{ number_format(3000, 2, '.', ',') }}">
												  @if ($errors->has('valuationfee'))
					                                    <span class="invalid-feedback" role="alert">
					                                        <strong>{{ $errors->first('valuationfee') }}</strong>
					                                    </span>
					                               @endif
					                             <input type="text" name="valuationfeeVat"
												class="form-control{{ $errors->has('valuationfeeVat') ? ' is-invalid' : '' }}"

												value="{{ number_format((3000 * 0.07), 2, '.', ',')  }}">
												<input type="text" name="valuationfeeAll"
												class="form-control{{ $errors->has('valuationfeeAll') ? ' is-invalid' : '' }}"
												value="{{ number_format(3000 + (3000 * 0.07), 2, '.', ',')  }}">
											</div>
											
											<div class="form-group">
												<label>เงื่อนไขการเก็บเงินลูกค้า</label>
												<select name="valuationfee_case" class="form-control">								
													<option value="100% วางบิลธนาคาร" selected="">100% วางบิลธนาคาร</option>
													<option value="100% เก็บเงินลูกค้าหน้างาน">100% เก็บเงินลูกค้าหน้างาน</option>
													<option value="50/50 หน้างาน">50/50 หน้างาน</option>
													<option value="100% ณ วันที่มอบรายงาน">100% ณ วันที่มอบรายงาน</option>	
												</select>							
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
					{{csrf_field()}}

					<!-- End Content1 -->

		@include('admin.footer')
		