<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'masuk_barang';
    protected $fillable = ['kode_cat','cat_sub','kode_item_grup','kode_original','original_barcode','nama_produk','nama_brand','batch_product','kode_suplier'];
}
