<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_big extends Model
{
    protected $table = 'product_cat_big';
    protected $fillable = ['baris','id_cat_big','nama_cat_big'];
}
