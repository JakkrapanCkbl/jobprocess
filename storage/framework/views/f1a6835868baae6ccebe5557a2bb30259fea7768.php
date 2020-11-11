<?php $__env->startSection('content'); ?>
<div class="container">
    <!-- xxxxxxxxxxxxxxxxxx Peste code for test heare xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
      <div class="row" id="app">
          <div class="title" style="margin-top: 20px;">
                <h2>ทำเลที่ตั้งและสถานที่ใกล้เคียงในโครงการ</h2> 
          </div>
             
          <!-- Left Column -->
          <div class="col-lg-10">
            
           <!--<img src="<?php echo e(asset('external/images/img_5.jpg')); ?>" style="width: 100%;">-->
           xxxxx
           <div id="map"></div>

            <div class="title" style="margin-top: 20px;">
                <p>
                    <a href="https://maps.google.com/maps?q=loc:13.7525,100.494167&z=11" class="btn btn-primary popup-gmaps" style="width: 150px;">ภาพถ่ายทางอากาศ</a>
                    <a href="https://maps.google.com/maps?q=loc:13.7525,100.494167&z=11" class="btn btn-primary popup-gmaps" style="width: 150px;">Street View</a>
                    <a href="https://jvckst.com/OrangeLine/view_dwg_pdf.php?pdffile=./ORGL-DWG/SE/PDF/FromConsult/W-1-OR14-SE-0011-01-A.pdf" class="btn btn-primary popup-gmaps" style="width: 150px;">ขอเส้นทาง</a>

                    <a title="รูปแผนที่โครงการเดอะ พ้อยท์ พระตำหนัก" href="https://www.home.co.th/images/img_v/img_Directory/20191008-132411138-3554.jpg" data-lightbox="img-MAP">
                            <img src="https://www.home.co.th/images/img_v/img_Directory/20191008-132411138-3554.jpg" class="location-map-img-item" title="รูปแผนที่โครงการเดอะ พ้อยท์ พระตำหนัก" alt="รูปแผนที่โครงการเดอะ พ้อยท์ พระตำหนัก">
                            <div class="location-map-img"></div>
                        </a>




                    <form action="<?php echo e(route('testdb_insert')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                       
                        
                        <input type="submit" value="Import" class="btn btn-info" />
                    </form>
                </p>           
          </div>    

          </div>
          <!-- End Left Column -->





          <!-- Right Column -->
          <div class="col-md-2 p-4 site-section bg-light">         
                <div class="company-logo blank-logo text-center text-md-left pl-3 popup-gallery">
                    <a href="<?php echo e(asset('external/images/gal_1.jpg')); ?>" title="The Cleaner"><img src="<?php echo e(asset('external/images/gal_1.jpg')); ?>" width="150" height="80" class="rounded"></a>
                    <a href="<?php echo e(asset('external/images/gal_2.jpg')); ?>" title="The Cleaner"><img src="<?php echo e(asset('external/images/gal_2.jpg')); ?>" width="150" height="80" class="rounded"></a>
                    <a href="<?php echo e(asset('external/images/gal_3.jpg')); ?>" title="The Cleaner"><img src="<?php echo e(asset('external/images/gal_3.jpg')); ?>" width="150" height="80" class="rounded"></a>
                    <a href="<?php echo e(asset('external/images/gal_4.jpg')); ?>" title="The Cleaner"><img src="<?php echo e(asset('external/images/gal_4.jpg')); ?>" width="150" height="80" class="rounded"></a>
                    <a href="<?php echo e(asset('external/images/gal_5.jpg')); ?>" title="The Cleaner"><img src="<?php echo e(asset('external/images/gal_5.jpg')); ?>" width="150" height="80" class="rounded"></a>
                    <a href="<?php echo e(asset('external/images/gal_1.jpg')); ?>" title="The Cleaner"><img src="<?php echo e(asset('external/images/gal_1.jpg')); ?>" width="150" height="80" class="rounded"></a>
                </div>
              </p> 
              
              
              <a class="popup-gmaps" href="https://maps.google.com/maps?q=loc:13.7525,100.494167&z=11">Open Google Map</a>
             
              
          </div>  
          <!-- End Right Column -->                  
      <div>   
         
    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/demo.blade.php ENDPATH**/ ?>