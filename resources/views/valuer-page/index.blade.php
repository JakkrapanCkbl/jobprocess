<!doctype html>
<html lang="en" dir="ltr">

<head>

	@include('dashboard.head')
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('external2/images/brand/favicon.ico')}}" />

	<!-- Title -->
	<title>Valuer</title>

	<!--Bootstrap.min css-->
	<link rel="stylesheet" href="{{asset('external2/plugins/bootstrap/css/bootstrap.min.css')}}">

	<!--Font Awesome-->
	<link href="{{asset('external2/plugins/fontawesome-free/css/all.css')}}" rel="stylesheet">

	<!-- Dashboard Css -->
	<link href="{{asset('external2/css/style.css')}}" rel="stylesheet" />
	<link href="{{asset('external2/css/boxed.css')}}" rel="stylesheet" />
	<link href="{{asset('external2/css/color-styles.css')}}" rel="stylesheet" />
	<link href="{{asset('external2/css/skin-modes.css')}}" rel="stylesheet" />

	<!-- Vector-map -->
	<link href="{{asset('external2/plugins/jquery.vmap/jqvmap.min.css')}}" rel="stylesheet">

	<!-- Custom scroll bar css-->
	<link href="{{asset('external2/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />

	<!-- Sidemenu Css -->
	<link href="{{asset('external2/plugins/sidemenu/css/sidemenu.css')}}" rel="stylesheet">

	<!-- morris Charts Plugin -->
	<link href="{{asset('external2/plugins/morris/morris.css')}}" rel="stylesheet" />

	<!---Font icons-->
	<link href="{{asset('external2/plugins/iconfonts/plugin.css')}}" rel="stylesheet" />

	<!-- Sidebar css -->
	<link href="{{asset('external2/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

</head>

<body class="app">

	<!-- Global Loader-->
	<div id="global-loader"><img src="{{asset('external2/images/svgs/loader.svg')}}" alt="loader"></div>

	<div class="page">
		<div class="page-main">
			
			@include('valuer-page.nav')
			@include('dashboard.menubar')


			<div class="container content-area">

				@include('valuer-page.show')

				@include('dashboard.footer')