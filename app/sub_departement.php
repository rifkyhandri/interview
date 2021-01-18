<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sub_departement extends Model
{
   protected $table = 'sub_departement';
   protected $fillable = ['id_departement','id_sub','nama_sub'];
   public function sm_departement(){
    return $this->belongsToMany('App\sm_departement');
   }
   
}
