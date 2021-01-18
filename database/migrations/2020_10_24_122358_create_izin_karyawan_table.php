<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIzinKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('izin_karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_izin');
            $table->string('id_karyawan');
            $table->string('nama_karyawan');
            $table->string('alasan');
            $table->string('dari_jam');
            $table->string('sampai_jam');
            $table->string('tanggal');
            $table->string('izin_pulang');
            $table->string('status_atasan');
            $table->string('status_hr');
            $table->string('status_security');
            $table->string('status_kembali');
            $table->string('status_kembalijam');
            $table->string('status_kembalitanggal');

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
        Schema::dropIfExists('izin_karyawan');
    }
}
