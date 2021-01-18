<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategory extends Model
{
    protected $table = 'kategory_product';
   protected $fillable = ['code_kategory','master_kategory','sub_kategory','small_kategory','desc'];
}
