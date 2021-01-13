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
        font-size: 19px;
    }

    @page  {
        margin: 0cm 1cm;
    }

    div {
        white-space: nowrap;
    }
    
    .title {
        text-align: center;
        margin-top: 20px;
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
    }

    tr {
        text-align: left;
        padding: 5px;
    }

    tr th:last-child {
        width: 1%;
        white-space: nowrap;
    }

    tr:nth-child(even).hightlight {
        background-color: #B4D9A1;
    }

    .logo {
        float: left;
        padding-top: 0px;
    }

    .container {
        padding-left: 20px;
    }

    .column {
        float: left;
        width: 50%;
    }

    table th.tableheader {
        text-align: center;
        vertical-align: top;
        border: 1px solid #0B2222;
        font-size: 20px;
    }

    th.description {
        text-align: left;
        padding-left: 15px;
        border-left: 1px solid #0B2222;
        padding-bottom: 6px;
        height: 17px;
    }

    th.amount {
        border-right: 1px solid #0B2222;
        padding-right: 5px;
    }

    table th.floatmid {
        text-align: center;
        border: 1px solid #0B2222;
    }

    table th.floatleft {
        text-align: left;
        padding-left: 15px;
        padding-bottom: 4px;
        border: 1px solid #0B2222;
    }

    table th.finalamount {
        border: 1px solid #0B2222;
        padding-bottom: 4px;
        padding-right: 5px;
    }

    .square {
        height: 15px;
        width: 15px;
        background-color: #FFFFFF;
        border: solid 2px #141613;
    }
</style>


<head>
    <title></title>
</head>

<body>
<?php $__currentLoopData = $receipts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="container">
        <p class="title" style="font-size: 30px;"><b>สำเนาใบเสร็จรับเงิน/ใบกำกับภาษี</b> </p>
    </div>
    <div class="container">
        <div class="logo">
            <img src="img/LM3.png" alt="Logo" width="240" height="60">
        </div>
        <p style="float:right; text-align:right; padding-top:0px;"><b>
                Invoice No. : LC-R-20/08/077<br>
                Date : 17 สิงหาคม 2563<br>
            </b></p>
    </div>

    <div class="container">

        <p style="text-align:left; padding-top:78px"><b> บริษัท แลนด์มาร์ค คอนซัลแทนส์ จำกัด</b>
            <span style="float:right;"><b>สำนักงานใหญ่</b> </span>
        </p>

        <div class="column">
            <p><b>370/6 อาคารแฟร์ ทาวน์เวอร์ ชั้น 2 ซอยสุขุมวิท 50 <br> ถนนสุขุมวิท แขวงพระโขนง เขตคลองเตย กรุงเทพมหานคร 10260 </b></p>
        </div>
        <div class="column">
            <p style="float: right; text-align:right"><b>เลขประจำตัวผู้เสียภาษี 015547070351<br> Tel : 0-2331-4580-2</b> </p>
        </div>

        <br><br><br><br>
        <p><b>Customer : นายธนกฤต อนันต์ประกฤติ</b> </p>
        <p><b>Address : 469 ซอยสำโรงเหนือ ตำบลสำโรงเหนือ อำเภอเมืองสมุทรปราการ จ.สมุทรปราการ</b> </p>

    </div>

    <br>
    <div class="container">
        <table width=100%>
            <tr class="hightlight">
                <th class="tableheader" style="width: 80%; max-width:80%; padding-top:10px">Description</th>
                <th class="tableheader" style="width: 20%;">Amount <br> (Baht)</th>
            </tr>
            <!-- main content -->
            <tr class="hightlight">
                <th class="description">ค่าบริการประเมินมูลค่าทรัพย์สิน LC/63BF-1101 HLHO 630800328</th>
                <th class="amount">3,500.00</th>
            </tr>
            <tr class="hightlight">
                <th class="description">ค่าบริการประเมินมูลค่าทรัพย์สิน LC/63BF-1101 HLHO 630800328</th>
                <th class="amount">3,500.00</th>
            </tr>
            <tr class="hightlight">
                <th class="description">ค่าบริการประเมินมูลค่าทรัพย์สิน LC/63BF-1101 HLHO 630800328</th>
                <th class="amount">3,500.00</th>
            </tr>
            <tr class="hightlight">
                <th class="description">ค่าบริการประเมินมูลค่าทรัพย์สิน LC/63BF-1101 HLHO 630800328</th>
                <th class="amount">3,500.00</th>
            </tr>
            <tr class="hightlight">
                <th class="description">ค่าบริการประเมินมูลค่าทรัพย์สิน LC/63BF-1101 HLHO 630800328</th>
                <th class="amount">3,500.00</th>
            </tr>
            <tr class="hightlight">
                <th class="description">ค่าบริการประเมินมูลค่าทรัพย์สิน LC/63BF-1101 HLHO 630800328</th>
                <th class="amount">3,500.00</th>
            </tr>
            <tr class="hightlight">
                <th class="description"></th>
                <th class="amount"></th>
            </tr>
            <tr class="hightlight">
                <th class="description"></th>
                <th class="amount"></th>
            </tr>
            <tr class="hightlight">
                <th class="description"></th>
                <th class="amount"></th>
            </tr>
            <tr class="hightlight">
                <th class="description"></th>
                <th class="amount"></th>
            </tr>
            <tr class="hightlight">
                <th class="description"></th>
                <th class="amount"></th>
            </tr>
            <tr class="hightlight">
                <th class="description"></th>
                <th class="amount"></th>
            </tr>

        </table>
        <!-- sum table -->
        <table width=100%>
            <tr class="hightlight">
                <th class="floatmid" rowspan="3" style="font-size: 22px; width:60%;"> (ห้าแสนเก้าหมื่นสามพันเจ็ดร้อยสี่สิบห้าบาทสี่สิบห้าสตางค์)</th>
                <th class="floatleft" style="font-size: 20px; width:20%">Total</th>
                <th class="finalamount" style="font-size: 20px; width:20%">3,500.00</th>
            </tr>
            <tr class="hightlight">
                <th class="floatleft" style="font-size: 20px;">Vat 7%</th>
                <th class="finalamount" style="font-size: 20px;">245.00</th>
            </tr>
            <tr class="hightlight">
                <th class="floatleft" style="font-size: 20px;">Total Amount</th>
                <th class="finalamount" style="font-size: 20px;">3,745.00</th>
            </tr>
        </table>
    </div>

    <br>
    <div class="container">
        <table width=100%>
            <tr>
                <th style="text-align:left;">
                    <div class="square" style="display: inline-block;"></div> &nbsp;Cash
                </th>
                <th style="text-align:left;">
                    <div class="square" style="display: inline-block;"></div> &nbsp;Cheque
                </th>
                <th colspan="2" style="text-align:center; width:50%">ตรวจสอบถูกต้องเรียบร้อยแล้ว</th>
            </tr>
            <tr>
                <th style="text-align:left; width:25%; padding-top:15px;">Bank___________________</th>
                <th style="text-align:left; width:25%; padding-top:15px;">Cheque__________________</th>
                <th></th>
            </tr>
            <br>
            <tr>
                <th style="text-align:left; padding-top:15px;">Date___________________</th>
                <th style="text-align:left; padding-top:15px;">Amount__________________</th>
                <th colspan="2" style="text-align:right; padding-top:15px">______________________________ Collector</th>
            </tr>
            <tr>
                <th style="text-align:left;"></th>
                <th style="text-align:left;"></th>
                <th colspan="2" style="text-align:center; padding-top:15px">Date__________________________</th>
            </tr>
        </table>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/invoice/pdf_receipt.blade.php ENDPATH**/ ?>