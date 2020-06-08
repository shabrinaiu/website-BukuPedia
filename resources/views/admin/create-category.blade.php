@extends('layouts.admin-app')

@section('title_page', 'Create Category')

@section('section')
<form action="">
    <div class="form-group">
        <input id="name" class="input" type="text" placeholder="Category Name">
    </div>
    <!-- kurang button upload image tolong di tambahin wkwk -->
    <input type="submit" value="Create" class="primary-btn btn-update">
</form> 
@endsection