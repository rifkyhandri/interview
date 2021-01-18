<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_order_line extends Model
{
    protected $table = 'purchase_order_line';
    protected $fillable =  ['purchase_order','produk','buy','qty','grand_total'];

    public function produks(){
        return $this->belongsTo('App\masuk_barang_sub','produk');
    }
}
