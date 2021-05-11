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