@extends('layouts.app')

@section('section')

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-7">

				<form action="/place-order" method="post">

					{{ csrf_field() }}
					<!-- Shipping Details -->
					<div class="billing-details">
						<div class="section-title">
							<h3 class="title">Shipping Order</h3>
						</div>
						<div class="form-group">

							<input name="firstName" class="input" type="text" placeholder="First Name">
						</div>
						<div class="form-group">
							<input name="lastName" class="input" type="text" placeholder="Last Name">
						</div>
						<div class="form-group">
							<input name="address" class="input" type="text" placeholder="Address">
						</div>
						<div class="form-group">
							<input name="city" class="input" type="text" placeholder="City">
						</div>
						<div class="form-group">
							<input name="country" class="input" type="text" placeholder="Country">
						</div>
						<div class="form-group">
							<input name="zip" class="input" type="text" placeholder="ZIP Code">
						</div>
						<div class="form-group">
							<input name="phone" class="input" type="text" placeholder="Phone Number">

						</div>
					</div>
					<!-- /Shipping Details -->

					<!-- Order notes -->
					<div class="order-notes">

						<textarea class="input" placeholder="Order Notes" name="notes"></textarea>

					</div>
					<!-- /Order notes -->
				</div>

				<!-- Order Details -->
				<div class="col-md-5 order-details">
					<div class="section-title text-center">
						<h3 class="title">Your Order</h3>
					</div>
					<div class="order-summary">
						<div class="order-col">
							<div><strong>PRODUCT</strong></div>
							<div><strong>TOTAL</strong></div>
						</div>
						@for ($i = 0; $i < $count; $i++)
							<div class="order-products">
								<div class="order-col">
									<div>{{$bookUser[$i]->amount}}x {{$user->books[$i]->title}}</div>
									<div>Rp. {{$user->books[$i]->price * $bookUser[$i]->amount}}</div>
								</div>
							</div>
						@endfor
						<div class="order-col">
							<div>Shiping</div>
							<div><strong>FREE</strong></div>
						</div>
						<div class="order-col">
							<div><strong>TOTAL</strong></div>
							<div>
								<strong class="order-total">Rp. 
									@php
										$total = 0;
										for ($i=0; $i < $count; $i++) { 
										$total += $user->books[$i]->price * $bookUser[$i]->amount;
										}
										echo($total);
									@endphp
								</strong>
							</div>
						</div>
					</div>
					<div class="payment-method">
						<div class="input-radio">
							<input type="radio" name="payment" id="payment-1" value="Direct Bank Transfer">
							<label for="payment-1">
								<span></span>
								Direct Bank Transfer
							</label>
						</div>
						<div class="input-radio">
							<input type="radio" name="payment" id="payment-2" value="Alfamart/Indomart">
							<label for="payment-2">
								<span></span>
								Alfamart/Indomart
							</label>
						</div>
						<div class="input-radio">
							<input type="radio" name="payment" id="payment-3" value="Paypal">
							<label for="payment-3">
								<span></span>
								Paypal
							</label>
						</div>
					</div>
					<div class="input-checkbox">
						<input type="checkbox" id="terms">
						<label for="terms">
							<span></span>
							I've read and accept the <a href="#">terms & conditions</a>
						</label>
					</div>
					<input type="submit" value="Place order"  class="primary-btn order-submit">
					{{-- <a href="#" class="primary-btn order-submit">Place order</a> --}}
				</div>
				<!-- /Order Details -->
				</form>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

@endsection
