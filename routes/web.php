<?php

use App\Models\Produk;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
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

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/category/{cath}', [ProdukController::class, 'show_categories']);
Route::get('/category', function(){
    header('location: /', true, 301);
    exit();
});

Route::get('/profil', [ProfilController::class, 'show']);
Route::get('/profil/transaksi', [ProfilController::class, 'transaksi']);

Route::get('/produk/{id}', [ProdukController::class, 'show_produk']);
Route::post('/produk/addtocart', [CartController::class, 'add_cart']);

Route::get('/keranjang', function (){
    return view('keranjang', [
        'title' => 'Keranjang'
    ]);
});

// // dibikin dinamis
// Route::get('/sancu/baby-girl-pink', function (){
//     return view('single-product', [
//         'title' => 'Single Product'
//     ]);
// });
