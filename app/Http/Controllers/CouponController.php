<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponController extends Controller
{
    public static function cekdata(Request $kode_coupon){
        $action = Coupon::cekdata($kode_coupon[0]);
        if($action){
            return $action->potongan;
        }

        return false;
    }
}
