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
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<br>
					<h1><a href="#home">Azein Rajib Abdillah</a></h1>
				</div>

				<div class="col-md-7">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      
					      <ul class="nav navbar-nav navbar-right">
					        <li><a class="menu" href="index" >Home</a></li>
					        <li><a class="menu" href="index#about">about us</a></li>
					        <!-- <li><a class="menu" href="#service">our services </a></li> -->
					        <!-- <li><a class="menu" href="#team">our team</a></li> -->
					        <li><a class="menu" href="index#contact"> contact us</a></li>
					        <li><a class="menu active" href="login"> Sign In</a></li>
					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header>

	<!-- end of header area -->

	<br/><br/><br/><br/><br/><br/><br/><br/>
	
	
	<div class="col-md-4 col-md-offset-4 contact-form">
	<div class="well">
		<h3 style="color:#000;">Sign Up</h3>

		<form class="form">
			<input class="name" type="text" placeholder="Username">
			<input class="email" type="email" placeholder="Email">
			<input class="email" type="password" placeholder="Password">
			<input class="submit-btn" type="submit" value="Sign Up">
		</form>
	<div class="clearfix"></div>

	</div>
	</div>
	

	<!-- script tags
	============================================================= -->
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="{{URL::asset('js/gmaps.js')}}"></script>
	<script src="{{URL::asset('js/smoothscroll.js')}}"></script>
	<script src="{{URL::asset('js/bootstrap.js')}}"></script>
	<script src="{{URL::asset('js/custom.js')}}"></script>
	
</body>
</html>

