<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlamatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alamats', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('nama_lengkap');
            $table->string('telepon');
            $table->string('propinsi');
            $table->integer('id_propinsi');
            $table->string('kota_kabupaten');
            $table->integer('id_kota_kabupaten');
            $table->string('kecamatan');
            $table->integer('kecamatan');
            $table->string('alamat_lengkap');
            $table->string('detail');
            $table->boolean('utama');
            $table->string('kode_pos');
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
        Schema::dropIfExists('alamats');
    }
}
