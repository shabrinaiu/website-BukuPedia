@extends('layouts.app')

@section('section')

<div class="container">
    <div class="cart">
      <!-- table -->
      <div class="table">
          <!-- table header -->
          <div class="layout-inline row th">
            <div class="col col-pro">Product</div>
            <div class="col col-price align-center ">Price</div>
            <div class="col col-qty align-center">Quantity</div>
            <div class="col">TOTAL</div>
            <div class="col"></div>
          </div>
          @for ($i = 0; $i < $count; $i++)
              <!-- table list -->
            <div class="layout-inline row">
              <div class="col col-pro layout-inline">
                <div  class="cart-img">
                  <img src="{{asset('/img/book_image/'.$user->books[$i]->image)}}" alt="kitten" />
                </div>
                <p>{{$user->books[$i]->title}}</p>
              </div>
              <div class="col col-price col-numeric align-center ">
                <p>Rp. {{$user->books[$i]->price}}</p>
              </div>
              <div class="col col-qty layout-inline">
                <a href="/cart/product/removeQuantity/{{$bookUser[$i]->id}}" class="qty">-</a>
                  <input type="numeric" value="{{$bookUser[$i]->amount}}" />
                <a href="/cart/product/addQuantity/{{$bookUser[$i]->id}}" class="qty">+</a>
              </div>
              <div class="col col-total col-numeric">
                <p> Rp. {{$user->books[$i]->price * $bookUser[$i]->amount}}</p>
              </div>
              <div class="col col-qty layout-inline">
                <a href="/cart/product/removeItem/{{$bookUser[$i]->id}}" class="qty">X</a>
              </div>
            </div>
          @endfor
        <div class="tf">
          <div class="row layout-inline">
            <div class="col">
              <p>Shipping</p>
            </div>
            <div class="col">FREE</div>
          </div>
            <div class="row layout-inline">
            <div class="col">
              <p>Total</p>
            </div>
            <div class="col">
              @php
                $total = 0;
                for ($i=0; $i < $count; $i++) { 
                  $total += $user->books[$i]->price * $bookUser[$i]->amount;
                }
                echo($total);
              @endphp
            </div>
          </div>
        </div>   
      </div>      
    </div>
    <a href="/checkout" class="primary-btn btn-update">Checkout</a>
</div>
@endsection