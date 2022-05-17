<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    public static function show_data($id_user){
        return $dataItem = DB::table('carts')
            ->select('*', 'carts.id as carts_id')
            ->where('id_user', $id_user)
            ->join('produks', 'carts.id_produk', '=', 'produks.id')
            ->join('produk_details', 'carts.id_produk_detail', '=', 'produk_details.id')
            ->orderBy('carts.id_produk')
            ->orderBy('produk_details.size', 'DESC')
            ->get();
    }

    public static function insert_data($item){
        // cek dlu apakah ada data dengan id_produk_detail
        $dataItem = DB::table('carts')
            ->where('id_produk_detail', '=', $item['id_produk_detail'])
            ->get();
        // $dataItem = object
        // jika ada, tambah jumlah
        if(count($dataItem) > 0){
            // die($dataItem);
            return DB::table('carts')
                ->where('id_produk_detail', $item['id_produk_detail'])
                ->update(
                    ['jumlah_produk' => $dataItem[0]->jumlah_produk+$item['jumlah_produk']]
                );
        }
        else{
            // jika tidak ada masukkan data baru
            return DB::table('carts')->insert([
                'id_produk' => $item['id_produk'],
                'id_produk_detail' => $item['id_produk_detail'],
                'jumlah_produk' => $item['jumlah_produk'],
                'id_user' => auth()->user()->id,
            ]);
        }
    }

    public static function get_saldo_terakhir_kartu_stok($id_item_detail){
        return $data = DB::table('kartu_stoks')
            ->select('*')
            ->where('id_produk_detail', $id_item_detail)
            ->latest('created_at')
            ->first()->saldo;
    }

    public static function get_stok_data($id){
        return $data = DB::table('produk_details')
            ->where('id', $id)
            ->first()->jumlah_stok;
    }

    public static function cek_item_di_cart($id){
        $status = DB::table('carts')
            ->where('id_produk_detail', $id)
            ->where('id_user', auth()->user()->id)
            ->first();

        if($status){
            return $status;
        }

        return false;
        // return $status;
    }

    public static function add_1_item($id_cart){
        $id_cart = $id_cart[0];
        $jumlah_di_cart = DB::table('carts')
            ->where('id', $id_cart)
            ->first()->jumlah_produk;

        return DB::table('carts')
            ->where('id', $id_cart)
            ->update(['jumlah_produk' => $jumlah_di_cart+1]);
    }

    public static function decrease_1_item($id_cart){
        $id_cart = $id_cart[0];
        $jumlah_di_cart = DB::table('carts')
            ->where('id', $id_cart)
            ->first()->jumlah_produk;

        return DB::table('carts')
            ->where('id', $id_cart)
            ->update(['jumlah_produk' => $jumlah_di_cart-1]);
    }

    public static function remove_1_item($id_cart){
        $id_cart = $id_cart[0];
        return DB::table('carts')
            ->where('id', $id_cart)
            ->delete();
    }
    
    public static function delete_all_items($id_produk){
        $id_produk = $id_produk[0];

        return DB::table('carts')
            ->where('id_produk', $id_produk)
            ->where('id_user', auth()->user()->id)
            ->delete();
    }

    public static function get_alamat($id_user){
        return DB::table('alamats')
            ->where('id_user', $id_user)
            ->where('utama', 1)
            ->first();
    }

    public static function show_data_not_0($id_user){
        return $dataItem = DB::table('carts')
            ->select('*', 'carts.id as carts_id')
            ->where('id_user', $id_user)
            ->where('jumlah_stok', '>', 0)
            ->join('produks', 'carts.id_produk', '=', 'produks.id')
            ->join('produk_details', 'carts.id_produk_detail', '=', 'produk_details.id')
            ->orderBy('carts.id_produk')
            ->orderBy('produk_details.size', 'DESC')
            ->get();
    }

}
