<div class="site-blocks-cover overlay" style="background-image: url('external/images/hero_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12" data-aos="fade">
        <!--h1>Find Property</h1-->
        <form action="{{route('alljobs')}}">
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
            <!-- <div class="col-md-3">
              <input type="submit" class="btn btn-search btn-primary btn-block" value="Search">
            </div> -->
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
                            <input type="text" class="js-range-slider-01" id="range_advsearchyear">
                            <input type="text" name="pricerange" value="" style="width: 500px;" readonly>
                            <input type="hidden" name="pricefrom">
                            <input type="hidden" name="priceto">
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
</div>