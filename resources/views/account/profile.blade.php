@extends('layouts.account')

@section('title_page', 'Profile Info')

@section('account-section')
<ul class="profile-links">
	<li><i class="fa fa-user-o"></i>Nama : {{auth()->user()->name}}</li>
	<li><i class="fa fa-envelope-o"></i>Email : {{auth()->user()->email}}</li>
	<li><i class="fa fa-key"></i>Password : **********</li>
</ul>
@endsection