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

					<form action="{{route('admininputjob.update2',[$job->id])}}" method="POST" enctype="multipart/form-data">@csrf
						
						

						<div class="form-group">
							<label>เนื้อที่ดิน (ที่ดินโครงการ)</label>
							<input type="text" name="landsize" class="form-control{{ $errors->has('landsize') ? ' is-invalid' : '' }}" 
							value="{{ $job->landsize }}">
							  @if ($errors->has('landsize'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('landsize') }}</strong>                                       
                                    </span>
                                @endif
						</div>

																	
						<div class="form-group">
							<label>จำนวนห้องชุดในโครงการ (ยูนิต)</label>
							<input type="text" name="units" class="form-control{{ $errors->has('units') ? ' is-invalid' : '' }}" 
							value="{{ $job->units }}">
							  @if ($errors->has('units'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('units') }}</strong>                                       
                                    </span>
                                @endif
						</div>


						<div class="form-group">
							<label>ยอดขายโครงการประมาณ</label>
							<input type="text" name="percentsell" class="form-control{{ $errors->has('percentsell') ? ' is-invalid' : '' }}" 
							value="{{ $job->percentsell }}">
							  @if ($errors->has('percentsell'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('percentsell') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						
						<div class="form-group">
							<label>ราคาเริ่มต้น</label>
							<input type="text" name="startprice" class="form-control{{ $errors->has('startprice') ? ' is-invalid' : '' }}" 
							value="{{ $job->startprice }}">
							  @if ($errors->has('startprice'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('startprice') }}</strong>                                       
                                    </span>
                                @endif
						</div>
						
						<div class="form-group">
							<label>รูปแบบห้องชุด</label>
							<input type="text" name="roomtype" class="form-control{{ $errors->has('roomtype') ? ' is-invalid' : '' }}" 
							value="{{ $job->roomtype }}">
							  @if ($errors->has('roomtype'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('roomtype') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>สิ่งอำนวยความสะดวกภายในโครงการ</label>
							<input type="text" name="convenient" class="form-control{{ $errors->has('convenient') ? ' is-invalid' : '' }}" 
							value="{{ $job->convenient }}">
							  @if ($errors->has('convenient'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('convenient') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>ตัวแทนขาย</label>
							<input type="text" name="broker" class="form-control{{ $errors->has('broker') ? ' is-invalid' : '' }}" 
							value="{{ $job->broker }}">
							  @if ($errors->has('broker'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('broker') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>เริ่มเปิดโครงการ (เดือน ปี)</label>
							<input type="text" name="yearstart" class="form-control{{ $errors->has('yearstart') ? ' is-invalid' : '' }}" 
							value="{{ $job->yearstart }}">
							  @if ($errors->has('yearstart'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('yearstart') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>ความคืบหน้าของโครงการ (%)</label>
							<input type="text" name="buildingprogress" class="form-control{{ $errors->has('buildingprogress') ? ' is-invalid' : '' }}" 
							value="{{ $job->buildingprogress }}">
							  @if ($errors->has('buildingprogress'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('buildingprogress') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>Latitude</label>
							<input type="text" name="lat" class="form-control{{ $errors->has('lat') ? ' is-invalid' : '' }}" 
							value="{{ $job->lat }}">
							  @if ($errors->has('lat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lat') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>Longtitude</label>
							<input type="text" name="lng" class="form-control{{ $errors->has('lng') ? ' is-invalid' : '' }}" 
							value="{{ $job->lng }}">
							  @if ($errors->has('lng'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lng') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>แหล่งข้อมูล</label>
							<input type="text" name="inforesource" class="form-control{{ $errors->has('inforesource') ? ' is-invalid' : '' }}" 
							value="{{ $job->inforesource }}">
							  @if ($errors->has('inforesource'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('inforesource') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>สรุปราคา ราคาประเมินทางราชการ</label>
							<input type="text" name="assessmentvalue" class="form-control{{ $errors->has('assessmentvalue') ? ' is-invalid' : '' }}" 
							value="{{ $job->assessmentvalue }}">
							  @if ($errors->has('assessmentvalue'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('assessmentvalue') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						

						<div class="form-group">
							<label>สรุปราคา มูลค่าตลาดของทรัพย์สิน</label>
							<input type="text" name="marketvalue" class="form-control{{ $errors->has('marketvalue') ? ' is-invalid' : '' }}" 
							value="{{ $job->marketvalue }}">
							  @if ($errors->has('marketvalue'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('marketvalue') }}</strong>                                       
                                    </span>
                                @endif
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