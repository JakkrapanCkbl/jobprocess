<?php $__env->startSection('content'); ?>



<div class="container">
    <div class="row">
    <form action="<?php echo e(route('alljobs')); ?>" method="GET">
        <!-- for get result -->
    </form>




    <!-- <div class="col-md-12">
        <div class="rounded border jobs-wrap">
            <?php if(count($jobs)>0): ?>
                <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  <a href="<?php echo e(route('jobs.show',[$job->id,$job->jobsize])); ?>" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime;">
                    <div class="company-logo blank-logo text-center text-md-left pl-3">
                      <img src="" alt="Image" class="img-fluid mx-auto">
                    </div>
                    <div class="job-details h-100">
                      <div class="p-3 align-self-center">
                        <h3><?php echo e($job->jobcode); ?> : <?php echo e($job->projectname); ?></h3>
                        <div class="d-block d-lg-flex">
                          <div class="mr-3"><span class="icon-suitcase mr-1"></span> <?php echo e($job->jobcode); ?></div>
                          <div class="mr-3"><span class="icon-room mr-1"></span> <?php echo e(str_limit($job->projectname,10)); ?></div>
                          <div><span class="icon-money mr-1"></span><?php echo e($job->jobcode); ?></div>
                          <div>&nbsp;<span class="fa fa-clock-o mr-1"></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="job-category align-self-center">
                      
                      <div class="p-3">
                        <span class="text-info p-2 rounded border border-info">Completed</span>
                      </div>
                      

                    </div>  
                  </a>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php else: ?>
                No jobs found
              <?php endif; ?>


            </div>
        </div>

        <?php echo e($jobs->appends(Illuminate\Support\Facades\Input::except('page'))->links()); ?>


    </div> -->

     <!-- ---------------------------- display Jobs List ------------------------------------------------------>
     <div class="col-md-4 mt-3">
        <p>result = <?php echo e($jobs->total()); ?></p>
     </div>
     
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
                <?php if($job->projectname == $job->proplocation): ?>
                    <?php if($job->projectname != ""): ?>
                        <div title="ที่อยู่" class="mr-2"><span class="fas fa-map-marker-alt text-primary"></span>&nbsp;<?php echo e($job->projectname); ?></div>
                    <?php else: ?>
                        <div title="ที่อยู่" class="mr-2"><span class="fas fa-map-marker-alt text-primary"></span>&nbsp;<?php echo e($job->proplocation); ?></div>
                    <?php endif; ?>
                    
                <?php else: ?>
                    <div title="ที่อยู่" class="mr-2"><span class="fas fa-map-marker-alt text-primary"></span>&nbsp;<?php echo e($job->projectname); ?>&nbsp;<?php echo e($job->proplocation); ?></div>
                <?php endif; ?>
                
                
            </div>
            <div class="d-flex row justify-content-center justify-content-md-start">
                
                <div class="mr-3"><span class="fas fa-money-bill-alt text-primary"></span>&nbsp;<?php echo e(number_format($job->marketvalue)); ?> บาท</div>
                <div class="mr-3"><span class="far fa-money-bill-alt text-primary"></span>&nbsp;<?php echo e(number_format($job->assessmentvalue)); ?> บาท / ตร.ม.</div>
                
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
            
            <!-- <div class="d-flex row justify-content-center justify-content-md-start"> -->
                
                <!-- <div class="fa-icon fa-icon-blue"><span class="fas fa-file-pdf" data-toggle="collapse" data-target="#collapseViewDoc<?php echo e($job->id); ?>" aria-expanded="false" aria-controls="collapse" title="open file"></div> -->
                <!-- <div class="fa-icon "><a href="<?php echo e(route('report.edit',[$job->id])); ?>"><span class="fas fa-book" title="To Report"> </a></div> -->
                <!-- <div class="fa-icon "><span class="fas fa-folder-open" title="I am hovering over the text"></div> -->
                <!-- <div class="fa-icon"><a onclick="popupCenter('../testdc3', 'myPop1',600,900);" href="javascript:void(0);"><span style="color: Gold;" class="fas fa-folder-open" title="open job folders"></a></div> -->
                <!-- <div class="fa-icon "><a onclick="popupCenter('file:///C:\test\', 'myPop1',600,900);" href="javascript:void(0);"><span style="color: Brown;" class="fas fa-tasks" title="I am hovering over the text"></a></div> -->
                <!-- <div class="fa-icon-inrow"><span class="fas fa-file-contract" alt="ใบเสนอราคา" title="ใบเสนอราคา"></div> -->
                <!-- <div class="fa-icon"><a href="<?php echo e(route('print-order.show',[$job->id])); ?>"><span class="far fa-paper-plane" alt="ใบสั่งงาน" title="ใบสั่งงาน" id="fa-invoice"></a></div> -->
                <!-- <div class="fa-icon" id="fa-invoice<?php echo e($job->id); ?>"><a href="<?php echo e(route('print-invoice.show','1200')); ?>"><span class="fas fa-file-invoice" alt="ใบแจ้งหนี้" title="ใบแจ้งหนี้"></a></div>  -->
                <!-- <div class="fa-icon" id="fa-receipt<?php echo e($job->id); ?>"><a href="<?php echo e(route('print-receipt.show','1200')); ?>"><span class="fas fa-file-invoice-dollar" alt="ใบเสร็จรับเงิน" title="ใบเสร็จรับเงิน"></a></div> -->
                <!-- <div class="fa-icon-inrow" id="fa-ope<?php echo e($job->id); ?>"><a href="<?php echo e(route('print-receipt.show','1200')); ?>"><span class="fas fa-donate" alt="OPE" title="OPE"></a></div> -->
                <!-- <div class="fa-icon fa-icon-blue"><span class="fas fa-file-upload" data-toggle="collapse" data-target="#collapseUpload<?php echo e($job->id); ?>" onclick="dropzone(<?php echo e($job->id); ?>)" aria-expanded="false" aria-controls="collapse" title="อัพโหลด file fa-icon-blue"></div> -->
                
            <!-- </div> -->

            <div class="col-md-12 row justify-content-center justify-content-md-start">
                <div class="fa-icon"><a onclick="popupCenter('testdc3', 'myPop1',600,900);" href="javascript:void(0);"><span style="color: Gold;" class="fas fa-folder-open" title="open job folders"></a></div>
                <div class="fa-icon "><a onclick="popupCenter('file:///C:\test\', 'myPop1',600,900);" href="javascript:void(0);"><span style="color: Brown;" class="fas fa-tasks" title="I am hovering over the text"></a></div>
                <div class="col-md-1"></div>
                <div class="fa-icon-inrow"><span class="fas fa-file-contract" alt="ใบเสนอราคา" title="ใบเสนอราคา"></div>
                <div class="fa-icon"><a href="<?php echo e(route('print-order.show',[$job->id])); ?>"><span class="far fa-paper-plane" alt="ใบสั่งงาน" title="ใบสั่งงาน" id="fa-invoice"></a></div>
                <div class="fa-icon" id="fa-invoice<?php echo e($job->id); ?>"><a href="<?php echo e(route('print-invoice.show','1200')); ?>"><span class="fas fa-file-invoice" alt="ใบแจ้งหนี้" title="ใบแจ้งหนี้"></a></div> 
                <div class="fa-icon" id="fa-receipt<?php echo e($job->id); ?>"><a href="<?php echo e(route('print-receipt.show','1200')); ?>"><span class="fas fa-file-invoice-dollar" alt="ใบเสร็จรับเงิน" title="ใบเสร็จรับเงิน"></a></div>
                <div class="col-md-1"></div>
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
            
                <?php if($job->percentfinish == 100): ?>
                    <img src="<?php echo e(asset($job->ValuerAvatar)); ?>" alt="valuer" class="brround  avatar-md w-32">
                    <img src="<?php echo e(asset($job->HeadAvatar)); ?>" alt="headvaluer" class="brround  avatar-md w-32">
                    <br>
                    <span class="badge badge-pill badge-primary">  
                        
                        <?php echo e($job->percentfinish); ?>&nbsp;%&nbsp;<a href="javascript:void(0)" class="mr-3" title="" data-original-title="Normal" data-toggle="modal" data-target="#progressModal<?php echo e($job->id); ?>"><i class="fe fe-edit-2 text-dark fs-16"></i></a>
                    </span>
                <?php elseif($job->percentfinish >= 50 and $job->percentfinish < 100): ?>
                    <img src="<?php echo e(asset($job->ValuerAvatar)); ?>" alt="valuer" class="brround  avatar-md w-32">
                    <img src="<?php echo e(asset($job->HeadAvatar)); ?>" alt="headvaluer" class="brround  avatar-md w-32">
                    <br>
                    <span class="badge badge-pill badge-warning">
                        <?php echo e($job->percentfinish); ?>&nbsp;%&nbsp;<a href="javascript:void(0)" class="mr-3" title="" data-original-title="Normal" data-toggle="modal" data-target="#progressModal<?php echo e($job->id); ?>"><i class="fe fe-edit-2 text-dark fs-16"></i></a>
                    </span>
                <?php elseif($job->percentfinish == 0): ?>
                    <img src="<?php echo e(asset($job->ValuerAvatar)); ?>" alt="valuer" class="brround  avatar-md w-32">
                    <img src="<?php echo e(asset($job->HeadAvatar)); ?>" alt="headvaluer" class="brround  avatar-md w-32">
                    <br>
                    <span class="badge badge-pill badge-danger">
                        0&nbsp;&nbsp;%&nbsp;<a href="javascript:void(0)" class="mr-3" title="" data-original-title="Normal" data-toggle="modal" data-target="#progressModal<?php echo e($job->id); ?>"><i class="fe fe-edit-2 text-dark fs-16"></i></a>
                    </span>                
                <?php else: ?>
                    <img src="<?php echo e(asset($job->ValuerAvatar)); ?>" alt="valuer" class="brround  avatar-md w-32">
                    <img src="<?php echo e(asset($job->HeadAvatar)); ?>" alt="headvaluer" class="brround  avatar-md w-32">
                    <br>
                    <span class="badge badge-pill badge-danger">
                        <?php echo e($job->percentfinish); ?>&nbsp;%&nbsp;<a href="javascript:void(0)" class="mr-3" title="" data-original-title="Normal" data-toggle="modal" data-target="#progressModal<?php echo e($job->id); ?>"><i class="fe fe-edit-2 text-dark fs-16"></i></a>
                    </span>
                <?php endif; ?>
                    
            </div>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
        <?php echo e($jobs->links()); ?>


    </div>
<!-- --------------------------------- display Jobs List---------------------------------------- -->

</div>

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


<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/jobs/alljobs.blade.php ENDPATH**/ ?>