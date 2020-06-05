@extends('layouts.app')

@section('section')

@include('partials.breadcrumbs')

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- Product main img -->
				<div class="col-md-5 col-md-push-2">
					<div id="product-main-img">
						<div class="product-preview">
							<img src="./img/kids/kids1.jpg" alt="">
						</div>
						{{-- <div class="carousel-product-preview">
							<img src="./img/kids/kids2.jpg" alt="">
						</div>
						<div class="product-preview">
							<img src="./img/kids/kids3.jpg" alt="">
						</div> --}}
					</div>
				</div>
				<!-- /Product main img -->

				<!-- Product thumb imgs -->
				<div class="col-md-2  col-md-pull-5">
					<div id="product-imgs">
						<div class="carousel-product-preview">
							<img src="./img/kids/kids1.jpg" alt="">
						</div>
						{{-- <div class="carousel-product-preview">
							<img src="./img/kids/kids2.jpg" alt="">
						</div>
						<div class="carousel-product-preview">
							<img src="./img/kids/kids3.jpg" alt="">
						</div> --}}
					</div>
				</div>
				<!-- /Product thumb imgs -->

				<!-- Product details -->
				<div class="col-md-5">
					<div class="product-details">
						<h2 class="product-name">Bundles Buku anak</h2>

						<div>
							<h3 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h3>
							<span class="product-available">In Stock : 3</span>
						</div>
						<p>Dijual karena tidak laku</p>

						<div class="add-to-cart">
							<div class="qty-label">
								Quantity
								<div class="input-number">
									<input type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
							<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
						</div>

						<ul class="product-links">
							<li>Author</li>
							<li><a href="#">Tok Dalang</a></li>
						</ul>

						<ul class="product-links">
							<li>Publisher</li>
							<li><a href="#">FiziMedia</a></li>
						</ul>

						<ul class="product-links">
							<li>Category:</li>
							<li><a href="#">Kids</a></li>
							<li><a href="#">Fiction</a></li>
						</ul>

					</div>
				</div>
				<!-- /Product details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

@endsection