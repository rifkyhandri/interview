<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_sm extends Model
{
    protected $table = 'product_cat_sm';
    protected $fillable = ['id_cat_big','id_cat_sub','id_cat_sm','nama_cat_sm'];
}
