<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coupon extends Model
{
    use HasFactory;

    public static function cekdata($kode_coupon){
        // $kode_coupon = $kode_coupon[0];

        return DB::table('coupons')
            ->where('name', $kode_coupon)
            ->where('masa_aktif', '>', Carbon::now())
            ->first();
    }
}
