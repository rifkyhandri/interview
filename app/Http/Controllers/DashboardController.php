<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index(){
    $stock = \App\Stock::all();
    $web_name = \App\WebNames::get()->first();
    $event = DB::table('event')->get();
    $karyawan = DB::table('karyawan')->get();
    if(auth()->user()->role == 'SECURITY' ){
        return view('dashboard/dashboard_security');
    }
        return view('dashboard_utama',['karyawan'=>$karyawan,'event'=>$event,'stock'=>$stock,'nama_web'=>$web_name]);
    
     
   }

}
?>
