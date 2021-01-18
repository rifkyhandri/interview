<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoryProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategory_product', function (Blueprint $table) {
            $table->id();
            $table->string('code_kategory',20)->unique();
            $table->string('master_kategory',20);
            $table->string('sub_kategory',20);
            $table->string('small_kategory',20);
            $table->string('desc',20);
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
        Schema::dropIfExists('kategory_product');
    }
}
