<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\departement_karyawan;
class ControllerDepartementKaryawan extends Controller
{
    public function departement_index(){
     $data = departement_karyawan::all();
     $data2 =  DB::table('departement_karyawan')->select('id_departemnt');
     $data3 =  DB::table('sub_departement')->select('id_sub');
     $data_sub = DB::table('sub_departement')
     ->leftJoin('departement_karyawan', 'sub_departement.id_departement', '=', 'departement_karyawan.id_departement')
     ->select('sub_departement.*','departement_karyawan.id_departement','departement_karyawan.nama_departement')
    ->groupBy('id_sub')
    ->get();
     $data_sm = DB::table('sm_departement')
    ->Join('departement_karyawan', 'sm_departement.id_departement', '=', 'departement_karyawan.id_departement')
     ->Join('sub_departement', 'sm_departement.id_sub', '=', 'sub_departement.id_sub')
     // ->select('sm_departement.*', 'sub_departement.nama_sub', 'departement_karyawan.nama_sm')
    ->groupBy('id_sm')
    ->get();  
    // departement_big_cat    
    $awal = 10;
    if(!$data2){
         $noUrutAkhir = \App\departement_karyawan::max('id_departement');
         $nomor = sprintf("%02s",  $awal . abs($noUrutAkhir + 1));
    }else{
     $noUrutAkhir = \App\departement_karyawan::max('id_departement');
     $nomor = sprintf("%02s", abs($noUrutAkhir + 1));
    }
     // departement sub_cat
  
        return view('Departement_system/departement',['departement'=>$data,'sub_departement'=>$data_sub,'data_sm'=>$data_sm,'nomor_big'=>$nomor]);
        // index departement
    }
    public function create_departement(Request $request){
       
       $departement = \App\departement_karyawan::create($request->all());
       return redirect('/departement')->with('suskses','Data Berhasil disimpan');
    }
    public function create_sub(Request $request){
     $sub_departement = \App\sub_departement::create($request->all());
     return redirect('/departement')->with('suskses','Data Berhasil disimpan');
    }
    public function create_sm(Request $request){
     $sub_departement = \App\sm_departement::create($request->all());
     return redirect('/departement')->with('suskses','Data Berhasil disimpan');
    }
    public function panggil_departement($id){
         // panggil departement berdasarkan id
     $departement_edit = \App\departement_karyawan::find($id); 
     return view('Departement_system/departement_edit',['departement_edit'=>$departement_edit]);
    }
    public function delete_departement($id){
         $delete_big = departement_karyawan::find($id);
         $delete_big->delete();
         return redirect('/departement');
    }
    // -----------------------------------------Management Departement ------------------------------------------------------------------------

    public function system_module(){
         return view('Departement_system/system_module');
    }
}
