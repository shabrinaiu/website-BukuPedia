@extends('layouts.app')

@section('section')

@include('partials.breadcrumbs', ['direct' => 'Cart'])

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
          </div>
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
          <div class="col col-qty layout-inline">
            <a href="#" class="qty">-</a>
              <input type="numeric" value="3" />
            <a href="#" class="qty">+</a>
          </div>
          <div class="col col-total col-numeric">
            <p> £182.95</p>
          </div>
        </div>
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
          <div class="col col-qty layout-inline">
            <a href="#" class="qty">-</a>
              <input type="numeric" value="3" />
            <a href="#" class="qty">+</a>
          </div>
          <div class="col col-total col-numeric">
            <p> £182.95</p>
          </div>
        </div>
        <div class="tf">
          <div class="row layout-inline">
            <div class="col">
              <p>Shipping</p>
            </div>
            <div class="col"></div>
          </div>
            <div class="row layout-inline">
            <div class="col">
              <p>Total</p>
            </div>
            <div class="col"></div>
          </div>
        </div>   
      </div>      
    </div>
    <a href="#" class="primary-btn btn-update">Checkout</a>
</div>
@endsection