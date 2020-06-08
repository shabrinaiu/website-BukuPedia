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

        <!-- MAIN HEADER -->
        <div id="navbar-auth">
        <!-- container -->
        <div class="container nav-container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3 col-xs-12">
                        <div class="header-logo">
                            <a href="/" class="logo">
                                <img src="{{url('./img/Logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
					<!-- /LOGO -->

					<div class="col-md-3 col-xs-12"></div>
						
					<!-- NAVBAR BUTTON -->
					<div class="col-md-6 col-xs-12">
						<div class="header-ctnadm">
							<!-- Button -->
							<div>
								<a href="/admin/product-tables">
									Book
								</a>
							</div>
							<!-- /Button -->
							<!-- Button -->
							<div>
								<a href="/admin/publisher-tables">
									Publisher
								</a>
							</div>
							<!-- /Button -->
							<!-- Button -->
							<div>
								<a href="/admin/author-tables">
									Author
								</a>
							</div>
							<!-- /Button -->
							<!-- Button -->
							<div>
								<a href="#">
									Order-List
								</a>
							</div>
							<!-- /Button -->
							<div>
								<a href="/logout">
									<i class="fa fa-sign-out"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- /NAVBAR BUTTON -->
				</div>
				<!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
        </header>
        <!-- /HEADER -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<!-- Shipping Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">@yield('title_page')</h3>
							</div>
							@yield('section')
						</div>
						<!-- /Shipping Details -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		
		<!-- FOOTER -->
		<footer id="footer" style="background-color:white">
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12 text-center">
						<p style="padding-top:20px">Welcome to BukuPedia</p>
					</div>
				</div>
					<!-- /row -->
			</div>
			<!-- /container -->
		</footer>
		<!-- /FOOTER -->


		<!-- jQuery Plugins -->
		<script src="{{url('js/jquery.min.js')}}"></script>
		<script src="{{url('js/bootstrap.min.js')}}"></script>
		<script src="{{url('js/slick.min.js')}}"></script>
		<script src="{{url('js/nouislider.min.js')}}"></script>
		<script src="{{url('js/jquery.zoom.min.js')}}"></script>
		<script src="{{url('js/main.js')}}"></script>
	</body>
</html>
