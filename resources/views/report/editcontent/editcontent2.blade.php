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


            <div class="card-body" style="background-color: #B0C4DE;">

                <style>
                    .row {
                        padding-top: 7px;
                    }

                    .float-right {
                        font-size: 19px;
                    }
                </style>

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
                        <!-- todo -->
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

                <!-- <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">จังหวัด (ตามเขตปกครอง)</label>
                        </div>
                        <div class="col-md-6">
                            <select name="province_code" class="form-control province_code{{ $errors->has('province_code') ? ' is-invalid' : '' }}">
                                @foreach($list as $row)
                                <option value="{{ $row->name_th }}" {{ ($job->province_code == $row->code) ? 'selected' : '' }}>
                                    {{ $row->name_th }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div> -->

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