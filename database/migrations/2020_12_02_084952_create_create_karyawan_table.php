<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('id_karyawan',15)->unique();
            $table->string('id_departement',15);
            $table->string('nama_karyawan',115);
            $table->string('jabatan',115);
            $table->string('jenis_kelamin',115);
            $table->string('agama',115);
            $table->string('alamat',115);
            $table->string('akses',115);
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
        Schema::dropIfExists('create_karyawan');
    }
}
