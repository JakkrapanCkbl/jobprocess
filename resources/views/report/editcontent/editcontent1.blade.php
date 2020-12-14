<div class="container">
    @if(Session::has('message'))
    <div class="alert alert-success">{{Session::get('message')}}</div>
    @endif
    <div class="row">



        <div class="col-md-12">
            <!-- <div class="card">
                <div class="card-header">
                    Edit Job
                </div> -->


            <div class="card-body" style="background-color: #f8ede4;">
                <form action="{{route('report.update',[$job->id])}}" method="POST" enctype="multipart/form-data">@csrf

                    <style>
                        .float-right {
                            font-size: 19px;
                        }
                    </style>


                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">เลขที่รับงาน</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="jobcode" class="form-control{{ $errors->has('jobcode') ? ' is-invalid' : '' }}" value="{{ $job->jobcode }}" placeholder="LC/64BF-0">
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">รายงานเลขที่</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="clientcode" class="form-control{{ $errors->has('clientcode') ? ' is-invalid' : '' }}" value="{{ $job->clientcode }}" placeholder="HLHO640000000">
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ประเภททรัพย์สิน</label>
                            </div>
                            <div class="col-md-6">
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

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ชื่อลูกค้า</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="customer" class="form-control{{ $errors->has('customer') ? ' is-invalid' : '' }}" value="{{ $job->customer }}" placeholder="นายชื่อ นามสกุล">
                            </div>

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
                                    <input name="submissiondate" class="form-control fc-datepicker" placeholder="d/m/y" type="text" value="{{date('d/m/y', strtotime($job->submissiondate))}}">
                                </div>
                            </div>

                            <div class="form-group col-md-2">
                                <label>กำหนดส่ง</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-calendar tx-16 lh-0 op-6"></i>
                                        </div>
                                    </div>
                                    <input name="lcduedate" class="form-control fc-datepicker" placeholder="d/m/y" type="text" value="{{date('d/m/y', strtotime($job->lcduedate))}}">
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="container">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-block btn-success">Update</button>
                            </div>
                        </div>
                    </div>


            </div>




        </div>
    </div>
    <!-- </div> -->
    <!-- </div> -->
</div>
{{csrf_field()}}