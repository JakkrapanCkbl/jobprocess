@extends('layouts.usermenu')
@section('content')
       <div class="container"> 
        <div class="row">
		<div class="col-md-12"> <br />
			<h3 align="center">แก้ไขข้อมูลงานประเมินราคา</h3> <br/>
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>@foreach($errors->all() as $error)
                                <li>{{$error}}</li>			
                        @endforeach</ul>
                            </div>
                        @endif
                                              
			<form method="post" action="{{action('JobProject_Controller@update',$id)}}">
				{{csrf_field()}}
				<div class="form-group">
					<input type="text" name="jobcode" class="form-control" placeholder="รหัสโครงการ" value="{{$job->jobcode}}" />
				</div>
				<div class="form-group">
					<input type="text" name="projectname" class="form-control" placeholder="ชื่อโครงการ" value="{{$job->projectname}}" />
				</div>
				<div class="form-group">
					<input type="text" name="่jobsize" class="form-control" placeholder="ขนาดของงานประเมิน"  value="{{$job->jobsize}}" />
				</div>
				<div class="form-group">
					<input type="text" name="jobtype" class="form-control" placeholder="ประเภทงานประเมิน" value="{{$job->jobtype}}" />
				</div>
				<div class="form-group">
					<input type="text" name="client" class="form-control" placeholder="ผู้ว่าจ้าง" value="{{$job->client}}" />
				</div>
				<div class="form-group">
					<input type="text" name="customer" class="form-control" placeholder="ลูกค้าของผู้ว่าจ้าง" value="{{$job->customer}}" />
				</div>
				<div class="form-group">
					<input type="text" name="prop_type" class="form-control" placeholder="ประเภททรัพย์สิน" value="{{$job->prop_type}}" />
				</div>
				<div class="form-group">
					<input type="text" name="prop_size" class="form-control" placeholder="ขนาดทรัพย์สิน" value="{{$job->prop_size}}" />
				</div>
				<div class="form-group">
					<input type="text" name="proplocation" class="form-control" placeholder="ทำเลที่ตั้ง" value="{{$job->proplocation}}" />
				</div>
				
				<div class="form-group">					
					วันที่เริ่มงาน :
					<input type="date" name="startdate" value="{{$job->startdate}}">
					วันที่สำรวจ :
					<input type="date" name="inspectiondate" value="{{$job->inspectiondate}}" />
					กำหนดส่งงานของ LC : 
					<input type="date" name="lcduedate" value="{{$job->lcduedate}}" />
					กำหนดส่งงานให้ผู้ว่าจ้าง :
					<input type="date" name="clientduedate" value="{{$job->clientduedate}}" />
				</div>
				<div class="form-group">
					<input type="text" name="headvaluer" class="form-control" placeholder="ผู้ประเมินราคาหลัก" value="{{$job->headvaluer}}" />
				</div>
				<div class="form-group">
					<input type="text" name="valuer" class="form-control" placeholder="ผู้ประเมินราคา" value="{{$job->valuer}}" />
				</div>
				<div class="form-group">
					<input type="text" name="percentfinish" class="form-control" placeholder="เปอร์เซ็นความคืบหน้า" value="{{$job->percentfinish}}" />
				</div>
										        
				<div class="form-group">
					<a href="{{ URL::previous() }}" class="btn btn-primary">&nbsp;&nbsp;Back&nbsp;&nbsp;</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" class="btn btn-success" value="Update" />					
				</div>             
				<input type="hidden" name="_method" value="PATCH" />
				
			</form>
			
		</div>
	  </div>	
    </div>

	
@endsection