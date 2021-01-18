<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTambahVoucherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tambah_voucher', function (Blueprint $table) {
            $table->id();
            $table->integer('harga_voucher');
            $table->string('nama_voucher');
            $table->string('kode_voucher');
            $table->date('tanggal_terbit_keluar');
            $table->date('tanggal_validitas');
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
        Schema::dropIfExists('tambah_voucher');
    }
}
