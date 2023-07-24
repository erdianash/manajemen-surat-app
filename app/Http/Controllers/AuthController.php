<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view("User/login, $data");
    }
    public function authenticating(Request $request)
    {
       $credentials = $request->validate([
        'username'=> ['required'],
        'password'=> ['required'],

       ]);
// cek apakah login valid
// cek apakah staff user status=active
       if (Auth::attempt($credentials)){
       // $request->session()->regenerate();
        //return redirect()->intended('home');
        if(Auth::user()->cekLevel ==staffpelum){
            return redirect('home');
        }
        
       }
    }
}
