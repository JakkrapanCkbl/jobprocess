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

                    .form-check {
                        padding-top: 5px;
                    }
                </style>


                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ซอย</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="roomtype" class="form-control{{ $errors->has('roomtype') ? ' is-invalid' : '' }}" value="{{ $job->roomtype }}">
                            @if ($errors->has('roomtype'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('roomtype') }}</strong>
                            </span>
                            @endif
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ถนน</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="roomtype" class="form-control{{ $errors->has('roomtype') ? ' is-invalid' : '' }}" value="{{ $job->roomtype }}">
                            @if ($errors->has('roomtype'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('roomtype') }}</strong>
                            </span>
                            @endif
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
                            @if ($errors->has('province_code'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('province_code') }}</strong>
                            </span>
                            @endif
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
                            <select name="district" class="form-control district{{ $errors->has('district') ? ' is-invalid' : '' }}" value="{{ $job->district }}">
                                @foreach($listfive as $district)
                                <option value="{{ $district->name_th }}" {{ ($job->district == $district->name_th) ? 'selected' : '' }}>
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
                            <select name="prop_type" class="form-control">
                                <option value="ห้องชุด" {{$job->prop_type=='ห้องชุด'?'selected':''}}>ไม่มี</option>
                                <option value="บ้านเดี่ยว" {{$job->prop_type=='บ้านเดี่ยว'?'selected':''}}>ประเมินภายใต้เงื่อนไขบ้านก่อสร้างแล้วเสร็จ 100% ปัจจุบันก่อสร้างแล้วเสร็จ ...% เหลืองานเก็บและทาสี</option>
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
                            <input type="text" name="district" class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" value="{{ $job->district }}">
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
                                <input type="text" name="roomtype" class="form-control{{ $errors->has('roomtype') ? ' is-invalid' : '' }}" value="{{ $job->roomtype }}">
                                @if ($errors->has('roomtype'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('roomtype') }}</strong>
                                </span>
                                @endif

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
                            <input type="text" name="roomtype" class="form-control{{ $errors->has('roomtype') ? ' is-invalid' : '' }}" value="{{ $job->roomtype }}">
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">สิทธิทางเข้า-ออก</label>
                        </div>
                        <div class="col-md-6">
                            <select name="prop_type" class="form-control">
                                <option value="สาธารณประโยชน์" {{$job->prop_type=='สาธารณประโยชน์'?'selected':''}}>สาธารณประโยชน์</option>
                                <option value="ทางส่วนบุคคลภายใต้การจัดสรรที่ดิน" {{$job->prop_type=='ทางส่วนบุคคลภายใต้การจัดสรรที่ดิน'?'selected':''}}>ทางส่วนบุคคลภายใต้การจัดสรรที่ดิน</option>
                                <option value="ทางส่วนบุคคลที่มีการแบ่งแยกหรือแบ่งโอนกัน (เฉพาะแปลงคง) และมีเจตนาให้เป็นทางเข้า-ออก" {{$job->prop_type=='ทางส่วนบุคคลที่มีการแบ่งแยกหรือแบ่งโอนกัน (เฉพาะแปลงคง) และมีเจตนาให้เป็นทางเข้า-ออก'?'selected':''}}>ทางส่วนบุคคลที่มีการแบ่งแยกหรือแบ่งโอนกัน (เฉพาะแปลงคง) และมีเจตนาให้เป็นทางเข้า-ออก</option>
                                <option value="ทางภารจำยอม (ทางส่วนบุคคลที่มีการจดทะเบียนแล้ว)" {{$job->prop_type=='ทางภารจำยอม (ทางส่วนบุคคลที่มีการจดทะเบียนแล้ว)'?'selected':''}}>ทางภารจำยอม (ทางส่วนบุคคลที่มีการจดทะเบียนแล้ว)</option>
                                <option value="ทางในเขตชานคลองสาธารณะ (เป็นส่วนของทางที่อยู่บนหรือเป็นส่วนหนึ่งของคลองสาธารณะ)" {{$job->prop_type=='ทางในเขตชานคลองสาธารณะ (เป็นส่วนของทางที่อยู่บนหรือเป็นส่วนหนึ่งของคลองสาธารณะ)'?'selected':''}}>ทางในเขตชานคลองสาธารณะ (เป็นส่วนของทางที่อยู่บนหรือเป็นส่วนหนึ่งของคลองสาธารณะ)</option>
                                <option value="ทางส่วนบุคคลที่มีเจ้าของทางนั้นยินยอมให้ใช้ผ่านทางเข้า-ออก โดยเปิดเผย ไม่โต้แย้งสิทธิ ระยะเวลาการใช้เกิน 10 ปีขึ้นไป" {{$job->prop_type=='ทางส่วนบุคคลที่มีเจ้าของทางนั้นยินยอมให้ใช้ผ่านทางเข้า-ออก โดยเปิดเผย ไม่โต้แย้งสิทธิ ระยะเวลาการใช้เกิน 10 ปีขึ้นไป'?'selected':''}}>ทางส่วนบุคคลที่มีเจ้าของทางนั้นยินยอมให้ใช้ผ่านทางเข้า-ออก โดยเปิดเผย ไม่โต้แย้งสิทธิ ระยะเวลาการใช้เกิน 10 ปีขึ้นไป</option>
                                <option value="ทางส่วนบุคคลในโครงการจัดสรรที่ไม่ได้รับอนุญาตจัดสรรที่ดิน มีเจตนาแบ่งที่ดินออกเป็นแปลงย่อย ๆ เพื่อขาย ตั้งแต่ 10 แปลงขึ้นไป" {{$job->prop_type=='ทางส่วนบุคคลในโครงการจัดสรรที่ไม่ได้รับอนุญาตจัดสรรที่ดิน มีเจตนาแบ่งที่ดินออกเป็นแปลงย่อย ๆ เพื่อขาย ตั้งแต่ 10 แปลงขึ้นไป'?'selected':''}}>ทางส่วนบุคคลในโครงการจัดสรรที่ไม่ได้รับอนุญาตจัดสรรที่ดิน มีเจตนาแบ่งที่ดินออกเป็นแปลงย่อย ๆ เพื่อขาย ตั้งแต่ 10 แปลงขึ้นไป</option>
                                <option value="ทางในโครงการจัดสรรของการเคหะแห่งชาติ" {{$job->prop_type=='ทางในโครงการจัดสรรของการเคหะแห่งชาติ'?'selected':''}}>ทางในโครงการจัดสรรของการเคหะแห่งชาติ</option>
                                <option value="ทางส่วนบุคคลที่ทางหน่วยงานราชการ เข้าไปพัฒนาแล้ว" {{$job->prop_type=='ทางส่วนบุคคลที่ทางหน่วยงานราชการ เข้าไปพัฒนาแล้ว'?'selected':''}}>ทางส่วนบุคคลที่ทางหน่วยงานราชการ เข้าไปพัฒนาแล้ว</option>
                                <option value="ทางที่เจ้าของที่ดินได้อุทิศ (ยกให้) ให้เป็นทางสาธารณะ" {{$job->prop_type=='ทางที่เจ้าของที่ดินได้อุทิศ (ยกให้) ให้เป็นทางสาธารณะ'?'selected':''}}>ทางที่เจ้าของที่ดินได้อุทิศ (ยกให้) ให้เป็นทางสาธารณะ</option>
                                <option value="ทางสาธารณประโยชน์ ไม่มีสภาพเป็นทาง (รถยนต์เข้า-ออกไม่ได้, วัชพืชปกคลุมหนาแน่น)" {{$job->prop_type=='ทางสาธารณประโยชน์ ไม่มีสภาพเป็นทาง (รถยนต์เข้า-ออกไม่ได้, วัชพืชปกคลุมหนาแน่น)'?'selected':''}}>ทางสาธารณประโยชน์ ไม่มีสภาพเป็นทาง (รถยนต์เข้า-ออกไม่ได้, วัชพืชปกคลุมหนาแน่น)</option>
                                <option value="ทางจำเป็นตามคำสั่งศาล" {{$job->prop_type=='ทางจำเป็นตามคำสั่งศาล'?'selected':''}}>ทางจำเป็นตามคำสั่งศาล</option>
                                <option value="รายละเอียด ตามหมายเหตุ ด้านล่าง" {{$job->prop_type=='รายละเอียด ตามหมายเหตุ ด้านล่าง'?'selected':''}}>รายละเอียด ตามหมายเหตุ ด้านล่าง</option>
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
                            <select name="prop_type" class="form-control">
                                <option value="ถนนคอนกรีต" {{$job->prop_type=='ถนนคอนกรีต'?'selected':''}}>ถนนคอนกรีต</option>
                                <option value="ถนนลาดยาง" {{$job->prop_type=='ถนนลาดยาง'?'selected':''}}>ถนนลาดยาง</option>
                                <option value="ถนนลูกรัง" {{$job->prop_type=='ถนนลูกรัง'?'selected':''}}>ถนนลูกรัง</option>
                                <option value="ถนนหินคลุก" {{$job->prop_type=='ถนนหินคลุก'?'selected':''}}>ถนนหินคลุก</option>
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
                                <input type="text" name="roomtype" class="form-control{{ $errors->has('roomtype') ? ' is-invalid' : '' }}" value="{{ $job->roomtype }}" placeholder="0.00">
                                @if ($errors->has('roomtype'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('roomtype') }}</strong>
                                </span>
                                @endif

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
                                <input type="text" name="roomtype" class="form-control{{ $errors->has('roomtype') ? ' is-invalid' : '' }}" value="{{ $job->roomtype }}" placeholder="0.00">
                                @if ($errors->has('roomtype'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('roomtype') }}</strong>
                                </span>
                                @endif

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
                            <input type="text" name="roomtype" class="form-control{{ $errors->has('roomtype') ? ' is-invalid' : '' }}" value="{{ $job->roomtype }}">
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">มีสภาพเป็นถนน</label>
                        </div>
                        <div class="col-md-6">
                            <select name="prop_type" class="form-control">
                                <option value="รถยนต์ รถเมล์" {{$job->prop_type=='รถยนต์ รถเมล์'?'selected':''}}>รถยนต์ รถเมล์</option>
                                <option value="รถยนต์ รถเมล์ รถไฟฟ้า" {{$job->prop_type=='รถยนต์ รถเมล์ รถไฟฟ้า'?'selected':''}}>รถยนต์ รถเมล์ รถไฟฟ้า</option>
                                <option value="รถยนต์ รถเมล์ รถโดยสารด่วนพิเศษ (BRT)" {{$job->prop_type=='รถยนต์ รถเมล์ รถโดยสารด่วนพิเศษ (BRT)'?'selected':''}}>รถยนต์ รถเมล์ รถโดยสารด่วนพิเศษ (BRT)</option>
                                <option value="รถยนต์ รถเมล์ประจำทาง เรือ" {{$job->prop_type=='รถยนต์ รถเมล์ประจำทาง เรือ'?'selected':''}}>รถยนต์ รถเมล์ประจำทาง เรือ</option>
                                <option value="ทางเดิน" {{$job->prop_type=='ทางเดิน'?'selected':''}}>ทางเดิน</option>
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
                            <input type="text" name="roomtype" class="form-control{{ $errors->has('roomtype') ? ' is-invalid' : '' }}" value="{{ $job->roomtype }}">
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