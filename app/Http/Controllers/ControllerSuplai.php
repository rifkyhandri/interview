<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suplai;
use Illuminate\Support\Facades\DB; 
class ControllerSuplai extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari')){
            $suplier = \App\Suplai::where('nama','LIKE','%'.$request->cari.'%')->get();
        }else{
            $suplier = DB::table('suplai')->orderBy('code_suplier', 'desc')->get();
        }
        $max_suplai = Suplai::max('code_suplier');
        $auto_number = $max_suplai + 1;
      
        return view('Suplier/suplier',['suplier'=>$suplier,'auto_number'=>$auto_number]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|min:3',
            'alamat' => 'required|min:5',
            'nomor_telepon' => 'required|min:5|max:14',
            'asal_negara' => 'required',
           
        ],
        [
            'nama.required' => 'harap isi nama suplier',
            'alamat.required' => 'harap isi alamat',
            'nomor_telepon.required' => 'harap isi nomor telepon',
            'asal_negara.required' => 'harap isi asal negara ',
        ]
        
    );
        $Suplier = \App\Suplai::create($request->all());
        return redirect('/suplier')->with('sukses','Data Berhasil disimpan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ubah($id)
    {
        $ubah = \App\Suplai::find($id);
        return view('Suplier/ubah',['ganti'=>$ubah]);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {
        $suplier = \App\Suplai::find($id);
        $brand = \App\Brand::all();
        // data untuk chart
        $categories = [];
        $nilai = [];

        foreach ($brand as $br ) {
            if($suplier->brand()->wherePivot('brand_id',$br->id)->first()){
            $categories[] = $br->name;
            $nilai[] = $suplier->brand()->wherePivot('brand_id',$br->id)->first()->pivot->stock;
          
            }
        }
        // dd(json_encode($nilai));
        // dd(json_encode($categories));
       return view('Suplier/profile_suplier1',['suplier'=>$suplier ,'brand'=>$brand,'categories'=>$categories,'qty'=>$nilai]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $suplier = \App\Suplai::find($id);
        $suplier->update($request->all());
        return redirect ('/suplier')->with('ubah','data berhasil di ubah');
    }

    public function delete($id){
        $suplai = \App\Suplai::find($id);
        $suplai->delete($suplai);
        return redirect('/suplier')->with('sukses','data berhasil dihapus');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function addbrand(Request $request,$id){
      $suplier = \App\Suplai::find($id);
      // jika ada data dari pivot yang sama maka dengan yang baru masuk maka akan terjadi error
      if($suplier->brand()->where('brand_id',$request->brand)->exists()){
        return redirect('suplier/profile/'.$id)->with('error','Data Brand sudah ada');
      }
      $suplier->brand()->attach($request->brand);
      return redirect('suplier/profile/'.$id)->with('sukses','data berhasil ditambahkan');
        // dd($request->all());
  }
}
