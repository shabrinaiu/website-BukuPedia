@extends('layouts.admin-app')

@section('title_page', 'Category')

@section('section')

<div class="container">
    <div class="cart">
        <div class="row">	            
            <div class="col-md-12 col-xs-12">
                <a href="#" class="primary-btn btn-update">Create</a>
            </div>
        </div>
        <!-- table -->
        <div class="section">
            <div class="table">
                <!-- table header -->
                <div class="col-md-12 layout-inline row th">
                    <div class="col col-pro">Name Category</div>
                </div>
                <!-- table list -->
                <div class="col-md-12 layout-inline row">
                    <div class="col col-pro layout-inline">
                        <p>Name Category</p>
                    </div>
                </div>
                <!-- table list -->
            </div>  
        </div>    
    </div>
</div>
@endsection