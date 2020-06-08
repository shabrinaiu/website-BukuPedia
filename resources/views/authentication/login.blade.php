@extends('authentication.nav-auth')

@section('title_page', 'Login')

@section('section')
<form action="/login/post" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <input name="email" class="input" type="email" placeholder="Email">
    </div>
    <div class="form-group">
        <input name="password" class="input" type="password" placeholder="Password">
    </div>
    <a href="/register">Don't have account, please register</a>
    <input type="submit" value="Login" class="primary-btn btn-update">
</form> 
@endsection