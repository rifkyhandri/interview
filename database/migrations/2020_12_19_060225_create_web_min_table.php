<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebMinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_min', function (Blueprint $table) {
            $table->id();
            $table->string('kode_perusahaan',191);
            $table->string('nama_perusahaan',191);
            $table->string('kode_aplikasi',191);
            $table->string('nama_aplikasi',191);
            $table->string('jenis_aplikasi',191);
            $table->integer('nomor_telepon');
            $table->integer('nomor_whatsapp');
            $table->integer('nomor_hp');
            $table->integer('fax');
            $table->string('website',191);
            $table->string('alamat',191);
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
        Schema::dropIfExists('web_min');
    }
}
