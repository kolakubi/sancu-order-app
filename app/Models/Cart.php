<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    public static function insert_data($item){

        // return DB::table('carts')->insert([
        //     'id_produk' => $item['id_produk'],
        //     'id_produk_detail' => $item['id_produk_detail'],
        //     'jumlah_produk' => $item['jumlah_produk'],
        //     'id_user' => 1,
        // ]);

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
                'id_user' => 1,
            ]);
        }
    }
}
