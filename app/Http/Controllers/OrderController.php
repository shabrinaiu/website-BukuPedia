<?php

namespace App\Http\Controllers;

use App\OrderList;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderList(){
        $lists = OrderList::paginate(10);
        return view('/admin/order-list', ['lists' => $lists]);
    }

    public function orderHistory(){
        $lists = OrderList::where('users_id', auth()->user()->id)->get();
        return view('account/order-history', ['lists' => $lists]);
    }
}
