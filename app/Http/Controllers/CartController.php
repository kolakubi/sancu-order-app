<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public static function show_cart(){

        // ambil id_user dari session
        // ambil data cart dari session id_user
        $cart_items = Cart::show_data(auth()->user()->id);

        return view('keranjang', [
            'title' => 'Keranjang',
            'cart_items' => $cart_items
        ]);
        
    }

    public static function add_cart(Request $data){
        // data yg didapat
        // bentuk JSON
        // [
        //     {"id_produk_detail":"6","id_produk":"1","jumlah_produk":"1"},
        //     {"id_produk_detail":"9","id_produk":"1","jumlah_produk":"1"}
        // ]
        // cara akses
        // return $data[0]['id_produk_detail'];
        // return $data;

        // for($i=0; $i<9; $i++){
        for($i=0; $i<count((array)$data); $i++){
        // for($i=0; $i<sizeof($data); $i++){
            if($data[$i]['jumlah_produk'] !== null){
                Cart::insert_data($data[$i]);
            }
            else{
                break;
            }
        }

        return 'sukses';
    }

    public static function get_cart_data(){
        $cart_items = Cart::show_data(auth()->user()->id);

        $subtotal = 0;
        foreach($cart_items as $item){
            $subtotal += ($item->jumlah_produk*$item->harga_produk);
        }

        return 'Rp '.number_format($subtotal, 0);
    }
}