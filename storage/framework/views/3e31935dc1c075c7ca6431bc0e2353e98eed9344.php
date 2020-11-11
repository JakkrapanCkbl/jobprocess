<!DOCTYPE html>
<html lang="th">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <h2 align="center">รหัสงาน : <?php echo e($job->jobcode); ?>| ชื่อโครงการ : <?php echo e($job->projectname); ?></h2>
   <p>
         <h4>แสดงรายละเอียด : <?php echo e($job->proplocation); ?></h4>
    </p>
          <p align="right"><h4>ลงชื่อ.........................................</h4></p>
          <p align="right"><h4><?php echo e($job->headvaluer); ?> <?php echo e($job->valuer); ?><h4></p>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/test/pdf.blade.php ENDPATH**/ ?>