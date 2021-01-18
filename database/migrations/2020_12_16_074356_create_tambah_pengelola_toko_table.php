<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTambahPengelolaTokoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tambah_pengelola_toko_kosinyasi', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_perusahaan');
            $table->integer('kode_sistem');
            $table->integer('kode_user_sistem');
            $table->integer('kode_toko');
            $table->boolean('status');
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
        Schema::dropIfExists('tambah_pengelola_toko');
    }
}
