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

        // ambil data alamat
        $list_alamat = DB::table('alamats')
            ->where('id_user', auth()->user()->id)
            ->get();

        // jika belum pernah add alamat
        if(count($list_alamat) == 0){
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
                'utama' => 1,
                'kode_pos' =>$data->kode_pos
            ]);
        }
        else{
            // jika sdh ada alamat
            // jika utama di ceklis
            if($data->alamat_utama){
                // reset semua alamat menjadi bukan alamat utama
                foreach($list_alamat as $alamat){
                    DB::table('alamats')
                        ->where('id', $alamat->id)
                        ->update([
                            'utama' => 0
                        ]);
                }
            }
        }

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

    public function alamat_utama($id){
        // ambil data alamat
        $list_alamat = DB::table('alamats')
            ->where('id_user', auth()->user()->id)
            ->get();
        // reset semua status alamat jadi 0
        foreach($list_alamat as $alamat){
            DB::table('alamats')
                ->where('id', $alamat->id)
                ->update([
                    'utama' => 0
                ]);
        }

        // update status alamat terpilih
        DB::table('alamats')
                ->where('id', $id)
                ->update([
                    'utama' => 1
                ]);
    }
}
