<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Purchase_order_line;
class purchase_order extends Model
{
    protected $table =  'purchase_order';
    protected $fillable =  ['supplier','document_no','status'];

  public function statuss(){
      return $this->belongsTo('App\Status','status');
  }
  public function supppliers(){
      return $this->belongsTo('App\Suplai','supplier');
  }
  public function lines(){
      return $this->hasMany('App\Purchase_order_line','purchase_order');
  }
  public function grand_total(){
      $po = $this->id;
      $total = Purchase_order_line::where('purchase_order',$po)->sum('grand_total');
      return $total;
  }
}
