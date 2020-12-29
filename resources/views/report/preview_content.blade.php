<div class="container">
    @if(Session::has('message'))
    <div class="alert alert-success">{{Session::get('message')}}</div>
    @endif
    <div class="row">



        <div class="col-md-12">

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
                            <label>{{$testtext}}</label>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">GPS</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="lat" class="form-control{{ $errors->has('lat') ? ' is-invalid' : '' }}" value="{{ $job->lat }}" placeholder="latitude">
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="lng" class="form-control{{ $errors->has('lng') ? ' is-invalid' : '' }}" value="{{ $job->lng }}" placeholder="longitude">
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ห้องชุดเลขที่</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="roomno" class="form-control{{ $errors->has('roomno') ? ' is-invalid' : '' }}" value="{{ $job->roomno }}">
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ชื่ออาคารชุด</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="roomno" class="form-control{{ $errors->has('roomno') ? ' is-invalid' : '' }}" value="{{ $job->roomno }}">
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ชั้น</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="level" class="form-control{{ $errors->has('level') ? ' is-invalid' : '' }}" value="{{ $job->level }}">
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">โฉนดที่ดินเลขที่</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="deedno" class="form-control{{ $errors->has('deedno') ? ' is-invalid' : '' }}" value="{{ $job->deedno }}">
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">อาคารเลขที่</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="buildingno" class="form-control{{ $errors->has('buildingno') ? ' is-invalid' : '' }}" value="{{ $job->buildingno }}">
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ทะเบียนอาคารชุดเลขที่</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="buildingregno" class="form-control{{ $errors->has('buildingregno') ? ' is-invalid' : '' }}" value="{{ $job->buildingregno }}">
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ตำบล (HL-ตามโฉนด/อ.ช.2)</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="deedtumbon" class="form-control{{ $errors->has('deedtumbon') ? ' is-invalid' : '' }}" value="{{ $job->deedtumbon }}">
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">อำเภอ (HL-ตามโฉนด/อ.ช.2) </label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="deedamphur" class="form-control{{ $errors->has('deedamphur') ? ' is-invalid' : '' }}" value="{{ $job->deedamphur }}">
                                @if ($errors->has('deedamphur'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('deedamphur') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">เนื้อที่ดินโครงการ</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="landsize" class="form-control{{ $errors->has('landsize') ? ' is-invalid' : '' }}" value="{{ $job->landsize }}" placeholder="0.00">
                                    @if ($errors->has('landsize'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('landsize') }}</strong>
                                    </span>
                                    @endif

                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>ตร.ม.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">เนื้อที่ห้องชุด</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="roomarea" class="form-control{{ $errors->has('roomarea') ? ' is-invalid' : '' }}" value="{{ $job->roomarea }}" placeholder="0-0-00.0">
                                    @if ($errors->has('roomarea'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('roomarea') }}</strong>
                                    </span>
                                    @endif

                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>ไร่</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ผู้ถือกรรมสิทธิ์</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="ownership" class="form-control{{ $errors->has('ownership') ? ' is-invalid' : '' }}" value="{{ $job->ownership }}">
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">การจดจำนองเป็นหลักประกัน</label>
                            </div>
                            <div class="col-md-6">
                                <select name="mortgage" class="form-control">
                                    <option value="ไม่มี" {{$job->mortgage=='ไม่มี'?'selected':''}}>ไม่มี</option>
                                    <option value="ธนาคารยูโอบี จำกัด (มหาชน)" {{$job->mortgage=='ธนาคารยูโอบี จำกัด (มหาชน)'?'selected':''}}>ธนาคารยูโอบี จำกัด (มหาชน)</option>
                                    <option value="ธนาคารกรุงเทพ จำกัด (มหาชน)" {{$job->mortgage=='ธนาคารกรุงเทพ จำกัด (มหาชน)'?'selected':''}}>ธนาคารกรุงเทพ จำกัด (มหาชน)</option>
                                    <option value="ธนาคารกสิกรไทย จำกัด (มหาชน)" {{$job->mortgage=='ธนาคารกสิกรไทย จำกัด (มหาชน)'?'selected':''}}>ธนาคารกสิกรไทย จำกัด (มหาชน)</option>
                                    <option value="ธนาคารกรุงไทย จำกัด (มหาชน)" {{$job->mortgage=='ธนาคารกรุงไทย จำกัด (มหาชน)'?'selected':''}}>ธนาคารกรุงไทย จำกัด (มหาชน)</option>
                                    <option value="ธนาคารไทยพาณิชย์ จำกัด (มหาชน)" {{$job->mortgage=='ธนาคารไทยพาณิชย์ จำกัด (มหาชน)'?'selected':''}}>ธนาคารไทยพาณิชย์ จำกัด (มหาชน)</option>
                                    <option value="ธนาคารธนชาต จำกัด (มหาชน)" {{$job->mortgage=='ธนาคารธนชาต จำกัด (มหาชน)'?'selected':''}}>ธนาคารธนชาต จำกัด (มหาชน)</option>
                                    <option value="ธนาคารทหารไทย จำกัด (มหาชน)" {{$job->mortgage=='ธนาคารทหารไทย จำกัด (มหาชน)'?'selected':''}}>ธนาคารทหารไทย จำกัด (มหาชน)</option>
                                    <option value="ธนาคารกรุงศรีอยุธยา จำกัด (มหาชน)" {{$job->mortgage=='ธนาคารกรุงศรีอยุธยา จำกัด (มหาชน)'?'selected':''}}>ธนาคารกรุงศรีอยุธยา จำกัด (มหาชน)</option>
                                    <option value="ธนาคารอาคารสงเคราะห์" {{$job->mortgage=='ธนาคารอาคารสงเคราะห์'?'selected':''}}>ธนาคารอาคารสงเคราะห์</option>
                                    <option value="ธนาคารออมสิน จำกัด" {{$job->mortgage=='ธนาคารออมสิน จำกัด'?'selected':''}}>ธนาคารออมสิน จำกัด</option>
                                    <option value="ธนาคารเกียรตินาคิน จำกัด (มหาชน)" {{$job->mortgage=='ธนาคารเกียรตินาคิน จำกัด (มหาชน)'?'selected':''}}>ธนาคารเกียรตินาคิน จำกัด (มหาชน)</option>
                                    <option value="ธนาคารซีไอเอ็มบีไทย จำกัด (มหาชน)" {{$job->mortgage=='ธนาคารซีไอเอ็มบีไทย จำกัด (มหาชน)'?'selected':''}}>ธนาคารซีไอเอ็มบีไทย จำกัด (มหาชน)</option>
                                    <option value="ธนาคารไทยเครดิตเพื่อรายย่อย จำกัด (มหาชน)" {{$job->mortgage=='ธนาคารไทยเครดิตเพื่อรายย่อย จำกัด (มหาชน)'?'selected':''}}>ธนาคารไทยเครดิตเพื่อรายย่อย จำกัด (มหาชน)</option>
                                    <option value="ธนาคารอิสลามแห่งประเทศไทย จำกัด" {{$job->mortgage=='ธนาคารอิสลามแห่งประเทศไทย จำกัด'?'selected':''}}>ธนาคารอิสลามแห่งประเทศไทย จำกัด</option>
                                    <option value="ธนาคารทีสโก้ จำกัด (มหาชน)" {{$job->mortgage=='ธนาคารทีสโก้ จำกัด (มหาชน)'?'selected':''}}>ธนาคารทีสโก้ จำกัด (มหาชน)</option>
                                    <option value="ธนาคารแสตนดาร์ด ชาเตอร์ (ไทย) จำกัด (มหาชน)" {{$job->mortgage=='ธนาคารแสตนดาร์ด ชาเตอร์ (ไทย) จำกัด (มหาชน)'?'selected':''}}>ธนาคารแสตนดาร์ด ชาเตอร์ (ไทย) จำกัด (มหาชน)</option>
                                    <option value="ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดหย่อมแห่งประเทศไทย" {{$job->mortgage=='ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดหย่อมแห่งประเทศไทย'?'selected':''}}>ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดหย่อมแห่งประเทศไทย</option>
                                    <option value="บริษัท เอ็มบีเค การันตี จำกัด" {{$job->mortgage=='บริษัท เอ็มบีเค การันตี จำกัด'?'selected':''}}>บริษัท เอ็มบีเค การันตี จำกัด</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">การอายัดทรัพย์สิน</label>
                            </div>
                            <div class="col-md-6">
                                <select name="sequester" class="form-control">
                                    <option value="ไม่มี" {{$job->sequester=='ไม่มี'?'selected':''}}>ไม่มี</option>
                                    <option value="มีคำสั่งอายัดห้ามโอน ให้งดการจดทะเบียนหรือเปลี่ยนแปลงทางทะเบียน ที่ ยธ....... ลงวันที่ ... พ.ศ. 25.. คดีแดงเลขที่ ........ ระหว่าง .......(โจทก์) กับ ……...(จำเลย) เรื่องอายัด .......วันที่อายัด ....พ.ศ. 25..." {{$job->sequester!='ไม่มี'?'selected':''}}>มีคำสั่งอายัดห้ามโอน ให้งดการจดทะเบียนหรือเปลี่ยนแปลงทางทะเบียน ที่ ยธ....... ลงวันที่ ... พ.ศ. 25.. คดีแดงเลขที่ ........ ระหว่าง .......(โจทก์) กับ ……...(จำเลย) เรื่องอายัด .......วันที่อายัด ....พ.ศ. 25...</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">การรอนสิทธิ์</label>
                            </div>
                            <div class="col-md-6">
                                <select name="deprive" class="form-control">
                                    <option value="ไม่มี" {{$job->deprive=='ไม่มี'?'selected':''}}>ไม่มี</option>
                                    <option value="มีได้แก่ ทรัพย์สินมีภาระสัญญาเช่า เป็นเวลา ... ปี เริ่มตั้งแต่ ...... ถึง ..... ปัจจุบันคงเหลือระยะเวลา ... ปี" {{$job->deprive=='มีได้แก่ ทรัพย์สินมีภาระสัญญาเช่า เป็นเวลา ... ปี เริ่มตั้งแต่ ...... ถึง ..... ปัจจุบันคงเหลือระยะเวลา ... ปี'?'selected':''}}>มีได้แก่ ทรัพย์สินมีภาระสัญญาเช่า เป็นเวลา ... ปี เริ่มตั้งแต่ ...... ถึง ..... ปัจจุบันคงเหลือระยะเวลา ... ปี</option>
                                    <option value="มีปัญหาผู้บุกรุกครอบครองทรัพย์สิน .............." {{$job->deprive=='มีปัญหาผู้บุกรุกครอบครองทรัพย์สิน ..............'?'selected':''}}>มีปัญหาผู้บุกรุกครอบครองทรัพย์สิน ..............</option>
                                    <option value="มีเสาไฟฟ้าแรงสูงพาดผ่านบนที่ดิน เนื้อที่ประมาณ .... ตารางวา (รายละเอียดตามผังที่ดินประกอบ)" {{$job->deprive=='มีเสาไฟฟ้าแรงสูงพาดผ่านบนที่ดิน เนื้อที่ประมาณ .... ตารางวา (รายละเอียดตามผังที่ดินประกอบ)'?'selected':''}}>มีเสาไฟฟ้าแรงสูงพาดผ่านบนที่ดิน เนื้อที่ประมาณ .... ตารางวา (รายละเอียดตามผังที่ดินประกอบ)</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">รูปแบบห้องชุด</label>
                            </div>
                            <div class="col-md-6">
                                <select name="roomtype" class="form-control">
                                    <option value="Studio" {{$job->roomtype=='Studio'?'selected':''}}>Studio</option>
                                    <option value="1 นอน/ 1 น้ำ" {{$job->roomtype=='1 นอน/ 1 น้ำ'?'selected':''}}>1 นอน/ 1 น้ำ</option>
                                    <option value="2 นอน/ 1 น้ำ" {{$job->roomtype=='2 นอน/ 1 น้ำ'?'selected':''}}>2 นอน/ 1 น้ำ</option>
                                    <option value="2 นอน/ 2 น้ำ" {{$job->roomtype=='2 นอน/ 2 น้ำ'?'selected':''}}>2 นอน/ 2 น้ำ</option>
                                    <option value="3 นอน/ 2 น้ำ" {{$job->roomtype=='3 นอน/ 2 น้ำ'?'selected':''}}>3 นอน/ 2 น้ำ</option>
                                    <option value="3 นอน/ 3 น้ำ" {{$job->roomtype=='3 นอน/ 3 น้ำ'?'selected':''}}>3 นอน/ 3 น้ำ</option>
                                    <option value="Duplex" {{$job->roomtype=='Duplex'?'selected':''}}>Duplex</option>
                                    <option value="Penthouse" {{$job->roomtype=='Penthouse'?'selected':''}}>Penthouse</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">อายุอาคาร (ปี)</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="buildingyear" class="form-control{{ $errors->has('buildingyear') ? ' is-invalid' : '' }}" value="{{ $job->buildingyear }}">
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">สภาพอาคาร</label>
                            </div>
                            <div class="col-md-6">
                                <select name="buildingstatus" class="form-control">
                                    <option value="ใหม่" {{$job->buildingstatus=='ใหม่'?'selected':''}}>ใหม่</option>
                                    <option value="ดี" {{$job->buildingstatus=='ดี'?'selected':''}}>ดี</option>
                                    <option value="ป่นกลาง" {{$job->buildingstatus=='ป่นกลาง'?'selected':''}}>ป่นกลาง</option>
                                    <option value="เก่า" {{$job->buildingstatus=='เก่า'?'selected':''}}>เก่า</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ตำแหน่งห้องชุด</label>
                            </div>
                            <div class="col-md-6">
                                <select name="roomlocation" class="form-control">
                                    <option value="ห้องกลาง" {{$job->roomlocation=='ห้องกลาง'?'selected':''}}>ห้องกลาง</option>
                                    <option value="ห้องมุม" {{$job->roomlocation=='ห้องมุม'?'selected':''}}>ห้องมุม</option>
                                    <option value="ห้องริม" {{$job->roomlocation=='ห้องริม'?'selected':''}}>ห้องริม</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ทัศนียภาพ / วิว</label>
                            </div>
                            <div class="col-md-6">
                                <select name="roomview" class="form-control">
                                    <option value="วิวเมือง/เปิดโล่ง" {{$job->roomview=='วิวเมือง/เปิดโล่ง'?'selected':''}}>วิวเมือง/เปิดโล่ง</option>
                                    <option value="วิวสระว่ายน้ำ" {{$job->roomview=='วิวสระว่ายน้ำ'?'selected':''}}>วิวสระว่ายน้ำ</option>
                                    <option value="วิวติดอาคาร" {{$job->roomview=='วิวติดอาคาร'?'selected':''}}>วิวติดอาคาร</option>
                                    <option value="วิวสวนสาธารณะ" {{$job->roomview=='วิวสวนสาธารณะ'?'selected':''}}>วิวสวนสาธารณะ</option>
                                    <option value="วิวสระว่ายน้ำ/Access Pool" {{$job->roomview=='วิวสระว่ายน้ำ/Access Pool'?'selected':''}}>วิวสระว่ายน้ำ/Access Pool</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">การใช้ประโยชน์ของทรัพย์สิน</label>
                            </div>
                            <div class="col-md-6">
                                <select name="propertiesused" class="form-control">
                                    <option value="ที่อยู่อาศัย" {{$job->propertiesused=='ที่อยู่อาศัย'?'selected':''}}>ที่อยู่อาศัย</option>
                                    <option value="ปล่อยว่าง" {{$job->propertiesused=='ปล่อยว่าง'?'selected':''}}>ปล่อยว่าง</option>
                                    <option value="พณิชยกรรม" {{$job->propertiesused=='พณิชยกรรม'?'selected':''}}>พณิชยกรรม</option>
                                    <option value="อุตสาหกรรม" {{$job->propertiesused=='อุตสาหกรรม'?'selected':''}}>อุตสาหกรรม</option>
                                    <option value="ที่อยู่อาศัยและพณิชยกรรม" {{$job->propertiesused=='ที่อยู่อาศัยและพณิชยกรรม'?'selected':''}}>ที่อยู่อาศัยและพณิชยกรรม</option>
                                </select>
                            </div>

                        </div>

                    </div>

                    <br>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">วัสดุ</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="materialscore" value="ดีมาก" {{$job->materialscore=='ดีมาก'?'checked':''}}>
                                    <label class="form-check-label float-right" for="materialRadio1">ดีมาก</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="materialscore" value="ดี" {{$job->materialscore=='ดี'?'checked':''}}>
                                    <label class="form-check-label float-right" for="materialRadio2">ดี</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="materialscore" value="ปานกลาง" {{$job->materialscore=='ปานกลาง'?'checked':''}}>
                                    <label class="form-check-label float-right" for="materialRadio1">ปานกลาง</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="materialscore" value="ต่ำ" {{$job->materialscore=='ต่ำ'?'checked':''}}>
                                    <label class="form-check-label float-right" for="materialRadio2">ต่ำ</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">รูปแบบ</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="styleRadioOptions" id="styleRadio1" value="ดีมาก" {{$job->stylescore=='ดีมาก'?'checked':''}}>
                                    <label class="form-check-label float-right" for="styleRadio1">ดีมาก</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="styleRadioOptions" id="styleRadio2" value="ดี" {{$job->stylescore=='ดี'?'checked':''}}>
                                    <label class="form-check-label float-right" for="styleRadio2">ดี</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="styleRadioOptions" id="styleRadio3" value="ปานกลาง" {{$job->stylescore=='ปานกลาง'?'checked':''}}>
                                    <label class="form-check-label float-right" for="styleRadio1">ปานกลาง</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="styleRadioOptions" id="styleRadio4" value="ต่ำ" {{$job->stylescore=='ต่ำ'?'checked':''}}>
                                    <label class="form-check-label float-right" for="styleRadio2">ต่ำ</label>
                                </div>
                            </div>

                        </div>

                    </div>

                    <?php
                    $roomaterial = explode(',', '');
                    ?>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">โครงสร้างทั่วไป</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="material_room1" value="1" {{$job->material_room1=='1'?'checked':''}}>
                                    <label class="form-check-label" for="inlineCheckbox1">คสล.</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="material_room2" value="1" {{$job->material_room2=='1'?'checked':''}}>
                                    <label class="form-check-label" for="inlineCheckbox2">เหล็ก</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="material_room_others" value="1" {{$job->material_room3 != NULL ?'checked':''}}>
                                    <div class="input-group">
                                        <input type="text" name="material_room3" class="form-control{{ $errors->has('material_room3') ? ' is-invalid' : '' }}" value="{{ $job->material_room3 }}" placeholder="อื่น ๆ">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">วัสดุพื้น</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="material_floor1" value="1" {{$job->material_floor1=='1'?'checked':''}}>
                                    <label class="form-check-label" for="inlineCheckbox1">กระเบื้อง</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="material_floor2" value="1" {{$job->material_floor2=='1'?'checked':''}}>
                                    <label class="form-check-label" for="inlineCheckbox2">ไม้ลามิเนต</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="material_floor3" value="1" {{$job->material_floor3=='1'?'checked':''}}>
                                    <label class="form-check-label" for="inlineCheckbox3">เอ็นจิเนียริ่งวู้ด</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="material_floor_others" value="1" {{$job->material_floor4!=NULL?'checked':''}}>
                                    <div class="input-group">
                                        <input type="text" name="material_floor4" class="form-control{{ $errors->has('material_floor4') ? ' is-invalid' : '' }}" value="{{ $job->material_floor4 }}" placeholder="อื่น ๆ">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ผนัง</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="material_wall1" value="1" {{$job->material_wall1=='1'?'checked':''}}>
                                    <label class="form-check-label" for="inlineCheckbox1">ก่ออิฐ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="material_wall2" value="1" {{$job->material_wall2=='1'?'checked':''}}>
                                    <label class="form-check-label" for="inlineCheckbox2">พรีแคสคอนกรีต</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="material_wall3" value="1" {{$job->material_wall3=='1'?'checked':''}}>
                                    <label class="form-check-label" for="inlineCheckbox3">ฉาบปูนเรียบ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="material_wall_others" value="1" {{$job->material_wall4!=NULL?'checked':''}}>
                                    <div class="input-group">
                                        <input type="text" name="material_wall4" class="form-control{{ $errors->has('material_wall4') ? ' is-invalid' : '' }}" value="{{ $job->material_wall4 }}" placeholder="อื่น ๆ">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ฝ้าเพดาน</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="1" name="material_ceiling1" {{$job->material_ceiling1=='1'?'checked':''}}>
                                    <label class="form-check-label" for="inlineCheckbox1">ยิบซั่มบอร์ดฉาบเรียบ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="1" name="material_ceiling2" {{$job->material_ceiling2=='1'?'checked':''}}>
                                    <label class="form-check-label" for="inlineCheckbox2">ฉาบปูนเรียบ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="material_ceiling_others" value="1" {{$job->material_ceiling3!=NULL?'checked':''}}>
                                    <div class="input-group">
                                        <input type="text" name="material_ceiling3" class="form-control{{ $errors->has('material_ceiling3') ? ' is-invalid' : '' }}" value="{{ $job->material_ceiling3 }}" placeholder="อื่น ๆ">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">พื้น-ผนังห้องน้ำ</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="1" name="material_bath1" {{$job->material_bath1=='1'?'checked':''}}>
                                    <label class="form-check-label" for="inlineCheckbox1">กระเบื้อง</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="1" name="material_bath2" {{$job->material_bath2=='1'?'checked':''}}>
                                    <label class="form-check-label" for="inlineCheckbox2">หินอ่อน</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="material_bath_others" value="1" {{$job->material_bath3!=NULL?'checked':''}}>
                                    <div class="input-group">
                                        <input type="text" name="material_bath3" class="form-control{{ $errors->has('material_bath3') ? ' is-invalid' : '' }}" value="{{ $job->material_bath3 }}" placeholder="อื่น ๆ">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ประตู</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="1" name="material_door1" {{$job->material_door1=='1'?'checked':''}}>
                                    <label class="form-check-label" for="inlineCheckbox1">บานไม้</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="1" name="material_door2" {{$job->material_door2=='1'?'checked':''}}>
                                    <label class="form-check-label" for="inlineCheckbox2">บานไม้ปิดผิววีเนียร์</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="1" name="material_door3" {{$job->material_door3=='1'?'checked':''}}>
                                    <label class="form-check-label" for="inlineCheckbox2">กระจกกรอบอลูมิเนียม</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="material_door_others" value="1" {{$job->material_door4!=NULL?'checked':''}}>
                                    <div class="input-group">
                                        <input type="text" name="material_door4" class="form-control{{ $errors->has('material_door4') ? ' is-invalid' : '' }}" value="{{ $job->material_door4 }}" placeholder="อื่น ๆ">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <style>
                        .form-check-input {
                            width: 20px;
                            height: 20px;
                        }
                    </style>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">หน้าต่าง</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="1" name="material_window1" {{$job->material_window1=='1'?'checked':''}}>
                                    <label class="form-check-label" for="inlineCheckbox1">บานไม้</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="1" name="material_window2" {{$job->material_window2=='1'?'checked':''}}>
                                    <label class="form-check-label" for="inlineCheckbox2">บานไม้ปิดกรุกระจก</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="1" name="material_window3" {{$job->material_window3=='1'?'checked':''}}>
                                    <label class="form-check-label" for="inlineCheckbox2">กระจกกรอบอลูมิเนียม</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="1" name="material_window_others" {{$job->material_window4!=NULL?'checked':''}}>
                                    <div class="input-group">
                                        <input type="text" name="material_window4" class="form-control{{ $errors->has('material_window4') ? ' is-invalid' : '' }}" value="{{ $job->material_window4 }}" placeholder="อื่น ๆ">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ปีที่โครงการเปิดขาย</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <p>พ.ศ.</p>
                                        </div>
                                    </div>
                                    <input type="text" name="yearstart" class="form-control{{ $errors->has('yearstart') ? ' is-invalid' : '' }}" value="{{ $job->yearstart }}">
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">อาคารชุดสูง (ชั้น)</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="buildinghight" class="form-control{{ $errors->has('buildinghight') ? ' is-invalid' : '' }}" value="{{ $job->buildinghight }}">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>ชั้น</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">จำนวนห้องชุดในโครงการ (ยูนิต)</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="units" class="form-control{{ $errors->has('units') ? ' is-invalid' : '' }}" value="{{ $job->units }}">


                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>ยูนิต</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ยอดขายโครงการ (%)</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="percentsell" class="form-control{{ $errors->has('percentsell') ? ' is-invalid' : '' }}" value="{{ $job->percentsell }}">

                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ยอดโอน (%)</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="percenttransfer" class="form-control{{ $errors->has('percenttransfer') ? ' is-invalid' : '' }}" value="{{ $job->percenttransfer }}">


                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ชื่อตัวแทนขาย</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="salesname" class="form-control{{ $errors->has('salesname') ? ' is-invalid' : '' }}" value="{{ $job->salesname }}">

                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">อัตราการเข้าอยู่อาศัย (%)</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="percenliverate" class="form-control{{ $errors->has('percenliverate') ? ' is-invalid' : '' }}" value="{{ $job->percenliverate }}">


                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>%</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">อัตราค่าส่วนกลาง (CAM FEE)</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="commonfee" class="form-control{{ $errors->has('commonfee') ? ' is-invalid' : '' }}" value="{{ $job->commonfee }}">


                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>บาท/ตร.ม./เดือน</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ยอดค้างชำระส่วนกลาง</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="commonoverdue" class="form-control{{ $errors->has('commonoverdue') ? ' is-invalid' : '' }}" value="{{ $job->commonoverdue }}">


                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>บาท</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">สิ่งอำนวยความสะดวกในโครงการ</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="facilities" class="form-control{{ $errors->has('facilities') ? ' is-invalid' : '' }}" value="{{ $job->facilities }}">


                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">สภาพการดูแลรักษา</label>
                            </div>
                            <div class="col-md-6">
                                <select name="prop_type" class="form-control">
                                    <option value="ดี" {{$job->prop_type=='ดี'?'selected':''}}>ดี</option>
                                    <option value="ปานกลาง" {{$job->prop_type=='ปานกลาง'?'selected':''}}>ปานกลาง</option>
                                    <option value="แย่" {{$job->prop_type=='แย่'?'selected':''}}>แย่</option>
                                </select>
                            </div>

                        </div>
                    </div>


                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ซอย</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="soi" class="form-control{{ $errors->has('soi') ? ' is-invalid' : '' }}" value="{{ $job->soi }}">
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ถนน</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="road" class="form-control{{ $errors->has('road') ? ' is-invalid' : '' }}" value="{{ $job->road }}">
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">จังหวัด (ตามเขตปกครอง)</label>
                            </div>
                            <div class="col-md-6">
                                <select name="province_code" id="province_code" class="form-control province{{ $errors->has('province_code') ? ' is-invalid' : '' }}" value="{{ $job->province_code }}">
                                    @foreach($list as $row)
                                    <option value="{{ $row->code }}" {{ ($job->province_code == $row->code) ? 'selected' : '' }}>
                                        {{ $row->name_th }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">อำเภอ/เขต</label>
                            </div>
                            <div class="col-md-6">
                                <select name="amphure_code" class="form-control amphures{{ $errors->has('amphure_code') ? ' is-invalid' : '' }}" value="{{ $job->amphure_code }}">
                                    @foreach($listtwo as $city)
                                    <option value="{{ $city->code }}" {{ ($job->amphure_code == $city->code) ? 'selected' : '' }}>
                                        {{ $city->name_th }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ตำบล/แขวง</label>
                            </div>
                            <div class="col-md-6">
                                <select name="district" class="form-control district{{ $errors->has('district') ? ' is-invalid' : '' }}">
                                    @foreach($listfive as $district)
                                    <option value="{{ $district->id }}" {{ ($job->district == $district->id) ? 'selected' : '' }}>
                                        {{ $district->name_th }}
                                    </option>
                                    @endforeach
                                </select>
                                <!-- <input type="text" name="district" class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" value="{{ $job->district }}"> -->
                            </div>

                        </div>

                    </div>



                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">เงื่อนไขการประเมินมูลค่า</label>
                            </div>
                            <div class="col-md-6">
                                <select name="estimatecondition" class="form-control">
                                    <option value="ไม่มี" {{$job->estimatecondition=='ไม่มี'?'selected':''}}>ไม่มี</option>
                                    <option value="ประเมินภายใต้เงื่อนไขบ้านก่อสร้างแล้วเสร็จ 100% ปัจจุบันก่อสร้างแล้วเสร็จ ...% เหลืองานเก็บและทาสี" {{$job->estimatecondition!='ไม่มี'?'selected':''}}>ประเมินภายใต้เงื่อนไขบ้านก่อสร้างแล้วเสร็จ 100% ปัจจุบันก่อสร้างแล้วเสร็จ ...% เหลืองานเก็บและทาสี</option>
                                </select>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">หมายเหตุ</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="remark" class="form-control{{ $errors->has('remark') ? ' is-invalid' : '' }}" value="{{ $job->remark }}">
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">สถานีรถไฟฟ้า</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <select name="transname" class="form-control transname{{ $errors->has('transname') ? ' is-invalid' : '' }}">
                                            <option value="" {{ ($listfour[$job->transport_id]->transname == "") ? 'selected' : '' }}>
                                                ไม่มี
                                            </option>
                                            <option value="BTS" {{ ($listfour[$job->transport_id]->transname == "BTS") ? 'selected' : '' }}>
                                                BTS
                                            </option>
                                            <option value="MRT" {{ ($listfour[$job->transport_id]->transname == "MRT") ? 'selected' : '' }}>
                                                MRT
                                            </option>
                                            <option value="ARL" {{ ($listfour[$job->transport_id]->transname == "ARL") ? 'selected' : '' }}>
                                                ARL
                                            </option>
                                            <option value="BRT" {{ ($listfour[$job->transport_id]->transname == "BRT") ? 'selected' : '' }}>
                                                BRT
                                            </option>
                                            <option value="Monorail" {{ ($listfour[$job->transport_id]->transname == "Monorail") ? 'selected' : '' }}>
                                                Monorail
                                            </option>
                                        </select>
                                    </div>

                                    <select name="transtation" class="form-control transtation{{ $errors->has('transtation') ? ' is-invalid' : '' }}" value="{{$job->transport_id}}">
                                        @foreach($listfour as $station)
                                        <option value="{{ $station->id }}" {{ ($job->transport_id == $station->id) ? 'selected' : '' }}>
                                            {{ $station->name_th }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>


                            </div>

                        </div>

                    </div>


                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ระยะห่าง</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="nearmrtdistance" class="form-control{{ $errors->has('nearmrtdistance') ? ' is-invalid' : '' }}" value="{{ $job->nearmrtdistance }}">

                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>เมตร</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ถนนผ่านหน้าทรัพย์สิน</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="frontstreet" class="form-control{{ $errors->has('frontstreet') ? ' is-invalid' : '' }}" value="{{ $job->frontstreet }}">
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">สิทธิทางเข้า-ออก</label>
                            </div>
                            <div class="col-md-6">
                                <select name="publicentrance" class="form-control">
                                    <option value="สาธารณประโยชน์" {{$job->publicentrance=='สาธารณประโยชน์'?'selected':''}}>สาธารณประโยชน์</option>
                                    <option value="ทางส่วนบุคคลภายใต้การจัดสรรที่ดิน" {{$job->publicentrance=='ทางส่วนบุคคลภายใต้การจัดสรรที่ดิน'?'selected':''}}>ทางส่วนบุคคลภายใต้การจัดสรรที่ดิน</option>
                                    <option value="ทางส่วนบุคคลที่มีการแบ่งแยกหรือแบ่งโอนกัน (เฉพาะแปลงคง) และมีเจตนาให้เป็นทางเข้า-ออก" {{$job->publicentrance=='ทางส่วนบุคคลที่มีการแบ่งแยกหรือแบ่งโอนกัน (เฉพาะแปลงคง) และมีเจตนาให้เป็นทางเข้า-ออก'?'selected':''}}>ทางส่วนบุคคลที่มีการแบ่งแยกหรือแบ่งโอนกัน (เฉพาะแปลงคง) และมีเจตนาให้เป็นทางเข้า-ออก</option>
                                    <option value="ทางภารจำยอม (ทางส่วนบุคคลที่มีการจดทะเบียนแล้ว)" {{$job->publicentrance=='ทางภารจำยอม (ทางส่วนบุคคลที่มีการจดทะเบียนแล้ว)'?'selected':''}}>ทางภารจำยอม (ทางส่วนบุคคลที่มีการจดทะเบียนแล้ว)</option>
                                    <option value="ทางในเขตชานคลองสาธารณะ (เป็นส่วนของทางที่อยู่บนหรือเป็นส่วนหนึ่งของคลองสาธารณะ)" {{$job->publicentrance=='ทางในเขตชานคลองสาธารณะ (เป็นส่วนของทางที่อยู่บนหรือเป็นส่วนหนึ่งของคลองสาธารณะ)'?'selected':''}}>ทางในเขตชานคลองสาธารณะ (เป็นส่วนของทางที่อยู่บนหรือเป็นส่วนหนึ่งของคลองสาธารณะ)</option>
                                    <option value="ทางส่วนบุคคลที่มีเจ้าของทางนั้นยินยอมให้ใช้ผ่านทางเข้า-ออก โดยเปิดเผย ไม่โต้แย้งสิทธิ ระยะเวลาการใช้เกิน 10 ปีขึ้นไป" {{$job->publicentrance=='ทางส่วนบุคคลที่มีเจ้าของทางนั้นยินยอมให้ใช้ผ่านทางเข้า-ออก โดยเปิดเผย ไม่โต้แย้งสิทธิ ระยะเวลาการใช้เกิน 10 ปีขึ้นไป'?'selected':''}}>ทางส่วนบุคคลที่มีเจ้าของทางนั้นยินยอมให้ใช้ผ่านทางเข้า-ออก โดยเปิดเผย ไม่โต้แย้งสิทธิ ระยะเวลาการใช้เกิน 10 ปีขึ้นไป</option>
                                    <option value="ทางส่วนบุคคลในโครงการจัดสรรที่ไม่ได้รับอนุญาตจัดสรรที่ดิน มีเจตนาแบ่งที่ดินออกเป็นแปลงย่อย ๆ เพื่อขาย ตั้งแต่ 10 แปลงขึ้นไป" {{$job->publicentrance=='ทางส่วนบุคคลในโครงการจัดสรรที่ไม่ได้รับอนุญาตจัดสรรที่ดิน มีเจตนาแบ่งที่ดินออกเป็นแปลงย่อย ๆ เพื่อขาย ตั้งแต่ 10 แปลงขึ้นไป'?'selected':''}}>ทางส่วนบุคคลในโครงการจัดสรรที่ไม่ได้รับอนุญาตจัดสรรที่ดิน มีเจตนาแบ่งที่ดินออกเป็นแปลงย่อย ๆ เพื่อขาย ตั้งแต่ 10 แปลงขึ้นไป</option>
                                    <option value="ทางในโครงการจัดสรรของการเคหะแห่งชาติ" {{$job->publicentrance=='ทางในโครงการจัดสรรของการเคหะแห่งชาติ'?'selected':''}}>ทางในโครงการจัดสรรของการเคหะแห่งชาติ</option>
                                    <option value="ทางส่วนบุคคลที่ทางหน่วยงานราชการ เข้าไปพัฒนาแล้ว" {{$job->publicentrance=='ทางส่วนบุคคลที่ทางหน่วยงานราชการ เข้าไปพัฒนาแล้ว'?'selected':''}}>ทางส่วนบุคคลที่ทางหน่วยงานราชการ เข้าไปพัฒนาแล้ว</option>
                                    <option value="ทางที่เจ้าของที่ดินได้อุทิศ (ยกให้) ให้เป็นทางสาธารณะ" {{$job->publicentrance=='ทางที่เจ้าของที่ดินได้อุทิศ (ยกให้) ให้เป็นทางสาธารณะ'?'selected':''}}>ทางที่เจ้าของที่ดินได้อุทิศ (ยกให้) ให้เป็นทางสาธารณะ</option>
                                    <option value="ทางสาธารณประโยชน์ ไม่มีสภาพเป็นทาง (รถยนต์เข้า-ออกไม่ได้, วัชพืชปกคลุมหนาแน่น)" {{$job->publicentrance=='ทางสาธารณประโยชน์ ไม่มีสภาพเป็นทาง (รถยนต์เข้า-ออกไม่ได้, วัชพืชปกคลุมหนาแน่น)'?'selected':''}}>ทางสาธารณประโยชน์ ไม่มีสภาพเป็นทาง (รถยนต์เข้า-ออกไม่ได้, วัชพืชปกคลุมหนาแน่น)</option>
                                    <option value="ทางจำเป็นตามคำสั่งศาล" {{$job->publicentrance=='ทางจำเป็นตามคำสั่งศาล'?'selected':''}}>ทางจำเป็นตามคำสั่งศาล</option>
                                    <option value="รายละเอียด ตามหมายเหตุ ด้านล่าง" {{$job->publicentrance=='รายละเอียด ตามหมายเหตุ ด้านล่าง'?'selected':''}}>รายละเอียด ตามหมายเหตุ ด้านล่าง</option>
                                </select>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">มีสภาพเป็นถนน</label>
                            </div>
                            <div class="col-md-6">
                                <select name="materialstreet" class="form-control">
                                    <option value="ถนนคอนกรีต" {{$job->materialstreet=='ถนนคอนกรีต'?'selected':''}}>ถนนคอนกรีต</option>
                                    <option value="ถนนลาดยาง" {{$job->materialstreet=='ถนนลาดยาง'?'selected':''}}>ถนนลาดยาง</option>
                                    <option value="ถนนลูกรัง" {{$job->materialstreet=='ถนนลูกรัง'?'selected':''}}>ถนนลูกรัง</option>
                                    <option value="ถนนหินคลุก" {{$job->materialstreet=='ถนนหินคลุก'?'selected':''}}>ถนนหินคลุก</option>
                                </select>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ถนนกว้าง</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="streetwide" class="form-control{{ $errors->has('streetwide') ? ' is-invalid' : '' }}" value="{{ $job->streetwide }}" placeholder="0.00">

                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>เมตร</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">เขตทางกว้าง</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="streetareawide" class="form-control{{ $errors->has('streetareawide') ? ' is-invalid' : '' }}" value="{{ $job->streetareawide }}" placeholder="0.00">

                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>เมตร</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">สาธารณูปโภค</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="utilities" class="form-control{{ $errors->has('utilities') ? ' is-invalid' : '' }}" value="{{ $job->utilities }}">
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">การคมนาคม</label>
                            </div>
                            <div class="col-md-6">
                                <select name="cmn_transportation" class="form-control">
                                    <option value="รถยนต์ รถเมล์" {{$job->cmn_transportation=='รถยนต์ รถเมล์'?'selected':''}}>รถยนต์ รถเมล์</option>
                                    <option value="รถยนต์ รถเมล์ รถไฟฟ้า" {{$job->cmn_transportation=='รถยนต์ รถเมล์ รถไฟฟ้า'?'selected':''}}>รถยนต์ รถเมล์ รถไฟฟ้า</option>
                                    <option value="รถยนต์ รถเมล์ รถโดยสารด่วนพิเศษ (BRT)" {{$job->cmn_transportation=='รถยนต์ รถเมล์ รถโดยสารด่วนพิเศษ (BRT)'?'selected':''}}>รถยนต์ รถเมล์ รถโดยสารด่วนพิเศษ (BRT)</option>
                                    <option value="รถยนต์ รถเมล์ประจำทาง เรือ" {{$job->cmn_transportation=='รถยนต์ รถเมล์ประจำทาง เรือ'?'selected':''}}>รถยนต์ รถเมล์ประจำทาง เรือ</option>
                                    <option value="ทางเดิน" {{$job->cmn_transportation=='ทางเดิน'?'selected':''}}>ทางเดิน</option>
                                </select>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">หมายเหตุ</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="remark2" class="form-control{{ $errors->has('remark2') ? ' is-invalid' : '' }}" value="{{ $job->remark2 }}">
                            </div>

                        </div>

                    </div>


                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">การใช้ประโยชน์ที่ดินใกล้เคียง</label>
                            </div>
                            <div class="col-md-6">
                                <select name="propertiesnearused" class="form-control">
                                    <option value="ที่อยู่อาศัย" {{$job->propertiesnearused=='ที่อยู่อาศัย'?'selected':''}}>ที่อยู่อาศัย</option>
                                    <option value="ปล่อยว่าง" {{$job->propertiesnearused=='ปล่อยว่าง'?'selected':''}}>ปล่อยว่าง</option>
                                    <option value="พณิชยกรรม" {{$job->propertiesnearused=='พณิชยกรรม'?'selected':''}}>พณิชยกรรม</option>
                                    <option value="อุตสาหกรรม" {{$job->propertiesnearused=='อุตสาหกรรม'?'selected':''}}>อุตสาหกรรม</option>
                                    <option value="ที่อยู่อาศัยและพณิชยกรรม" {{$job->propertiesnearused=='ที่อยู่อาศัยและพณิชยกรรม'?'selected':''}}>ที่อยู่อาศัยและพณิชยกรรม</option>
                                </select>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">การเติบโตในบริเวณใกล้เคียง</label>
                            </div>
                            <div class="col-md-6">
                                <select name="prosperity" class="form-control">
                                    <option value="เจริญมาก" {{$job->prosperity=='เจริญมาก'?'selected':''}}>เจริญมาก</option>
                                    <option value="เจริญปานกลาง" {{$job->prosperity=='เจริญปานกลาง'?'selected':''}}>เจริญปานกลาง</option>
                                    <option value="เจริญน้อย" {{$job->prosperity=='เจริญน้อย'?'selected':''}}>เจริญน้อย</option>
                                </select>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">สภาพคล่องในการซื้อ-ขาย</label>
                            </div>
                            <div class="col-md-6">
                                <select name="liquidity" class="form-control">
                                    <option value="สูง" {{$job->liquidity=='สูง'?'selected':''}}>สูง</option>
                                    <option value="ปานกลาง" {{$job->liquidity=='ปานกลาง'?'selected':''}}>ปานกลาง</option>
                                    <option value="ต่ำ" {{$job->liquidity=='ต่ำ'?'selected':''}}>ต่ำ</option>
                                </select>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ข้อบังคับกฎหมายผังเมือง</label>
                            </div>
                            <div class="col-md-6">
                                <select name="planlaw" class="form-control">
                                    <option value="สีเหลือง (ที่อยู่อาศัยหนาแน่นน้อย)" {{$job->planlaw=='สีเหลือง (ที่อยู่อาศัยหนาแน่นน้อย)'?'selected':''}}>สีเหลือง (ที่อยู่อาศัยหนาแน่นน้อย)</option>
                                    <option value="สีส้ม (ที่อยู่อาศัยหนาแน่นปานกลาง)" {{$job->planlaw=='สีส้ม (ที่อยู่อาศัยหนาแน่นปานกลาง)'?'selected':''}}>สีส้ม (ที่อยู่อาศัยหนาแน่นปานกลาง)</option>
                                    <option value="สีน้ำตาล (ที่อยู่อาศัยหนาแน่นมาก)" {{$job->planlaw=='สีน้ำตาล (ที่อยู่อาศัยหนาแน่นมาก)'?'selected':''}}>สีน้ำตาล (ที่อยู่อาศัยหนาแน่นมาก)</option>
                                    <option value="สีแดง (พาณิชยกรรม)" {{$job->planlaw=='สีแดง (พาณิชยกรรม)'?'selected':''}}>สีแดง (พาณิชยกรรม)</option>
                                    <option value="สีเขียว (ชนบทและเกษตรกรรม)" {{$job->planlaw=='สีเขียว (ชนบทและเกษตรกรรม)'?'selected':''}}>สีเขียว (ชนบทและเกษตรกรรม)</option>
                                    <option value="ถนนลูกรัง" {{$job->planlaw=='ถนนลูกรัง'?'selected':''}}>ถนนลูกรัง</option>
                                    <option value="สีม่วง (อุตสาหกรรม)" {{$job->planlaw=='สีม่วง (อุตสาหกรรม)'?'selected':''}}>สีม่วง (อุตสาหกรรม)</option>
                                    <option value="สีชมพู (ชุมชน)" {{$job->planlaw=='สีชมพู (ชุมชน)'?'selected':''}}>สีชมพู (ชุมชน)</option>
                                    <option value="สีขาวมีกรอบและเส้นทแยงสีเขียว (อนุรักษ์ชนบทและเกษตรกรรม)" {{$job->planlaw=='สีขาวมีกรอบและเส้นทแยงสีเขียว (อนุรักษ์ชนบทและเกษตรกรรม)'?'selected':''}}>สีขาวมีกรอบและเส้นทแยงสีเขียว (อนุรักษ์ชนบทและเกษตรกรรม)</option>
                                    <option value="นอกเขตบังคับกำหนดผังเมืองรวม" {{$job->planlaw=='นอกเขตบังคับกำหนดผังเมืองรวม'?'selected':''}}>นอกเขตบังคับกำหนดผังเมืองรวม</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">มูลค่าตลาดทรัพย์สิน</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="marketvalue" class="form-control{{ $errors->has('marketvalue') ? ' is-invalid' : '' }}" value="{{ $job->marketvalue }}">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>บาท</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">มูลค่าบังคับขาย (%)</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="forcesale" class="form-control{{ $errors->has('forcesale') ? ' is-invalid' : '' }}" value="{{ $job->forcesale }}">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ผู้ประเมิน</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="valuer_n" class="form-control{{ $errors->has('valuer_n') ? ' is-invalid' : '' }}" value="{{ $job->valuer_n }}">
                            </div>

                        </div>
                    </div>

                    <div class="container">

                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ผู้ตรวจสอบรายงาน</label>
                            </div>
                            <div class="col-md-6">
                                <select name="headvaluer_n" class="form-control">
                                    <option value="สาโรจน์ พ่วงศรี" {{$job->headvaluer_n=='สาโรจน์ พ่วงศรี'?'selected':''}}>สาโรจน์ พ่วงศรี</option>
                                    <option value="มนต์ชัย มณีวงศ์" {{$job->headvaluer_n=='มนต์ชัย มณีวงศ์'?'selected':''}}>มนต์ชัย มณีวงศ์</option>
                                    <option value="นิรันดร เอื้อเฟื้อ" {{$job->headvaluer_n=='นิรันดร เอื้อเฟื้อ'?'selected':''}}>นิรันดร เอื้อเฟื้อ</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">มูลค่าประกันอัคคีภัย (บาท/ตร.ม.)</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="fireinsurance" class="form-control{{ $errors->has('fireinsurance') ? ' is-invalid' : '' }}" value="{{ $job->fireinsurance }}">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>บาท/ตร.ม.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <br>

                    <div class="container">

                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">เนื้อที่ตามเอกสารสิทธิ์ห้องชุด</label>
                            </div>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <input type="text" name="govprice_row1a" class="form-control{{ $errors->has('govprice_row1a') ? ' is-invalid' : '' }}" value="{{ $job->govprice_row1a }}">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>ตร.ม.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="container">

                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">- พื้นที่ภายในห้องชุด</label>
                            </div>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <input type="text" name="govprice_row2a" class="form-control{{ $errors->has('govprice_row2a') ? ' is-invalid' : '' }}" value="{{ $job->govprice_row2a }}">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>ตร.ม.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <input type="text" name="govprice_row2b" class="form-control{{ $errors->has('govprice_row2b') ? ' is-invalid' : '' }}" value="{{ $job->govprice_row2b }}">
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="govprice_row2c" class="form-control{{ $errors->has('govprice_row2c') ? ' is-invalid' : '' }}" disabled>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="govprice_row2d" class="form-control{{ $errors->has('govprice_row2d') ? ' is-invalid' : '' }}" value="{{ $job->govprice_row2d }}">
                            </div>

                        </div>
                    </div>
                    <div class="container">

                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">- ระเบียงที่วางแอร์</label>
                            </div>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <input type="text" name="govprice_row3a" class="form-control{{ $errors->has('govprice_row3a') ? ' is-invalid' : '' }}" value="{{ $job->govprice_row3a }}">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>ตร.ม.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <input type="text" name="govprice_row3b" class="form-control{{ $errors->has('govprice_row3b') ? ' is-invalid' : '' }}" value="{{ $job->govprice_row3b }}">
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="govprice_row3c" class="form-control{{ $errors->has('govprice_row3c') ? ' is-invalid' : '' }}" disabled>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="govprice_row3d" class="form-control{{ $errors->has('govprice_row3d') ? ' is-invalid' : '' }}" value="{{ $job->govprice_row3d }}">
                            </div>

                        </div>
                    </div>

                    <div class="container">

                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">- ที่จอดรถส่วนบุคคล</label>
                            </div>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <input type="text" name="govprice_row4a" class="form-control{{ $errors->has('govprice_row4a') ? ' is-invalid' : '' }}" value="{{ $job->govprice_row4a }}">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <p>ตร.ม.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <input type="text" name="govprice_row4b" class="form-control{{ $errors->has('govprice_row4b') ? ' is-invalid' : '' }}" disabled>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="govprice_row4c" class="form-control{{ $errors->has('govprice_row4c') ? ' is-invalid' : '' }}" value="{{ $job->govprice_row4c }}">
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="govprice_row4d" class="form-control{{ $errors->has('govprice_row4d') ? ' is-invalid' : '' }}" value="{{ $job->govprice_row4d }}">
                            </div>

                        </div>
                    </div>

            </div>
        </div>

    </div>

</div>