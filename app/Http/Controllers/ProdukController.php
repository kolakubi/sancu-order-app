<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function show_categories($cath){
        if($cath == 'sancu'){
            $cath = 1;
        }
        if($cath == 'boncu'){
            $cath = 2;
        }
        if($cath == 'pretty'){
            $cath = 3;
        }
        if($cath == 'xtreme'){
            $cath = 4;
        }

        return view('category', [
            'title' => $cath,
            'produks' => Produk::show_categories($cath)
        ]);
    }

    public function show_produk($id){
        return view('single-product', [
            'title' => 'single product',
            'produk' => Produk::find($id),
            'stoks' => Produk::show_stok($id)
        ]);
    }
}
