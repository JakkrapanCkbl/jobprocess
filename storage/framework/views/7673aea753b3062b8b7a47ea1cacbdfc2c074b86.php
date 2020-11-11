<?php $__env->startSection('content'); ?>
   <div class="album text-muted">
     <div class="container">      
      <?php if(Session::has('message')): ?>
        <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
      <?php endif; ?>
      <?php if(Session::has('err_message')): ?>
        <div class="alert alert-danger"><?php echo e(Session::get('err_message')); ?></div>
      <?php endif; ?>
      <?php if(isset($errors)&&count($errors)>0): ?>
        <div class="alert alert-danger">
          <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      <?php endif; ?>
      <div class="row" id="app">
          <div class="title" style="margin-top: 20px;">
                <h2><?php echo e($job->jobcode); ?></h2> 
          </div>
          <img src="<?php echo e(asset('external/images/img_5.jpg')); ?>" style="width: 100%;">
          

        
          <!--แสดงเมนู ย่อย--->
          <div class=" col-lg-12 mt-4 mb-4">
            <div class="navbar">
              <a href="#home">รายละเอียด</a>
              <a href="#news">แปลนชั้น</a>
              <a href="#contact">แปลนห้อง</a>
              <a href="#home">ทำเลที่ตั้ง</a>
              <a href="#news">เปรียบเทียบ</a>
              <a href="#contact">โบรชัวร์</a>
              <a href="#contact">Price List</a>
              <a href="#home">อช. 10+13</a>
              <a href="#news">ประเมินราชการ</a>
              <a href="#contact">ทรัพย์สินที่ประเมิน</a>
              <a href="#contact">Data Analytic</a>
            </div>
          </div>
          
            
             
          <!-- Left Column -->
          <div class="col-lg-8">
             <div class="row">
              <div class="col-sm-4 mb-0 font-weight-bold">ชื่อโครงการ</div>
              <div class="col-sm-8 mb-2"><?php echo e($job->projectname); ?></div>
              </div> 
              <div class="row">
                <div class="col-sm-4 mb-0 font-weight-bold">ที่ตั้ง</div>
                <div class="col-sm-8 mb-2"><?php echo e($job->proplocation); ?>x</div>
              </div> 
              <div class="row">
                <div class="col-sm-4 mb-0 font-weight-bold"></div>
                <div class="col-sm-8 mb-2">
                  ห่างจากถนนสุขุมวิท ประมาณ 1.30 กิโลเมตรx <br>
                  ห่างจากรถไฟฟ้าสถานีพร้อมพงษ์ ประมาณ 1.75 กิโลเมตรx <br>
                </div>
              </div><div class="row">
                <div class="col-sm-4 mb-0 font-weight-bold">ค่าพิกัด GPS</div>
                <div class="col-sm-8 mb-2"><a class="popup-gmaps" href="https://maps.google.com/maps?q=loc:<?php echo e($job->lat); ?>,<?php echo e($job->lng); ?>&z=18"><?php echo e($job->lat); ?>, <?php echo e($job->lng); ?>x</a></div>
              </div> 
              <div class="row">
                <div class="col-sm-4 mb-0 font-weight-bold">รูปแบบโครงการ</div>
                <div class="col-sm-8 mb-2"><?php echo e($job->project_layout); ?>คอนโดมิเนียม สูง 7 ชั้น 1 อาคารx</div>
              </div>
              <div class="row">
                <div class="col-sm-4 mb-0 font-weight-bold">เนื้อที่โครงการ</div>
                <div class="col-sm-8 mb-2"><?php echo e($job->project_layout); ?>ประมาณ 1-0-18.0 ไร่x</div>
              </div>
              <div class="row">
                <div class="col-sm-4 mb-0 font-weight-bold">จำนวนห้องชุดที่ขาย</div>
                <div class="col-sm-8 mb-2"><?php echo e($job->project_layout); ?>76 ยูนิตx</div>
              </div>
              <div class="row">
                <div class="col-sm-4 mb-0 font-weight-bold">ยอดขายปัจจุบัน</div>
                <div class="col-sm-8 mb-2"><?php echo e($job->project_layout); ?>ประมาณ 70%x</div>
              </div>
              <div class="row">
                <div class="col-sm-4 mb-0 font-weight-bold">ราคาเริ่มต้น (On Web)</div>
                <div class="col-sm-8 mb-2"><?php echo e($job->project_layout); ?>6,000,000 ขึ้นไปx</div>
              </div>
              <div class="row">
                <div class="col-sm-4 mb-0 font-weight-bold">พื้นที่ใข้สอย</div>
                <div class="col-sm-8 mb-2">
                  1 นอน 1 น้ำ | พื้นที่ห้องชุด (ตรม.) : 38.00 | ราคาขายโครงการ  : 163,158 บาท/ตรม. |  ราคาขายโครงการ  : 6,200,000 บาท/ยูนิตx<br><br>
                  2 นอน 2 น้ำ | พื้นที่ห้องชุด (ตรม.) : 60.00 | ราคาขายโครงการ  : 166,667 บาท/ตรม. |  ราคาขายโครงการ  : 10,000,000 บาท/ยูนิตx
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 mb-0 font-weight-bold">สิ่งอำนวยความสะดวกภายในโครงการ</div>
                <div class="col-sm-8 mb-2">สระว่ายน้ำ ฟิตเนส สวนหย่อม ลิฟท์ ที่จอดรถ และระบบรักษาความปลอดภัยx</div>
              </div>
               <div class="row">
                <div class="col-sm-4 mb-0 font-weight-bold">ผู้พัฒนาโครงการ</div>
                <div class="col-sm-8 mb-2">บริษัท อนันดา ดีเวลลอปเม้นท์ จำกัด (มหาชน)x</div>
              </div>
               <div class="row">
                <div class="col-sm-4 mb-0 font-weight-bold">เริ่มเปิดโครงการ</div>
                <div class="col-sm-8 mb-2">ธันวาคม 2560x</div>
              </div>
               <div class="row">
                <div class="col-sm-4 mb-0 font-weight-bold">ความคืบหน้าโครงการ</div>
                <div class="col-sm-8 mb-2">ก่อสร้างแล้วเสร็จ 100%x</div>
              </div>              
               <div class="row">
                <div class="col-sm-4 mb-0 font-weight-bold">วันที่ (Modified Date)</div>
                <div class="col-sm-8 mb-2">ธันวาคม 2562x</div>
              </div>
               <div class="row">
                <div class="col-sm-4 mb-0 font-weight-bold">แหล่งช้อมูล</div>
                <div class="col-sm-8 mb-2">ผู้ติดต่อ คุณเพชร (สำนักงานขายโครงการ) โทรศัพท์ 095-371-6873, 02-316-2222x</div>
              </div>
          </div>

          <!-- Right Column -->
          <div class="col-md-4 p-4 site-section bg-light">         
                <div class="company-logo blank-logo text-center text-md-left pl-3 popup-gallery">
                    <a href="<?php echo e(asset('external/images/gal_1.jpg')); ?>" title="The Cleaner"><img src="<?php echo e(asset('external/images/gal_1.jpg')); ?>" width="150" height="80" class="rounded"></a>
                    <a href="<?php echo e(asset('external/images/gal_2.jpg')); ?>" title="The Cleaner"><img src="<?php echo e(asset('external/images/gal_2.jpg')); ?>" width="150" height="80" class="rounded"></a>
                    <a href="<?php echo e(asset('external/images/gal_3.jpg')); ?>" title="The Cleaner"><img src="<?php echo e(asset('external/images/gal_3.jpg')); ?>" width="150" height="80" class="rounded"></a>
                    <a href="<?php echo e(asset('external/images/gal_4.jpg')); ?>" title="The Cleaner"><img src="<?php echo e(asset('external/images/gal_4.jpg')); ?>" width="150" height="80" class="rounded"></a>
                    <a href="<?php echo e(asset('external/images/gal_6.jpg')); ?>" title="The Cleaner"><img src="<?php echo e(asset('external/images/gal_6.jpg')); ?>" width="150" height="80" class="rounded"></a>
                    <a href="<?php echo e(asset('external/images/gal_7.jpg')); ?>" title="The Cleaner"><img src="<?php echo e(asset('external/images/gal_7.jpg')); ?>" width="150" height="80" class="rounded"></a>
                </div>
                
              </p> 
              
                          
              <p><a href="#" class="btn btn-warning" style="width: 100%;">Visit Official Page</a></p>
              <p>
                <?php if(Auth::check()&&Auth::user()->user_type=='employee'): ?>                 
                    <!--     
                    employee login                
                    <apply-component :jobid=<?php echo e($job->id); ?>></apply-component>
                    <center><span style="color: #000;">You applied this job</span></center>
                    -->               
                <?php else: ?>                  
                  <!--Please login to apply this job-->
                <?php endif; ?>
              </p>  
          </div>  

          

          <!-- Modal ยังไม่ได้ใช้ -->
          <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Send job to your friend</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>      
                <form action="#" method="POST"><?php echo csrf_field(); ?>

                <div class="modal-body">
                  <input type="hidden" name="job_id" value="<?php echo e($job->id); ?>">
                  <input type="hidden" name="job_jobcode" value="<?php echo e($job->jobcode); ?>">

                  <div class="form-goup">
                    <label>Your name * </label>
                    <input type="text" name="your_name" class="form-control" required="">
                  </div>
                  <div class="form-goup">
                    <label>Your email *</label>
                    <input type="email" name="your_email" class="form-control" required="">
                  </div>
                  <div class="form-goup">
                    <label>Person name *</label>
                    <input type="text" name="friend_name" class="form-control" required="">
                  </div>
                  <div class="form-goup">
                    <label>Person email *</label>
                    <input type="email" name="friend_email" class="form-control" required="">
                  </div>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Mail this job</button>
                </div>
              </form>
              </div>
            </div>
          </div>
          
      <div>  
      <br>
      <br>
      <br>

     </div>
   </div>

 </div>
   </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/jobs/show.blade.php ENDPATH**/ ?>