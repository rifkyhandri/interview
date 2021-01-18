<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsReceiptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_receipt', function (Blueprint $table) {
            $table->id();
            $table->integer('purchase_order')->unsigned();
            $table->string('document_no',115);
            $table->integer('status')->unsigned();
            
            $table->timestamps();
            $table->foreign('purchase_order')->references('id')->on('purchase_order')->onDelete('restrict');
            // $table->foreign('status')->references('id')->on('m_status')->onDelete('restrict');
           
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods_receipt');
    }
}
