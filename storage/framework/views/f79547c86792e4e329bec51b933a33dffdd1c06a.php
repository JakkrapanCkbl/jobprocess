<!DOCTYPE html>
<html>
<head>
	
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/fixedcolumns/3.3.0/js/dataTables.fixedColumns.min.js"></script>


	
</head>
<body>
	
	<div class="container">
	    <br>
	    <table class="table table-striped table-bordered" id="table">
	       <thead>
	          <tr>
	             <th>ภาพถ่าย</th>	
	             <th>Files</th>	
	             <th>No</th>
	             <th>รายงานเลขที่</th>
	             <th>ID-KK</th>
	             <th>ทำเลที่ตั้ง</th>
	             <th>ผู้ว่าจ้าง</th>
	             <th>ลูกค้าราย</th>
	             <th>ประเภททรัพย์สิน</th>
	             <th>พื้นที่/เนื้อที่</th>
	             <th>ผู้ประเมินหลัก</th>
	             <th>ผู้ประเมินราคา</th>
	             <th>วันที่เริ่มงาน</th>
	             <th>วันที่สำรวจ</th>
	             <th>กำหนดส่งภายใน LC</th>
	             <th>กำหนดส่งลูกค้า</th>
	          </tr>
	       </thead>
	    </table>
	</div>
	<script type="text/javascript">
		$(function() {
               $('#table').removeAttr('width').DataTable({ 
               	   //"scrollY": "500px",               	   
               	   "scrollX": true,              	   
               	   "scrollCollapse": true,               	         	   
	               "lengthMenu": [[15, 25, 50, -1], [15, 25, 50, 'All']],	
	               "pageLength": 10,
	               "ajax": '<?php echo e(url('showindexdatatable')); ?>',	                               
	               "columns": [
	               			//image
	               			{
                              
                              "data": 'id',
                              "mData": "IMAGE", "aTargets": [0], "width": 2, "height": 1,
                              "className": "dt-body-center status",
                              "render": function (data) {
                              //return '<img src="https://www.jobprocess.landmarkcon.net/storage/uploads/templand.jpg" style="width: 200px" />';
                               return '<img src="/storage/uploads/' + data + '/1.jpg" style="width: 200px" />';
                            }
                            },
                            //folder
	               			{
                              
                              "mData": "IMAGE", "aTargets": [0], "width": 2, "height": 1,
                              "className": "dt-body-center status",                             
                              "render": function (data) {
                              	//return '<img src="img/folder-icon.png" style="width: 20px" />';
                              		
            					//return '<a onclick="popupCenter(&#39;docs/&#39;, &#39;myPop1&#39;,1000,600);" href="javascript:void(0);"><img src="img/folder-icon.png" style="width: 20px" /></a>';
                              	return '<a onclick="popupCenter(&#39;/folder&#39;,1000,600);" href="javascript:void(0);"><img src="img/folder-icon.png" style="width: 20px" /></a>';
                            }	
                            },

	                        //{ data: 'id', name: 'id', width: '20px'},
	                        {  
	                        	data: 'id', name: 'id',
         						render: function(data, type, row, meta){
            						if(type === 'display'){                						
                						data = '<a href="/jobs/' + data + '/-" target="_blank">' + data + '</a>';
            						}
            							return data;
         						}
	                        },	                        
	                        { data: 'jobcode', name: 'jobcode', width: '90px' },	                        
	                        /* { 
	                        	data: 'jobcode', name: 'jobcode',  width: '60px',
         						render: function(data, type, row, meta){
            						if(type === 'display'){
                						data = '<a href="https://www.google.com/maps/search/?api=1&query=47.5951518,-122.3316393" target="_blank">' + data + '</a>';
            						}
            							return data;
         						}
	                        }, */
	                        { data: 'reportcode', name: 'reportcode', width: '10px' },
	                        //{ data: 'projectname', name: 'projectname', width: '300px' }, 
	                        {
							    data: 'proplocation', name: 'proplocation', width: '300px',
							    render: function (data, type, row, meta){
							        if(type === 'display'){                						
                						//data = data ;
                						data = data;
                						
            						}
            							return data;
							    }
							},
	                        { data: 'client', name: 'client', width: '25px' },
	                        { data: 'customer', name: 'customer', width: '115px' },
	                        { data: 'prop_type', name: 'prop_type', width: '130px' },
	                        { data: 'prop_size', name: 'prop_size', width: '80px' },
	                        { data: 'headvaluer_n', name: 'headvaluer_n', width: '80px' },
	                        { data: 'valuer_n', name: 'valuer_n', width: '80px' },
	                        { data: 'startdate', name: 'startdate', width: '80px' },    	
	                        { data: 'inspectiondate', name: 'inspectiondate', width: '80px' },
	                        { data: 'lcduedate', name: 'lcduedate', width: '80px' },
	                        { data: 'clientduedate', name: 'clientduedate', width: '80px' }
	                        //{ data: 'startdate', name: 'startdate', type: 'date', 
	                    	//render: function (data, type, row) { return data ? moment(data).format('ddd DD/MM/YY') : ''; } },
	                     ],
	                "order": [[ 0, "desc" ]] 


            });
         });

		function popupCenter(url, title, w, h) {
			var left = (screen.width/2)-(w/2);
			var top = (screen.height/2)-(h/2);
			return window.open(url, title, 'toolbar=yes, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
		}


	</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/test/display.blade.php ENDPATH**/ ?>