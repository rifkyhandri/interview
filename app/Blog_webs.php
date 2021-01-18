<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_webs extends Model
{
    protected $table = 'blog_webs';
    protected $fillable = ['kode_perusahaan','nama_perusahaan','kode_blog','judul','kategori','kontent','link','status','tanggal'];
}
