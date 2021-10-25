<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    public static function show_categories($cath){
        return DB::table('produks')->where('id_category', $cath)->get();
    }

    public static function show_produk($id){
        return DB::table('produks')->where('id', $id)->first();
    }

    public static function show_stok($id){
        return DB::table('produk_details')
        ->where('id_produk', $id)
        ->orderBy('size')
        ->get();
    }
}
