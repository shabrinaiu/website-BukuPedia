@extends('authentication.nav-auth')

@section('section')

<!-- Sign up form -->
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
						<h3 class="title">Register</h3>
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
			<div class="col-md-5">
                <img src="./img/category-shop-1.png" alt="TextBook" style="max-width:100%">
			</div>
			<!-- /Order Details -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
@endsection