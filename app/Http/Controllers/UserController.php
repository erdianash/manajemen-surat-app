<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login ()
    {
        $users = User::all();
        $data ['title'] = 'login';
        return view ('User/login', $data);
    }
     public function login_action(Request $request)
     {
       // $credentials = $request->only('username', 'password');

       // if (Auth::attempt($credentials)) {
            // Login berhasil
            //return redirect()->intended('/home'); // Ganti '/dashboard' dengan rute setelah login berhasil
        //} else {
            // Login gagal
            //return redirect()->back()->withInput()->withErrors(['username' => 'Login gagal. Periksa kembali username dan password Anda.']);
        //}
    
        //return redirect ('login');
        $request->validate([
            'username'=>'required',
            'password'=>'required',
            

        ]);
    return redirect()->route('home');
    }
    
    //public function authenticating(Request $request)
    //{
        
       //$credentials = $request->validate([
        //'username'=> ['required'],
        //'password'=> ['required'],

       //]);
// cek apakah login valid
// cek apakah staff user status=active
       
    }
//}
