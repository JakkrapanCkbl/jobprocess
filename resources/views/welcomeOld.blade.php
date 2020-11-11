<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Landmark Consultants co., ltd.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('partials.head')


  <!--Rangeslider css-->
  <link href="../external2/plugins/ion.rangeSlider/ion.rangeSlider.css" rel="stylesheet" />
  <link href="../external2/plugins/ion.rangeSlider/ion.rangeSlider.skinHTML5.css" rel="stylesheet">

  </head>
  <body>
    @include('partials.nav')  
    @include('partials.hero')
    @include('partials.category')

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
            <h2 class="mb-5 h3">Recent Jobs</h2>
            <div class="rounded border jobs-wrap">
             
              @foreach($jobs as $job)
              <a href="{{route('jobs.show',[$job->id,$job->jobsize])}}" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
                <div class="company-logo blank-logo text-center text-md-left pl-3">
                  <img src="external/images/company_logo_blank.png" alt="Image" class="img-fluid mx-auto">
                </div>
                <div class="job-details h-100">
                  <div class="p-3 align-self-center">
                    <!--<span class="fas fa-building"> {{$job->jobcode}}</span>
                    <h3><i class="fas fa-map-marker-alt"></i>{{$job->projectname}}</h3>-->

                    <div class="d-block d-lg-flex">
                      <div class="mr-3"><span class="text-info p-1 rounded border border-info">&nbsp;{{$job->client}}</span></div>
                      <div class="mr-3"><span class="fas fa-building"></span>&nbsp;{{$job->jobcode}}</div>
                      <div class="mr-3"><span class="fas fa-map-marker-alt"></span>&nbsp;{{$job->projectname}}</div>
                      <div><span class="fas fa-th-large"></span>&nbsp;{{$job->prop_size}}</div>
                    </div>

                    <div class="d-block d-lg-flex">
                      <div class="mr-3"><span class="far fa-clock">&nbsp;รับงาน&nbsp;{{date('d-m-Y', strtotime($job->startdate))}}</span></div>
                      <div class="mr-3"><span class="far fa-clock">&nbsp;สำรวจ&nbsp;{{date('d-m-Y', strtotime($job->inspectiondate))}}</span></div>
                      <div class="mr-3"><span class="far fa-clock">&nbsp;ส่ง&nbsp;LC&nbsp;{{date('d-m-Y', strtotime($job->lcduedate))}}</span></div>
                      <div class="mr-3"><span class="far fa-clock">&nbsp;Due&nbsp;{{date('d-m-Y', strtotime($job->clientduedate))}}</span></div>
                      <div class="mr-3">
                        <img src="{{asset(Auth::user()->avatar)}}" style="height:65px;width:65px; border-radius:50%; margin-right:15px;" alt="">
                        <img src="{{$job->showavatar->avatar}}" style="height:65px;width:65px; border-radius:50%; margin-right:15px;" alt="">
                        <!--xx{{$job->showavatar->avatar}}--> 
                      </div>
                    </div>

                    <div class="d-block d-lg-flex">
                      <div class="mr-3"><span class="fas fa-money-bill-alt"></span>&nbsp;{{$job->marketvalue}} บาท</div>
                      <div class="mr-3"><span class="far fa-money-bill-alt"></span>&nbsp;20,000 ตารางเมตร</div>
                    </div>

                    <div class="d-block d-lg-flex">
                      <div class="mr-3"><span class="far fa-file-pdf"></div>
                      <div class="mr-3"><span class="fas fa-book"></div>
                      <div class="mr-3"><span class="far fa-folder-open"></div>
                      <div class="mr-3"><span class="fas fa-tasks"></div>
                      <div class="mr-3"><span class="fas fa-file-contract" alt="ใบเสนอราคา"></div>
                      <div class="mr-3"><span class="far fa-paper-plane" alt="ส่งรายงาน"></div>
                      <div class="mr-3"><span class="fas fa-file-invoice" alt="ใบแจ้งหนี้"></div>
                      <div class="mr-3"><span class="fas fa-file-invoice-dollar" alt="ใบเสร็จรับเงิน"></div>  
                        <div class="mr-3"><span class="fas fa-donate" alt="OPE"></div> 
                    </div>

                    <!--<div class="d-block d-lg-flex">
                      <div class="mr-3"><span class="icon-suitcase mr-1"></span>{{$job->prop_type}}</div>
                      <div class="mr-3"><span class="icon-room mr-1"></span>กรุงเทพมหานคร</div>
                      <div><span class="icon-money mr-1"></span>2,555,000 &mdash;4,000,000</div>
                    </div>-->
                  </div>
                </div>
                <div class="job-category align-self-center">
                  <div class="p-3">
                    <span class="text-info p-2 rounded border border-info">Completed</span>
                  </div>
                  <div class="progress progress-sm mb-5">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-70"></div>
                  </div>
                </div>  
              </a>
             @endforeach
             
              

            </div>

            <div class="col-md-12 text-center mt-5">
              <a href="#" class="btn btn-primary rounded py-3 px-5"><span class="icon-plus-circle"></span> Show More Jobs</a>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    @include('partials.testimonial')

    <div class="site-blocks-cover overlay inner-page" style="background-image: url('external/images/hero_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8 text-center" data-aos="fade">
            <h1 class="h3 mb-0">Your Dream Property</h1>
            <p class="h3 text-white mb-5">Is Waiting For You</p>
            <p><a href="#" class="btn btn-outline-warning py-3 px-4">Find Jobs</a> <a href="#" class="btn btn-warning py-3 px-4">Apply For A Job</a></p>
            
          </div>
        </div>
      </div>
    </div>

    

    <div class="site-section site-block-feature bg-light">
      <div class="container">
        
        <div class="text-center mb-5 section-heading">
          <h2>Why Choose Us</h2>
        </div>

        <div class="d-block d-md-flex border-bottom">
          <div class="text-center p-4 item border-right" data-aos="fade">
            <span class="flaticon-worker display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">More Jobs Every Day</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
          <div class="text-center p-4 item" data-aos="fade">
            <span class="flaticon-wrench display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">Creative Jobs</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
        <div class="d-block d-md-flex">
          <div class="text-center p-4 item border-right" data-aos="fade">
            <span class="flaticon-stethoscope display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">Data Analytic</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
          <div class="text-center p-4 item" data-aos="fade">
            <span class="flaticon-calculator display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">Finance &amp; Accounting</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
    </div>

    @include('partials.blog')
    @include('partials.footer')

    <!--Rang slider js-->
  <script src="../external2/plugins/ion.rangeSlider/ion.rangeSlider.js"></script>
  <script src="../external2/js/rangeslider.js"></script>
    
  </body>
</html>