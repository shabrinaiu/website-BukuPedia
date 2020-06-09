@extends('layouts.admin-app')

@section('title_page', 'Publisher')

@section('section')

<div class="container">
    <div class="cart">
        <div class="row">	            
            <div class="col-md-12 col-xs-12">
                <a href="/admin/create-publisher" class="primary-btn btn-update">Create</a>
            </div>
        </div>
        <!-- table -->
        <div class="section">
            <div class="table">
                <!-- table header -->
                <div class="col-md-12 layout-inline row th">
                    <div class="col col-pro">Publisher Name</div>
                </div>
                @foreach ($publishers as $publisher)
                    <!-- table list -->
                    <div class="col-md-12 layout-inline row">
                        <div class="col col-pro layout-inline">
                            <p>{{$publisher->name}}</p>
                        </div>
                    </div>
                    <!-- table list -->
                @endforeach
            </div>
            {{$publishers->links()}}
        </div>    
    </div>
</div>
@endsection