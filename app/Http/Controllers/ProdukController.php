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

        return view('category2', [
            'title' => $cath,
            'produks' => Produk::show_categories($cath)
        ]);
    }

    ///////////////////////////////////////////////////////
    public function show_categories_pretty(){
        return view('category2', [
            'title' => 'Pretty',
            'produks' => Produk::show_categories(3)
        ]);
    }

    public function show_produk2($id){
        return view('single-product2', [
            'title' => 'single product',
            'produk' => Produk::find($id),
            'stoks' => Produk::show_stok($id)
        ]);
    }
    ///////////////////////////////////////////////////////

    public function show_produk($id){
        return view('single-product', [
            'title' => 'single product',
            'produk' => Produk::find($id),
            'stoks' => Produk::show_stok($id)
        ]);
    }
}
