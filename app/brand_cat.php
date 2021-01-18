<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand_cat extends Model
{
   protected $table = 'brand_cat';
   protected $fillable = ['nama_kategori','link','status','avatar','kode_brand'];
}
