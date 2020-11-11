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
				<div class="card-body">

					<form action="{{route('admininputjob.update',[$job->id])}}" method="POST" enctype="multipart/form-data">@csrf
						<div class="form-group">
							<label>รหัสใบเสนองาน</label>
							<input type="text" name="jobcode" class="form-control{{ $errors->has('jobcode') ? ' is-invalid' : '' }}" 
							value="{{ $job->jobcode }}">
							  @if ($errors->has('jobcode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('jobcode') }}</strong>                                       
                                    </span>
                                @endif
						</div>
												
						<div class="form-group">
							<label>KK-ID</label>
							<input type="text" name="reportcode" class="form-control{{ $errors->has('reportcode') ? ' is-invalid' : '' }}"
							value="{{ $job->reportcode }}">
							  @if ($errors->has('reportcode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('reportcode') }}</strong>
                                    </span>
                               @endif
						</div>

						<div class="form-group">
							<label>ประเภททรัพย์สิน</label>
							<select name="prop_type" class="form-control">									
								<option value="ห้องชุด"{{$job->prop_type=='ห้องชุด'?'selected':''}}>ห้องชุด</option>
								<option value="บ้านเดี่ยว"{{$job->prop_type=='บ้านเดี่ยว'?'selected':''}}>บ้านเดี่ยว</option>
								<option value="บ้านแฝด"{{$job->prop_type=='บ้านแฝด'?'selected':''}}>บ้านแฝด</option>
								<option value="ทาวน์เฮาส์/ทาวน์โฮม"{{$job->prop_type=='ทาวน์เฮาส์/ทาวน์โฮม'?'selected':''}}>ทาวน์เฮาส์/ทาวน์โฮม</option>
								<option value="ตึกแถว"{{$job->prop_type=='ตึกแถว'?'selected':''}}>ตึกแถว</option>
								<option value="ที่ดินว่างเปล่า"{{$job->prop_type=='ที่ดินว่างเปล่า'?'selected':''}}>ที่ดินว่างเปล่า</option>
								<option value="โรงงาน/โกดัง"{{$job->prop_type=='โรงงาน/โกดัง'?'selected':''}}>โรงงาน/โกดัง</option>
								<option value="อพาร์ทเม้นท์"{{$job->prop_type=='อพาร์ทเม้นท์'?'selected':''}}>อพาร์ทเม้นท์</option>
								<option value="โรงแรม"{{$job->prop_type=='โรงแรม'?'selected':''}}>โรงแรม</option>
								<option value="อาคารสำนักงาน"{{$job->prop_type=='อาคารสำนักงาน'?'selected':''}}>อาคารสำนักงาน</option>
								<option value="โฮมออฟฟิศ/มินิออฟฟิศ"{{$job->prop_type=='โฮมออฟฟิศ/มินิออฟฟิศ'?'selected':''}}>โฮมออฟฟิศ/มินิออฟฟิศ</option>	
								<option value="ที่ดินพร้อมสิ่งปลูกสร้าง"{{$job->prop_type=='ที่ดินพร้อมสิ่งปลูกสร้าง'?'selected':''}}>ที่ดินพร้อมสิ่งปลูกสร้าง</option>
								<option value="สิทธิการเช่า"{{$job->prop_type=='สิทธิการเช่า'?'selected':''}}>สิทธิการเช่า</option>
								<option value="เครื่องจักร"{{$job->prop_type=='อื่น ๆ'?'selected':''}}>เครื่องจักร</option>
								<option value="อื่น ๆ"{{$job->prop_type=='อื่น ๆ'?'selected':''}}>อื่น ๆ</option>													
							</select>							
						</div>

						<div class="form-group">
							<label>ชื่่อโครงการ / ชื่อคอนโด (ตัวอย่าง format : ชื่่อโครงการ / ชื่อคอนโด + ถนน)</label>
							<input type="text" name="projectname" 
							class="form-control{{ $errors->has('projectname') ? ' is-invalid' : '' }}"
							value="{{ $job->projectname }}">
							@if ($errors->has('projectname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('projectname') }}</strong>
                                </span>
                             @endif
						</div>


						<!-- combo for select jobsize -->
						<div class="form-group">
							<label class="form-label">SIZE</label>
							<select name="jobsize" class="form-control">
								<option value="HL"{{$job->jobsize=='HL'?'selected':''}}>HL</option>
								<option value="S"{{$job->jobsize=='S'?'selected':''}}>S</option>
								<option value="L"{{$job->jobsize=='L'?'selected':''}}>L</option>
								<option value="-"{{$job->jobsize=='-'?'selected':''}}>-</option>
							</select>													
						</div>
						<!-- end combo for select id type -->

						<!--jobtype-->

						<div class="form-group">
							<label class="form-label">>Normal / Difficult</label>
							<select name="easydiff" class="form-control">
								<option value="NORM"{{$job->easydiff=='NORM'?'selected':''}}>NORM</option>
								<option value="DIFF"{{$job->easydiff=='DIFF'?'selected':''}}>DIFF</option>
							</select>													
						</div>


						<div class="form-group">
							<label>ที่อยู่ในรายงาน / ธนาคาร</label>
							<select name="client" id="client" class="form-control" tabindex="-1" aria-hidden="true" onchange="selectElement('client', this.value)">
								<option value="UOB"{{$job->client=='UOB'?'selected':''}}>UOB</option>
								<option value="KK"{{$job->client=='KK'?'selected':''}}>KK</option>
								<option value="CIMB"{{$job->client=='CIMB'?'selected':''}}>CIMB</option>
								<option value="SCB"{{$job->client=='SCB'?'selected':''}}>SCB</option>
								<option value="BOC"{{$job->client=='UOB'?'selected':''}}>BOC</option>
								<option value="ICBC"{{$job->client=='ICBC'?'selected':''}}>ICBC</option>
								<option value="LHB"{{$job->client=='LHB'?'selected':''}}>LHB</option>							
							</select>							
						</div>
						

					
						<div class="form-group">
							<label class="form-label">จำนวนชุด Report</label>
							<select name="jobtype" class="form-control">
								<option value="ไทย 1 ชุด"{{$job->jobtype=='ไทย 1 ชุด'?'selected':''}}>ไทย 1 ชุด</option>
								<option value="ไทย 2 ชุด"{{$job->jobtype=='ไทย 2 ชุด'?'selected':''}}>ไทย 2 ชุด</option>
								<option value="อังกฤษ 2 ชุด"{{$job->jobtype=='อังกฤษ 2 ชุด'?'selected':''}}>อังกฤษ 2 ชุด</option>
								<option value="ไทย 2 ชุด + อังกฤษ 2 ชุด"{{$job->jobtype=='ไทย 2 ชุด + อังกฤษ 2 ชุด'?'selected':''}}>ไทย 2 ชุด + อังกฤษ 2 ชุด</option>
								<option value="-"{{$job->jobtype=='-'?'selected':''}}>-</option>
							</select>													
						</div>

						<div class="form-group">
							<label>ขนาดพื้นที่่ (ตัวอย่าง format : 99-0-99.9 ไร่ หรือ 99.99 ตรม.)</label>
							<input type="text" name="prop_size" class="form-control{{ $errors->has('prop_size') ? ' is-invalid' : '' }}"
							value="{{ $job->prop_size }}">
							  @if ($errors->has('prop_size'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prop_size') }}</strong>
                                    </span>
                              @endif
						</div>

						
						<div class="form-group">
							<label>ทำเลที่ตั้ง (เลขที่ / ชื่อสถานที่ / หมู่ / ซอย / ถนน)   (งาน HL ระบุตำบล, อำเภอ ตามเอกสารสิทธ์ หรือ อช.) </label>
							<input type="text" name="proplocation" placeholder="เลขที่ / ชื่อสถานที่ / หมู่ / ซอย / ถนน" 
							class="form-control{{ $errors->has('proplocation') ? ' is-invalid' : '' }}"
							value="{{ $job->proplocation }}">
							  @if ($errors->has('proplocation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('proplocation') }}</strong>
                                    </span>
                                @endif
						</div>
						
						<div class="form-group">
							<select name="province_id" id="province_id" 
							class="form-control province{{ $errors->has('province_id') ? ' is-invalid' : '' }}"
							value="{{ $job->province_id }}">															
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

						<div class="form-group">
                        	 <select name="amphure_id" 
							class="form-control amphures{{ $errors->has('amphure_id') ? ' is-invalid' : '' }}"
							value="{{ $job->amphure_id }}">
							        @foreach($listtwo as $city)
							            <option value="{{ $city->code }}" {{ ($job->amphure_id == $city->code) ? 'selected' : '' }}>
							                {{ $city->name_th }}
							            </option>
							        @endforeach
							</select>
						</div>	

						<div class="form-group">
							<label>ตำบล</label>
							<input type="text" name="district" 
							class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}"
							value="{{ $job->district }}">
							  @if ($errors->has('district'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('district') }}</strong>
                                    </span>
                              @endif
						</div>

						<div class="form-group">
							<label>ลูกค้าราย / ผู้ติดต่อ</label>
							<input type="text" name="customer" class="form-control{{ $errors->has('customer') ? ' is-invalid' : '' }}"
							value="{{ $job->customer }}">
							  @if ($errors->has('customer'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('customer') }}</strong>
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>วัตถุประสงค์การประเมิน</label>
							<select name="obj_id" class="form-control">								
								<option value="1"{{$job->obj_id=='1'?'selected':''}}>เพื่อประกอบการพิจารณาสินเชื่อ</option>
								<option value="2"{{$job->obj_id=='2'?'selected':''}}>เพื่อทบทวนราคาประเมิน</option>
								<option value="3"{{$job->obj_id=='3'?'selected':''}}>ทราบมูลค่าตลาด</option>
								<option value="4"{{$job->obj_id=='4'?'selected':''}}>สาธารณะ</option>
								<option value="5"{{$job->obj_id=='5'?'selected':''}}>บันทึกมูลค่าทางบัญชี</option>
								<option value="6"{{$job->obj_id=='6'?'selected':''}}>พิจารณาภายในบริษัท, ใช้เป็นข้อมูลภายในบริษัท</option>
								<option value="7"{{$job->obj_id=='7'?'selected':''}}>เพื่ออ้างอิงในการเจรจาต่อรองราคา</option>
								<option value="8"{{$job->obj_id=='8'?'selected':''}}>เพื่อกำหนดราคาซื้อขายทอดตลาด</option>
								<option value="9"{{$job->obj_id=='9'?'selected':''}}>เพื่อประกอบการตั้งราคาขายทรัพย์สิน</option>
								<option value="10"{{$job->obj_id=='10'?'selected':''}}>ปรับปรุงโครงสร้างหนี้</option>
								<option value="11"{{$job->obj_id=='11'?'selected':''}}>อื่น ๆ</option>								
							</select>							
						</div>
						

						<div class="form-group">
							<label>วันที่รับงาน</label>
							<div class="input-group">												
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-calendar tx-16 lh-0 op-6"></i>
									</div>
								</div>
								<input name="startdate" class="form-control fc-datepicker" placeholder="y-m-d" type="text" value = "{{date('y-m-d', strtotime($job->startdate))}}">
							</div>	
						</div>
						
						<div class="form-group">
							<label>วันที่สำรวจ</label>
							<div class="input-group">												
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-calendar tx-16 lh-0 op-6"></i>
									</div>
								</div>
								<input name="inspectiondate" class="form-control fc-datepicker" placeholder="y-m-d" type="text" value = "{{date('y-m-d', strtotime($job->inspectiondate))}}">
							</div>	
						</div>
																	
						<div class="form-group">
							<label>วันที่ส่ง</label>
							<div class="input-group">												
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-calendar tx-16 lh-0 op-6"></i>
									</div>
								</div>
								<input name="lcduedate" class="form-control fc-datepicker" placeholder="y-m-d" type="text" value = "{{date('y-m-d', strtotime($job->lcduedate))}}">
							</div>	
						</div>


						
						<div class="form-group">
							<label>Due Date</label>
							<div class="input-group">												
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-calendar tx-16 lh-0 op-6"></i>
									</div>
								</div>
								<input name="clientduedate" class="form-control fc-datepicker" placeholder="y-m-d" type="text" value = "{{date('y-m-d', strtotime($job->clientduedate))}}">
							</div>	
						</div>

						<div class="form-group">
							<label>ค่าประเมิน (ไม่รวม VAT)</label>
							<input type="text" name="valuationfee" class="form-control{{ $errors->has('valuationfee') ? ' is-invalid' : '' }}" 
							value="{{ $job->valuationfee }}">
							  @if ($errors->has('valuationfee'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('valuationfee') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						

						<div class="form-group">
							<label>เงื่อนไขการเก็บเงินลูกค้า</label>
							<select name="valuationfee_case" class="form-control">								
								<option value="100% วางบิลธนาคาร"{{$job->valuationfee_case=='100% วางบิลธนาคาร'?'selected':''}}>100% วางบิลธนาคาร</option>
								<option value="100% เก็บเงินลูกค้าหน้างาน"{{$job->valuationfee_case=='100% เก็บเงินลูกค้าหน้างาน'?'selected':''}}>100% เก็บเงินลูกค้าหน้างาน</option>
								<option value="50/50 หน้างาน"{{$job->valuationfee_case=='50/50 หน้างาน'?'selected':''}}>50/50 หน้างาน</option>
								<option value="100% ณ วันที่มอบรายงาน"{{$job->valuationfee_case=='100% ณ วันที่มอบรายงาน'?'selected':''}}>100% ณ วันที่มอบรายงาน</option>	
							</select>							
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
{{csrf_field()}}