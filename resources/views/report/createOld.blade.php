@extends('layouts.main')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4">
			      @include('admin.left-menu')

		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					Add Job
				</div>
				<div class="card-body">

					<form action="" method="POST" enctype="multipart/form-data">@csrf
						<div class="form-group">
							<label>รหัสใบเสนองาน</label>
							<input type="text" name="jobcode" class="form-control{{ $errors->has('jobcode') ? ' is-invalid' : '' }}" 
							value="{{ \App\Http\Controllers\AdminInputController::gennewid() }}">
							  @if ($errors->has('jobcode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('jobcode') }}</strong>                                       
                                    </span>
                                @endif
						</div>
												
						<div class="form-group">
							<label>id</label>
							<input type="text" name="reportcode" class="form-control{{ $errors->has('reportcode') ? ' is-invalid' : '' }}"
							value="{{ old('reportcode') }}">
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
							value="{{ old('projectname') }}">
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
							value="{{ old('client') }}">
							  @if ($errors->has('client'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong><{{ $errors->first('client') }}</strong>
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>ลูกค้าราย</label>
							<input type="text" name="customer" class="form-control{{ $errors->has('customer') ? ' is-invalid' : '' }}"
							value="{{ old('customer') }}">
							  @if ($errors->has('customer'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('customer') }}</strong>
                                    </span>
                                @endif
						</div>
						
						<div class="form-group">
							<label>ประเภททรัพย์สิน</label>
							<select name="prop_type" class="form-control">								
								<option value="โครงการคอนโดมิเนียม" selected>โครงการคอนโดมิเนียม</option>
								<option value="โครงการบ้านจัดสรร">โครงการบ้านจัดสรร</option>
								<option value="ที่อยู่อาศัย">ที่อยู่อาศัย</option>		
							</select>
						</div>

						<div class="form-group">
							<label>ขนาดพื้นที่่ (ตัวอย่าง format : 99-99-99.99 ไร่ หรือ 99.99 ตร.ม.)</label>
							<input type="text" name="prop_size" class="form-control{{ $errors->has('prop_size') ? ' is-invalid' : '' }}"
							value="{{ old('prop_size') }}">
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
							value="{{ old('proplocation') }}">
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
							value="{{ old('province_id') }}">
								<option value="">เลือกจังหวัด</option>								
								@foreach($list as $row)
									<option value="{{$row->code}}">{{$row->name_th}}</option>
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
							value="{{ old('amphure_id') }}">
								<option value="">เลือกอำเภอ</option>				
							</select>
							 @if ($errors->has('amphure_id'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('amphure_id') }}</strong>
                                </span>
                             @endif
						</div>	

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
							<label>Start Date</label>
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
							<label>กำหนดส่งงานของบริษัทแลนด์มาร์ค</label>							
							<input name = "lcduedate" type="text" class = "form-control"
							placeholder = "Valid To" data-date-start-date="yy-m-d" 					
							value = "{{date('yy-m-d', strtotime('+3 day'))}}">
						</div>

						<div class="form-group">
							<label>กำหนดส่งงานให้ผู้ว่าจ้าง</label>							
							<input name = "clientduedate" type="text" class = "form-control"
							placeholder = "Valid To" data-date-start-date="yy-m-d" 					
							value = "{{date('yy-m-d', strtotime('+3 day'))}}">
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

@endsection


