<!doctype html>
<html lang="en" dir="ltr">
	<head>
		
		@include('dashboard.head')

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
						@if(Session::has('message'))
							<div class="alert alert-success">{{Session::get('message')}}</div>
						@endif
						<div class="row">
							<div class="col-md-4">
							  	@include('admin.left-menu')
							</div>
							<div class="col-md-8">
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
												<label>id</label>
												<input type="text" name="reportcode" class="form-control{{ $errors->has('reportcode') ? ' is-invalid' : '' }}"
												value="{{ $job->reportcode }}">
												  @if ($errors->has('reportcode'))
					                                    <span class="invalid-feedback" role="alert">
					                                        <strong>{{ $errors->first('reportcode') }}</strong>
					                                    </span>
					                               @endif
											</div>

											<div class="form-group">
												<label>ชื่่อโครงการ</label>
												<input type="text" name="projectname" 
												class="form-control{{ $errors->has('projectname') ? ' is-invalid' : '' }}"
												value="{{ $job->projectname }}">
												@if ($errors->has('projectname'))
					                                <span class="invalid-feedback" role="alert">
					                                    <strong>{{ $errors->first('projectname') }}</strong>
					                                </span>
					                             @endif
											</div>

											<!--jobsize-->						
											<!--jobtype-->

											<div class="form-group">
												<label>ผู้ว่าจ้าง</label>
												<input type="text" name="client" class="form-control{{ $errors->has('client') ? ' is-invalid' : '' }}"
												value="{{ $job->client }}">
												  @if ($errors->has('client'))
					                                    <span class="invalid-feedback" role="alert">
					                                        <strong><{{ $errors->first('client') }}</strong>
					                                    </span>
					                                @endif
											</div>

											<div class="form-group">
												<label>ลูกค้าราย</label>
												<input type="text" name="customer" class="form-control{{ $errors->has('customer') ? ' is-invalid' : '' }}"
												value="{{ $job->customer }}">
												  @if ($errors->has('customer'))
					                                    <span class="invalid-feedback" role="alert">
					                                        <strong>{{ $errors->first('customer') }}</strong>
					                                    </span>
					                                @endif
											</div>
											
											<div class="form-group">
												<label>ประเภททรัพย์สิน</label>
												<select name="prop_type" class="form-control">								
													<option value="โครงการคอนโดมิเนียม"{{$job->prop_type=='โครงการคอนโดมิเนียม'?'selected':''}}>โครงการคอนโดมิเนียม</option>
													<option value="โครงการบ้านจัดสรร"{{$job->prop_type=='โครงการบ้านจัดสรร'?'selected':''}}>โครงการบ้านจัดสรร</option>
													<option value="ที่อยู่อาศัย"{{$job->prop_type=='ที่อยู่อาศัย'?'selected':''}}>ที่อยู่อาศัย</option>		
												</select>
											</div>

											<div class="form-group">
												<label>ขนาดพื้นที่่ (ตัวอย่าง format : 99-99-99.99 ไร่ หรือ 99.99 ตรม.)</label>
												<input type="text" name="prop_size" class="form-control{{ $errors->has('prop_size') ? ' is-invalid' : '' }}"
												value="{{ $job->prop_size }}">
												  @if ($errors->has('prop_size'))
					                                    <span class="invalid-feedback" role="alert">
					                                        <strong>{{ $errors->first('prop_size') }}</strong>
					                                    </span>
					                              @endif
											</div>

											
											<div class="form-group">
												<label>ทำเลที่ตั้ง</label>
												<input type="text" name="proplocation" placeholder="เลขที่ / ชื่อสถานที่ / หมู่ / ซอย / ถนน" 
												class="form-control{{ $errors->has('proplocation') ? ' is-invalid' : '' }}"
												value="{{ $job->proplocation }}">
												  @if ($errors->has('proplocation'))
					                                    <span class="invalid-feedback" role="alert">
					                                        <strong>{{ $errors->first('proplocation') }}</strong>
					                                    </span>
					                                @endif
											</div>

											<!-- propd_id -->
											
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
												<label>Start Date</label>
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
												<label>กำหนดส่งงานของบริษัทแลนด์มาร์ค</label>
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
												<label>กำหนดส่งงานให้ผู้ว่าจ้าง</label>
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
												<button type="submit" class="btn btn-success">Update</button>
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
		