<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasukBarangSubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masuk_barang_sub', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_cat');
            $table->integer('kode_item_grup');
            $table->integer('kode_item_barcode');
            $table->string('kode_original');
            $table->string('nama_gudang',191);
            $table->string('destination',191);
            $table->integer('mata_uang');
            $table->integer('harga_perolehan');
            $table->integer('harga_tag');
            $table->integer('harga_jual');
            $table->integer('harga_reseller');
            $table->integer('MOQ');
            $table->integer('qty');
            $table->string('in_bulk');
            $table->integer('original_barcode');
            $table->string('nama_produk',191);
            $table->string('nama_brand',191);
            $table->integer('batch_product');
            $table->integer('unit_product');
            $table->integer('id_admin');
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
        Schema::dropIfExists('masuk_barang_sub');
    }
}
