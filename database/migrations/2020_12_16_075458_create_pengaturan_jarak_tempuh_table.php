<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaturanJarakTempuhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaturan_jarak_tempuh', function (Blueprint $table) {
            $table->id();
            $table->string('kode_toko',191);
            $table->string('nama_toko',191);
            $table->string('status',191);
            $table->string('jarak_tempuh',191);
            $table->string('tarif_disc',191);
            $table->string('min_buy',191);
            $table->string('min_use',191);
            $table->string('max_use',191);
            $table->string('get_1st',191);
            $table->date('tanggal',191);
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
        Schema::dropIfExists('pengaturan_jarak_tempuh');
    }
}
