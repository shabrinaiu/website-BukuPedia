@extends('layouts.account')

@section('account-section')
<!-- order history -->
<div id="store" class="col-md-8 col-xs-12">
    <div class="cart">
    <h3 class="profile-title">Product History</h3>
    <!-- table -->
    <div class="table">
        <!-- table header -->
        <div class="layout-inline row th">
            <div class="col col-pro">Product</div>
            <div class="col col-price align-center ">Price</div>
        </div>
        <!-- /table header -->
        <!-- table list -->
        <div class="layout-inline row">
        <div class="col col-pro layout-inline">
            <div  class="cart-img">
                <img src="./img/category-shop-1.png" alt="kitten" />
            </div>
            <p>Happy Little Critter</p>
        </div>
        <div class="col col-price col-numeric align-center ">
            <p>£59.99</p>
        </div>
        <!-- /table list -->
    </div> 
    <!-- /table -->     
    </div>
</div>
<!-- /order history -->
@endsection