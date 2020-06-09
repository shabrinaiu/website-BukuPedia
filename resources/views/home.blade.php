@extends('layouts.app')

@section('section')

@include('partials.jumbotron')

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- BANNER JUMBOTRON -->
				<div id="banner-jumbotron" class="section">
					<a href="/about"><img src="{{asset('/img/banner-08.png')}}" alt="TextBook" style="width:100%"></a>
				</div>
				<!-- /BANNER JUMBOTRON -->
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
					<div class="col-md-12 col-xs-12">
						<div class="section-title">
							<h3 class="title">Top selling</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12 col-xs-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										@foreach ($books as $book)
											<div class="product">
												<div class="product-img">
													<img src="{{ asset('/img/book_image/'.$book->image) }}" alt="">
												</div>
												<div class="product-body">
													<p class="product-category">{{$book->category->name}}</p>
													<h3 class="product-name"><a href="/product/{{$book->id}}">{{$book->title}}</a></h3>
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

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container container-product">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12 col-xs-12">
						<div class="section-title">
							<h3 class="title">Our Products</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- store top filter -->
					<div class="store-filter clearfix">
						<div class="store-sort">
							<label>
								Sort By:
								<select class="input-select">
									<option value="0">Popular</option>
									<option value="1">Position</option>
								</select>
							</label>

							{{-- <label>
								Show:
								<select class="input-select">
									<option value="0">20</option>
									<option value="1">50</option>
								</select>
							</label> --}}
						</div>
					</div>
					<!-- /store top filter -->

					<!-- store products -->
					<div class="row">
						@foreach ($allBooks as $book)
							<!-- product -->
							<div class="col-md-3 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{asset('/img/book_image/'.$book->image)}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">{{$book->category->name}}</p>
										<h3 class="product-name"><a href="/product/{{$book->id}}">{{$book->title}}</a></h3>
										<h4 class="product-price">Rp. {{$book->price}}</h4>
									</div>
								</div>
							</div>
							<!-- /product -->
						@endforeach
					</div>
					{{$allBooks->links()}}
					<!-- /store products -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

@endsection