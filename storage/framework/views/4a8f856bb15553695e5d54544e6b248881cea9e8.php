<!DOCTYPE html>
<html lang="en">

<head>
  <title>Landmark Consultants co., ltd.(test)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php echo $__env->make('partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Rangeslider css -->
  <link href="../external2/plugins/ion.rangeSlider/ion.rangeSlider.css" rel="stylesheet" />
  <link href="../external2/plugins/ion.rangeSlider/ion.rangeSlider.skinHTML5.css" rel="stylesheet">


  <!-- Meta -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('dropzone/dist/min/dropzone.min.css')); ?>">
  <!-- JS -->
  <script src="<?php echo e(asset('dropzone/dist/min/dropzone.min.js')); ?>" type="text/javascript"></script>

</head>

<body>

  <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('partials.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- <?php echo $__env->make('partials.category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  -->

  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
          <h2 class="mb-5 h3">Recent Jobs</h2>
          <!-- ---------------------------- display Jobs List ------------------------------------------------------>
          <div class="rounded border jobs-wrap">

            <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="job-item d-block d-md-flex align-items-center border-bottom fulltime">
              <!-- <div class="text-center text-md-left pl-3 thumb-post">
                <img src="external/images/gal_1.jpg" alt="Image" class="img-fluid ">
              </div> -->

              <!-- Carousel Picture Display -->
              <div class="col-md-4">


                <div id="carousel<?php echo e($job->id); ?>" class="carousel slide" data-interval="false">
                  <style>
                    .carousel-item-min img {
                      max-height: 180px;
                      width: 100%;
                      object-fit: scale-down;
                      text-align: center;
                    }

                    .carousel-control-prev-icon {
                      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
                    }

                    .carousel-control-next-icon {
                      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
                    }
                  </style>

                  <div class="carousel-inner">
                    <?php
                        $jobcode = str_replace('/', '_', $job->jobcode);
                        $fileList = glob('storage/project_reports/' . $jobcode . '/*.*');
                    ?>
                    <?php $__currentLoopData = $fileList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($loop->first): ?>
                            <div class="carousel-item carousel-item-min active">
                                <a href="<?php echo e(asset($file)); ?>" target="_blank">
                                    <img class="d-block w-100" src="<?php echo e(asset($file)); ?>" alt="First slide">
                                </a>
                            </div>
                        <?php else: ?>
                            <div class="carousel-item carousel-item-min">
                                <a href="<?php echo e(asset($file)); ?>" target="_blank">
                                    <img class="d-block w-100" src="<?php echo e(asset($file)); ?>" alt="Sec slide">
                                </a>
                            </div>
                            <a class="carousel-control-prev" href="#carousel<?php echo e($job->id); ?>" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel<?php echo e($job->id); ?>" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                  </div>
                </div>
              </div>

              

              <div class="job-details h-100">
                <div class="p-3 align-self-center">
                  <!--<span class="fas fa-building"> <?php echo e($job->jobcode); ?></span>
                    <h3><i class="fas fa-map-marker-alt"></i><?php echo e($job->projectname); ?></h3>-->

                  <div class="row d-flex justify-content-center justify-content-md-start">
                    <div class="mr-2 mb-1">
                      <a href="<?php echo e(route('jobs.show',[$job->id,$job->jobsize])); ?>">
                        &nbsp;<u><?php echo e($job->jobcode); ?></u>
                      </a>
                    </div>
                    <?php if($job->urgent == 1): ?>
                        <div class="mr-2 mb-1"><span class="text-danger p-1 rounded border border-danger">Urgent</span></div>
                    <?php endif; ?>
                    <?php if(empty(!$job->client)): ?>
                        <div title="ส่งธนาคาร" class="mr-2 mb-1"><span class="text-info p-1 rounded border border-info"><?php echo e($job->client); ?></span></div>
                    <?php endif; ?>
                    <?php if($job->jobsize != "" && $job->jobsize != "-"): ?>
                      <div class="mr-2 mb-1"><span class="text-info p-1 rounded border border-info"><?php echo e($job->jobsize); ?></span></div>
                    <?php endif; ?>
                    <!-- <?php if(empty(!$job->jobsize)): ?>              
                            <div class="mr-2 mb-1"><span class="text-info p-1 rounded border border-info"><?php echo e($job->jobsize); ?></span></div>
                    <?php endif; ?> -->
                    <?php if($job->easydiff == "DIFF"): ?>
                      <div class="mr-2 mb-1"><span class="text-danger p-1 rounded border border-danger">DIFF</span></div>
                    <?php endif; ?>
                    <!-- <div class="mr-2 mb-1"><span class="text-info p-1 rounded border border-info">Norm</span></div>
                    <div class="mr-2 mb-1"><span class="text-danger p-1 rounded border border-danger">Diff</span></div> -->
                    <?php if($job->withcd == 1): ?>
                      <div class="mr-2"><span class="fas fa-compact-disc text-primary"></span>&nbsp;CD</div>
                    <?php endif; ?>
                    
                    <div title="ขนาดพื้นที่" class="mr-2"><span class="fas fa-th-large text-primary"></span>&nbsp;<?php echo e($job->prop_size); ?> </div>
                    
                    
                </div>
                <div class="d-flex row justify-content-center justify-content-md-start">
                    <!-- <div title="ชื่อโครงการ" class="mr-2"><span class="fas fa-building text-primary"></span>&nbsp;<?php echo e($job->projectname); ?></div> -->
                    <div title="ที่อยู่" class="mr-2"><span class="fas fa-map-marker-alt text-primary"></span>&nbsp;<?php echo e($job->projectname); ?>&nbsp;<?php echo e($job->proplocation); ?></div>
                    
                </div>
                  <div class="d-flex row justify-content-center justify-content-md-start">
                    
                    <div class="mr-3"><span class="fas fa-money-bill-alt text-primary"></span>&nbsp;<?php echo e($job->marketvalue); ?> บาท</div>
                    <div class="mr-3"><span class="far fa-money-bill-alt text-primary"></span>&nbsp;20,000 ตร.ม.</div>
                    
                  </div>

                  


                  <div class="d-flex row justify-content-center justify-content-md-start">
                    <div class="calendarbox">
                      <span class="jobdatetype">รับงาน</span>
                      <div class="calendar">
                        <div class="dateicon">
                          <span class="vertical" id="dayofweek">MON</span>
                          <h1 id="dayCaption">28</h1>
                          <h2 id="monthCaption" class="color1">May</h2>
                          <div class="over"></div>
                        </div>
                      </div>
                    </div>
                    <div class="calendarbox">
                      <span class="jobdatetype">สำรวจ</span>
                      <div class="calendar">
                        <div class="dateicon">
                          <span class="vertical" id="dayofweek">MON</span>
                          <h1 id="dayCaption">28</h1>
                          <h2 id="monthCaption" class="color2">May</h2>
                          <div class="over"></div>
                        </div>
                      </div>
                    </div>
                    <div class="calendarbox">
                      <span class="jobdatetype">ส่ง LC</span>
                      <div class="calendar">
                        <div class="dateicon">
                          <span class="vertical" id="dayofweek">MON</span>
                          <h1 id="dayCaption">28</h1>
                          <h2 id="monthCaption" class="color3">May</h2>
                          <div class="over"></div>
                        </div>
                      </div>
                    </div>
                    <div class="calendarbox">
                      <span class="jobdatetype">Due</span>
                      <div class="calendar">
                        <div class="dateicon">
                          <span class="vertical" id="dayofweek">MON</span>
                          <h1 id="dayCaption">28</h1>
                          <h2 id="monthCaption" class="color4">May</h2>
                          <div class="over"></div>
                        </div>
                      </div>
                    </div>
                            
                  </div>

                    

                  <style>
                    .fa-icon {
                      padding-left: 1.25%;
                      font-size: 25px;
                    }

                    .fa-icon-inrow {
                      padding-left: 7%;
                      font-size: 25px;
                    }

                    .fa-icon-blue {
                      color: #2874A6;
                    }
                  </style>

                  <?php
                  $jobid = $job->id;
                  $jobcode = str_replace('/', '_', $job->jobcode);
                  $docList = preg_grep('#\.pdf$#', glob('storage/project_reports/' . $jobcode . '/**/*'), PREG_GREP_INVERT);
                  // print_r($docList);

                  //loop: find if folder is created
                  $searchword = array('receipt', 'ope', 'invoice');
                  foreach ($docList as $doc) {
                    foreach ($searchword as $search) {
                      if (strpos($doc, $search)) {
                        echo '<style>
                        #fa-' . $search . $jobid . '{
                            color: #47CF3C;
                        }
                        </style>';
                      }
                    }
                  }
                  ?>
                  
                  <div class="d-flex row justify-content-center justify-content-md-start">
                    
                    <div class="fa-icon fa-icon-blue"><span class="fas fa-file-pdf" data-toggle="collapse" data-target="#collapseViewDoc<?php echo e($job->id); ?>" aria-expanded="false" aria-controls="collapse" title="open file"></div>
                    <!-- <div class="fa-icon "><a href="<?php echo e(route('report.edit',[$job->id])); ?>"><span class="fas fa-book" title="To Report"> </a></div> -->
                    <!-- <div class="fa-icon "><span class="fas fa-folder-open" title="I am hovering over the text"></div> -->
                    <div class="fa-icon"><a onclick="popupCenter('testfn', 'myPop1',600,900);" href="javascript:void(0);"><span style="color: Gold;" class="fas fa-folder-open" title="open job folders"></a></div>
                    <div class="fa-icon "><a onclick="popupCenter('testfn', 'myPop1',600,900);" href="javascript:void(0);"><span style="color: Brown;" class="fas fa-tasks" title="I am hovering over the text"></a></div>
                    <div class="fa-icon-inrow"><span class="fas fa-file-contract" alt="ใบเสนอราคา" title="ใบเสนอราคา"></div>
                    <div class="fa-icon"><a href="<?php echo e(route('print-order.show',[$job->id])); ?>"><span class="far fa-paper-plane" alt="ใบสั่งงาน" title="ใบสั่งงาน" id="fa-invoice"></a></div>
                    <div class="fa-icon" id="fa-invoice<?php echo e($job->id); ?>"><a href="<?php echo e(route('print-invoice.show','1200')); ?>"><span class="fas fa-file-invoice" alt="ใบแจ้งหนี้" title="ใบแจ้งหนี้"></a></div> 
                    <div class="fa-icon" id="fa-receipt<?php echo e($job->id); ?>"><a href="<?php echo e(route('print-receipt.show','1200')); ?>"><span class="fas fa-file-invoice-dollar" alt="ใบเสร็จรับเงิน" title="ใบเสร็จรับเงิน"></a></div>
                    <div class="fa-icon-inrow" id="fa-ope<?php echo e($job->id); ?>"><a href="<?php echo e(route('print-receipt.show','1200')); ?>"><span class="fas fa-donate" alt="OPE" title="OPE"></a></div>
                    <div class="fa-icon fa-icon-blue"><span class="fas fa-file-upload" data-toggle="collapse" data-target="#collapseUpload<?php echo e($job->id); ?>" onclick="dropzone(<?php echo e($job->id); ?>)" aria-expanded="false" aria-controls="collapse" title="อัพโหลด file fa-icon-blue"></div>
                    
                  </div>

                  <div id="pdfCollapse<?php echo e($job->id); ?>">
                    <div class="collapse" id="collapseUpload<?php echo e($job->id); ?>" data-parent="#pdfCollapse<?php echo e($job->id); ?>">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                            <div class="container">
                              <div class="md-col-4">
                                <div class="card-body">
                                  <!-- <?php echo e($job->id); ?> -->
                                  <div class="btn-group btn-group-toggle d-flex row justify-content-center" id="uploadGroup" data-toggle="buttons">
                                    <label class="btn btn-secondary" onclick="uploadGroup(<?php echo e($job->id); ?>,'')">
                                      <input type="radio" name="options" value="" autocomplete="off">Image
                                    </label>
                                    <label class="btn btn-secondary" onclick="uploadGroup(<?php echo e($job->id); ?>,'report')">
                                      <input type="radio" name="options" value="report" autocomplete="off"> Report
                                    </label>
                                    <!-- <label class="btn btn-secondary" onclick="uploadGroup(<?php echo e($job->id); ?>,'invoice')">
                                      <input type="radio" name="options" value="invoice" autocomplete="off"> Invoice
                                    </label>
                                    <label class="btn btn-secondary" onclick="uploadGroup(<?php echo e($job->id); ?>,'receipt')">
                                      <input type="radio" name="options" value="receipt" autocomplete="off"> Receipt
                                    </label>
                                    <label class="btn btn-secondary" onclick="uploadGroup(<?php echo e($job->id); ?>,'ope')">
                                      <input type="radio" name="options" value="ope" autocomplete="off"> OPE
                                    </label> -->
                                  </div>

                                  <script>
                                    function uploadGroup(id, folderType) {
                                      console.log(folderType + '/' + id);
                                      $('#folderName' + id).val(folderType);
                                    }
                                  </script>

                                  <div class='content'>
                                    <form action="<?php echo e(route('jobs.pdf_dragdrop',$job->id)); ?>" class='dropzone' id="dropzone<?php echo e($job->id); ?>" method="POST" enctype="multipart/form-data">
                                      <?php echo csrf_field(); ?>
                                      <!-- <span id="folderName" name="folderName">end</span> -->
                                      <input type="hidden" id="folderName<?php echo e($job->id); ?>" name="folderName" value="" />
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="collapse" id="collapseViewDoc<?php echo e($job->id); ?>" data-parent="#pdfCollapse<?php echo e($job->id); ?>">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                            <div class="container">
                              <div class="md-col-4">
                                <div class="card-body">
                                  <?php
                                  $jobcode = str_replace('/', '_', $job->jobcode);
                                  // $docList = preg_grep('#\.pdf$#', glob('storage/project_reports/' . $jobcode . '/**/*'), PREG_GREP_INVERT);
                                  $docList = glob('storage/project_reports/' . $jobcode . '/**/*');
                                  ?>

                                  <?php $__currentLoopData = $docList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <?php
                                  $filename = basename($file);
                                  ?>
                                  <a href="<?php echo e(asset($file)); ?>" target="_blank"> <?php echo e($filename); ?></a>
                                  <br>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!--<div class="d-block d-lg-flex">
                      <div class="mr-3"><span class="icon-suitcase mr-1"></span><?php echo e($job->prop_type); ?></div>
                      <div class="mr-3"><span class="icon-room mr-1"></span>กรุงเทพมหานคร</div>
                      <div><span class="icon-money mr-1"></span>2,555,000 &mdash;4,000,000</div>
                    </div>-->
                </div>


              </div>
              <div class="job-category align-self-center">
                <!-- <div class="p-3">
                  <span class="text-info p-2 rounded border border-info">Completed</span>
                </div>
                <div class="progress progress-sm mb-5">
                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-70"></div>
                </div> -->
                <?php if($job->percentfinish == 100): ?>
                    <img src="<?php echo e($job->ValuerAvatar); ?>" alt="valuer" class="brround  avatar-md w-32">
                    <img src="<?php echo e($job->HeadAvatar); ?>" alt="headvaluer" class="brround  avatar-md w-32">
                    <br>
                    <span class="badge badge-pill badge-primary">  
                        
                        <?php echo e($job->percentfinish); ?>&nbsp;%&nbsp;<a href="javascript:void(0)" class="mr-3" title="" data-original-title="Normal" data-toggle="modal" data-target="#progressModal<?php echo e($job->id); ?>"><i class="fe fe-edit-2 text-dark fs-16"></i></a>
                    </span>
                <?php elseif($job->percentfinish >= 50 and $job->percentfinish < 100): ?>
                    <img src="<?php echo e($job->ValuerAvatar); ?>" alt="valuer" class="brround  avatar-md w-32">
                    <img src="<?php echo e($job->HeadAvatar); ?>" alt="headvaluer" class="brround  avatar-md w-32">
                    <br>
                    <span class="badge badge-pill badge-warning">
                        <?php echo e($job->percentfinish); ?>&nbsp;%&nbsp;<a href="javascript:void(0)" class="mr-3" title="" data-original-title="Normal" data-toggle="modal" data-target="#progressModal<?php echo e($job->id); ?>"><i class="fe fe-edit-2 text-dark fs-16"></i></a>
                    </span>
                <?php elseif($job->percentfinish == 0): ?>
                    <img src="<?php echo e($job->ValuerAvatar); ?>" alt="valuer" class="brround  avatar-md w-32">
                    <img src="<?php echo e($job->HeadAvatar); ?>" alt="headvaluer" class="brround  avatar-md w-32">
                    <br>
                    <span class="badge badge-pill badge-danger">
                        0&nbsp;&nbsp;%&nbsp;<a href="javascript:void(0)" class="mr-3" title="" data-original-title="Normal" data-toggle="modal" data-target="#progressModal<?php echo e($job->id); ?>"><i class="fe fe-edit-2 text-dark fs-16"></i></a>
                    </span>                
                <?php else: ?>
                    <img src="<?php echo e($job->ValuerAvatar); ?>" alt="valuer" class="brround  avatar-md w-32">
                    <img src="<?php echo e($job->HeadAvatar); ?>" alt="headvaluer" class="brround  avatar-md w-32">
                    <br>
                    <span class="badge badge-pill badge-danger">
                        <?php echo e($job->percentfinish); ?>&nbsp;%&nbsp;<a href="javascript:void(0)" class="mr-3" title="" data-original-title="Normal" data-toggle="modal" data-target="#progressModal<?php echo e($job->id); ?>"><i class="fe fe-edit-2 text-dark fs-16"></i></a>
                    </span>
                <?php endif; ?>
                    
              </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


          </div>
          <!-- --------------------------------- display Jobs List---------------------------------------- -->
          <div class="col-md-12 text-center mt-5">
            <a href="#" class="btn btn-primary rounded py-3 px-5"><span class="icon-plus-circle"></span> Show More Jobs</a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- <?php echo $__env->make('partials.testimonial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->

  <!-- <div class="site-blocks-cover overlay inner-page" style="background-image: url('external/images/hero_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
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
  </div> -->


  <!-- <?php echo $__env->make('partials.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
  <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!--Rang slider js-->
  <script src="../external2/plugins/ion.rangeSlider/ion.rangeSlider.js"></script>
  <script src="../external2/js/rangeslider.js"></script>


  <script>
    Dropzone.autoDiscover = false;

    function dropzone(clicked_id) {

      var dropzoneId = "#dropzone".concat(clicked_id);
      var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
      var myDropzone = new Dropzone(dropzoneId, {
        maxFilesize: 100, // 3 mb
        acceptedFiles: ".jpeg,.jpg,.png,.pdf",
      });
      myDropzone.on("sending", function(file, xhr, formData) {
        formData.append("_token", CSRF_TOKEN);
      });
    }
  </script>


  <script>
    var date = new Date("10/08/2020"); //Date Here
    var month = new Array();
    var weekday = new Array();

    month[0] = "Jan";
    month[1] = "Feb";
    month[2] = "Mar";
    month[3] = "Apr";
    month[4] = "May";
    month[5] = "Jun";
    month[6] = "Jul";
    month[7] = "Aug";
    month[8] = "Sep";
    month[9] = "Oct";
    month[10] = "Nov";
    month[11] = "Dec";

    weekday[0] = "SUN";
    weekday[1] = "MON";
    weekday[2] = "TUE";
    weekday[3] = "WED";
    weekday[4] = "THU";
    weekday[5] = "FRI";
    weekday[6] = "SAT";


    document.getElementById('dayCaption').innerHTML = date.getDate();
    document.getElementById('monthCaption').innerHTML = month[date.getMonth()];
    document.getElementById('dayofweek').innerHTML = weekday[date.getDay()];
  </script>

<SCRIPT>


	function popupCenter(url, title, w, h) {
		var left = (screen.width/2)-(w/2);
		var top = (screen.height/2)-(h/2);
		return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
	}

</SCRIPT>

</body>

</html><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/welcomedido.blade.php ENDPATH**/ ?>