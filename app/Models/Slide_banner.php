<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slide_banner extends Model
{
    use HasFactory;

    public function get_banners($posisi){

        return DB::table('slide_banners')
            ->where('posisi', $posisi)
            ->get();

    }
}
