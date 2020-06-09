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
                    <div class="col col-pro">Title</div>
                    <div class="col col-detail">Detail</div>
                    <div class="col col-price">Price</div>
                    <div class="col col-quantity">Quantity</div>
                    <div class="col"></div>
                </div>
                @foreach ($books as $book)
                    <!-- table list -->
                    <div class="col-md-12 layout-inline row">
                        <div class="col col-pro layout-inline">
                            <ul>
                                <li>
                                    <div  class="cart-img">
                                        <img src="{{asset('/img/book_image/'.$book->image)}}" alt="" />
                                    </div>
                                </li>
                                <li>{{$book->title}}</li>
                            </ul>
                        </div>
                        <div class="col col-detail layout-inline">
                            <ul>
                                <li><span>Author : </span>{{$book->author->name}}</li>
                                <li><span>Category : </span>{{$book->category->name}}</li>
                                <li><span>Publisher : </span>{{$book->publisher->name}}</li>
                                <li><span>Description : </span>{{$book->description}}</li>
                            </ul>
                        </div>
                        <div class="col col-price col-numeric align-center ">
                            <p>Rp. {{$book->price}}</p>
                        </div>
                        <div class="col col-qty layout-inline">
                            <a href="/admin/removeQuantity/{{$book->id}}" class="qty">-</a>
                            <input type="numeric" value="{{$book->stock}}" />
                            <a href="/admin/addQuantity/{{$book->id}}" class="qty">+</a>
                        </div>
                        <div class="col col-qty layout-inline">
                            <a href="/admin/product-tables/delete/{{$book->id}}" class="qty">X</a>
                        </div>
                    </div>
                    <!-- table list -->
                @endforeach
            </div>
            {{$books->links()}}  
        </div>    
    </div>
</div>
@endsection