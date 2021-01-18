<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaerahPerngirimanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daerah_perngiriman', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_daerah');
            $table->string('nama_negara',191);
            $table->string('nama_daerah',191);
            $table->string('kawasan',191);
            $table->string('tarif_pengiriman',191);
            $table->string('berat_minimum',191);
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
        Schema::dropIfExists('daerah_perngiriman');
    }
}
