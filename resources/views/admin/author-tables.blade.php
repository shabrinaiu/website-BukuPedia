@extends('layouts.admin-app')

@section('title_page', 'Author')

@section('section')

<div class="container">
    <div class="cart">
        <div class="row">	            
            <div class="col-md-12 col-xs-12">
                <a href="/admin/create-author" class="primary-btn btn-update">Create</a>
            </div>
        </div>
        <!-- table -->
        <div class="section">
            <div class="table">
                <!-- table header -->
                <div class="col-md-12 layout-inline row th">
                    <div class="col col-pro">Author Name</div>
                </div>
                @foreach ($authors as $author)
                    <!-- table list -->
                    <div class="col-md-12 layout-inline row">
                        <div class="col col-pro layout-inline">
                            <p>{{$author->name}}</p>
                        </div>
                    </div>
                    <!-- table list -->
                @endforeach
            </div>
            {{$authors->links()}} 
        </div>    
    </div>
</div>
@endsection