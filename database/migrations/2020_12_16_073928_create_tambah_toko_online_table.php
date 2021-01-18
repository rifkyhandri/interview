<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTambahTokoOnlineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tambah_toko_online', function (Blueprint $table) {
            $table->id();
            $table->string('id_perusahaan',191);
            $table->string('id_sistem_perusahaan',191);
            $table->string('id_toko',191);
            $table->string('nama_toko',191);
            $table->string('pengelola_toko',191);
            $table->string('email',191);
            $table->string('website',191);
            $table->string('status',191);
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
        Schema::dropIfExists('tambah_toko_online');
    }
}