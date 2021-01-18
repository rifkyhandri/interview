<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSuplierToDataBrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_brand', function (Blueprint $table) {
            $table->string('suplier',100)->after('nomor');
            $table->string('desc',300)->after('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_brand', function (Blueprint $table) {
            $table->dropColumn('suplier');
            $table->dropColumn('desc');
        });
    }
}
