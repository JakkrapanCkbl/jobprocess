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
    <h2 align="center">รหัสงาน : {{$job->jobcode}}| ชื่อโครงการ : {{$job->projectname}}</h2>
   <p>
         <h4>แสดงรายละเอียด : {{$job->proplocation}}</h4>
    </p>
          <p align="right"><h4>ลงชื่อ.........................................</h4></p>
          <p align="right"><h4>{{$job->headvaluer}} {{$job->valuer}}<h4></p>
  </body>
</html>
