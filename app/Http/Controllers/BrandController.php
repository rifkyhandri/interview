<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BrandController extends Controller
{
    public function index(){
        $data_spl = DB::table('brand')->paginate(5);
        return view('VBrands/brands',['brand'=>$data_spl]);
    }
    
      // method untuk menampilkan tombol tambah data 
      public function tambah(){
        $read = DB::table('suplai')->get();
        return view('VBrands.tambahbrand',['Rsuplier'=>$read]);
    }
 

   

    public function simpan(Request $request){
        // validasi
        $validatedData = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'suplier' => 'required',
           
        ],
        [
            'name.required' => 'Harap isi nama Brand',
            'desc.required' => 'Harap isi deskripsi Catatan',
            'suplier.required' => 'Harap isi suplier',
          
            
    
        ]
        
    );
    
    $brand = \App\Brand::create($request->all());
    return redirect('/brands');
           
        
    }
    public function delete($id){
        DB::table('brand')->where('id',$id)->delete();
        // redirect di pagination hapus 
        return redirect()->back()->with('pesan','Data Berhasil di Hapus');
    }
    public function edit($id){
        $brand = DB::table('brand')->where('id',$id)->get();
        return view ('VBrands.edit_brands',['brand'=>$brand]);
    }
  public function update(Request $request){
      DB::table('brand')->where('id',$request->id)->update([

        'nomor'=>$request->nomor,
        'suplier'=>$request->suplier,
        'name'=>$request->name,
        'desc'=>$request->desc]);
    return redirect('/brands')->with('message','Data Berhasil diubah');
  } 
}
