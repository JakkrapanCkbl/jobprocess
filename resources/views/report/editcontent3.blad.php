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
							<label>เงื่อนไขการประเมินมูลค่า</label>
							<select name="estimatecondition" class="form-control">								
								<option value="ไม่มี"{{$job->prop_type=='ไม่มี'?'selected':''}}>ไม่มี</option>
								<option value="ประเมินภายใต้เงื่อนไขบ้านก่อสร้างแล้วเสร็จ 100% ปัจจุบันก่อสร้างแล้วเสร็จ ...% เหลืองานเก็บและทาสี"{{$job->prop_type=='ประเมินภายใต้เงื่อนไขบ้านก่อสร้างแล้วเสร็จ 100% ปัจจุบันก่อสร้างแล้วเสร็จ ...% เหลืองานเก็บและทาสี'?'selected':''}}>ประเมินภายใต้เงื่อนไขบ้านก่อสร้างแล้วเสร็จ 100% ปัจจุบันก่อสร้างแล้วเสร็จ ...% เหลืองานเก็บและทาสี</option>									
							</select>
						</div>

						
												
						<div class="form-group">
							<label>หมายเหตุ</label>
							<input type="text" name="remark" class="form-control{{ $errors->has('remark') ? ' is-invalid' : '' }}" 
							value="{{ $job->remark }}">
							  @if ($errors->has('remark'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('remark') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>แขวง/ตำบล (ระบุตามโฉนดที่ดิน)</label>
							<input type="text" name="deedtumbon" class="form-control{{ $errors->has('deedtumbon') ? ' is-invalid' : '' }}" 
							value="{{ $job->deedtumbon }}">
							  @if ($errors->has('deedtumbon'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('deedtumbon') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>เขต/อำเภอ (ระบุตามโฉนดที่ดิน)</label>
							<input type="text" name="deedamphur" class="form-control{{ $errors->has('deedamphur') ? ' is-invalid' : '' }}" 
							value="{{ $job->deedamphur }}">
							  @if ($errors->has('deedamphur'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('deedamphur') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>จังหวัด (ระบุตามโฉนดที่ดิน)</label>
							<input type="text" name="deedprovince" class="form-control{{ $errors->has('deedprovince') ? ' is-invalid' : '' }}" 
							value="{{ $job->deedprovince }}">
							  @if ($errors->has('deedprovince'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('deedprovince') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>ที่ตั้งอาคารชุด - โฉนดที่ดินเลขที่</label>
							<input type="text" name="deedno" class="form-control{{ $errors->has('deedno') ? ' is-invalid' : '' }}" 
							value="{{ $job->deedno }}">
							  @if ($errors->has('deedno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('deedno') }}</strong>                                       
                                    </span>
                                @endif
						</div>

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
							<label>อาคารเลขที่</label>
							<input type="text" name="buildingno" class="form-control{{ $errors->has('buildingno') ? ' is-invalid' : '' }}" 
							value="{{ $job->buildingno }}">
							  @if ($errors->has('buildingno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('buildingno') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>ทะเบียนอาคารชุดเลขที่</label>
							<input type="text" name="buildingregno" class="form-control{{ $errors->has('buildingregno') ? ' is-invalid' : '' }}" 
							value="{{ $job->buildingregno }}">
							  @if ($errors->has('buildingregno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('buildingregno') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>ผู้ถือกรรมสิทธิ์</label>
							<input type="text" name="ownership" class="form-control{{ $errors->has('ownership') ? ' is-invalid' : '' }}" 
							value="{{ $job->ownership }}">
							  @if ($errors->has('ownership'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ownership') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>การจดจำนองเป็นหลักประกัน</label>
							<input type="text" name="mortgage" class="form-control{{ $errors->has('mortgage') ? ' is-invalid' : '' }}" 
							value="{{ $job->mortgage }}">
							  @if ($errors->has('mortgage'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mortgage') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>การอายัดทรัพย์สิน</label>
							<input type="text" name="sequester" class="form-control{{ $errors->has('sequester') ? ' is-invalid' : '' }}" 
							value="{{ $job->sequester }}">
							  @if ($errors->has('sequester'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sequester') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>การรอนสิทธิ์</label>
							<input type="text" name="deprive" class="form-control{{ $errors->has('deprive') ? ' is-invalid' : '' }}" 
							value="{{ $job->deprive }}">
							  @if ($errors->has('deprive'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('deprive') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>ติดกับถนน</label>
							<input type="text" name="nearroad" class="form-control{{ $errors->has('nearroad') ? ' is-invalid' : '' }}" 
							value="{{ $job->nearroad }}">
							  @if ($errors->has('nearroad'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nearroad') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>ห่างจากสถานีรถไฟฟ้า</label>
							<input type="text" name="nearmrt" class="form-control{{ $errors->has('nearmrt') ? ' is-invalid' : '' }}" 
							value="{{ $job->nearmrt }}">
							  @if ($errors->has('nearmrt'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nearmrt') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>ห่างจากสถานีรถไฟฟ้า ประมาณ</label>
							<input type="text" name="nearmrtdistance" class="form-control{{ $errors->has('nearmrtdistance') ? ' is-invalid' : '' }}" 
							value="{{ $job->nearmrtdistance }}">
							  @if ($errors->has('nearmrtdistance'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nearmrtdistance') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>ถนนผ่านหน้าทรัพย์สิน</label>
							<input type="text" name="frontstreet" class="form-control{{ $errors->has('frontstreet') ? ' is-invalid' : '' }}" 
							value="{{ $job->frontstreet }}">
							  @if ($errors->has('frontstreet'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('frontstreet') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>สิทธิทางเข้า-ออก</label>
							<input type="text" name="publicentrance" class="form-control{{ $errors->has('publicentrance') ? ' is-invalid' : '' }}" 
							value="{{ $job->publicentrance }}">
							  @if ($errors->has('publicentrance'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('publicentrance') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>มีสภาพเป็นถนน</label>
							<input type="text" name="materialstreet" class="form-control{{ $errors->has('materialstreet') ? ' is-invalid' : '' }}" 
							value="{{ $job->materialstreet }}">
							  @if ($errors->has('materialstreet'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('materialstreet') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>กว้างประมาณ</label>
							<input type="text" name="streetwide" class="form-control{{ $errors->has('streetwide') ? ' is-invalid' : '' }}" 
							value="{{ $job->streetwide }}">
							  @if ($errors->has('streetwide'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('streetwide') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>เขตทางกว้างประมาณ</label>
							<input type="text" name="streetareawide" class="form-control{{ $errors->has('streetareawide') ? ' is-invalid' : '' }}" 
							value="{{ $job->streetareawide }}">
							  @if ($errors->has('streetareawide'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('streetareawide') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>สาธารณูปโภคที่ให้บริการทรัพย์สิน</label>
							<input type="text" name="utilities" class="form-control{{ $errors->has('utilities') ? ' is-invalid' : '' }}" 
							value="{{ $job->utilities }}">
							  @if ($errors->has('utilities'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('utilities') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>การคมนาคม</label>
							<input type="text" name="transport" class="form-control{{ $errors->has('transport') ? ' is-invalid' : '' }}" 
							value="{{ $job->transport }}">
							  @if ($errors->has('transport'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('transport') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>หมายเหตุ (2)</label>
							<input type="text" name="remark2" class="form-control{{ $errors->has('remark2') ? ' is-invalid' : '' }}" 
							value="{{ $job->remark2 }}">
							  @if ($errors->has('remark2'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('remark2') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>ข้อบังคับกฎหมายผังเมือง</label>
							<input type="text" name="planlaw" class="form-control{{ $errors->has('planlaw') ? ' is-invalid' : '' }}" 
							value="{{ $job->planlaw }}">
							  @if ($errors->has('planlaw'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('planlaw') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>การใช้ระโยชน์ของทรัพย์สิน</label>
							<input type="text" name="propertiesused" class="form-control{{ $errors->has('propertiesused') ? ' is-invalid' : '' }}" 
							value="{{ $job->propertiesused }}">
							  @if ($errors->has('propertiesused'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('propertiesused') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>การใช้ประโยชน์ที่ดินบริเวณใกล้เคียง</label>
							<input type="text" name="propertiesnearused" class="form-control{{ $errors->has('propertiesnearused') ? ' is-invalid' : '' }}" 
							value="{{ $job->propertiesnearused }}">
							  @if ($errors->has('propertiesnearused'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('propertiesnearused') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>อาคารชุด - สูง</label>
							<input type="text" name="buildinghight" class="form-control{{ $errors->has('buildinghight') ? ' is-invalid' : '' }}" 
							value="{{ $job->buildinghight }}">
							  @if ($errors->has('buildinghight'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('buildinghight') }}</strong>                                       
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
							<label>อัตราค่าส่วนกลาง (CAM FEE)</label>
							<input type="text" name="commonfee" class="form-control{{ $errors->has('commonfee') ? ' is-invalid' : '' }}" 
							value="{{ $job->commonfee }}">
							  @if ($errors->has('commonfee'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('commonfee') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>ยอดค้างชำระส่วนกลางที่ตรวจสอบได้</label>
							<input type="text" name="commonoverdue" class="form-control{{ $errors->has('commonoverdue') ? ' is-invalid' : '' }}" 
							value="{{ $job->commonoverdue }}">
							  @if ($errors->has('commonoverdue'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('commonoverdue') }}</strong>                                       
                                    </span>
                                @endif
						</div>


						<div class="form-group">
							<label>การคาดหมายความเจริญเติบโตในบริเวณใกล้เคียง</label>
							<input type="text" name="prosperity" class="form-control{{ $errors->has('prosperity') ? ' is-invalid' : '' }}" 
							value="{{ $job->prosperity }}">
							  @if ($errors->has('prosperity'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prosperity') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>สภาพคล่องในการซื้อ-ขาย</label>
							<input type="text" name="liquidity" class="form-control{{ $errors->has('liquidity') ? ' is-invalid' : '' }}" 
							value="{{ $job->liquidity }}">
							  @if ($errors->has('liquidity'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('liquidity') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>มูลค่าบังคับขาย (%)</label>
							<input type="text" name="forcesale" class="form-control{{ $errors->has('forcesale') ? ' is-invalid' : '' }}" 
							value="{{ $job->forcesale }}">
							  @if ($errors->has('forcesale'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('forcesale') }}</strong>                                       
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
							<label>อายุอาคาร (ปี)</label>
							<input type="text" name="buildingyear" class="form-control{{ $errors->has('buildingyear') ? ' is-invalid' : '' }}" 
							value="{{ $job->buildingyear }}">
							  @if ($errors->has('buildingyear'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('buildingyear') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>สภาพอาคาร</label>
							<input type="text" name="buildingstatus" class="form-control{{ $errors->has('buildingstatus') ? ' is-invalid' : '' }}" 
							value="{{ $job->buildingstatus }}">
							  @if ($errors->has('buildingstatus'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('buildingstatus') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>ตำแหน่งที่ตั้งห้องชุด</label>
							<input type="text" name="roomlocation" class="form-control{{ $errors->has('roomlocation') ? ' is-invalid' : '' }}" 
							value="{{ $job->roomlocation }}">
							  @if ($errors->has('roomlocation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('roomlocation') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>ทัศนียภาพ / วิว</label>
							<input type="text" name="roomview" class="form-control{{ $errors->has('roomview') ? ' is-invalid' : '' }}" 
							value="{{ $job->roomview }}">
							  @if ($errors->has('roomview'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('roomview') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>ราคาประเมินราชการ (ห้องชุด)</label>
							<input type="text" name="govvalue" class="form-control{{ $errors->has('govvalue') ? ' is-invalid' : '' }}" 
							value="{{ $job->govvalue }}">
							  @if ($errors->has('govvalue'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('govvalue') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>มูลค่าประกันอัคคีภัย (บาท/ตรม.)</label>
							<input type="text" name="fireinsurance" class="form-control{{ $errors->has('fireinsurance') ? ' is-invalid' : '' }}" 
							value="{{ $job->fireinsurance }}">
							  @if ($errors->has('fireinsurance'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fireinsurance') }}</strong>                                       
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
							<label>อัตราการเข้าอยู่อาศัย (%)</label>
							<input type="text" name="percenliverate" class="form-control{{ $errors->has('percenliverate') ? ' is-invalid' : '' }}" 
							value="{{ $job->percenliverate }}">
							  @if ($errors->has('percenliverate'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('percenliverate') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>ระยะห่างจากสาขา (กรณีต่างจังหวัด)</label>
							<input type="text" name="branchdistance" class="form-control{{ $errors->has('branchdistance') ? ' is-invalid' : '' }}" 
							value="{{ $job->branchdistance }}">
							  @if ($errors->has('branchdistance'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('branchdistance') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>แนวรถไฟฟ้าBTS/MRT</label>
							<input type="text" name="btsmrtplan" class="form-control{{ $errors->has('btsmrtplan') ? ' is-invalid' : '' }}" 
							value="{{ $job->btsmrtplan }}">
							  @if ($errors->has('btsmrtplan'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('btsmrtplan') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>สภาพการดูแลรักษา</label>
							<input type="text" name="maintainstatus" class="form-control{{ $errors->has('maintainstatus') ? ' is-invalid' : '' }}" 
							value="{{ $job->maintainstatus }}">
							  @if ($errors->has('maintainstatus'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('maintainstatus') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>โครงการเปิดขายประมาณ</label>
							<input type="text" name="projectopen" class="form-control{{ $errors->has('projectopen') ? ' is-invalid' : '' }}" 
							value="{{ $job->projectopen }}">
							  @if ($errors->has('projectopen'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('projectopen') }}</strong>                                       
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
							<label>ยอดโอนประมาณ</label>
							<input type="text" name="percenttransfer" class="form-control{{ $errors->has('percenttransfer') ? ' is-invalid' : '' }}" 
							value="{{ $job->percenttransfer }}">
							  @if ($errors->has('percenttransfer'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('percenttransfer') }}</strong>                                       
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>อัตราเข้าพัก</label>
							<input type="text" name="percentstay" class="form-control{{ $errors->has('percentstay') ? ' is-invalid' : '' }}" 
							value="{{ $job->percentstay }}">
							  @if ($errors->has('percentstay'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('percentstay') }}</strong>                                       
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



					</form>
				</div>
		</div>
	</div>
	</div>
</div>
{{csrf_field()}}