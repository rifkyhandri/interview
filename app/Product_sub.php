<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_sub extends Model
{
    protected $table = 'product_cat_sub';
    protected $fillable = ['id_cat_big','id_cat_sub','nama_cat_sub'];
}
