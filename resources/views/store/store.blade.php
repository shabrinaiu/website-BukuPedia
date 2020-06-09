@extends('layouts.app')

@section('section')

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- ASIDE -->
			<div id="aside" class="col-md-3">
				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">Categories</h3>
					<div class="checkbox-filter">
						<ul class="footer-links">
							<li><a href="/store/novel">Novel</a></li>
							<li><a href="/store/fiction">Fiction</a></li>
							<li><a href="/store/non-fiction">Non-Fiction</a></li>
							<li><a href="/store/comic">Comic</a></li>
							<li><a href="/store/biography">Biography</a></li>
							<li><a href="/store/kids">Kids</a></li>
						</ul>
					</div>
				</div>
				<!-- /aside Widget -->

			</div>
			<!-- /ASIDE -->

			<!-- STORE -->
			<div id="store" class="col-md-9">
				<!-- BANNER JUMBOTRON -->
				<div id="banner-jumbotron" class="section">
					@switch($category)
						@case("novel")
							<img src="{{asset('/img/BannerNovel.png')}}" alt="TextBook" style="width:100%">
							@break
						@case("fiction")
							<img src="{{asset('/img/BannerFiction.png')}}" alt="TextBook" style="width:100%">
							@break
						@case("non-fiction")
							<img src="{{asset('/img/BannerNonFiction.png')}}" alt="TextBook" style="width:100%">
							@break
						@case("comic")
							<img src="{{asset('/img/BannerComic.png')}}" alt="TextBook" style="width:100%">
							@break
						@case("biography")
							<img src="{{asset('/img/BannerBiography.png')}}" alt="TextBook" style="width:100%">
							@break
						@case("kids")
							<img src="{{asset('/img/BannerKids.png')}}" alt="TextBook" style="width:100%">
							@break
						@default
							
					@endswitch
				</div>
				<!-- /BANNER JUMBOTRON -->
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
					@foreach ($books as $book)
						<!-- product -->
						<div class="col-md-4 col-xs-6">
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
				<!-- /store products -->

				<!-- store bottom filter -->
				<div class="store-filter clearfix">
					<span class="store-qty">Showing {{$books->count()}}-{{$books->total()}} products</span>
					{{$books->links()}}
				</div>
				<!-- /store bottom filter -->
			</div>
			<!-- /STORE -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
@endsection