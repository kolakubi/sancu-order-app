<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    public static function insert_data($item){
        return DB::table('carts')->insert([
            'id_produk' => $item['id_produk'],
            'id_produk_detail' => $item['id_produk_detail'],
            'jumlah_produk' => $item['jumlah_produk'],
            'id_user' => 1,
        ]);
    }
}
