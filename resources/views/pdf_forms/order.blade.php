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
    font-size: 16px;
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
    /* border-collapse: collapse; */
    width: 100%;
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

 

  .avatar {
    vertical-align: middle;
    width: 50px;
    height: 50px;
    border-radius: 50%;
  }

</style>




<head>

  <title></title>
</head>

<body>
  <div class="logo">
    <img src="img/LM3.png" alt="Logo" width="240" height="60">
  </div>
  @foreach($jobs as $item)
  

  <p style="float:right; text-align:center;">Date : {{date('d-m-yy', strtotime($item->startdate))}} 

  <br>
   <br><img src="{{$item->ValuerAvatar}}" class="avatar">  <img src="{{$item->ValuerAvatar}}" class="avatar"> 
  <br>Valuer/Approver
    
  </p>
  <h2 style="text-align: center; "><b>ORDER FOR SERVICE</b> </h2>
  
 

  <table>
        
            <tr>
                <th>Report Ref : {{$item->jobcode}}</th>
                <td>Report Language : ภาษาไทย 1 ชุด</td>
                <td>Purpose : {{$item->obj_name}}</td>
            </tr>                     
     
  
  </table>

  <table>
    <tr>
      <th colspan="2" class="alignleft">1. ที่อยู่ในรายงาน</th>
      <th colspan="2" class="alignleft">2. ชื่อลูกค้า / ผู้ติดต่อ</th>
    </tr>
    <tr>
      <th style="width: 12%;">Company</th>
      <th style="width: 38%;" class="alignleft">{{$item->client}}</th>
      <th style="width: 12%;">Company</th>
      <th style="width: 38%;" class="alignleft">{{$item->customer_company}}</th>
    </tr>
    <tr>
      <th class="aligntop">Address</th>
      <th class="alignleft" class="alignleft">{{$item->clientaddress}}</th>
      <th class="aligntop">Address</th>
      <th class="alignleft" class="alignleft">{{$item->customer_address}}</th>
    </tr>
    <tr>
      <th>Name</th>
      <th class="alignleft">{{$item->clientcontract}}</th>
      <th>Name</th>
      <th class="alignleft">{{$item->customer}}</th>
    </tr>
     <tr>
      <th style="width: 12%;">Title</th>
      <th style="width: 38%;" class="alignleft">{{$item->clienttitle}}</th>
      <th style="width: 12%;">Title</th>
      <th style="width: 38%;" class="alignleft">{{$item->customer_title}}</th>
    </tr>
   <tr>
      <th>Tel.</th>
      <th class="alignleft">{{$item->clienttel}}</th>
      <th>Tel.</th>
      <th class="alignleft">{{$item->customer_tel}}</th>
    </tr>
   
  </table>

  <p><strong>3. THE SUBJECT PROPERTY</strong> </p>
  <p>{{$item->proplocation}}</p>

  <p><strong>4. SUPPORTING DOCUMENTS</strong> </p>

  <div class="fittotext">
    <table>
      <tr>
        <th class="alignleft">( ) แผนที่</th>
        <th class="alignleft">( ) โฉนดที่ดิน/อช.2</th>
        <th class="alignleft">( ) แบบแปลนอาคาร</th>
        <th class="alignleft">( ) ใบอนุญาตก่อสร้างอาคาร</th>
        <th class="alignleft">( ) Bill of Quantities (BOQ.)</th>
      </tr>
      <tr>
        <th style="width: 10%;" class="alignleft">( ) ผังโครงการ</th>
        <th style="width:15%;" class="alignleft">( ) โบรชัวร์โครงการ</th>
        <th style="width:15%;" class="alignleft">( ) Price List</th>
        <th class="alignleft">( ) ใบอนุญาตประกอบกิจการ รร.</th>
        <th style="width:27%;" class="alignleft">( ) Profit & Loass Statement</th>
      </tr>
      <tr>
        <th colspan="5" class="alignleft">( ) อื่นๆ................................................................................................................................................................................................................</th>
      </tr>
    </table>
  </div>

  <div>
    <h1>{{$testdata}}</h1>
  </div>

  <p><strong>5. TIMELINE</strong> </p>
  <p>--------------------------</p>

  <p><strong>6. VALUATION FEE </strong>{{$item->valuationfee}}</p>


 @endforeach
  

</body>

</html>