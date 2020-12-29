<!DOCTYPE html>

<style>
    @font-face {
        font-family: 'THSarabunNew';
        font-style: normal;
        font-weight: normal;
        src: url("<?php echo e(public_path('fonts/THSarabun.ttf')); ?>") format('truetype');
    }

    @font-face {
        font-family: 'THSarabunNew';
        font-style: normal;
        font-weight: bold;
        src: url("<?php echo e(public_path('fonts/THSarabun Bold.ttf')); ?>") format('truetype');
    }

    @font-face {
        font-family: 'THSarabunNew';
        font-style: italic;
        font-weight: normal;
        src: url("<?php echo e(public_path('fonts/THSarabun Italic.ttf')); ?>") format('truetype');
    }

    @font-face {
        font-family: 'THSarabunNew';
        font-style: italic;
        font-weight: bold;
        src: url("<?php echo e(public_path('fonts/THSarabun Bold Italic.ttf')); ?>") format('truetype');
    }

    body {
        font-family: "THSarabunNew";
    }

    div.border {
        border: 1px solid;
        margin: 5px;
    }

    h3,
    h4 {
        margin-top: 0.67em;
        margin-bottom: 0.67em;
        margin-left: 0;
        margin-right: 0;
    }

    p {
        margin-top: 0;
        margin-bottom: 0;
        margin-left: 0.4em;
        margin-right: 0;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #5C5858;
        text-align: left;
        padding: 5px;
    }

    tr th:last-child {
        width: 1%;
        white-space: nowrap;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    th.alignleft {
        text-align: left;
    }

    .aligntop {
        vertical-align: top;
    }

    .logo {
        float: left;
        margin-top: 8px;
    }

    .column {
        float: left;
        width: 50%;
    }

    th {
        text-align: right;
    }

    table th.tableheader {
        text-align: center;
        vertical-align: top;
    }

    table th.floatmid {
        text-align: center;
    }

    table th.floatleft {
        text-align: left;
        padding-left: 15px;
    }
</style>


<head>

    <title></title>
</head>

<body>
    <div class="logo">
        <img src="img/logo1.png" alt="Logo" width="200" height="50">
    </div>
    <p style="float:right; text-align:center;"> No. : LC-R-20/08/077<br>
        Date : 17 สิงหาคม 2563<br>
    </p>
    <h2 style="text-align: center;"><b>สำเนา ใบแจ้งหนี้/ใบวางบิล </b> </h2>

    <p><b>สำนักงานใหญ่</b></p>
    <hr>

    <div class="column">
        <p><b>เลขประจำตัวผู้เสียภาษี 015547070351</b> </p>
    </div>
    <div class="column">
        <p style="float: right; text-align:right"><b>370/6 อาคารแฟร์ทาวเวอร์ ชั้น 2 ซอยสุขุมวิท 50 ถนนสุขุมวิท แขวงพระโขนง เขตคลองเตย กรุงเทพมหานคร 10260 <br> Tel : 0-2331-4580-2 </b></p>
    </div>
    <br><br><br>
    <h3> Customer : นายธนกฤต อนันต์ประกฤติ</h3>
    <h3> Address : 469 ซอยสำโรงเหนือ ตำบลสำโรงเหนือ อำเภอเมืองสมุทรปราการ จ.สมุทรปราการ</h3>

    <table>
        <tr>
            <th class="tableheader" style="width: 35%;">Description</th>
            <th class="tableheader" style="width: 10%;">Quantity</th>
            <th class="tableheader" style="width: 10%;">Amount/Job <br>(Baht)</th>
            <th class="tableheader" style="width: 10%;">Amount <br>(Baht)</th>
        </tr>
        <!-- main content -->
        <div class="maincontent">
            <tr>
                <th class="floatleft">ค่าประเมินมูลค่าทรัพย์สิน LC/63BF-1101 HLHO 630800328</th>
                <th class="floatmid">1</th>
                <th>3,500.00</th>
                <th>3,500.00</th>
            </tr>

        </div>

        <tr>
            <th rowspan="3" class="floatmid">(สามพันเจ็ดร้อยสี่สิบห้าบาทถ้วน)</th>
            <th colspan="2" class="floatleft">Total</th>
            <th>3,500.00</th>
        </tr>
        <tr>
            <th colspan="2" class="floatleft">Vat 7%</th>
            <th>245.00</th>
        </tr>
        <tr>
            <th colspan="2" class="floatleft">Total Amount</th>
            <th>3,745.00</th>
        </tr>
    </table>

    <h2 id="demo"></h2>
    <script>
        function myFunction() {
            var elmnt = document.getElementById("maincontent");
            var height = "";
            height = elmnt.clientHeight;
            document.getElementById("demo").innerHTML = height;
            if (hour < 18) {
                greeting = "Good day";
            }
        }
    </script>

</body>

</html><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/pdf_forms/invoice.blade.php ENDPATH**/ ?>