@extends('layouts.usermenu')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">เลขที่รายงาน : {{$job->jobcode}} (ID: {{$job->reportcode}})</div>

                <div class="card-body">                    
                    <p>ลูกค้า : {{$job->client}}</p>
                    <p>ลูกค้าราย : {{$job->customer}}</p>
                    <p>ประเภททรัพย์สิน : {{$job->prop_type}}</p>                  
                    <p>ชื่อโครงการ/ที่ตั้ง : {{$job->projectname}}</p>
                    <p>เนื้อที่ : {{$job->prop_size}}</p>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
             <div class="card">
                <div class="card-header">Progress : {{$job->percentfinish}} %</div>

                <div class="card-body">
                    <p>ผู้ประเมินหลัก : {{$job->headvaluer_n}} / ผู้ประเมินราคา : {{$job->valuer_n}} </p>
                    
                    <p>วันที่เริ่มงาน : {{$job->startdate}}</p>
                    <p>วันที่สำรวจ : {{$job->inspectiondate}}</p>
                    <p>กำหนดส่งภายใน LC : {{$job->lcduedate}}</p>
                    <p>กำหนดส่งลูกค้า : {{$job->clientduedate}}</p>
                </div>
            </div>
        </div>
    </div>
    <a href="#" onclick="close_window();return false;">close</a>

    <script type="text/javascript">
        function close_window() {
            if (confirm("Close Window?")) {
                close();
            }
        }
    </script>
</div>
@endsection


