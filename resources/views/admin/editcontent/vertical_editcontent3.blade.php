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
                <form action="{{route('admininputjob.update',[$job->id])}}" method="POST" enctype="multipart/form-data">@csrf

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

                            <div class="col-md-4 align-self-center p-1">
                                <label class="float-right">รูปแบบห้องชุด</label>
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
                            <!-- todo -->
                            <div class="col-md-4 align-self-center p-1">
                                <label class="float-right">อายุอาคาร (ปี)</label>
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
                            <!-- todo -->
                            <div class="col-md-4 align-self-center p-1">
                                <label class="float-right">สภาพอาคาร</label>
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
                            <!-- todo -->
                            <div class="col-md-4 align-self-center p-1">
                                <label class="float-right">ตำแหน่งที่ตั้งห้องชุด</label>
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
                            <!-- todo -->
                            <div class="col-md-4 align-self-center p-1">
                                <label class="float-right">ทัศนียภาพ / วิว</label>
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
                            <!-- todo -->
                            <div class="col-md-4 align-self-center p-1">
                                <label class="float-right">การใช้ประโยชน์ของทรัพย์สิน</label>
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

                    <br>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-4 align-self-center p-1">
                                <label class="float-right">วัสดุ</label>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label float-right" for="inlineRadio1">ดีมาก</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label float-right" for="inlineRadio2">ดี</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                    <label class="form-check-label float-right" for="inlineRadio1">ปานกลาง</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                                    <label class="form-check-label float-right" for="inlineRadio2">ต่ำ</label>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-4 align-self-center p-1">
                                <label class="float-right">รูปแบบ</label>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label float-right" for="inlineRadio1">ดีมาก</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label float-right" for="inlineRadio2">ดี</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                    <label class="form-check-label float-right" for="inlineRadio1">ปานกลาง</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                                    <label class="form-check-label float-right" for="inlineRadio2">ต่ำ</label>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-4 align-self-center p-1">
                                <label class="float-right">วัสดุ</label>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label float-right" for="inlineRadio1">ดีมาก</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label float-right" for="inlineRadio2">ดี</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                    <label class="form-check-label float-right" for="inlineRadio1">ปานกลาง</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                                    <label class="form-check-label float-right" for="inlineRadio2">ต่ำ</label>
                                </div>
                            </div>

                        </div>

                    </div>
                    

                    <div class="container">
                        <div class="row">
                            <!-- todo -->
                            <div class="col-md-4 align-self-center p-1">
                                <label class="float-right">การใช้ประโยชน์ของทรัพย์สิน</label>
                            </div>
                            <div class="col-md-6">
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

            </div>

        </div>
    </div>
    <!-- </div> -->
    <!-- </div> -->
</div>
{{csrf_field()}}