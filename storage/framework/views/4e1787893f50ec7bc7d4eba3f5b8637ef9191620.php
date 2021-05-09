<div class="site-blocks-cover overlay" style="background-image: url('external/images/hero_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12" data-aos="fade">
        <!-- <h1>Find Property</h1> -->
        <form action="<?php echo e(route('alljobs')); ?>">
          <div class="row mb-3">
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="text" name="search" class="mr-3 form-control border-0 px-4" placeholder="ค้นหา : ชื่อคอนโด, ชื่อหมู่บ้าน, ชื่อถนน, ชื่ออำเภอ, ...">
                </div>

                <!--<div class="col-md-6 mb-3 mb-md-0">
                      <div class="input-wrap">
                        <span class="icon icon-room"></span>
                      <input type="text" name="address" class="form-control form-control-block search-input  border-0 px-4" id="autocomplete" placeholder="city, province or region" onFocus="geolocate()">
                      </div>
                    </div>-->
              </div>
            </div>
            <div class="col-md-3">
              <input type="submit" class="btn btn-search btn-primary btn-block" value="Search">
            </div>
          </div>



          <div class="row">
            <div class="col-md-12">
              <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  Advance Search
                </button>
              </p>

              <!-- Collapsed Advance Search -->
              <div class="collapse" id="collapseExample">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="container">
                        <div class="md-col-4">
                          <div class="card-body">
                            <!-- <input type="text" class="js-range-slider-01" id="range_advsearchyear">
                            <input type="text" name="pricerange" value="" style="width: 500px;" readonly>
                            <input type="hidden" name="pricefrom">
                            <input type="hidden" name="priceto"> -->

                            <label class="btn btn-outline-primary mt-2" onclick="check_type()">
                              <input class="btn-check" name="prop-type-radio" type="radio" id="prop_type1" autocomplete="off" value="1" checked> คอนโด
                            </label>
                            <label class="btn btn-outline-primary mt-2" onclick="check_type()">
                              <input class="btn-check" name="prop-type-radio" type="radio" id="prop_type2" autocomplete="off" value="2"> บ้านเดี่ยว
                            </label>
                            <label class="btn btn-outline-primary mt-2" onclick="check_type()">
                              <input class="btn-check" name="prop-type-radio" type="radio" id="prop_type3" autocomplete="off" value="3"> บ้านแฝด
                            </label>
                            <label class="btn btn-outline-primary mt-2" onclick="check_type()">
                              <input class="btn-check" name="prop-type-radio" type="radio" id="prop_type4" autocomplete="off" value="4"> ทาวน์โฮม/ทาวน์เฮาส์
                            </label>
                            <label class="btn btn-outline-primary mt-2" onclick="check_type()">
                              <input class="btn-check" name="prop-type-radio" type="radio" id="prop_type5" autocomplete="off" value="5"> อาคารพาณิชย์
                            </label>
                            <label class="btn btn-outline-primary mt-2" onclick="check_type()">
                              <input class="btn-check" name="prop-type-radio" type="radio" id="prop_type6" autocomplete="off" value="6"> โฮมออฟฟิศ
                            </label>
                            <label class="btn btn-outline-primary mt-2" onclick="check_type()">
                              <input class="btn-check" name="prop-type-radio" type="radio" id="prop_type7" autocomplete="off" value="7"> มินิออฟฟิศ
                            </label>
                            <label class="btn btn-outline-primary mt-2" onclick="check_type()">
                              <input class="btn-check" name="prop-type-radio" type="radio" id="prop_type8" autocomplete="off" value="8"> ที่ดินว่างเปล่า
                            </label>
                            <!-- </div> -->

                            <!-- ion.RangeSlider @external2/js/rangeslide.js -->
                            <h4 class="mt-2" style="color: black;">ช่วงราคา</h4>
                            <div id="slider-01" class="container">
                              <input type="text" class="js-range-slider-01">
                              <input name="pricefrom-slider-01">
                              <input name="priceto-slider-01">
                            </div>
                            <div id="slider-02" class="container" style="display:none;">
                              <input type="text" class="js-range-slider-02">
                              <input name="pricefrom-slider-02">
                              <input name="priceto-slider-02">
                            </div>
                            <div id="slider-03" class="container" style="display:none;">
                              <input type="text" class="js-range-slider-03">
                              <input name="pricefrom-slider-03">
                              <input name="priceto-slider-03">
                            </div>
                            <div id="slider-04" class="container" style="display:none;">
                              <input type="text" class="js-range-slider-04">
                              <input name="pricefrom-slider-04">
                              <input name="priceto-slider-04">
                              <h4 style="color: black;">เนื้อที่</h4>
                              <!-- Empty Land Area ion.RangeSlider -->
                              <input type="text" class="js-range-slider-05" id="range_advsearchyear2">
                              <input name="areafrom">
                              <input name="areato">
                            </div>

                            <input type="hidden" name="property_type" value="0">

                            <script>
                              function check_type() {
                                var slider_01 = document.getElementById("slider-01");
                                var slider_02 = document.getElementById("slider-02");
                                var slider_03 = document.getElementById("slider-03");
                                var slider_04 = document.getElementById("slider-04");
                                var property_type = document.getElementsByName("property_type")[0];

                                if ($('#prop_type1').is(':checked')) {
                                  property_type.value = 0;
                                  slider_01.style.display = "block";
                                  slider_02.style.display = "none";
                                  slider_03.style.display = "none";
                                  slider_04.style.display = "none";
                                }
                                if ($('#prop_type2').is(':checked') || $('#prop_type3').is(':checked')) {
                                  property_type.value = 1;
                                  slider_01.style.display = "none";
                                  slider_02.style.display = "block";
                                  slider_03.style.display = "none";
                                  slider_04.style.display = "none";
                                }
                                if ($('#prop_type4').is(':checked') || $('#prop_type5').is(':checked') ||
                                  $('#prop_type6').is(':checked') || $('#prop_type7').is(':checked')) {
                                  property_type.value = 2;
                                  slider_01.style.display = "none";
                                  slider_02.style.display = "none";
                                  slider_03.style.display = "block";
                                  slider_04.style.display = "none";
                                }
                                if ($('#prop_type8').is(':checked')) {
                                  property_type.value = 3;
                                  slider_01.style.display = "none";
                                  slider_02.style.display = "none";
                                  slider_03.style.display = "none";
                                  slider_04.style.display = "block";
                                }
                              }
                            </script>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>

              <!-- <p class="small">or browse by category: <a href="#" class="category">Category #1</a> <a href="#" class="category">Category #2</a></p> -->
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/partials/hero.blade.php ENDPATH**/ ?>