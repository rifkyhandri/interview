<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
   protected $table = 'm_status';
   protected $fillable = ['status'];
}
