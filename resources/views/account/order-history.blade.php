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

        @foreach ($lists as $list)
            <!-- table list -->
            <div class="col-md-12 layout-inline row">
                <div class="col col-half layout-inline">
                    <ul>
                        <li><span>Name : {{$list->name}}</span></li>
                        <li><span>Address : {{$list->address}}</span></li>
                        <li><span>City : {{$list->city}}</span></li>
                        <li><span>Country : {{$list->country}}</span></li>
                        <li><span>Zip Code : {{$list->zip}}</span></li>
                        <li><span>Phone Number : {{$list->phone}}</span></li>
                        <li><span>Notes : {{$list->notes}}</span></li>
                    </ul>
                </div>
                <div class="col col-half layout-inline">
                    <ul>
                        <li>Order : {{$list->order}}</li>
                        <li>Total : Rp. {{$list->total}}</li>
                        <li>Payment : {{$list->payment}}</li>
                    </ul>
                </div>
            </div>
            <!-- table list -->
        @endforeach

    </div>
</div>
@endsection