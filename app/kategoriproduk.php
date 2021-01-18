<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategoriproduk extends Model
{
    protected $table = 'kategori_product';
    protected $fillable = ['id','Kategori','subkategori'];
    protected $guarded =['manager'];
}
