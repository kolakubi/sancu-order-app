<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_details', function (Blueprint $table) {
            $table->id();
            $table->integer('id_produk');
            $table->integer('size');
            $table->integer('jumlah_stok');
            $table->integer('harga_produk');
            $table->integer('berat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk_details');
    }
}
