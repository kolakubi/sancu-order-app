<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Config;

class ProdukController extends Controller
{
    private $server_host;

    public function __construct(){
        $this->server_host=Config::where('nama', 'server_host')->get()[0]->nilai.'storage/';
    }

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
        if($cath == 'pelengkap'){
            $cath = 5;
        }

        return view('category2', [
            'title' => $cath,
            'produks' => Produk::show_categories($cath),
            'server_host' => $this->server_host
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
            'stoks' => Produk::show_stok($id),
            'server_host' => $this->server_host
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
