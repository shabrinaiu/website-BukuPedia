<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        $user = User::find(Auth::user()->id);
        $bookUser = DB::table('book_user')->where('users_id', Auth::user()->id)->get();
        $count = DB::table('book_user')->where('users_id', Auth::user()->id)->count();
        return view('order/cart', ['user' => $user, 'bookUser' => $bookUser, 'count' => $count]);
    }

    public function checkout(){
        $user = User::find(Auth::user()->id);
        $bookUser = DB::table('book_user')->where('users_id', Auth::user()->id)->get();
        $count = DB::table('book_user')->where('users_id', Auth::user()->id)->count();
        return view('order/checkout', ['user' => $user, 'bookUser' => $bookUser, 'count' => $count]);
    }

    public function addToCart(Request $request){
        DB::table('book_user')->insert([
            'users_id' => Auth::user()->id,
            'book_id' => $request->bookID,
            'amount' => $request->quantity
        ]);
        return redirect('/cart');
    }

    public function addQuantity($id){
        DB::table('book_user')->where('id', $id)->increment('amount');
        return redirect('/cart');
    }

    public function removeQuantity($id){
        DB::table('book_user')->where('id', $id)->decrement('amount');
        return redirect('/cart');
    }

    public function removeItem($id){
        DB::table('book_user')->where('id', $id)->delete();
        return redirect('/cart');
    }
}
