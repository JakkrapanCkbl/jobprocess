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
		<script>
			function SetFeeVat(val) {
				var vat = val * 0.07;
				var totalprices = Number(val) + Number(vat);
				
				document.getElementById("valuationfeeVat").value = parseFloat(vat).toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");; 
				document.getElementById("valuationfeeAll").value = parseFloat(totalprices).toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");;
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
									<div class="card-body" style="background-color: #B0C4DE;">

										<form action="{{ route('admininputjob.store') }}" method="POST" enctype="multipart/form-data">@csrf
											<style>
												.float-right {
													font-size: 19px;
												}
											</style>
											<div class="container">
												<div class="row ">
													<div class="col-md-3 align-self-center p-1">
														<label class="float-right">( BF/R )</label>
													</div>
													<div class="col-md-6">
														<select name="idtype" id="idtype" class="form-control" tabindex="-1" aria-hidden="true" onchange="selectElement('idtype', this.value)">
															<option value="BF" selected>BF</option>
															<option value="R">R</option>
														</select>
													</div>

												</div>
												
												<div class="row">
													<div class="col-md-3 align-self-center p-1">
														<label class="float-right">รายงานเลขที่</label>
													</div>
													<div class="col-md-6">
														<input type="text" name="jobcode" id="jobcode" class="form-control{{ $errors->has('jobcode') ? ' is-invalid' : '' }}"
														value="{{ \App\Http\Controllers\AdminInputController::gennewbfid() }}">
														@if ($errors->has('jobcode'))
														<span class="invalid-feedback" role="alert">
															<strong>{{ $errors->first('jobcode') }}</strong>
														</span>
														@endif
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-3 align-self-center p-1">
														<label class="float-right">ส่งธนาคาร</label>
													</div>
													<div class="col-md-6">
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
												</div>
												
												
												<div class="row">
													<div class="col-md-3 align-self-center p-1">
														<label class="float-right">ID (KK/UOB)</label>
													</div>
													<div class="col-md-6">
														<input type="text" id="reportcode" name="reportcode" class="form-control{{ $errors->has('reportcode') ? ' is-invalid' : '' }}"
														value="{{ old('reportcode') }}">
														@if ($errors->has('reportcode'))
														<span class="invalid-feedback" role="alert">
															<strong>{{ $errors->first('reportcode') }}</strong>
														</span>
														@endif
													</div>

												</div>
												
												<div class="row">
													<div class="col-md-3 align-self-center p-1">
														<label class="float-right">ประเภททรัพย์สิน</label>
													</div>
													<div class="col-md-6">
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
												</div>
												
												<div class="row">

													<div class="col-md-3 align-self-center p-1">
														<label class="float-right">ชื่่อโครงการ / ชื่อคอนโด (+ ถนน)</label>
													</div>
													<div class="col-md-6">
														<input type="text" name="projectname" id="projectname"
														class="form-control{{ $errors->has('projectname') ? ' is-invalid' : '' }}"
														value="{{ old('projectname') }}">
														@if ($errors->has('projectname'))
														<span class="invalid-feedback" role="alert">
															<strong>{{ $errors->first('projectname') }}</strong>
														</span>
														@endif
													</div>
												</div>

												<div class="row">
													<div class="col-md-3 align-self-center p-1">
														<label class="float-right">ขนาดพื้นที่่</label>
													</div>
													<div class="col-md-6">
														<input type="text" name="prop_size" id="prop_size" placeholder="ตัวอย่างฟอร์แม็ท : 99-0-99.9 ไร่ / 99.99 ตร.ม."
														class="form-control{{ $errors->has('prop_size') ? ' is-invalid' : '' }}"
														value="{{ old('prop_size') }}">
														@if ($errors->has('prop_size'))
														<span class="invalid-feedback" role="alert">
															<strong>{{ $errors->first('prop_size') }}</strong>
														</span>
														@endif
													</div>
												</div>

												<div class="row">
													<div class="col-md-3 align-self-center p-1">
														<label class="float-right">ทำเลที่ตั้ง</label>
													</div>
													<div class="col-md-6">
														<input type="text" name="proplocation" id="proplocation" placeholder="(เลขที่ / ชื่อสถานที่ / หมู่ / ซอย / ถนน) หรือ (งาน HL ระบุตำบล, อำเภอ ตามเอกสารสิทธ์ หรือ อช.)"
														class="form-control{{ $errors->has('proplocation') ? ' is-invalid' : '' }}"
														value="{{ old('proplocation') }}">
														@if ($errors->has('proplocation'))
														<span class="invalid-feedback" role="alert">
															<strong>{{ $errors->first('proplocation') }}</strong>
														</span>
														@endif
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-3 align-self-center p-1">
														<label class="float-right">จังหวัด</label>
													</div>
													<div class="col-md-6">
														<select name="province_code" id="province_code" class="form-control province{{ $errors->has('province_code') ? ' is-invalid' : '' }}">
															@foreach($list as $row)
															<option value="{{ $row->code }}">
																{{ $row->name_th }}
															</option>
															@endforeach
														</select>
														@if ($errors->has('province_code'))
														<span class="invalid-feedback" role="alert">
															<strong>{{ $errors->first('province_code') }}</strong>
														</span>
														@endif
													</div>
												</div>
																			
												<div class="row">
													<div class="col-md-3 align-self-center p-1">
														<label class="float-right">อำเภอ/เขต</label>
													</div>
													<div class="col-md-6">
														<select name="amphure_code" class="form-control amphures{{ $errors->has('amphure_code') ? ' is-invalid' : '' }}">
															@foreach($listtwo as $city)
															<option value="{{ $city->code }}">
																{{ $city->name_th }}
															</option>
															@endforeach
														</select>
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-3 align-self-center p-1">
														<label class="float-right">ตำบล</label>
													</div>
													<div class="col-md-6">
														<input type="text" name="district" id="district" placeholder=""
														class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}"
														value="{{ old('district') }}">
														@if ($errors->has('district'))
														<span class="invalid-feedback" role="alert">
															<strong>{{ $errors->first('district') }}</strong>
														</span>
														@endif
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-3 align-self-center p-1">
														<label class="float-right">ลูกค้าราย / ผู้ติดต่อ</label>
													</div>
													<div class="col-md-6">
														<input type="text" name="customer" id="customer" placeholder=""
														class="form-control{{ $errors->has('customer') ? ' is-invalid' : '' }}"
														value="{{ old('customer') }}">
														@if ($errors->has('customer'))
														<span class="invalid-feedback" role="alert">
															<strong>{{ $errors->first('customer') }}</strong>
														</span>
														@endif
													</div>
												</div>

												<div class="row">
													<div class="col-md-3 align-self-center p-1">
														<label class="float-right">รายงานภาษา</label>
													</div>
													<div class="col-md-6">
														<select name="jobtype" id="jobtype" class="form-control">
														<option value="ไทย 1 ชุด" selected>ไทย 1 ชุด</option>
														<option value="ไทย 2 ชุด">ไทย 2 ชุด</option>
														<option value="ไทย 2 ชุด + CD">ไทย 2 ชุด + CD</option>
														<option value="อังกฤษ 2 ชุด">อังกฤษ 2 ชุด</option>
														<option value="ไทย 2 ชุด + อังกฤษ 2 ชุด">ไทย 2 ชุด + อังกฤษ 2 ชุด</option>
														<option value="-">-</option>
														</select>
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-3 align-self-center p-1">
														<label class="float-right">Job Size</label>
													</div>
													<div class="col-md-6">
														<select name="jobsize" class="form-control">
														<option value="HL" selected>HL</option>
														<option value="S">S</option>
														<option value="L">L</option>
														<option value="-">-</option>
														</select>
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-3 align-self-center p-1">
														<label class="float-right">Job Difficulty</label>
													</div>
													<div class="col-md-6">
														<select name="easydiff" class="form-control">
															<option value="NORM" selected>NORM</option>
															<option value="DIFF">DIFF</option>
														</select>
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-3 align-self-center p-1">
														<label class="float-right">วัตถุประสงค์การประเมิน</label>
													</div>
													<div class="col-md-6">
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
												</div>
												
												<div class="row">
													<div class="col-md-3 align-self-center p-1">
														<label class="float-right">ค่าประเมิน (ไม่รวม VAT)</label>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<input type="text" name="valuationfee" id="valuationfee" placeholder="3000"
															class="form-control{{ $errors->has('valuationfee') ? ' is-invalid' : '' }}"
															value="{{ number_format(3000, 2, '.', ',') }}"
															oninput="SetFeeVat(this.value)"
															>
															@if ($errors->has('valuationfee'))
															<span class="invalid-feedback" role="alert">
																<strong>{{ $errors->first('valuationfee') }}</strong>
															</span>
															@endif
														</div>
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-3 align-self-center p-1">
														<label class="float-right">VAT (7%)</label>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<input type="text" name="valuationfeeVat" id="valuationfeeVat" placeholder="210"
															class="form-control{{ $errors->has('valuationfeeVat') ? ' is-invalid' : '' }}"
															>
															@if ($errors->has('valuationfeeVat'))
															<span class="invalid-feedback" role="alert">
																<strong>{{ $errors->first('valuationfeeVat') }}</strong>
															</span>
															@endif
														</div>
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-3 align-self-center p-1">
														<label class="float-right">ค่าประเมิน (NET)</label>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<input type="text" name="valuationfeeAll" id="valuationfeeAll" placeholder="3210"
															class="form-control{{ $errors->has('valuationfeeAll') ? ' is-invalid' : '' }}"
															value="{{ number_format(3000 + (3000 * 0.07), 2, '.', ',')  }}">
															@if ($errors->has('valuationfeeAll'))
															<span class="invalid-feedback" role="alert">
																<strong>{{ $errors->first('valuationfeeAll') }}</strong>
															</span>
															@endif
														</div>
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-3 align-self-center p-1">
														<label class="float-right">เงื่อนไขการเก็บเงินลูกค้า</label>
													</div>
													<div class="col-md-6">
														<select name="valuationfee_case" class="form-control">
														<option value="100% วางบิลธนาคาร" selected="">100% วางบิลธนาคาร</option>
														<option value="100% เก็บเงินลูกค้าหน้างาน">100% เก็บเงินลูกค้าหน้างาน</option>
														<option value="50/50 หน้างาน">50/50 หน้างาน</option>
														<option value="100% ณ วันที่มอบรายงาน">100% ณ วันที่มอบรายงาน</option>
														</select>
													</div>
												</div>

												

												<div class="row">
													<div class="col-md-3 align-self-center p-1">
														<label class="float-right">ผู้ประเมินหลัก</label>
													</div>
													<div class="col-md-6">
														<select name="headvaluer" class="form-control headvaluer{{ $errors->has('headvaluer') ? ' is-invalid' : '' }}">
															@foreach($listthree as $employee)
																@if($employee->id =='3')   
																	<option value="{{ $employee->id }}" selected="">
																		{{ $employee->username }}
																	</option>
																@else
																	<option value="{{ $employee->id }}">
																		{{ $employee->username }}
																	</option>        
																@endif
															@endforeach
														</select>
													</div>
												</div>

												<div class="row">
													<div class="col-md-3 align-self-center p-1">
														<label class="float-right">ผู้ประเมิน</label>
													</div>
													<div class="col-md-6">
														<select name="valuer" class="form-control valuer{{ $errors->has('valuer') ? ' is-invalid' : '' }}">
															@foreach($listthree as $employee)
															<option value="{{ $employee->id }}">
																{{ $employee->username }}
															</option>
															@endforeach
														</select>
													</div>
												</div>
												
												
												<div class="container">
													<div class="row">
														<div class="form-group col-md-2"></div>
														
														<div class="form-group col-md-2">
															<label>วันที่รับงาน</label>
															<div class="input-group">
																<div class="input-group-prepend">
																	<div class="input-group-text">
																		<i class="fas fa-calendar tx-16 lh-0 op-6"></i>
																	</div>
																</div>
																<input name="startdate" class="form-control fc-datepicker" placeholder = "Valid To" data-date-start-date="yy-m-d"  type="text" value="{{date('yy-m-d')}}">
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
																<input name="inspectiondate" class="form-control fc-datepicker" placeholder = "Valid To" data-date-start-date="yy-m-d" type="text" value="{{date('yy-m-d')}}">
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
																<input name="lcduedate" class="form-control fc-datepicker" placeholder = "Valid To" data-date-start-date="yy-m-d" type="text" value="{{date('yy-m-d')}}">
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
																<input name="clientduedate" class="form-control fc-datepicker" placeholder = "Valid To" data-date-start-date="yy-m-d" type="text" value="{{date('yy-m-d')}}">
															</div>
														</div>


													</div>
												</div>
												
												

												
												
											

												
											</div>
											
											<div class="container">
												<div class="row">
													<div class="form-group col-md-12">
														<button type="submit" class="btn btn-block btn-success">Submit</button>
													</div>
												</div>
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
		