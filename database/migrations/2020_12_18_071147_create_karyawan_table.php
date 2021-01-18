<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_departement');
            $table->integer('kode_karyawan');
            $table->string('nama_karyawan',191);
            $table->string('jenis_kelamin',191);
            $table->string('email',191);
            $table->string('agama',191);
            $table->string('alamat',191);
            $table->string('avatar',191);
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
        Schema::dropIfExists('karyawan');
    }
}
