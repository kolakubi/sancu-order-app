<?php

use App\Models\Produk;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfilController;

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

    Route::get('/category/{cath}', [ProdukController::class, 'show_categories']);
    Route::get('/category', function(){
        header('location: /', true, 301);
        exit();
    });

    Route::get('/profil', [ProfilController::class, 'show']);
    Route::get('/profil/transaksi', [ProfilController::class, 'transaksi']);

    Route::get('/produk/{id}', [ProdukController::class, 'show_produk']);
    Route::post('/produk/addtocart', [CartController::class, 'add_cart']);

    Route::get('/keranjang', [CartController::class, 'show_cart'])->name('keranjang');
    Route::get('/keranjang/ajaxget', [CartController::class, 'get_cart_data']);
});





