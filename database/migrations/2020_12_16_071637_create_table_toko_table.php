<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTokoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_toko', function (Blueprint $table) {
            $table->id();
            $table->string('id_perusahaan');
            $table->string('nama_perusahaan_big',191);
            $table->string('kode_toko',191);
            $table->string('nama_toko',191);
            $table->string('jenis_toko',191);
            $table->string('pengelola_toko',191);
            $table->string('pos',191);
            $table->string('email',191);
            $table->string('website',191);
            $table->integer('tel_office');
            $table->integer('tel_home');
            $table->integer('no_hp');
            $table->integer('fax');
            $table->integer('kode_pos');
            $table->string('alamat_provinsi',191);
            $table->text('alamat_jalan');
            $table->text('memo');
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
        Schema::dropIfExists('table_toko');
    }
}
