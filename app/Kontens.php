<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontens extends Model
{
    protected $table = 'konten';
    
    protected $fillable = ['id_kontent','judul_kontent','konten','active'];
}
