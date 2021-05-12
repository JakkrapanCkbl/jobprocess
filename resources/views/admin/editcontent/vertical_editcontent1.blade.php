<div class="container">
    @if(Session::has('message'))
    <div class="alert alert-success">{{Session::get('message')}}</div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card-body" style="background-color: #B0C4DE;">
                <form action="{{route('admininputjob.update',[$job->id])}}" method="POST" enctype="multipart/form-data">@csrf

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
                                <select name="jobtype" class="form-control">
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
                                <input type="text" name="jobcode" class="form-control{{ $errors->has('jobcode') ? ' is-invalid' : '' }}" value="{{ $job->jobcode }}">
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
                                    <option value="UOB" {{$job->client=='UOB'?'selected':''}}>UOB</option>
                                    <option value="KK" {{$job->client=='KK'?'selected':''}}>KK</option>
                                    <option value="CIMB" {{$job->client=='CIMB'?'selected':''}}>CIMB</option>
                                    <option value="SCB" {{$job->client=='SCB'?'selected':''}}>SCB</option>
                                    <option value="BOC" {{$job->client=='BOC'?'selected':''}}>BOC</option>
                                    <option value="ICBC" {{$job->client=='ICBC'?'selected':''}}>ICBC</option>
                                    <option value="LHB" {{$job->client=='LHB'?'selected':''}}>LHB</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ID (KK/UOB)</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="reportcode" class="form-control{{ $errors->has('reportcode') ? ' is-invalid' : '' }}" value="{{ $job->reportcode }}">
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

                       
                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ชื่่อโครงการ</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="projectname" class="form-control{{ $errors->has('projectname') ? ' is-invalid' : '' }}" value="{{ $job->projectname }}">
                                @if ($errors->has('projectname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('projectname') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ชื่อลูกค้า / ผู้ติดต่อ</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="customer" class="form-control{{ $errors->has('customer') ? ' is-invalid' : '' }}" value="{{ $job->customer }}">
                                @if ($errors->has('customer'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('customer') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">โทร</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="customer_tel" class="form-control{{ $errors->has('customer_tel') ? ' is-invalid' : '' }}" value="{{ $job->customer_tel }}">
                                @if ($errors->has('customer_tel'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('customer_tel') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">รายงานภาษา</label>
                            </div>
                            <div class="col-md-6">
                                <select name="jobtype" class="form-control">
                                    <option value="ไทย 1 ชุด" {{$job->jobtype=='ไทย 1 ชุด'?'selected':''}}>ไทย 1 ชุด</option>
                                    <option value="ไทย 2 ชุด" {{$job->jobtype=='ไทย 2 ชุด'?'selected':''}}>ไทย 2 ชุด</option>
                                    <option value="อังกฤษ 2 ชุด" {{$job->jobtype=='อังกฤษ 2 ชุด'?'selected':''}}>อังกฤษ 2 ชุด</option>
                                    <option value="ไทย 2 ชุด + อังกฤษ 2 ชุด" {{$job->jobtype=='ไทย 2 ชุด + อังกฤษ 2 ชุด'?'selected':''}}>ไทย 2 ชุด + อังกฤษ 2 ชุด</option>
                                    <option value="-" {{$job->jobtype=='-'?'selected':''}}>-</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">วัตถุประสงค์การประเมิน</label>
                            </div>
                            <div class="col-md-6">
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


                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">Job Size</label>
                            </div>
                            <div class="col-md-6">
                                <select name="jobsize" class="form-control">
                                    <option value="HL" {{$job->jobsize=='HL'?'selected':''}}>HL</option>
                                    <option value="S" {{$job->jobsize=='S'?'selected':''}}>S</option>
                                    <option value="L" {{$job->jobsize=='L'?'selected':''}}>L</option>
                                    <option value="-" {{$job->jobsize=='-'?'selected':''}}>-</option>
                                </select>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">Job Difficulty</label>
                            </div>
                            <div class="col-md-6">
                                <select name="easydiff" class="form-control">
                                    <option value="NORM" {{$job->easydiff=='NORM'?'selected':''}}>Normal</option>
                                    <option value="DIFF" {{$job->easydiff=='DIFF'?'selected':''}}>Difficult</option>
                                </select>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ด่วน</label>
                            </div>
                            <div class="col-md-6">
                                <select name="urgent" class="form-control">
                                    <option value="0" {{$job->urgent=='0'?'selected':''}}>ไม่</option>
                                    <option value="1" {{$job->urgent=='1'?'selected':''}}>ด่วน</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ค่าประเมิน (Net)</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="valuationfee" id="valuationfee" class="form-control{{ $errors->has('valuationfee') ? ' is-invalid' : '' }}" value="{{ number_format($job->valuationfee,2) }}" oninput="valuationfeeVat.value=parseInt(valuationfee.value)*7/100">
                                @if ($errors->has('valuationfee'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('valuationfee') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ค่าประเมิน (+VAT)</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="valuationfeeVat" id="valuationfeeVat" class="form-control{{ $errors->has('valuationfee') ? ' is-invalid' : '' }}" value="{{ number_format($job->valuationfee*7/100,2) }}">
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
                                <label class="float-right">เงื่อนไขการเก็บเงินลูกค้า</label>
                            </div>
                            <div class="col-md-6">
                                <select name="valuationfee_case" class="form-control">
                                    <option value="100% วางบิลธนาคาร" {{$job->valuationfee_case=='100% วางบิลธนาคาร'?'selected':''}}>100% วางบิลธนาคาร</option>
                                    <option value="100% เก็บเงินลูกค้าหน้างาน" {{$job->valuationfee_case=='100% เก็บเงินลูกค้าหน้างาน'?'selected':''}}>100% เก็บเงินลูกค้าหน้างาน</option>
                                    <option value="50/50 หน้างาน" {{$job->valuationfee_case=='50/50 หน้างาน'?'selected':''}}>50/50 หน้างาน</option>
                                    <option value="100% ณ วันที่มอบรายงาน" {{$job->valuationfee_case=='100% ณ วันที่มอบรายงาน'?'selected':''}}>100% ณ วันที่มอบรายงาน</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ผู้ประเมินหลัก</label>
                            </div>
                            <div class="col-md-6">
                                <select name="headvaluer" class="form-control headvaluer{{ $errors->has('headvaluer') ? ' is-invalid' : '' }}">
                                    @foreach($listfour as $employee)
                                        @if($employee->id == $job->headvaluer)   
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
                                    @foreach($listfour as $employee)
                                        @if($employee->id == $job->valuer)
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

                        <!-- add -->
                        <!-- <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">Valuer</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="valuer_n" class="form-control{{ $errors->has('valuer_n') ? ' is-invalid' : '' }}" value="{{ $job->valuer_n }}">
                                    @if ($errors->has('valuer_n'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('valuer_n') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        </div> -->

                        <!-- add -->
                        <!-- <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">Approver</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="headvaluer_n" class="form-control{{ $errors->has('headvaluer_n') ? ' is-invalid' : '' }}" value="{{ $job->headvaluer_n }}">
                                @if ($errors->has('headvaluer_n'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('headvaluer_n') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div> -->

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



                        <!-- </div> -->

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