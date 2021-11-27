<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide_banner;

class HomeController extends Controller
{
    public static function show(){

        $slide = Slide_banner::get_banners(1);

        if(session('login')){
            return view('home', [
                'title' => 'Home',
                'sliders' => $slide
            ]);
        }
        else{
            return redirect('/');
        }
        
    }
}
