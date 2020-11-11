<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Vie PDF with JQuery</title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 

</head>
<body>
	
  <div  class="container">
		<h5>{{public_path('img/test.pdf')}}</h5>		
		<div id="viewpdf">			
			<embed src="{{asset('img/test.pdf')}}#toolbar=0&navpanes=0&scrollbar=0" width="100%" height="900px" /> 
		</div>
	</div>
  
</body>



	
</html>