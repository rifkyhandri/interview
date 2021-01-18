<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKosinyasiGrupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kosinyasi_grup', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan',191);
            $table->integer('kode_kosinyasi_grup');
            $table->string('nama_kosinyasi_grup',191);
            $table->string('jenis_grup',191);
            $table->integer('diskon1');
            $table->integer('diskon2');
            $table->string('manager',191);
            $table->integer('telp_office');
            $table->integer('telp_home');
            $table->integer('fax');
            $table->integer('no_hp');
            $table->integer('kode_pos');
            $table->text('alamat_jalan');
            $table->string('alamat_provinsi',191);
            $table->boolean('status');
            $table->text('memo');
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
        Schema::dropIfExists('kosinyasi_grup');
    }
}
