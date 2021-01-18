<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProsesPabrikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proses_pabrik', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_proses');
            $table->string('nama_proses',191);
            $table->string('divisi_proses',191);
            $table->string('tipe_proses',191);
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
        Schema::dropIfExists('proses_pabrik');
    }
}
