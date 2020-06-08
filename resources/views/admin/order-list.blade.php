@extends('layouts.admin-app')

@section('title_page', 'Product')

@section('section')

<div class="container">
    <div class="cart">
        <div class="row">	            
            <div class="col-md-12 col-xs-12">
                <a href="/admin/create-product" class="primary-btn btn-update">Create</a>
            </div>
        </div>
        <!-- table -->
        <div class="section">
            <div class="table">
                <!-- table header -->
                <div class="col-md-12 layout-inline row th">
                    <div class="col-half">Shipping Info</div>
                    <div class="col-half">Product Info</div>
                </div>
                <!-- table list -->
                <div class="col-md-12 layout-inline row">
                    <div class="col col-half layout-inline">
                        <ul>
                            <li><span>Name : </span></li>
                            <li><span>Address : </span></li>
                            <li><span>City : </span></li>
                            <li><span>Country : </span></li>
                            <li><span>Zip Code : </span></li>
                            <li><span>Phone Number : </span></li>
                            <li><span>Notes : </span></li>
                        </ul>
                    </div>
                    <div class="col col-half layout-inline">
                        <ul>
                            <div  class="cart-img">
                                <img src="" alt="" />
                            </div>
                            <li>Title : </li>
                            <li><span>Quantity : </span></li>
                            <li>Rp. </li>
                        </ul>
                    </div>
                </div>
                <!-- table list -->
            </div> 
        </div>    
    </div>
</div>
@endsection