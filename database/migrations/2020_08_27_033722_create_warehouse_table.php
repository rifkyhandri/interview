<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouse', function (Blueprint $table) {
            $table->id();
            $table->string('nomor',15)->unique();
            $table->string('nama_gudang',100)->unique();
            $table->string('alamat',350);
            $table->string('kategori',100);
            $table->string('nomor_telepon',13);
            $table->string('description',350);
            $table->timestamps();
        });
    }
    // database warehouse
    // id , nomor_gudang , nama_gudang , alamat , kategori , nomor_telepon , description 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warehouse');
    }
}
