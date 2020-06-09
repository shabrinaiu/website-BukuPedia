@extends('layouts.admin-app')

@section('title_page', 'Order List')

@section('section')

<div class="container">
    <div class="cart">
        {{-- <div class="row">	            
            <div class="col-md-12 col-xs-12">
                <a href="/admin/create-product" class="primary-btn btn-update">Create</a>
            </div>
        </div> --}}
        <!-- table -->
        <div class="section">
            <div class="table">
                <!-- table header -->
                <div class="col-md-12 layout-inline row th">
                    <div class="col-half">Shipping Info</div>
                    <div class="col-half">Product Info</div>
                </div>

                {{$lists->links()}}
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
    </div>
</div>
@endsection