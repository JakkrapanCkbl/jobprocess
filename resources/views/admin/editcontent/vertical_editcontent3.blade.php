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

                    <div class="row">
                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">พิกัดตำแหน่งที่ตั้ง</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="lat" id="lat" class="form-control{{ $errors->has('lat') ? ' is-invalid' : '' }}" value="{{ number_format($job->lat,2) }}">
                            @if ($errors->has('lat'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('lat') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="lng" id="lng" class="form-control{{ $errors->has('lng') ? ' is-invalid' : '' }}" value="{{ number_format($job->lng,2) }}">
                            @if ($errors->has('lng'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('lng') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">การจัดสรรที่ดิน</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="land_allocate" class="form-control{{ $errors->has('land_allocate') ? ' is-invalid' : '' }}" value="{{ $job->land_allocate }}">
                            @if ($errors->has('land_allocate'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('land_allocate') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">สิทธิในการใช้ทาง</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="publicentrance" class="form-control{{ $errors->has('publicentrance') ? ' is-invalid' : '' }}" value="{{ $job->publicentrance }}">
                            @if ($errors->has('publicentrance'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('publicentrance') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">อาคารสิ่งปลูกสร้าง</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="building_detail" class="form-control{{ $errors->has('building_detail') ? ' is-invalid' : '' }}" value="{{ $job->building_detail }}">
                            @if ($errors->has('building_detail'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('building_detail') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ผู้ถือกรรมสิทธิ์ที่ดิน</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="ownership" class="form-control{{ $errors->has('ownership') ? ' is-invalid' : '' }}" value="{{ $job->ownership }}">
                            @if ($errors->has('ownership'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('ownership') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ผู้ถือกรรมสิทธิ์อาคาร</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="ownership_building" class="form-control{{ $errors->has('ownership_building') ? ' is-invalid' : '' }}" value="{{ $job->ownership_building }}">
                            @if ($errors->has('ownership_building'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('ownership_building') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">การจดจำนองเป็นหลักประกัน</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="mortgage" class="form-control{{ $errors->has('mortgage') ? ' is-invalid' : '' }}" value="{{ $job->mortgage }}">
                            @if ($errors->has('mortgage'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('mortgage') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">หลักเกณฑ์การประเมิน</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="obj_guideline" class="form-control{{ $errors->has('obj_guideline') ? ' is-invalid' : '' }}" value="{{ $job->obj_guideline }}">
                            @if ($errors->has('obj_guideline'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('obj_guideline') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">วิธีการประเมิน</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="obj_method" class="form-control{{ $errors->has('obj_method') ? ' is-invalid' : '' }}" value="{{ $job->obj_method }}">
                            @if ($errors->has('obj_method'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('obj_method') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

               
                    <div class="row">
                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ราคาประเมิน</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="marketvalue" id="marketvalue" class="form-control{{ $errors->has('marketvalue') ? ' is-invalid' : '' }}" value="{{ number_format($job->marketvalue, 2, '.', ',') }}">
                            @if ($errors->has('marketvalue'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('marketvalue') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">มูลค่าบังคับขาย ที่อัตรา 70%</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="marketvalue_sale" id="marketvalue_sale" class="form-control{{ $errors->has('marketvalue_sale') ? ' is-invalid' : '' }}" value="{{ number_format($job->marketvalue_sale, 2, '.', ',') }}">
                            @if ($errors->has('marketvalue_sale'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('marketvalue_sale') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ต้นทุนทดแทนใหม่ (RCN)</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="marketvalue_rcn" id="marketvalue_rcn" class="form-control{{ $errors->has('marketvalue_rcn') ? ' is-invalid' : '' }}" value="{{ number_format($job->marketvalue_rcn, 2, '.', ',') }}">
                            @if ($errors->has('marketvalue_rcn'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('marketvalue_rcn') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ต้นทุนจริง (Actural Cost)</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="marketvalue_ac" id="marketvalue_ac" class="form-control{{ $errors->has('marketvalue_ac') ? ' is-invalid' : '' }}" value="{{ number_format($job->marketvalue_ac, 2, '.', ',') }}">
                            @if ($errors->has('marketvalue_ac'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('marketvalue_ac') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ราคาประเมินต่อพื้นที่</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="marketvalue_unit" id="marketvalue_unit" class="form-control{{ $errors->has('marketvalue_unit') ? ' is-invalid' : '' }}" value="{{ number_format($job->marketvalue_unit, 2, '.', ',') }}">
                            @if ($errors->has('marketvalue_unit'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('marketvalue_unit') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">สภาพคล่องในการซื้อ-ขาย</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="liquidity" class="form-control{{ $errors->has('liquidity') ? ' is-invalid' : '' }}" value="{{ $job->liquidity }}">
                            @if ($errors->has('liquidity'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('liquidity') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">เงื่อนไขในการประเมินมูลค่า</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="estimatecondition" class="form-control{{ $errors->has('estimatecondition') ? ' is-invalid' : '' }}" value="{{ $job->estimatecondition }}">
                            @if ($errors->has('estimatecondition'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('estimatecondition') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">หมายเหตุ</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="remark" class="form-control{{ $errors->has('remark') ? ' is-invalid' : '' }}" value="{{ $job->remark }}">
                            @if ($errors->has('remark'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('remark') }}</strong>
                            </span>
                            @endif
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