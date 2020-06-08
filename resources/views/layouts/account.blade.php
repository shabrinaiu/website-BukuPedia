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
						<li><a href="/profile"><i class="fa fa-user-circle-o"></i>Profile</a></li>
						@if (auth()->user()->id == 1)
							<li><a href="{{route('admin')}}"><i class="fa fa-user-circle-o"></i>Administrator</a></li>
						@endif
						@if (auth()->user()->id != 1)
							<li><a href="/order-history"><i class="fa fa-shopping-cart"></i>Order History</a></li>
						@endif
						<li><a href="/logout"><i class="fa fa-sign-out"></i>Log out</a></li>
                    </ul>
				</div>
				<!-- /aside Widget -->
			</div>
			<!-- /ASIDE -->
			<!-- Main Side -->
			<div id="store" class="col-md-8 col-xs-12">
				<div class="aside">
					<h3 class="profile-title">@yield('title_page')</h3>
					@yield('account-section')
				</div>
			</div>
			<!-- /Main Side -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
@endsection