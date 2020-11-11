<!DOCTYPE html>
<html>
<head>
	<title>Upload Single File</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		@if (count($errors) > 0)
		   <div class="alert alert-danger">
		     Upload Validation Error<br><br>
			     <ul>
				      @foreach ($errors->all() as $error)
				       <li>{{ $error }}</li>
				      @endforeach
			     </ul>
		    </div>
		@endif

		@if ($message = Session::get('success'))
		   <div class="alert alert-success alert-block">
		    	<button type="button" class="close" data-dismiss="alert">×</button>
		        <strong>{{ $message }}</strong>
		   </div>
		   <img src="/img/{{ Session::get('path') }}" width="400" />
		@endif

		<br><br>
		<form method="post" action="{{url('/upload1')}}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
				<table class="table">
					<tr>
						<td width="40%" align="right"><label>select file</label></td>
						<td width="30"><input type="file" name="select_image" /></td>
						<td width="30%" align="left"><input type="submit" name="upload" class="btn btn-primary" value="อัพโหลด"></td>
					</tr>
					<tr>
						<td width="40%" align="right"></td>
						<td width="30"><span class="text-muted">jpg, png, gif</span></td>
						<td width="30%" align="left"></td>
					</tr>
					
				</table>
			</div>
		</form>
	</div>
</body>
</html>