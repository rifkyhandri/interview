<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductCatSm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_cat_sm', function (Blueprint $table) {
            $table->id();
            $table->string('id_cat_big');
            $table->string('id_cat_sub');
            $table->string('id_cat_sm');
            $table->string('nama_cat_sm');
            $table->timestamps();
        });


        Schema::create('product_cat_sub', function (Blueprint $table) {
            $table->id();
            $table->integer('id_cat_big');
            $table->integer('id_cat_sub');
            $table->string('nama_cat_sub');
            $table->timestamps();
        });

        Schema::create('product_cat_big', function (Blueprint $table) {
            $table->id();
            $table->integer('id_cat_big');
            $table->string('nama_cat_big');
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
        Schema::drop('product_cat_sm');
        Schema::drop('product_cat_sub');
        Schema::drop('product_cat_big');
    }
}
