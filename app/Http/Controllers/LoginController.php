<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    
    public static function index(){
        // jika sdh login
        if(session('login')){
            return redirect('/home');
        }

        return view('login');
    }

    public static function login(Request $request){
        $this_ = new self;
        // validasi
        $this_->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!auth()->attempt($request->only('email', 'password'))){
            return back()->with('message', 'email atau password salah');
        }
        else{
            session(['login' => true]);
            return redirect('/home');
        }

        //  cek apakah ada email
        // $data = User::where('email', $request->email)->firstOrFail();

        // if($data){
        //     // cek hash password
        //     if(Hash::check($request->password, $data->password)){
        //         // set session
        //         session(['login' => true]);
        //         return redirect('/home');
        //     }
        // }
        
        return redirect('/')->with('message', 'email atau password salah');
    }

    public static function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
