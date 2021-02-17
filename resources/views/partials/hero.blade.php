<div class="site-blocks-cover overlay" style="background-image: url('external/images/hero_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12" data-aos="fade">
        <h1>Find Property</h1>
        <form action="{{route('alljobs')}}">
          <div class="row mb-3">
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="text" name="search" class="mr-3 form-control border-0 px-4" placeholder="title, keywords or project name ">
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
                            <!-- Price Range -->
                            <div class="md-col-4">
                              <input type="text" class="js-range-slider-01" id="range_advsearchyear">
                            </div>
                            <div class="md-col-4">
                              <input type="text" name="pricerange" value="" style="width: 500px;" readonly>
                            </div>
                            <div class="md-col-4">
                              <input type="hidden" name="pricefrom">
                              <input type="hidden" name="priceto">
                            </div>


                            <div class="btn-group-vertical" role="group">
                              <!-- <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                              <label class="btn btn-outline-primary" for="btncheck1">คอนโด</label> -->

                              <div class="btn-group" role="group">

                                <label class="btn btn-outline-primary m-2" for="btnradio1">
                                  <input class="toggle-one btn-check" type="radio" autocomplete="off" checked> คอนโด
                                </label>
                                <label class="btn btn-outline-primary m-2">
                                  <input class="toggle-one btn-check" type="radio" autocomplete="off"> บ้านเดี่ยว
                                </label>
                                <label class="btn btn-outline-primary m-2">
                                  <input class="toggle-one btn-check" type="radio" autocomplete="off"> บ้านแฝด
                                </label>
                                <label class="btn btn-outline-primary m-2">
                                  <input class="toggle-one btn-check" type="radio" autocomplete="off"> ทาวน์โฮม/ทาวน์เฮาส์
                                </label>
                                <label class="btn btn-outline-primary m-2">
                                  <input class="toggle-one btn-check" type="radio" autocomplete="off"> อาคารพาณิชย์
                                </label>
                                <label class="btn btn-outline-primary m-2">
                                  <input class="toggle-one btn-check" type="radio" autocomplete="off"> โฮมออฟฟิศ
                                </label>
                              </div>
                              
                              <div class="btn-group" role="group">
                                <label class="btn btn-outline-primary m-2">
                                  <input class="toggle-one btn-check" type="radio" autocomplete="off"> มินิออฟฟิศ
                                </label>
                                <label class="btn btn-outline-primary m-2">
                                  <input class="toggle-one btn-check" type="radio" autocomplete="off"> ที่ดินว่างเปล่า
                                </label>

                              </div>
                            </div>

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

<style>

</style>

<script>
  const submit = document.getElementById('submit');
  submit.addEventListener('mouseup', e => {
    for (i = 0; i < childNumber; i++) {
      console.log("Child: " + childNumber);
      // console.log("button 1 is " + $('#toggle-one').prop('checked') );
    }
    const array = [
      $('.toggle-one').prop('checked') ? [$('.toggle-one').val()] : [],
      $('.toggle-two').prop('checked') ? [$('.toggle-two').val()] : [],
      $('.toggle-three').prop('checked') ? [$('.toggle-three').val()] : [],
      $('.toggle-four').prop('checked') ? [$('.toggle-four').val()] : [],
      $('.toggle-five').prop('checked') ? [$('.toggle-five').val()] : [],
      $('.toggle-six').prop('checked') ? [$('.toggle-six').val()] : [],
    ];
    console.log($('.toggle-one').prop('checked') + " " + $('.toggle-two').prop('checked') + " " +
      $('.toggle-three').prop('checked') + " " + $('.toggle-four').prop('checked') + " " +
      $('.toggle-five').prop('checked') + " " + $('.toggle-six').prop('checked')
    );
  });
</script>

