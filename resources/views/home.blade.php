@extends('layouts.app')

@section('section')

@include('partials.jumbotron')

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-sm-3 col-md-2">
						<div class="container-category-shop">
							<img src="./img/category-shop-1.png" alt="TextBook">
							<button class="btn-category-shop">Novel</button>
						</div>
					</div>
					<!-- /shop -->
					<!-- shop -->
					<div class="col-md-2 col-sm-3">
						<div class="container-category-shop">
							<img src="./img/category-shop-2.png" alt="TextBook">
							<button class="btn-category-shop">Fiction</button>
						</div>
					</div>
					<!-- /shop -->
					<!-- shop -->
					<div class="col-md-2 col-sm-3">
						<div class="container-category-shop">
							<img src="./img/category-shop-3.png" alt="TextBook">
							<button class="btn-category-shop">Non-Fiction</button>
						</div>
					</div>
					<!-- /shop -->
					<!-- shop -->
					<div class="col-md-2 col-sm-3">
						<div class="container-category-shop">
							<img src="./img/category-shop-4.png" alt="TextBook">
							<button class="btn-category-shop">Comic</button>
						</div>
					</div>
					<!-- /shop -->
					<!-- shop -->
					<div class="col-md-2 col-sm-3">
						<div class="container-category-shop">
							<img src="./img/category-shop-5.png" alt="TextBook">
							<button class="btn-category-shop">Biography</button>
						</div>
					</div>
					<!-- /shop -->
					<!-- shop -->
					<div class="col-md-2 col-sm-3">
						<div class="container-category-shop">
							<img src="./img/category-shop-6.png" alt="TextBook">
							<button class="btn-category-shop">Kids</button>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container container-product">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top selling</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/kids/kids1.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Novel</p>
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
											</div>
										</div>
										<!-- /product -->
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/kids/kids1.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Novel</p>
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
											</div>
										</div>
										<!-- /product -->
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/kids/kids1.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Novel</p>
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
											</div>
										</div>
										<!-- /product -->
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/kids/kids1.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Novel</p>
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
											</div>
										</div>
										<!-- /product -->
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/kids/kids1.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Novel</p>
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
											</div>
										</div>
										<!-- /product -->
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/kids/kids1.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Novel</p>
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container container-product">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">OUR PRODUCTS</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										@foreach ($books as $book)
											<div class="product">
												<div class="product-img">
													<img src="{{ asset($book->image) }}" alt="">
												</div>
												<div class="product-body">
													<p class="product-category">{{$book->category->name}}</p>
													<h3 class="product-name"><a href="#">{{$book->title}}</a></h3>
													<h4 class="product-price">Rp. {{$book->price}}</h4>
												</div>
											</div>
										@endforeach
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
@endsection