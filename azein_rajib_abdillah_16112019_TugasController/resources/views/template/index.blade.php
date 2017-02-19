<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Azein Rajib Abdillah</title>
	<link href="{{URL::asset('img/favicon.png')}}" rel="shortcut icon">
	<link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	
	<!-- ====================================================
	header section -->
	@include('template.header')
	<!-- end of header area -->

	@include('template.home')		
	<!-- end of slider section -->


	<!-- about section -->
	@include('template.about')
	<!-- end of about section -->


	<!-- service section starts here -->
	<!-- @include('template.service') -->
	<!-- end of service section -->


	<!-- team section -->
	<!-- @include('template.team') -->
	<!-- end of team section -->

	<!-- map section -->
	@include('template.contact')
	<!-- end of map section -->

	<!-- contact section starts here -->
	@include('template.contact2')
	<!-- end of contact section -->


	<!-- footer starts here -->
	


	

	<!-- script tags
	============================================================= -->
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="{{URL::asset('js/gmaps.js')}}"></script>
	<script src="{{URL::asset('js/smoothscroll.js')}}"></script>
	<script src="{{URL::asset('js/bootstrap.js')}}"></script>
	<script src="{{URL::asset('js/custom.js')}}"></script>
	
</body>
</html>

