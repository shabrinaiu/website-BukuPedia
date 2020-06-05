@extends('layouts.app')

@section('section')
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- ASIDE -->
			<div id="aside" class="col-md-4 col-xs-12">
				<!-- aside Widget -->
				<div class="aside">
                    <h3 class="profile-title">Your Account</h3>
                    <ul class="profile-links">
                        <li><a href="#"><i class="fa fa-user-circle-o"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i>Order History</a></li>
                    </ul>
				</div>
				<!-- /aside Widget -->

			</div>
			<!-- /ASIDE -->
			@yield('account-section')
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
@endsection