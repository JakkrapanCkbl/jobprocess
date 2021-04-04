<!DOCTYPE html>
<html>
<head>
	<title>Auto Complete</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <div class="container">
      <br><br>
      <h1 align="center">AutoComplete Laravel</h1>
      <br>
	  	
      	<div class="form-group">
          <input type="text" name="city_name" id="city_name" class="form-control input-lg" placeholder="ป้อนชื่อจังหวัด" />
          <div id="cityList">
        </div>
		<p></p>
		<div class="form-group">
			<input type="text" name="amphur_name" id="amphur_name" class="form-control input-lg" placeholder="ป้อนชื่ออำเภอ" />
			<div id="amphurList"></div>
       	</div>
		<?php echo e(csrf_field()); ?> 
    </div>

    <script type="text/javascript">	
    	$(document).ready(function(){
    		$('#city_name').keyup(function(){
    			var query=$(this).val();
    			//console.log(query);
    			if(query!=''){
    				var _token = $('input[name="_token"]').val();
    			}
    			$.ajax({
    				url:"<?php echo e(route('autocomplete.show')); ?>",
    				method:"POST",
    				data:{query:query, _token:_token},
    				success:function(data){
    					$('#cityList').fadeIn();
              			$('#cityList').html(data);
    				}
    			});
    		});
    	});

    	$(document).on('click','li',function(){
    		$('#cityList').fadeOut();
    		$('#city_name').val($(this).text());
			
    	});

    </script>

<script type="text/javascript">	
    	$(document).ready(function(){
    		$('#amphur_name').keyup(function(){
    			var query=$(this).val();
    			//console.log(query);
    			if(query!=''){
    				var _token = $('input[name="_token"]').val();
    			}
    			$.ajax({
    				url:"<?php echo e(route('autocomplete.showamphur')); ?>",
    				method:"POST",
    				data:{query:query, _token:_token},
    				success:function(data){
    					$('#amphurList').fadeIn();
              			$('#amphurList').html(data);
    				}
    			});
    		});
    	});

    	$(document).on('click','li',function(){
    		$('#amphurList').fadeOut();
    		$('#amphur_name').val($(this).text());
    	});

    </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/test/auto.blade.php ENDPATH**/ ?>