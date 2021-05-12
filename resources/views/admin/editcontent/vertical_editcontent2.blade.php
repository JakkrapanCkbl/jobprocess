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
                            <label class="float-right">บ้านเลขที่ / เลขที่ห้อง</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="address_no" class="form-control{{ $errors->has('address_no') ? ' is-invalid' : '' }}" value="{{ $job->address_no }}">
                            @if ($errors->has('address_no'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('address_no') }}</strong>
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
                                    <select name="areaunit" class="form-control">
                                        <option value="ตร.ม." {{$job->areaunit=='ตร.ม.'?'selected':''}}>ตร.ม.</option>
                                        <option value="ตร.ว." {{$job->areaunit=='ตร.ว.'?'selected':''}}>ตร.ว.</option>
                                        <option value="ไร่" {{$job->areaunit=='ไร่'?'selected':''}}>ไร่</option>
                                    </select>
                                </div>
                                <input type="text" name="prop_size" placeholder="00.00" class="form-control{{ $errors->has('prop_size') ? ' is-invalid' : '' }}" value="{{ $job->prop_size }}">

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
                            <label class="float-right">อำเภอ/เขต (ตามเขตปกครอง)</label>
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
                            <label class="float-right">ตำบล/แขวง (ตามเขตปกครอง)</label>
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

               



                

               

            </div>

        </div>
    </div>
    <!-- </div> -->
    <!-- </div> -->
</div>
{{csrf_field()}}