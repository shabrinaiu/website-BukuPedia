@extends('layouts.admin-app')

@section('title_page', 'Create Publisher')

@section('section')
<form action="/admin/publisher-store" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <input id="name" name="name" class="input" type="text" placeholder="Publisher Name">
    </div>
    <!-- kurang button upload image tolong di tambahin wkwk -->
    <input type="submit" value="Create" class="primary-btn btn-update">
</form> 
@endsection