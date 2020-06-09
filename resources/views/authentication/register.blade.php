@extends('authentication.nav-auth')

@section('title_page', 'Register')

@section('section')
<form action="/register/post" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<input name="firstName" class="input" type="text" placeholder="First Name">
	</div>
	<div class="form-group">
		<input name="lastName" class="input" type="text" placeholder="Last Name">
	</div>
	<div class="form-group">
		<input name="email" class="input" type="text" placeholder="Email">
	</div>
	<div class="form-group">
		<input name="password" class="input" type="password" placeholder="Password">
	</div>
	<a href="/login">Alerady have account, please login</a>
	<input type="submit" value="Register" class="primary-btn btn-update">
</form>
@endsection