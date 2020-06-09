@extends('layouts.admin-app')

@section('title_page', 'Create Books')

@section('section')
<form action="/admin/create-product/store" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <input name="title" class="input" type="text" placeholder="Title">
    </div>
    <div class="form-group">
        <input name="description" class="input" type="text" placeholder="Description">
    </div>
    <div class="form-group">
        <select name="category_id" class="input">
            <option value="-">-- Select Category --</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <select name="author_id" class="input">
            <option value="-">-- Select Author --</option>
            @foreach ($authors as $author)
                <option value="{{$author->id}}">{{$author->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <select name="publisher_id" class="input">
            <option value="-">-- Select Publisher --</option>
            @foreach ($publishers as $publisher)
                <option value="{{$publisher->id}}">{{$publisher->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <input name="stock" class="input" type="number" placeholder="Stock">
    </div>
    <div class="form-group">
        <input name="price" class="input" type="text" placeholder="Price">
    </div>
    <div class="form-group">
        <input name="image" type="file">
    </div>
    <input type="submit" value="Create" class="primary-btn btn-update">
</form> 
@endsection