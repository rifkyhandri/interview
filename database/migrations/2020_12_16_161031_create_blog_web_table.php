<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogWebTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_web', function (Blueprint $table) {
            $table->id();
            $table->string('kode_perusahaan',191);
            $table->string('nama_perusahaan',191);
            $table->string('kode_blog',191);
            $table->string('judul',191);
            $table->string('kategori',191);
            $table->string('konten',191);
            $table->string('link',191);
            $table->string('status',191);
            $table->string('tanggal',191);
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
        Schema::dropIfExists('blog_web');
    }
}
