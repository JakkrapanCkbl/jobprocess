

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

    .title {
        text-align: center;
        margin-top: 20px;
    }
    
    div {
        white-space: nowrap;
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
</style>


<head>
    <title></title>
</head>

<body>
    <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <div class="container">
        <p class="title" style="font-size: 30px;"><b>สำเนาใบแจ้งหนี้/ใบวางบิล</b> </p>
    </div>
    <div class="container">
        <div class="logo">
            <img src="img/LM3.png" alt="Logo" width="240" height="60">
        </div>
        <p style="float:right; text-align:right; padding-top:0px;"><b>
                Invoice <?php echo e($item->invoiceno); ?><br>
                Date : <?php echo e(date('d-m-yy', strtotime($item->invoicedate))); ?><br>
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
        <p><b>Customer : <?php echo e($item->customer); ?></b> </p>
        <p><b>Address : <?php echo e($item->address); ?></b> </p>

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
                <th class="description"><?php echo e($item->description); ?></th>
                <th class="amount"><?php echo e(number_format("$item->amountjob")); ?></th>
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
           
                <th class="floatmid" rowspan="3" style="font-size: 22px; width:60%;">(
                    <?php echo e($aa); ?>บาทถ้วน)</th>
                <th class="floatleft" style="font-size: 20px; width:20%">Total</th>
                <th class="finalamount" style="font-size: 20px; width:20%"><?php echo e(number_format("$item->amountjob",2)); ?></th>
            </tr>
            <tr class="hightlight">
                <th class="floatleft" style="font-size: 20px;">Vat 7%</th>
                <th class="finalamount" style="font-size: 20px;"><?php echo e(number_format($item->amountjob * 0.07,2)); ?></th>
            </tr>
            <tr class="hightlight">
                <th class="floatleft" style="font-size: 20px;">Total Amount</th>    
                <th class="finalamount" style="font-size: 20px;"><?php echo e(number_format($item->amountjob + ($item->amountjob * 0.07),2)); ?></th>
            </tr>
        </table>
    </div>
    <span class="text-bold">
  
 </span>
    <!-- lower table part -->

    <br>
    <div class="container">
        <table width=100%>
            <tr>
                <th style="text-align: left;" class="borderleft">กรุณาชำระเงินเมื่อได้รับใบวางบิล</th>
                <th class="borderleft borderright" colspan="3"><b><u>ชื่อบัญชี : บริษัท แลนด์มาร์ค คอนซัลแทนส์ จำกัด</u></b> </th>
            </tr>
            <tr>
                <th class="borderleft"></th>
                <th class="borderleft borderright" colspan="3">ธนาคารกสิกรไทย บ/ช กระแสรายวัน</th>
            </tr>

            <tr>
                <th style="text-align: left;" class="borderleft">ผู้รับวางบิล &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ________________________ (กรุณาเขียนตัวบรรจง)</th>
                <th class="borderleft borderright borderbot" colspan="3">เลขที่ 044-2926-727 สาขาบิ๊กซีอ่อนนุช</th>
            </tr>
            <tr>
                <th style="text-align: left; padding-top:10px" class="borderleft">วันที่วางบิล &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ________________________</th>
                <th class="borderleft borderright" colspan="3"></th>
            </tr>
            <tr>
                <th style="text-align: left; padding-top:10px" class="borderleft">นัดชำระเงินวันที่ &nbsp; ________________________</th>
                <th class="borderleft borderright" style="padding-top:10px" colspan="3">_____________________________</th>
            </tr>
            <tr>
                <th class="borderleft"></th>
                <th class="borderleft borderright " colspan="3">ผู้มีอำนาจลงนาม (แผนกบัญชี)</th>
            </tr>
        </table>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/invoice/pdf_invoice.blade.php ENDPATH**/ ?>