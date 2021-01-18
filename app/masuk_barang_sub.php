<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class masuk_barang_sub extends Model
{
    protected $table = 'masuk_barang_sub';
protected $fillable = ['kode_cat','kode_item_grup','kode_item_barcode','kode_original','kode_gudang','mata_uang','harga_perolehan','harga_jual','harga_reseller','MOQ','qty','kode_produk','nama_produk','nama_brand','id_admin','online','kode_suplier','original_barcode','avatar'];
}
