<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sm_departement extends Model
{
    protected $table = 'sm_departement';
    protected $fillable = ['id_departement','id_sub','id_sm','nama_sm','status'];
 
    public function sub_departement(){
    return $this->belongsToMany('App\sub_departement');
   }
}
