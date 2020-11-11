<!DOCTYPE html>
<html>
<head>
	<title>Binding Dropdown</title>
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">		
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	-->
	
	<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container box">
		<h3 align="center">Province</h3>
		<div class="form-group">
			<select name="province" id="province" class="form-control province">
				<option value="">เลือกจังหวัด</option>
				@foreach($list as $row)
					<option value="{{$row->id}}">{{$row->name_th}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<select name="amphures" class="form-control amphures">
				<option value="">เลือกอำเภอ</option>				
			</select>
		</div>
	</div>
	{{csrf_field()}}
</body>
<script type="text/javascript">
	$('.province').change(function(){
		if($(this).val()!=''){
			var select=$(this).val();			
			var _token=$('input[name="_token"]').val();
			$.ajax({
				url:"{{route('dropdown.fetch')}}",
				method:"POST",
				data:{select:select,_token:_token},
				success:function(result){
					$('.amphures').html(result);
				}
			})
		}
		
	});
</script>
</html>