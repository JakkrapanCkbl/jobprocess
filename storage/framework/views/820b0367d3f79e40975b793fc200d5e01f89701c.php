<div class="container">
    <?php if(Session::has('message')): ?>
    <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
    <?php endif; ?>
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
                            <input type="text" name="marketvalue" id="marketvalue" class="form-control<?php echo e($errors->has('marketvalue') ? ' is-invalid' : ''); ?>" value="<?php echo e(number_format($job->marketvalue,2)); ?>">
                            <?php if($errors->has('marketvalue')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('marketvalue')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                

               
                    <div class="row">
                        <div class="col-md-3 align-self-center p-1">
                            <label class="float-right">ราคาประเมินต่อพื้นที่</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="marketvalue_unit" id="marketvalue_unit" class="form-control<?php echo e($errors->has('marketvalue_unit') ? ' is-invalid' : ''); ?>" value="<?php echo e(number_format($job->marketvalue_unit,2)); ?>">
                            <?php if($errors->has('marketvalue_unit')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('marketvalue_unit')); ?></strong>
                            </span>
                            <?php endif; ?>
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
<?php echo e(csrf_field()); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/admin/editcontent/vertical_editcontent3.blade.php ENDPATH**/ ?>