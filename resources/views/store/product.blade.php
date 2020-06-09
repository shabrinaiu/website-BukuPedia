@extends('layouts.app')

@section('section')

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- Product main img -->
				<div class="col-md-5">
					<div id="product-main-img">
						<div class="product-preview">
							<img src="{{ asset('/img/book_image/'.$book->image) }}" alt="">
						</div>
					</div>
				</div>
				<!-- /Product main img -->

				<form action="/product/add-to-cart" method="post">
					{{ csrf_field() }}
					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">{{$book->title}}</h2>

							<div>
								<h3 class="product-price">Rp. {{$book->price}}</h3>
								<span class="product-available">In Stock : {{$book->stock}}</span>
							</div>

							<p>{{$book->description ?? 'No Description'}}</p>

							<div class="add-to-cart">
								<div class="qty-label">
									Quantity
									<div class="input-number">
										<input type="hidden" name="bookID" value="{{$book->id}}">
										<input type="number" name="quantity">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								<button type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>

							<ul class="product-links">
								<li>Author</li>
								<li><a href="#">{{$book->author->name}}</a></li>
							</ul>

							<ul class="product-links">
								<li>Publisher</li>
								<li><a href="#">{{$book->publisher->name}}</a></li>
							</ul>

							<ul class="product-links">
								<li>Category:</li>
								<li><a href="#">{{$book->category->name}}</a></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->
				</form>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

@endsection