<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function get_order_item_detail($id_order){
        return $dataItem = DB::table('orders')
            ->select('*', 'orders.id as id_order')
            ->where('id_order', $id_order)
            ->join('order_details', 'orders.id', '=', 'order_details.id_order')
            ->join('produk_details', 'order_details.id_produk_detail', '=', 'produk_details.id')
            ->join('produks', 'produk_details.id_produk', '=', 'produks.id')
            ->orderBy('produks.id')
            ->orderBy('produk_details.size', 'DESC')
            ->get();
    }

    public static function get_alamat($id_order){
        return DB::table('alamats')
            ->join('orders', 'orders.id_alamat', '=', 'alamats.id')
            ->where('orders.id', $id_order)
            ->first();
    }

}
