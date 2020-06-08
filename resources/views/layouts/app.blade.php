<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>BukuPedia</title>
		<link rel="icon" href="{{url('/img/Title.png')}}" type="image/icon type">

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{url('css/bootstrap.min.css')}}"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{url('css/slick.css')}}"/>
		<link type="text/css" rel="stylesheet" href="{{url('css/slick-theme.css')}}"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{url('css/nouislider.min.css')}}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{url('css/style.css')}}"/>

    </head>
	<body>

		@include('partials.navbar')

		@yield('section')

		@include('partials.footer')

		<!-- jQuery Plugins -->
		<script src="{{url('js/jquery.min.js')}}"></script>
		<script src="{{url('js/bootstrap.min.js')}}"></script>
		<script src="{{url('js/slick.min.js')}}"></script>
		<script src="{{url('js/nouislider.min.js')}}"></script>
		<script src="{{url('js/jquery.zoom.min.js')}}"></script>
		<script src="{{url('js/main.js')}}"></script>
	</body>
</html>
