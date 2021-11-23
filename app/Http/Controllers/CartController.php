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
            // bandingkan dengan stok real

            if(isset($data[$i])){
                if($data[$i]['jumlah_produk'] !== null){
                    Cart::insert_data($data[$i]);
                }
                else{
                    break;
                }
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

    // public static function add_cart_2(Request $request){
    //     dd($request);
    // }

    public static function cek_stok(Request $request){
        // return $request[0];
        return Cart::get_stok_data($request[0]);
    }

    public static function mass_cek_stok(Request $request){
        for($i=0; $i<count((array)$request); $i++){
            // bandingkan dengan stok real

            if(isset($request[$i])){
                if($request[$i]['jumlah_produk'] !== null){
                    // cek item apakah ada di cart
                    $status_item_di_cart = Cart::cek_item_di_cart($request[$i]['id_produk_detail']);
                    // return $status_item_di_cart;

                    // jika ada item di cart
                    // ambil stok real item
                    if($status_item_di_cart){
                        $stok_real = Cart::get_stok_data($request[$i]['id_produk_detail']);

                        // jumlahkan stok di cart + input ke keranjang
                        if( ($status_item_di_cart->jumlah_produk+$request[$i]['jumlah_produk']) > $stok_real){
                            echo 'melebihi-stok ';
                            break;
                        }

                        echo 'stok-aman ';
                    }
                    // item tidak ada di keranjang
                    else{
                        echo 'item-tdk-ada-di-keranjang ';
                    }

                }
                else{
                    break;
                }
            }
            else{
                break;
            }
            
        }
    }

    public static function add_1_item(Request $id_cart){
        $action = Cart::add_1_item($id_cart);
        return $action;
    }

    public function decrease_1_item(Request $id_cart){
        $action = Cart::decrease_1_item($id_cart);
        return $action;
    }

    public static function remove_1_item(REquest $id_cart){
        $action = Cart::remove_1_item($id_cart);
        return $action;
    }
}