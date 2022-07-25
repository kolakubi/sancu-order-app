<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Order_details;
use App\Models\Kartu_stok;
use App\Models\Config;
use App\Models\Notification;

class CartController extends Controller
{
    private $server_host;

    public function __construct(){
        $this->server_host=Config::where('nama', 'server_host')->get()[0]->nilai.'storage/';
    }

    public function show_cart(){

        // ambil id_user dari session
        // ambil data cart dari session id_user
        $cart_items = Cart::show_data(auth()->user()->id);

        // jika ada selisih stok
        foreach($cart_items as $item){
            if($item->jumlah_stok < $item->jumlah_produk){
                // update cart sessuai stok yg ada
                Cart::where('id_user', auth()->user()->id)
                    ->where('id_produk_detail', $item->id_produk_detail)
                    ->update([
                        'jumlah_produk' => $item->jumlah_stok
                    ]);
            }
        }

        // ambil id_user dari session
        // ambil data cart dari session id_user
        $cart_items = Cart::show_data(auth()->user()->id);

        $alamat = Cart::get_alamat(auth()->user()->id);

        return view('keranjang', [
            'title' => 'Keranjang',
            'cart_items' => $cart_items,
            'alamat' => $alamat,
            'server_host' => $this->server_host
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
                    // dd($data[$i]);
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

    public static function get_cart_total_mount(){
        $cart_items = Cart::show_data(auth()->user()->id);

        $subtotal = 0;
        foreach($cart_items as $item){
            if($item->jumlah_stok > 0){
                
                $subtotal += ($item->jumlah_produk*$item->harga_produk);
            }
        }

        // return 'Rp '.number_format($subtotal, 0);
        return $subtotal;
    }

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

    public static function remove_1_item(Request $id_cart){
        $action = Cart::remove_1_item($id_cart);
        return $action;
    }

    public static function delete_all_items(Request $id_produk){
        $action = Cart::delete_all_items($id_produk);
        return $action;
    }

    public static function checkout(Request $data){
        // ambil data cart yang stoknya > 0
        $cartItems = Cart::show_data_not_0(auth()->user()->id);
        $totalStokOrder = 0;
        foreach($cartItems as $item){
            $totalStokOrder += $item->jumlah_stok;
        }
        if($totalStokOrder < 1){
            return 'stok-habis';
        }
        // 
        // bikin variable baru untuk semua data
        $checkoutData = [
            'id_alamat' => $data->id_alamat,
            'coupon'=> $data->coupon,
            'berat'=> $data->berat,
            'cart_items' => $cartItems
        ];
        //
        // posting ke TABLE ORDERS
        $actionInsert = Order::create([
            'id_user' => auth()->user()->id,
            'id_alamat' => $data->id_alamat,
            'coupon' => $data->coupon,
            'dropship' => $data->dropship['status'],
            'dropship_nama' => $data->dropship['nama'],
            'dropship_telepon' => $data->dropship['telepon'],
            'dropship_alamat' => $data->dropship['alamat'], 
            'status' => '1'
        ]);

        // 
        // ambil ID ORDERS nya
        $insertId = $actionInsert->id;
        // 
        // posting ke TABLE ORDERS DETAIL
        foreach($cartItems as $item){
            // jika jumlah order lebih besar
            // dari pada stok tersedia
            // maka yg dipakai stok yg tersedia
            if($item->jumlah_produk > $item->jumlah_stok){
                $item->jumlah_produk = $item->jumlah_stok;
            }

            // posting ke order_details
            Order_details::create([
                'id_order' => $insertId,
                'id_user' => auth()->user()->id,
                'id_produk_detail' => $item->id_produk_detail,
                'jumlah_produk' => $item->jumlah_produk,
                'harga_produk' => $item->harga_produk,
            ]);
            // update stok
            Order_details::Update_stok($item);

            // update kartu stok
            // ambil saldo stok terakhir
            $data_saldo_terakhir = Cart::get_saldo_terakhir_kartu_stok($item->id_produk_detail);

            Kartu_stok::create([
                'id_produk_detail' => $item->id_produk_detail,
                'status' => 'out',
                'jumlah' => $item->jumlah_produk,
                'keterangan' => 'order agen nomor #'.$insertId,
                'saldo' => $data_saldo_terakhir - (int)$item->jumlah_produk
            ]);
        }

        // posting ke notification
        // buat admin
        // id administrator = admin
        Notification::create([
            'id_user' => 'admin',
            'id_order' => $insertId,
            'tipe' => 1,
            'content' => 'Order Baru',
            'dilihat' => 0,
            'trash' => 0
        ]);

        //
        // kosongin semua cart
        //
        Cart::where('id_user', auth()->user()->id)->delete();
        return true;
    }
}