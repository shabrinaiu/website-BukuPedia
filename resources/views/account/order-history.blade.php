@extends('layouts.account')

@section('title_page', 'History Order')

@section('account-section')
<!-- table -->
<div class="section">
    <div class="table">
        <!-- table header -->
        <div class="col-md-12 layout-inline row th">
            <div class="col-half">Shipping Info</div>
            <div class="col-half">Order Info</div>
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
@endsection