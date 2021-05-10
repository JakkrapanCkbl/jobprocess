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

                </div>



                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right" name="level">ชั้น</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="level" class="form-control{{ $errors->has('level') ? ' is-invalid' : '' }}" value="{{ $job->level }}">
                            @if ($errors->has('level'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('level') }}</strong>
                            </span>
                            @endif
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right" name="moo">หมู่</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="moo" placeholder="หมู่" class="form-control{{ $errors->has('moo') ? ' is-invalid' : '' }}" value="{{ $job->moo }}">
                            @if ($errors->has('moo'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('msoo') }}</strong>
                            </span>
                            @endif
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">พื้นที่</label>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <select name="areaUnit" class="form-control">
                                        <option value="ตร.ม." {{$job->easydiff=='NORM'?'selected':''}}>ตร.ม.</option>
                                        <option value="ไร่" {{$job->easydiff=='DIFF'?'selected':''}}>ไร่</option>
                                    </select>
                                </div>
                                <input type="text" name="area" placeholder="00.00" class="form-control{{ $errors->has('prop_size') ? ' is-invalid' : '' }}" value="{{ $job->prop_size }}">

                            </div>
                        </div>

                    </div>

                </div>




                <!-- RAI  -->
                <!-- <div class="container">
                        <div class="row">

                            <div class="col-md-3 align-self-center p-1">
                                <label class="float-right">ขนาดพื้นที่่</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="prop_size" class="form-control{{ $errors->has('prop_size') ? ' is-invalid' : '' }}" value="{{ $job->prop_size }}">
                                @if ($errors->has('prop_size'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('prop_size') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>

                    </div> -->

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ซอย</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="soi" placeholder="ซอย" class="form-control{{ $errors->has('soi') ? ' is-invalid' : '' }}" value="{{ $job->soi }}">
                            @if ($errors->has('soi'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('soi') }}</strong>
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
                            <input type="text" name="road" placeholder="ถนน" class="form-control{{ $errors->has('road') ? ' is-invalid' : '' }}" value="{{ $job->road }}">
                            @if ($errors->has('road'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('road') }}</strong>
                            </span>
                            @endif
                        </div>

                    </div>

                </div>

                <br>
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ตำบล (HL-ตามโฉนด/อ.ช.2)</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="deedtumbon" placeholder="ตำบล" class="form-control{{ $errors->has('deedtumbon') ? ' is-invalid' : '' }}" value="{{ $job->deedtumbon }}">
                            @if ($errors->has('deedtumbon'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('deedtumbon') }}</strong>
                            </span>
                            @endif
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">อำเภอ (HL-ตามโฉนด/อ.ช.2) </label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="deedamphur" placeholder="อำเภอ" class="form-control{{ $errors->has('deedamphur') ? ' is-invalid' : '' }}" value="{{ $job->deedamphur }}">
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
                            <input type="text" name="district" class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" value="{{ $job->district }}">
                            @if ($errors->has('district'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('district') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ราคาประเมิน</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="marketvalue" id="marketvalue" class="form-control{{ $errors->has('marketvalue') ? ' is-invalid' : '' }}" value="{{ number_format($job->marketvalue,2) }}">
                            @if ($errors->has('marketvalue'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('marketvalue') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ราคาประเมินต่อพื้นที่</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="marketvalue_unit" id="marketvalue_unit" class="form-control{{ $errors->has('marketvalue_unit') ? ' is-invalid' : '' }}" value="{{ number_format($job->marketvalue_unit,2) }}">
                            @if ($errors->has('marketvalue_unit'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('marketvalue_unit') }}</strong>
                            </span>
                            @endif
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

            </form>

                <script>
                    $(document).ready(function() {
                        if ($('select[name = "prop_type"]').val() == 'ห้องชุด') {
                            document.getElementsByName("moo")[0].style.visibility = "hidden";
                            document.getElementsByName("moo")[1].style.visibility = "hidden";
                            document.getElementsByName("area")[0].placeholder = "00.00";
                            document.getElementsByName("areaUnit")[0].value = "ตร.ม.";
                        } else {
                            document.getElementsByName("moo")[0].style.visibility = "visible";
                            document.getElementsByName("moo")[1].style.visibility = "visible";
                            document.getElementsByName("area")[0].placeholder = "00-0-00";
                            document.getElementsByName("areaUnit")[0].value = "ไร่";
                        }
                        $('select[name = "prop_type"]').change(function() {
                            if ($(this).val() == 'ห้องชุด') {
                                document.getElementsByName("moo")[0].style.visibility = "hidden";
                                document.getElementsByName("moo")[1].style.visibility = "hidden";
                                document.getElementsByName("level")[0].style.visibility = "visible";
                                document.getElementsByName("level")[1].style.visibility = "visible";
                                document.getElementsByName("area")[0].placeholder = "00.00";
                                document.getElementsByName("areaUnit")[0].value = "ตร.ม.";
                            } else {
                                document.getElementsByName("moo")[0].style.visibility = "visible";
                                document.getElementsByName("moo")[1].style.visibility = "visible";
                                document.getElementsByName("level")[0].style.visibility = "hidden";
                                document.getElementsByName("level")[1].style.visibility = "hidden";
                                document.getElementsByName("area")[0].placeholder = "00-0-00";
                                document.getElementsByName("areaUnit")[0].value = "ไร่";
                            }

                        });
                    });
                </script>

            </div>

        </div>
    </div>
    <!-- </div> -->
    <!-- </div> -->
</div>
{{csrf_field()}}