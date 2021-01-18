<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';
    protected $fillable = ['id','nomor','suplier','name','desc'];
    
    public function suplai(){
        // return $this->belongsToMany(Suplai::class)->withPivot(['stock','nama_produk']);;
        return $this->belongsToMany(Suplai::class);
    }
}
