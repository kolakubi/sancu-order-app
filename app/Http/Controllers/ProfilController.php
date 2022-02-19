<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alamat;
use App\Models\Order;
use App\Models\Kartu_stok;
use App\Models\Order_details;

class ProfilController extends Controller
{
    //
    public function show(){
        return view('profil', [
            'title' => 'profil',
        ]);
    }

    public function transaksi(){
        // get data orders berdasarkan id_user
        $orders = Order::where('id_user', auth()->user()->id)
            ->orderBy('id', 'DESC')
            ->get();

        return view('transaksi', [
            'title' => 'transaksi',
            'orders' => $orders
        ]);
    }

    public function transaksi_detail($id){

        $item_detail = Order::get_order_item_detail($id);
        $coupons = Order::get_coupon_info($id);
        // dd($coupons);
        $alamat = Order::get_alamat($id);
        // dd($alamat);

        return view('transaksi-detail', [
            'title' => 'detail transaksi',
            'items' => $item_detail,
            'alamat' => $alamat,
            'coupons' => $coupons
        ]);
    }

    public static function show_bantuan(){
        return view('bantuan', [
            'title' => 'bantuan'
        ]);
    }

    public static function show_alamat(){
        $listAlamat = Alamat::get_alamat(auth()->user()->id);

        return view('alamat', [
            'title' => 'alamat',
            'list_alamat' => $listAlamat
        ]);
    }

    public static function add_alamat(){
        return view('alamat_add', [
            'title' => 'tambah alamat'
        ]);
    }

    public static function insert_alamat(Request $request){
        $this_ = new self;
        // validasi
        $this_->validate($request, [
            'nama_penerima' => 'required',
            'telepon' => 'required',
            'propinsi' => 'required|not_in:0',
            'kabupaten' => 'required|not_in:0',
            'kecamatan' => 'required|not_in:0',
            'alamat_lengkap' => 'required',
            'kode_pos' => 'required'
        ]);

        $action = Alamat::insert_alamat($request);

        if($action){
            return redirect('/profil/alamat');
        }
    }

    public static function upload_bukti_bayar(Request $request){
        $validateData = $request->validate([
            'file_bukti_bayar' => 'image|file|max:2048'
        ]);

        // upload
        $file_path = $request->file('file_bukti_bayar')->store('bukti_bayar');
        // update DB
        Order::where('id', $request->orders_id)
            ->update([
                'bukti_bayar'=> $file_path,
                'status' => 3
            ]);

        return redirect('/profil/transaksi');
    }

    public function transaksi_selesai(Request $request){
        // update DB
        Order::where('id', $request->orders_id)
            ->update([
                'status' => 5
            ]);

        return redirect('/profil/transaksi');
    }

    public function transaksi_batal(Request $request){
        // update status order
        // jadi 0
        Order::where('id', $request->orders_id)
            ->update([
                'status' => 0
            ]);
        // ambil detail produk
        $detail_item = Order::get_order_item_detail($request->orders_id);
        // update kartu stok
        foreach($detail_item as $item){
            Kartu_stok::create([
                'id_order' => $item->id_order,
                'id_produk_detail' => $item->id_produk_detail,
                'status' => 'in',
                'keterangan' => 'pembatalan order agen',
            ]);

            // update stok items
            // tambah
            Order_details::Update_stok_tambah($item);
        }
        
        return redirect('/profil/transaksi');
    }

}
