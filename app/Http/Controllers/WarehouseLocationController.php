<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class WarehouseLocationController extends Controller
{
    public function index(){
        $data_wl = DB::table('warehouse')->paginate(5);
        return view('VWarehouse/warehouse_location',['wloc'=>$data_wl]);
    }
    
      // method untuk menampilkan tombol tambah data 
         public function tambah(){
             $id_gudang = 'GDG'.rand(0,9999).'KTG';
       return view('VWarehouse/tambah_warehouse_location',['id_gudang'=>$id_gudang]);
       
    }
 

    // id , nomor , nama_gudang , alamat , kategori , nomor_telepon , description 

    public function simpan(Request $request){
        // validasi
        $validatedData = $request->validate([
            'nomor_gudang' => 'required',
            'nama_gudang' => 'required',
            'alamat' => 'required',
            'kategori' => 'required',
            'nomor_telepon' => 'required|min:10|max:13',
        ],
        [
            'nomor_gudang.required' => 'Harap isi nomor gudang',
            'nama_gudang.required' => 'Harap isi nama gudang ',
            'alamat.required' => 'Harap isi alamat gudang',
            'kategori.required' => 'Harap isi kategori gudang',
            'nomor_telepon.required' => 'Harap isi nomor telepon gudang',
            'nomor_telepon.min' => 'Nomor telepon min 10 karakter',
            'nomor_telepon.max' => 'Nomor telepon max 13 karakter',

        ]
        
    );
    
        DB::table('warehouse')->insert(
         
            ['nomor'=>$request->nomor_gudang,'nama_gudang'=> $request->nama_gudang,'alamat'=>$request->alamat,'kategori'=>$request->kategori,'nomor_telepon'=>$request->nomor_telepon,'description'=>$request->description]
        );
           return redirect('/warehouse')->with('message','Data Berhasil di simpan');
        
    }
    public function delete($id){
        DB::table('warehouse')->where('id',$id)->delete();
        // redirect di pagination hapus 
        return redirect()->back()->with('pesan','Data Berhasil di Hapus');
    }
    public function edit($id){
        $brand = DB::table('warehouse')->where('id',$id)->get();
        return view ('VWarehouse.edit_wloc',['data_warehouse'=>$brand]);
    }
  public function update(Request $request){
    DB::table('warehouse')->where('id',$request->id)->update([

        'nomor'=>$request->nomor_gudang,
        'nama_gudang'=>$request->nama_gudang,
        'alamat'=>$request->alamat,
        
        'nomor_telepon'=>$request->nomor_telepon]);
    return redirect('/warehouse')->with('message','Data Berhasil diubah');
  } 
  public function index_location (){
    $data = DB::table('warehouse_bigcat')
    ->get();

    $data_sub = DB::table('warehouse_subcat')
    ->leftJoin('warehouse_bigcat', 'warehouse_subcat.id_bigcat', '=', 'warehouse_bigcat.id_bigcat')
    // ->leftJoin('sm_departement', 'departement_karyawan.id_sm', '=', 'sm_departement.id_sm')
    // ->select('departement_karyawan.*', 'sub_departement.nama_sub', 'sm_departement.nama_sm')
   ->groupBy('id_subcat')
   ->get();
    $data_sm = DB::table('warehouse_smcat')
    ->Join('warehouse_bigcat', 'warehouse_smcat.id_bigcat', '=', 'warehouse_bigcat.id_bigcat')
    ->Join('warehouse_subcat', 'warehouse_smcat.id_subcat', '=', 'warehouse_subcat.id_subcat')
    ->select('warehouse_smcat.*', 'warehouse_subcat.id_subcat','warehouse_subcat.nama_subcat','warehouse_bigcat.id_bigcat','warehouse_bigcat.nama_bigcat')
    ->groupBy('id_smcat')
   ->get();
      return view('VWarehouse.index_wloc',['bigcat'=>$data,'subcat'=>$data_sub,'smcat'=>$data_sm]);
  }
}
