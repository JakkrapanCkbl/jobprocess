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