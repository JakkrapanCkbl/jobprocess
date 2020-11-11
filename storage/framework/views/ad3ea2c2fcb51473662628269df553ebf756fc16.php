<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .single-property {
          position: relative;
          border-radius: 10px;
          box-shadow: 0px 1px 4px 0px rgba(5, 52, 74, 0.38);
      }
      .property-img {
        position: relative;
        overflow: hidden;
        border-radius: 10px 10px 0 0;
      }
      .property-desc {
        padding: 0 0 20px 0;
        text-align: center;
      }

    </style>
  </head>
  <body>
    
    <!--<div id="map"></div>-->
    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

<div class="featured-properites-section section pt-110 pt-md-90 pt-sm-70 pt-xs-60 pb-110 pb-md-90 pb-sm-70 pb-xs-60">
        <div class="container">

            <div class="row">
                <div class="col">
                    <ul class="properties-list nav justify-content-end" role="tablist">
                       <li class="active"><a class="active" href="#all" role="tab" data-toggle="tab">ALL</a></li>
                       <li><a href="#buy" role="tab" data-toggle="tab">FOR BUY</a></li>
                       <li><a href="#sale" role="tab" data-toggle="tab">FOR SALE</a></li>
                       <li><a href="#rent" role="tab" data-toggle="tab">FOR RENT</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="tab-content">
                <div class="tab-pane active" id="all">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/01.jpg" alt="">
                                    </a>
                                    <span class="level-stryker">FOR RENT</span>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Mariyasa de Casel </a></h4>
                                    <p>
                                        <span class="location">22 First street, Chicago, USA</span>
                                        <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $ 1,59,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/02.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Rose de Alfanez</a></h4>
                                    <p>
                                        <span class="location">132 Future Street, Boston, USA</span>
                                        <span class="property-info">1600 Sqft, 4 Bed, 2 Bath, 2 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $ 1,59,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/03.jpg" alt="">
                                    </a>
                                    <span class="level-stryker-2">FOR RENT</span>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">La Casanda Villa</a></h4>
                                    <p>
                                        <span class="location">1 DE Silicon Tower, Denver</span>
                                        <span class="property-info">1800 Sqft, 6 Bed, 4 Bath, 3 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $2,32,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/04.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Rainforest de Olive</a></h4>
                                    <p>
                                        <span class="location">22 First street, Chicago, USA</span>
                                        <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Rent $32,00/m</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/05.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Tulip Duplex Villa</a></h4>
                                    <p>
                                        <span class="location">Simplex Tower, Washington, USA</span>
                                        <span class="property-info">980 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $ 1,59,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/06.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Royal Casel Alpha</a></h4>
                                    <p>
                                        <span class="location">2 FB New York main city, USA</span>
                                        <span class="property-info">890 Sqft, 2 Bed, 2 Bath, 2Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Rent $28,00/m</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/07.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Casel de Paradise</a></h4>
                                    <p>
                                        <span class="location">22 First street,Phoenix, USA</span>
                                        <span class="property-info">1850 Sqft, 7 Bed, 4 Bath, 3 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $2,89,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/08.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">White Smith Casel</a></h4>
                                    <p>
                                        <span class="location">22 First street, Chicago, USA</span>
                                        <span class="property-info">950 Sqft, 2 Bed, 2 Bath, 1 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $1,53,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>
                        
                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/09.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Rose de Castel</a></h4>
                                    <p>
                                        <span class="location">2 FB New York main city, USA</span>
                                        <span class="property-info">890 Sqft, 2 Bed, 2 Bath, 2Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Rent $26,00/m</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/10.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Invision Duplex Villa</a></h4>
                                    <p>
                                        <span class="location">22 First street,Phoenix, USA</span>
                                        <span class="property-info">1850 Sqft, 7 Bed, 4 Bath, 3 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $2,89,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/11.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Momen’s Palace</a></h4>
                                    <p>
                                        <span class="location">22 First street, Chicago, USA</span>
                                        <span class="property-info">950 Sqft, 2 Bed, 2 Bath, 1 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $1,93,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>
                        
                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/12.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">White Smith Casel</a></h4>
                                    <p>
                                        <span class="location">22 First street, Chicago, USA</span>
                                        <span class="property-info">950 Sqft, 2 Bed, 2 Bath, 1 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $1,93,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                    </div>
                </div>
                <div class="tab-pane" id="buy">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/08.jpg" alt="">
                                    </a>
                                    <span class="level-stryker">FOR RENT</span>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Mariyasa de Casel </a></h4>
                                    <p>
                                        <span class="location">22 First street, Chicago, USA</span>
                                        <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $ 1,59,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/08.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Rose de Alfanez</a></h4>
                                    <p>
                                        <span class="location">132 Future Street, Boston, USA</span>
                                        <span class="property-info">1600 Sqft, 4 Bed, 2 Bath, 2 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $ 1,59,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/07.jpg" alt="">
                                    </a>
                                    <span class="level-stryker-2">FOR RENT</span>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">La Casanda Villa</a></h4>
                                    <p>
                                        <span class="location">1 DE Silicon Tower, Denver</span>
                                        <span class="property-info">1800 Sqft, 6 Bed, 4 Bath, 3 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $2,32,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/01.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Rainforest de Olive</a></h4>
                                    <p>
                                        <span class="location">22 First street, Chicago, USA</span>
                                        <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Rent $32,00/m</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/02.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Tulip Duplex Villa</a></h4>
                                    <p>
                                        <span class="location">Simplex Tower, Washington, USA</span>
                                        <span class="property-info">980 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $ 1,59,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/03.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Royal Casel Alpha</a></h4>
                                    <p>
                                        <span class="location">2 FB New York main city, USA</span>
                                        <span class="property-info">890 Sqft, 2 Bed, 2 Bath, 2Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Rent $28,00/m</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/04.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Casel de Paradise</a></h4>
                                    <p>
                                        <span class="location">22 First street,Phoenix, USA</span>
                                        <span class="property-info">1850 Sqft, 7 Bed, 4 Bath, 3 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $2,89,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/05.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">White Smith Casel</a></h4>
                                    <p>
                                        <span class="location">22 First street, Chicago, USA</span>
                                        <span class="property-info">950 Sqft, 2 Bed, 2 Bath, 1 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $1,53,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                    </div>
                </div>
                <div class="tab-pane" id="sale">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/02.jpg" alt="">
                                    </a>
                                    <span class="level-stryker">FOR RENT</span>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Mariyasa de Casel </a></h4>
                                    <p>
                                        <span class="location">22 First street, Chicago, USA</span>
                                        <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $ 1,59,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/04.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Rose de Alfanez</a></h4>
                                    <p>
                                        <span class="location">132 Future Street, Boston, USA</span>
                                        <span class="property-info">1600 Sqft, 4 Bed, 2 Bath, 2 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $ 1,59,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/06.jpg" alt="">
                                    </a>
                                    <span class="level-stryker-2">FOR RENT</span>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">La Casanda Villa</a></h4>
                                    <p>
                                        <span class="location">1 DE Silicon Tower, Denver</span>
                                        <span class="property-info">1800 Sqft, 6 Bed, 4 Bath, 3 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $2,32,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/08.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Rainforest de Olive</a></h4>
                                    <p>
                                        <span class="location">22 First street, Chicago, USA</span>
                                        <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Rent $32,00/m</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/01.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Tulip Duplex Villa</a></h4>
                                    <p>
                                        <span class="location">Simplex Tower, Washington, USA</span>
                                        <span class="property-info">980 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $ 1,59,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/03.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Royal Casel Alpha</a></h4>
                                    <p>
                                        <span class="location">2 FB New York main city, USA</span>
                                        <span class="property-info">890 Sqft, 2 Bed, 2 Bath, 2Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Rent $28,00/m</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/05.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Casel de Paradise</a></h4>
                                    <p>
                                        <span class="location">22 First street,Phoenix, USA</span>
                                        <span class="property-info">1850 Sqft, 7 Bed, 4 Bath, 3 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $2,89,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/07.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">White Smith Casel</a></h4>
                                    <p>
                                        <span class="location">22 First street, Chicago, USA</span>
                                        <span class="property-info">950 Sqft, 2 Bed, 2 Bath, 1 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $1,53,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                    </div>
                </div>
                <div class="tab-pane" id="rent">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/05.jpg" alt="">
                                    </a>
                                    <span class="level-stryker">FOR RENT</span>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Mariyasa de Casel </a></h4>
                                    <p>
                                        <span class="location">22 First street, Chicago, USA</span>
                                        <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $ 1,59,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/01.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Rose de Alfanez</a></h4>
                                    <p>
                                        <span class="location">132 Future Street, Boston, USA</span>
                                        <span class="property-info">1600 Sqft, 4 Bed, 2 Bath, 2 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $ 1,59,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/06.jpg" alt="">
                                    </a>
                                    <span class="level-stryker-2">FOR RENT</span>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">La Casanda Villa</a></h4>
                                    <p>
                                        <span class="location">1 DE Silicon Tower, Denver</span>
                                        <span class="property-info">1800 Sqft, 6 Bed, 4 Bath, 3 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $2,32,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/08.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Rainforest de Olive</a></h4>
                                    <p>
                                        <span class="location">22 First street, Chicago, USA</span>
                                        <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Rent $32,00/m</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/07.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Tulip Duplex Villa</a></h4>
                                    <p>
                                        <span class="location">Simplex Tower, Washington, USA</span>
                                        <span class="property-info">980 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $ 1,59,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/02.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Royal Casel Alpha</a></h4>
                                    <p>
                                        <span class="location">2 FB New York main city, USA</span>
                                        <span class="property-info">890 Sqft, 2 Bed, 2 Bath, 2Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Rent $28,00/m</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/03.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">Casel de Paradise</a></h4>
                                    <p>
                                        <span class="location">22 First street,Phoenix, USA</span>
                                        <span class="property-info">1850 Sqft, 7 Bed, 4 Bath, 3 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $2,89,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="assets/images/propertes/01.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="properties-details.html">White Smith Casel</a></h4>
                                    <p>
                                        <span class="location">22 First street, Chicago, USA</span>
                                        <span class="property-info">950 Sqft, 2 Bed, 2 Bath, 1 Garage </span>
                                    </p>
                                    <div class="price-box">
                                        <p>Price $1,53,000</p>
                                    </div>
                                </div>
                            </div><!-- single-property End -->
                        </div>

                    </div>
                </div>
            </div>
            
            
            <div class="row pt-40">
                <div class="col">
                    <ul class="page-pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
   
    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 13.7054421, lng: 100.5958605},
          zoom: 8
        });
      }
    </script>
   
    <!--<script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap" async defer></script>-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVe_Ct97W9S0InAbJqFZ7gR2KnXxR1Pek&callback=initMap" async defer></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/testmap.blade.php ENDPATH**/ ?>