<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class alamat extends Model
{
    use HasFactory;

    public static function get_alamat($id_user){
        return DB::table('alamats')
            ->where('id_user', $id_user)
            ->get();
    }

    public static function insert_alamat($data){
        return DB::table('alamats')
            ->insert([
                'id_user' => auth()->user()->id,
                'nama_lengkap' => $data->nama_penerima,
                'telepon' => $data->telepon,
                'propinsi' => $data->nama_propinsi,
                'id_propinsi' => $data->propinsi,
                'kota_kabupaten' => $data->nama_kabupaten,
                'id_kota_kabupaten' => $data->kabupaten,
                'kecamatan' => $data->nama_kecamatan,
                'id_kecamatan' => $data->kecamatan,
                'alamat_lengkap' => $data->alamat_lengkap, 
                'detail' => $data->detail,
                'utama' => $data->alamat_utama ? $data->alamat_utama : 0,
                'kode_pos' =>$data->kode_pos
            ]);
    }
}
