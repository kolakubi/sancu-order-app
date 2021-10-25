<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    public static function add_cart(Request $data){
        // data yg didapat
        // [
        //     {"id_produk_detail":"6","id_produk":"1","jumlah_produk":"1"},
        //     {"id_produk_detail":"9","id_produk":"1","jumlah_produk":"1"}
        // ]
        // cara akses
        // return $data[0]['id_produk_detail'];
        // output 6
        return $data;
    }
}
