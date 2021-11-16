<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function show(){
        if(session('login')){
            return view('home', [
                'title' => 'Home'
            ]);
        }
        else{
            return redirect('/');
        }
        
    }
}
