<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goods_receipt;

class Controller_GR extends Controller
{
   public function index($id){
       $data = Goods_receipt::orderBy('created_at')->get();
       return view('GR/index_gr',['goods_receipt'=>$data]);
   }
}
