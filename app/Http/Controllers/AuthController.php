<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('authentication/login');
    }

    public function postLogin(Request $request){
        //dd(Auth::attempt(['email' => $request->email, 'password' => $request->password]));
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/profile');    
        }
        return redirect()->back();
    }

    public function register(){
        return view('authentication/register');
    }

    public function postRegister(Request $request){
        User::create([
            'name' => $request->firstName." ".$request->lastName,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
