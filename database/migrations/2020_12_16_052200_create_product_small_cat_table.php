<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSmallCatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_small_cat', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_big');
            $table->integer('kode_sub');
            $table->integer('kode_product_sm');
            $table->string('nama_product_sm');
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
        Schema::dropIfExists('product_small_cat');
    }
}
