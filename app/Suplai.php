<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suplai extends Model
{
    protected $table = 'suplai';
    protected $fillable = ['code_suplier','nama','alamat','nomor_telepon','asal_negara','website','manager','email','tel_office','tel_home','fax','mobile'
    ,'street','city','country','currency','status','catatan'];

    public function brand(){
            // return $this->belongsToMany(Brand::class)->withPivot(['stock','nama_produk'])->withTimeStamps();
            return $this->belongsToMany(Brand::class)->withTimeStamps();
    }
    
}
