<?php

namespace App\Http\Controllers;

use App\OrderList;
use App\User;
use App\Book;
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

    public function placeOrder(Request $request){
        $text = "";
        $total = 0;
        $user = User::find(Auth::user()->id);
        $bookUser = DB::table('book_user')->where('users_id', Auth::user()->id)->get();
        for ($i=0; $i < $bookUser->count(); $i++) { 
            $text .= $bookUser[$i]->amount."x ".$user->books[$i]->title." (Rp. ".$bookUser[$i]->amount * $user->books[$i]->price.")\n";
        }
        for ($i=0; $i < $bookUser->count(); $i++) { 
            $total += $user->books[$i]->price * $bookUser[$i]->amount;
        }
        OrderList::create([
            'name' => $request->firstName." ".$request->lastName,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'zip' => $request->zip,
            'phone' => $request->phone,
            'notes' => $request->notes,
            'order' => $text,
            'total' => $total,
            'payment' => $request->payment,
            'users_id' => auth()->user()->id
        ]);
        for ($i=0; $i < $bookUser->count(); $i++) { 
            $book = Book::find($user->books[$i]->id);
            $book->stock -= $bookUser[$i]->amount;
            $book->sold += $bookUser[$i]->amount;
            $book->save();
        }
        DB::table('book_user')->where('users_id', Auth::user()->id)->delete();
        return redirect('/order-history');
    }
}
