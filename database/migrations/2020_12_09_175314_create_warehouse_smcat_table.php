<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehouseSmcatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouse_smcat', function (Blueprint $table) {
            $table->id();
            $table->string('id_bigcat',12);
            $table->string('id_subcat',12);
            $table->string('id_smcat',12);
            $table->string('nama_smcat',121);
            $table->string('status',121);
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
        Schema::dropIfExists('warehouse_smcat');
    }
}