<?php $__env->startSection('content'); ?>
<div class="container">
   
        <button class="tablink" onclick="openPage('Home', this, 'royalblue')" id="defaultOpen">รายละเอียดโครงการ</button>
        <button class="tablink" onclick="openPage('News', this, 'royalblue')" >แผนที่</button>
        <button class="tablink" onclick="openPage('Contact', this, 'royalblue')">Photo Gallery</button>
        <button class="tablink" onclick="openPage('About', this, 'royalblue')">แปลนชั้น</button>
        <button class="tablink" onclick="openPage('Tab5', this, 'royalblue')">แปลนห้อง</button>
        <button class="tablink" onclick="openPage('Tab6', this, 'royalblue')">Brochure</button>
        <button class="tablink" onclick="openPage('Tab7', this, 'royalblue')">Data Analytics Prices List</button>
        <button class="tablink" onclick="openPage('Tab8', this, 'royalblue')">ห้องชุดที่ประเมิน</button>
        <button class="tablink" onclick="openPage('Tab9', this, 'royalblue')">ข้อมูลตลาด</button>
        <button class="tablink" onclick="openPage('Tab10', this, 'royalblue')">Web Site</button>
        <button class="tablink" onclick="openPage('Tab11', this, 'royalblue')">Review โครงการ</button>
        <button class="tablink" onclick="openPage('Tab12', this, 'royalblue')">อื่นๆ</button>

            <div id="Home" class="tabcontent">
                <br>
                <p>เลขที่รายงาน : <?php echo e($job->jobcode); ?> (ID: <?php echo e($job->reportcode); ?>)</p>
                <p>ประเภททรัพย์สิน : <?php echo e($job->prop_type); ?></p>
                <p>ลูกค้า : <?php echo e($job->client); ?></p>
                <p>ลูกค้าราย : <?php echo e($job->customer); ?></p>
                <p>ชื่อโครงการ/ที่ตั้ง : <?php echo e($job->projectname); ?></p>
                <p>ลักษณะโครงการ : อาคารสูง 8 ชั้น 2 อาคาร</p>   
                <p>พื้นที่โครงการ : <?php echo e($job->prop_size); ?></p>             
                <p>จำนวนยูนิต : 279 </p>
                <p>พื้นที่จอดรถ : 43% </p>
                  
                        
            </div>
            <!-- 2 -->
            <div id="News" class="tabcontent">
                <br>
                <div id="map"></div>
                <ul id="geoData">
                    <!-- <li>Latitude: <span id="lat-span"></span></li>
                    <li>Longitude: <span id="lon-span"></span></li> -->
                </ul>
            </div>
            <!-- 3 -->   

            <div id="Contact" class="tabcontent" align="Center">
              <!--
                <a onclick="popupCenter('/storage/uploads/<?php echo e($job->id); ?>/1.jpg',1000,1200);" href="javascript:void(0);">                   
                        <img src="/storage/uploads/<?php echo e($job->id); ?>/1.jpg" class="img-thubnail" style="width:240px;height:150px;border:2px solid red;">
                </a>
                <a onclick="popupCenter('/storage/uploads/<?php echo e($job->id); ?>/2.jpg',1000,1200);" href="javascript:void(0);">                   
                        <img src="/storage/uploads/<?php echo e($job->id); ?>/2.jpg" class="img-thubnail" style="width:240px;height:150px;border:2px solid red;">
                </a>        
                <a onclick="popupCenter('/storage/uploads/<?php echo e($job->id); ?>/3.jpg',1000,1200);" href="javascript:void(0);">                   
                        <img src="/storage/uploads/<?php echo e($job->id); ?>/3.jpg" class="img-thubnail" style="width:240px;height:150px;border:2px solid red;">
                </a>
                <a onclick="popupCenter('/storage/uploads/<?php echo e($job->id); ?>/4.jpg',1000,1200);" href="javascript:void(0);">                   
                        <img src="/storage/uploads/<?php echo e($job->id); ?>/4.jpg" class="img-thubnail" style="width:240px;height:150px;border:2px solid red;">
                </a>
               
                <a onclick="popupCenter('/storage/uploads/<?php echo e($job->id); ?>/5.jpg',1000,1200);" href="javascript:void(0);">                   
                        <img src="/storage/uploads/<?php echo e($job->id); ?>/5.jpg" class="img-thubnail" style="width:240px;height:150px;border:2px solid red;">
                </a>
                <a onclick="popupCenter('/storage/uploads/<?php echo e($job->id); ?>/6.jpg',1000,1200);" href="javascript:void(0);">                   
                        <img src="/storage/uploads/<?php echo e($job->id); ?>/6.jpg" class="img-thubnail" style="width:240px;height:150px;border:2px solid red;">
                </a>        
                <a onclick="popupCenter('/storage/uploads/<?php echo e($job->id); ?>/7.jpg',1000,1200);" href="javascript:void(0);">                   
                        <img src="/storage/uploads/<?php echo e($job->id); ?>/7.jpg" class="img-thubnail" style="width:240px;height:150px;border:2px solid red;">
                </a>
                <a onclick="popupCenter('/storage/uploads/<?php echo e($job->id); ?>/8.jpg',1000,1200);" href="javascript:void(0);">                   
                        <img src="/storage/uploads/<?php echo e($job->id); ?>/8.jpg" class="img-thubnail" style="width:240px;height:150px;border:2px solid red;">
                </a>
               -->
                <a onclick="popupCenter('/storage/uploads/1.jpg',1000,1200);" href="javascript:void(0);">                   
                        <img src="/storage/uploads/1.jpg" class="img-thubnail" style="width:240px;height:150px;border:2px solid red;">
                </a>
                <a onclick="popupCenter('/storage/uploads/2.jpg',1000,1200);" href="javascript:void(0);">                   
                        <img src="/storage/uploads/2.jpg" class="img-thubnail" style="width:240px;height:150px;border:2px solid red;">
                </a>
                <a onclick="popupCenter('/storage/uploads/3.jpg',1000,1200);" href="javascript:void(0);">                   
                        <img src="/storage/uploads/3.jpg" class="img-thubnail" style="width:240px;height:150px;border:2px solid red;">
                </a>
                <a onclick="popupCenter('/storage/uploads/4.jpg',1000,1200);" href="javascript:void(0);">                   
                        <img src="/storage/uploads/4.jpg" class="img-thubnail" style="width:240px;height:150px;border:2px solid red;">
                </a>
                <a onclick="popupCenter('/storage/uploads/5.jpg',1000,1200);" href="javascript:void(0);">                   
                        <img src="/storage/uploads/5.jpg" class="img-thubnail" style="width:240px;height:150px;border:2px solid red;">
                </a>
                <a onclick="popupCenter('/storage/uploads/6.jpg',1000,1200);" href="javascript:void(0);">                   
                        <img src="/storage/uploads/6.jpg" class="img-thubnail" style="width:240px;height:150px;border:2px solid red;">
                </a>
                <a onclick="popupCenter('/storage/uploads/7.jpg',1000,1200);" href="javascript:void(0);">                   
                        <img src="/storage/uploads/7.jpg" class="img-thubnail" style="width:240px;height:150px;border:2px solid red;">
                </a>
                <a onclick="popupCenter('/storage/uploads/8.jpg',1000,1200);" href="javascript:void(0);">                   
                        <img src="/storage/uploads/8.jpg" class="img-thubnail" style="width:240px;height:150px;border:2px solid red;">
                </a>
                
            </div>

            <!-- 4 -->
            <div id="About" class="tabcontent">
                <a onclick="popupCenter('/storage/uploads/PL1.jpg',1000,1200);" href="javascript:void(0);">                   
                        <img src="/storage/uploads/PL1.jpg" class="img-thubnail" style="width:240px;height:150px;border:2px solid red;">
                </a>
                 <a onclick="popupCenter('/storage/uploads/PL2.jpg',1000,1200);" href="javascript:void(0);">                   
                        <img src="/storage/uploads/PL2.jpg" class="img-thubnail" style="width:240px;height:150px;border:2px solid red;">
                </a>
                 <a onclick="popupCenter('/storage/uploads/PL3.jpg',1000,1200);" href="javascript:void(0);">                   
                        <img src="/storage/uploads/PL3.jpg" class="img-thubnail" style="width:240px;height:150px;border:2px solid red;">
                </a>
            </div>


             <div id="Tab5" class="tabcontent">
                <a onclick="popupCenter('/storage/uploads/PR1.jpg',1000,1200);" href="javascript:void(0);">                   
                        <img src="/storage/uploads/PR1.jpg" class="img-thubnail" style="width:240px;height:150px;border:2px solid red;">
                </a>
                 <a onclick="popupCenter('/storage/uploads/PR2.jpg',1000,1200);" href="javascript:void(0);">                   
                        <img src="/storage/uploads/PR2.jpg" class="img-thubnail" style="width:240px;height:150px;border:2px solid red;">
                </a>
                <a onclick="popupCenter('/storage/uploads/PR3.jpg',1000,1200);" href="javascript:void(0);">                   
                        <img src="/storage/uploads/PR3.jpg" class="img-thubnail" style="width:240px;height:150px;border:2px solid red;">
                </a>
                 <a onclick="popupCenter('/storage/uploads/PR4.jpg',1000,1200);" href="javascript:void(0);">                   
                        <img src="/storage/uploads/PR4.jpg" class="img-thubnail" style="width:240px;height:150px;border:2px solid red;">
                </a>
            </div>

            <div id="Tab12" class="tabcontent">
              <br>
              <p>Progress : <?php echo e($job->percentfinish); ?> % </p>
              <p>วันที่เริ่มงาน : <?php echo e($job->startdate); ?></p>
              <p>วันที่สำรวจ : <?php echo e($job->inspectiondate); ?></p>
              <p>กำหนดส่งภายใน LC : <?php echo e($job->lcduedate); ?></p>
              <p>กำหนดส่งลูกค้า : <?php echo e($job->clientduedate); ?></p>
            </div>



    
    <a href="#" onclick="close_window();return false;">close</a>

    <script type="text/javascript">
        function close_window() {
            if (confirm("Close Window?")) {
                close();
            }
        }

        function openPage(pageName,elmnt,color) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablink");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
          }
          document.getElementById(pageName).style.display = "block";
          elmnt.style.backgroundColor = color;
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();

        //-------------Map-------------

        function initMap() {
            var myLatLng = {lat: <?php echo e($job->lat); ?>, lng: <?php echo e($job->lng); ?>};
            var map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 13
            });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!',
          draggable: true
          });

        google.maps.event.addListener(marker, 'dragend', function(marker) {
            var latLng = marker.latLng;
            document.getElementById('lat-span').innerHTML = latLng.lat();
            document.getElementById('lon-span').innerHTML = latLng.lng();
            });
        }

        //-----------End Map-----------

        function popupCenter(url, title, w, h) {
            var left = (screen.width/2)-(w/2);
            var top = (screen.height/2)-(h/2);
            return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
        }


    </script>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap" async defer></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-LCgylkipdKz1GUrOY1-8eZe651iQJzw&callback=initMap"async defer></script>  -->
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgJVpOlm9ZEZ6lXSOBdEJqMkegibFp1OM&callback=initMap"async defer></script> -->


</div>
<?php $__env->stopSection(); ?>


<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 14px;
  width: 16.66%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 10px 50px;
  height: 100%;
}

#Home {background-color: royalblue;}
#News {background-color: royalblue;}
#Contact {background-color: royalblue;}
#About {background-color: royalblue;}
#Tab5 {background-color: royalblue;}
#Tab6 {background-color: royalblue;}
#Tab7 {background-color: royalblue;}
#Tab8 {background-color: royalblue;}
#Tab9 {background-color: royalblue;}
#Tab10 {background-color: royalblue;}
#Tab11 {background-color: royalblue;}
#Tab12 {background-color: royalblue;}

#map {
    width: 100%;
    height: 80%;
}




</style>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/jobs/show2.blade.php ENDPATH**/ ?>