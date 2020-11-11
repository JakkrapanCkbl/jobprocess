<!DOCTYPE html>

<style>
    @font-face {
        font-family: 'THSarabunNew';
        font-style: normal;
        font-weight: normal;
        src: url("{{ public_path('fonts/THSarabun.ttf') }}") format('truetype');
    }
    
    @font-face {
        font-family: 'THSarabunNew';
        font-style: normal;
        font-weight: bold;
        src: url("{{ public_path('fonts/THSarabun Bold.ttf') }}") format('truetype');
    }

    @font-face {
        font-family: 'THSarabunNew';
        font-style: italic;
        font-weight: normal;
        src: url("{{ public_path('fonts/THSarabun Italic.ttf') }}") format('truetype');
    }

    @font-face {
        font-family: 'THSarabunNew';
        font-style: italic;
        font-weight: bold;
        src: url("{{ public_path('fonts/THSarabun Bold Italic.ttf') }}") format('truetype');
    }
    
    body {
        font-family: "THSarabunNew";
        font-size: 15px;
        line-height: 0.65;
    }

    h1 {
        font-size: 20px;
        text-align: center;
    }
    
    h2 {
        font-size: 18px;
        text-align: left;
    }
    
    h3 {
        font-size: 16px;
        text-align: center;
        text-decoration: underline;
    }
    
    .clearfix:after {
        content: "";
        display: table;
        clear: both;
    }

    .logo {
        float: left;
        margin-top: 8px;
    }

    .logo img {
        height: 50px;
    }

    .date-and-report {
        text-align: right;
    }


    table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 10px;
    }
    
    td,
    th {
       
        text-align: left;
        padding: 5px;
    }
    
    .row {
        
    }
    
    .column {
        float: left;
        padding: 0px ;

    }
    
    .left {
        width: 65%;
    }
    
    .right {
        width: 35%
    }
    
    .report-repoort, .report-lang, .report-copies {
      width: calc(33% - 10px);
    }
</style>


<body>
  <header class="clearfix">
      <div class="logo">
        <img src="img/logo1.png" alt="Logo" width="200" height="50">
      </div>
      <div class="date-and-report">
        <div>Date: 14 มีนาคม 2561</div> 
        <div>Report Ref: LC/61BF-327</div>
      </div>
  </header>

  <main>
    <h1> <b>ORDER FOR SERVICE</b> </h1>

    <h2>REPORT</h2>
    <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th class="report-report">Report to Client(Y/N)</th>
          <td class="report-report">Yes</td>
          <th class="report-lang">Report Language</th>
          <td class="report-lang">ภาษาไทย</td>
            <th class="report-copies">Number of copies to Client</th>
          <td class="report-copies">1</td>
        </tr>
    </table>
    <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th class="report-name">Name</th>
          <td class="report-name"></td>
        </tr>
        <tr>
          <th class="report-title">Title</th>
          <td class="report-title">Tel</td>
        </tr>
        <tr>
          <th class="report-company">Company</th>
          <td class="report-company">ธนาคาร ยูโอบี จำกัด (มหาชน)</td>
        </tr>
        <tr>
          <th class="report-address">Address</th>
          <td class="report-address">191 ถนนสาทรใต้ แขวงยานนาวา เขตสาทร กรุงเทพมหานคร</td>
        </tr>
        <tr>
          <th class="report-phone">Phone No.</th>
          <td class="report-phone">(02) 620-4293, (02) 620-4255</td>
        </tr>
    </table>

    <h2>CLIENT</h2>
    <table border="0" cellspacing="0" cellpadding="0">>
        <tr>
          <th class="client-name">Name</th>
          <td class="client-name"></td>
        </tr>
        <tr>  
          <th class="client-title">Title</th>
          <td class="client-title"></td>
        </tr>
        <tr>  
          <th class="client-company">Company</th>
          <td class="client-company">นาย มงคล ชัยอรุณ</td>
        </tr>
        <tr>  
          <th class="client-address">Address</th>
          <td class="client-address">แขวงบางจาก เขตพระโขนง กรุงเทพมหานคร</td>
        </tr>
        <tr>  
          <th class="client-phone">Phone No.</th>
          <td class="client-phone">080-999-9999</td>
        </tr>
        <tr>  
          <th class="client-property">The Subject Property</th>
          <td class="client-property">ห้องชุดพักอาศัย | 36.27 ตร.ม. | 1088/240 คิว ชิดลม-เพชรบุรี ชั้น32 ถ.เพชรบุรี ข.ทุ่งพญาไท เชตราชเทวี จ.กรุงเทพมหานคร ถ้ายาวกว่านี้Hจะเป็นแบบนี้</td>
        </tr>
    </table>

    <h2> SERVICE & PROPERTY </h2>
    <table>
      <tr>
        <th class="service-purpose">Purpose</th>
        <td class="service-purpose">เพื่อขอสินเชื่อ</td>
      </tr>
      <tr>
        <th class="service-reappraisal">Reappraisal</th>
        <td class="service-reappraisal">Full Valuation</td>
      </tr>
      <tr>
        <th class="service-location">[  ]</th>
        <td class="service-location">แผนที่แสดงที่ตั้งทรัพย์สิน (Location Plan)</td>
      </tr>
      <tr>
        <th class="service-title">[  ]</th>
        <td class="service-title">แผนที่แสดงที่ตั้งทรัพย์สิน (Location Plan)</td>
      </tr>
      <tr>
        <th class="service-building">[  ]</th>
        <td class="service-building">แผนที่แสดงที่ตั้งทรัพย์สิน (Location Plan)</td>
      </tr>
      <tr>
        <th class="service-lot">[  ]</th>
        <td class="service-lot">แผนที่แสดงที่ตั้งทรัพย์สิน (Location Plan)</td>
      </tr>
      <tr>
        <th class="service-project">[  ]</th>
        <td class="service-project">แผนที่แสดงที่ตั้งทรัพย์สิน (Location Plan)</td>
      </tr>
      <tr>
        <th class="service-brochure">[  ]</th>
        <td class="service-brochure">แผนที่แสดงที่ตั้งทรัพย์สิน (Location Plan)</td>
      </tr>
      <tr>
        <th class="service-price">[  ]</th>
        <td class="service-price">แผนที่แสดงที่ตั้งทรัพย์สิน (Location Plan)</td>
      </tr>
      <tr>
        <th class="service-other">[  ]</th>
        <td class="service-other">แผนที่แสดงที่ตั้งทรัพย์สิน (Location Plan)</td>
      </tr>
    </table>

    <h2>JOB SCHEDULE & ASSIGNMENT</h2>
      
    <div class="column left">
        <h3>Schedule</h3>
        <table>
            <tr>
                <th class="schedule-start">Start Date</th>
                <td class="schedule-start"> 14 มีนาคม 2561</td>
                <th class="schedule-duedatelc">กำหนดส่ง LC</th>
                <td class="schedule-duedatelc">16 มีนาคม 2561</td>
            </tr>
            <tr>
                <th class="schedule-inspection">Inspection Date</th>
                <td class="schedule-inspection"> 15 มีนาคม 2561</td>
                <th class="schedule-duedatecust">กำหนดส่งลูกค้า</th>
                <td class="schedule-duedatecust">16 มีนาคม 2561</td>
            </tr>
            <tr>
                <th class="schedule-approve">Approve Date</th>
                <td class="schedule-approve"> 16 มีนาคม 2561</td>
                <th class="schedule-actual">Actual Day</th>
                <td class="schedule-actual">3</td>
            </tr>
        </table>
    </div>
      
    <div class="column right">
      <h3>Assignment</h3>
        <table>
          <tr>
            <th class="assignment-estate">Real Estate</th>
            <td class="assignment-estate">คุณสาโรจน์ พ่วงศรี</td>
          </tr>
          <tr>
            <th class="assignment-machinery">Machinery</th>
            <td class="assignment-machinery"></td>
          </tr>
          <tr>
            <th class="assignment-valuer">Principle Valuer</th>
            <td class="assignment-valuer">คุณมงคล ชัยอรุณ</td>
          </tr>
          <tr>
            <th class="assignment-approver">Report Approver</th>
            <td class="assignment-approver"></td>
          </tr>
        </table>
    </div>

    
    
        <h2>REPRESENTATIVE</h2>
        <table>
            <tr>
                <th class="representative-name">Name</th>
                <td class="representative-name">คุณกนกวรรณ ชัยอรุณ</td>
            </tr>
        </table>
   
    


  </main>
 
</body>

</html>