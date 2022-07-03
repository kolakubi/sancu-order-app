<?php

use App\Models\Produk;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\NotificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

// Route::group(['middleware'=>'CekLoginMiddleware'], function(){
Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', [HomeController::class, 'show']);
    
    Route::get('/produk2/{id}', [ProdukController::class, 'show_produk2']);
    Route::get('/category/{cath}', [ProdukController::class, 'show_categories']);
    Route::get('/category', function(){
        header('location: /', true, 301);
        exit();
    });

    Route::get('/profil', [ProfilController::class, 'show']);
    Route::get('/profil/bantuan', [ProfilController::class, 'show_bantuan'])->name('bantuan');
    Route::get('/profil/alamat', [ProfilController::class, 'show_alamat'])->name('alamat');
    Route::get('/profil/add_alamat', [ProfilController::class, 'add_alamat'])->name('add_alamat');
    Route::get('/profil/alamat_utama/{id}', [ProfilController::class, 'alamat_utama']);
    Route::post('/alamat/insert_alamat', [ProfilController::class, 'insert_alamat'])->name('insert_alamat');
    Route::get('/profil/totalpembelian', [ProfilController::class, 'total_pembelian'])->name('total_pembelian');
    Route::post('/profil/totalpembelian', [ProfilController::class, 'get_total_pembelian']);
    // Route::post('/profil/transaksi_detail/upload_bukti_bayar', [ProfilController::class, 'upload_bukti_bayar'])->name('upload_bukti_bayar');

    Route::get('/profil/transaksi', [ProfilController::class, 'transaksi']);
    Route::get('/profil/transaksi_detail/{id}', [ProfilController::class, 'transaksi_detail']);
    Route::post('/profil/transaksi_detail/{id}', [ProfilController::class, 'upload_bukti_bayar']);
    Route::post('/profil/transaksi/selesai', [ProfilController::class, 'transaksi_selesai'])->name('transaksi_selesai');
    Route::post('/profil/transaksi/batal', [ProfilController::class, 'transaksi_batal'])->name('transaksi_batal');

    // Route::get('/produk/{id}', [ProdukController::class, 'show_produk']);
    Route::post('/produk/addtocart', [CartController::class, 'add_cart']);
    Route::post('/produk/cekstok', [CartController::class, 'cek_stok']);
    Route::post('/produk/masscekstok', [CartController::class, 'mass_cek_stok']);

    Route::get('/keranjang', [CartController::class, 'show_cart'])->name('keranjang');
    Route::get('/keranjang/get_cart_total_mount', [CartController::class, 'get_cart_total_mount']);
    Route::post('/keranjang/add_1_item', [CartController::class, 'add_1_item']);
    Route::post('/keranjang/decrease_1_item', [CartController::class, 'decrease_1_item']);
    Route::post('/keranjang/remove_1_item', [CartController::class, 'remove_1_item']);
    Route::post('/keranjang/delete_all_items', [CartController::class, 'delete_all_items']);
    Route::post('/keranjang/checkout', [CartController::class, 'checkout']);

    Route::post('/coupon/cekdata', [CouponController::class, 'cekdata']);
    
    Route::get('/notification', [NotificationController::class, 'get_notif']);
    Route::get('/notification/read/{id}', [NotificationController::class, 'read']);
    Route::get('/notification/get_total_unread', [NotificationController::class, 'get_total_unread']);
});





