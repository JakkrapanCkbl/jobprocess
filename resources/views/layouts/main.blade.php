<!DOCTYPE html>
<html>
<head>
	<title></title>
	@include('../partials.head')
</head>
<body>
	@include('../partials.nav')
	<br><br><br><br>	
	@yield('content')
	<br><br>
	@include('../partials.footer')
</body>
</html>