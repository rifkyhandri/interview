<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->string('id_event',20)->unique();
            $table->string('corp',191)->unique();
            $table->string('nama_event',191)->unique();
            $table->string('kategori',191);
            $table->string('penyelenggara',191);
            $table->string('ketentuan',191);
            $table->string('description',191);
            $table->string('tanggal',191);
            $table->string('jam',191);
            $table->string('file',191)->null();
            $table->string('harga',30)->null();
            $table->string('status',191)->null();
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
        Schema::dropIfExists('event');
    }
}
