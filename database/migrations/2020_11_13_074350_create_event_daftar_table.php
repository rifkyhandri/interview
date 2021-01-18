<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventDaftarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_daftar', function (Blueprint $table) {
            $table->id();
            $table->string('id_event',50);
            $table->string('id_karyawan',50);
            $table->string('id_pembayaran',50)->unique();
            $table->string('nama_karyawan',200);
            $table->string('jam_pembayaran',50);
            $table->string('tanggal_pembayaran',50);
            $table->string('status_pembayaran',50);
            $table->string('status_event',50);
            $table->string('harga',50);
            $table->string('nama_bank',50);
            $table->string('id_bank',50);
            $table->string('komentar',300);
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
        Schema::dropIfExists('event_daftar');
    }
}
