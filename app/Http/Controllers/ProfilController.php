<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alamat;
use App\Models\Order;
use App\Models\Kartu_stok;
use App\Models\Order_details;
use App\Models\Config;

class ProfilController extends Controller
{
    private $server_host;

    public function __construct(){
        $this->server_host=Config::where('nama', 'server_host')->get()[0]->nilai.'storage/';
    }
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
            'coupons' => $coupons,
            'server_host' =>$this->server_host
        ]);
    }

    public function total_pembelian(){
        return view('total_pembelian', [
            'title' => 'Total Pembelian',
            'sancu' => 0,
            'boncu' => 0,
            'pretty' => 0,
            'xtreme' => 0
        ]);
    }

    public function get_total_pembelian(Request $request){
        // dd($request);
        $tanggal_dari = $request->tanggaldari;
        $tanggal_sampai = $request->tanggalsampai;
        $id_user = auth()->user()->id;
        $id_category = '1';

        $jumlah_produk_sancu = 0;
        $jumlah_produk_boncu = 0;
        $jumlah_produk_pretty = 0;
        $jumlah_produk_xtreme = 0;

        $dataSancu = Order::get_data_order_by_category_and_date($id_user, '1', $tanggal_dari, $tanggal_sampai);
        // jika ada data sancu
        if($dataSancu->count() > 0){
            foreach($dataSancu as $sancu){
                $jumlah_produk_sancu += $sancu->jumlah_produk;
            }
        }

        $data_boncu = Order::get_data_order_by_category_and_date($id_user, '2', $tanggal_dari, $tanggal_sampai);
        // jika ada data boncu
        if($data_boncu->count() > 0){
            foreach($data_boncu as $boncu){
                $jumlah_produk_boncu += $boncu->jumlah_produk;
            }
        }

        $data_pretty = Order::get_data_order_by_category_and_date($id_user, '3', $tanggal_dari, $tanggal_sampai);
        // jika ada data pretty
        if($data_pretty->count() > 0){
            foreach($data_pretty as $pretty){
                $jumlah_produk_pretty += $pretty->jumlah_produk;
            }
        }

        $data_xtreme = Order::get_data_order_by_category_and_date($id_user, '4', $tanggal_dari, $tanggal_sampai);
        // jika ada data xtreme
        if($data_xtreme->count() > 0){
            foreach($data_xtreme as $xtreme){
                $jumlah_produk_xtreme += $xtreme->jumlah_produk;
            }
        }

        return view('total_pembelian', [
            'title' => 'Total Pembelian',
            'sancu' => $jumlah_produk_sancu,
            'boncu' => $jumlah_produk_boncu,
            'pretty' => $jumlah_produk_pretty,
            'xtreme' => $jumlah_produk_xtreme,
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

    public static function alamat_utama($id){
        Alamat::alamat_utama($id);

        return redirect('/profil/alamat');
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
