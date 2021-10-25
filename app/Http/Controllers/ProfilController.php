<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //
    public function show(){
        return view('profil', [
            'title' => 'profil',
        ]);
    }

    public function transaksi(){
        return view('transaksi', [
            'title' => 'transaksi'
        ]);
    }
}
