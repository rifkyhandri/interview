<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departement_karyawan extends Model
{
    protected $table = 'departement_karyawan';
    protected $fillable=['id_departement','nama_departement','status','catatan'];


}
