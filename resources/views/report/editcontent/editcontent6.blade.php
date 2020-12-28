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

                <div class="container">
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                            <input type="text" name="govprice_row5a" class="form-control{{ $errors->has('govprice_row5a') ? ' is-invalid' : '' }}" value="{{ $job->govprice_row5a }}">
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