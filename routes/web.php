<?php

use Illuminate\Support\Facades\Route;
use App\Book;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'BookController@index');

Route::get('/checkout', 'CartController@checkout')->middleware('auth');

Route::get('/product/{id}', 'BookController@show')->middleware('auth');

Route::post('/product/add-to-cart', 'CartController@addToCart')->middleware('auth');

Route::get('/cart', 'CartController@index')->middleware('auth');

Route::get('/cart/product/addQuantity/{id}', 'CartController@addQuantity')->middleware('auth');

Route::get('/cart/product/removeQuantity/{id}', 'CartController@removeQuantity')->middleware('auth');

Route::get('/cart/product/removeItem/{id}', 'CartController@removeItem')->middleware('auth');

Route::get('/store/{category}', function ($category) {
    switch ($category) {
        case 'novel':
            $id = 1;
            break;
        case 'non-fiction':
            $id = 2;
            break;
        case 'fiction':
            $id = 3;
            break;
        case 'comic':
            $id = 4;
            break;
        case 'biography':
            $id = 5;
            break;
        case 'kids':
            $id = 6;
            break;
    }
    $books = Book::where('category_id', $id)->paginate(8);
    return view('store/store', ['category' => $category, 'books' => $books]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/order-list', function () {
    return view('/admin/order-list');
});

Route::get('/profile', function () {
    return view('account/profile');
})->middleware('auth');

Route::get('/order-history', function () {
    return view('account/order-history');
})->middleware('auth');

Route::get('/register', 'AuthController@register')->middleware('guest');

Route::post('/register/post', 'AuthController@postRegister')->middleware('guest');

Route::get('/login', 'AuthController@login')->middleware('guest')->name('login');

Route::post('/login/post', 'AuthController@postLogin')->middleware('guest');

Route::get('/logout', 'AuthController@logout')->middleware('auth');

Route::get('/admin/product-tables', 'BookController@adminIndex')->middleware('auth')->name('admin');

Route::get('/admin/create-product', 'BookController@create')->middleware('auth');

Route::post('/admin/create-product/store', 'BookController@store')->middleware('auth');

Route::get('/admin/publisher-tables', 'PublisherController@index')->middleware('auth');

Route::get('/admin/author-tables', 'AuthorController@index')->middleware('auth');

Route::get('/admin/create-publisher', 'PublisherController@create')->middleware('auth');

Route::get('/admin/create-author', 'AuthorController@create')->middleware('auth');

Route::post('/admin/publisher-store', 'PublisherController@store')->middleware('auth');

Route::post('/admin/author-store', 'AuthorController@store')->middleware('auth');

Route::get('/admin/addQuantity/{id}', 'BookController@addQuantity')->middleware('auth');

Route::get('/admin/removeQuantity/{id}', 'BookController@removeQuantity')->middleware('auth');

Route::get('/admin/product-tables/delete/{id}', 'BookController@destroy')->middleware('auth');

//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
