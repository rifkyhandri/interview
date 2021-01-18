<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Purchase_order_line;
class Goods_receipt extends Model
{
    protected $table = 'goods_receipt';
    protected $fillable = ['document_no','purchase_order','status'];

    public function statuss(){
        return $this->belongsTo('App\Status','status');
    }
    public function purchase_orders(){
        return $this->belongsTo('App\purchase_order','purchase_order');
    }
    public function total_item(){
       $id_po = $this->purchase_order();
       $total = Purchase_order_line::where('purchase_order',$id_po)->count();
      
       return $total;
        
    }

}

