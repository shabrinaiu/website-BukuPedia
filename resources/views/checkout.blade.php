@extends('layouts.app')

@section('section')

@include('partials.breadcrumbs')

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-7">
				<!-- Shipping Details -->
				<div class="billing-details">
					<div class="section-title">
						<h3 class="title">Shipping Order</h3>
					</div>
					<div class="form-group">
						<input id="first-name" class="input" type="text" placeholder="First Name">
					</div>
					<div class="form-group">
						<input id="last-name" class="input" type="text" placeholder="Last Name">
					</div>
					<div class="form-group">
						<input id="address" class="input" type="text" placeholder="Address">
					</div>
					<div class="form-group">
						<input id="city" class="input" type="text" placeholder="City">
					</div>
					<div class="form-group">
						<input id="country" class="input" type="text" placeholder="Country">
					</div>
					<div class="form-group">
						<input id="zip-code" class="input" type="text" placeholder="ZIP Code">
					</div>
					<div class="form-group">
						<input id="phone-number" class="input" type="number" placeholder="Phone Number">
					</div>
				</div>
				<!-- /Shipping Details -->

				<!-- Order notes -->
				<div class="order-notes">
					<textarea class="input" placeholder="Order Notes"></textarea>
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
					<div class="order-products">
						<div class="order-col">
							<div>1x Novel Dilan 1990</div>
							<div>$980.00</div>
						</div>
						<div class="order-col">
							<div>2x Novel Dilan 1991</div>
							<div>$980.00</div>
						</div>
					</div>
					<div class="order-col">
						<div>Shiping</div>
						<div><strong>FREE</strong></div>
					</div>
					<div class="order-col">
						<div><strong>TOTAL</strong></div>
						<div><strong class="order-total">$2940.00</strong></div>
					</div>
				</div>
				<div class="payment-method">
					<div class="input-radio">
						<input type="radio" name="payment" id="payment-1">
						<label for="payment-1">
							<span></span>
							Direct Bank Transfer
						</label>
					</div>
					<div class="input-radio">
						<input type="radio" name="payment" id="payment-2">
						<label for="payment-2">
							<span></span>
							Alfamart/Indomart
						</label>
					</div>
					<div class="input-radio">
						<input type="radio" name="payment" id="payment-3">
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
				<a href="#" class="primary-btn order-submit">Place order</a>
			</div>
			<!-- /Order Details -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

@endsection
