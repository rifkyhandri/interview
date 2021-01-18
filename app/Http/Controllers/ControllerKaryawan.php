<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\karyawan;

class ControllerKaryawan extends Controller
{
    public function index(Request $request){
        $data_inner = DB::table('karyawan')
        ->leftJoin('departement_karyawan','karyawan.kode_departemen','=','departement_karyawan.id_departement')
        ->leftJoin('company_profile','karyawan.kode_company','=','company_profile.kode_company')
        ->select('karyawan.*', 'departement_karyawan.id_departement','departement_karyawan.nama_departement', 'company_profile.kode_company','company_profile.nama_company','users_id')
        ->groupBy('kode_karyawan')->get();
        if($request->has('cari')){
            $data_karyawan = \App\karyawan::where('nama_depan','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_karyawan = \App\karyawan::all();
        }
        
        return view('Karyawan/karyawan',['data_karyawan'=>$data_karyawan,'data_inner'=>$data_inner]);
    }
public function dashboard_count(){
    $karyawan = DB::table('karyawan')->get();
    return view('dashboard_utama',['karyawan'=>$karyawan]);
}
public function findDepartementName(Request $request){
     $data = \App\sub_departement::select('nama_sub','id')->where('id_departement',$request->id)->take(100)->get();
     return response()->json($data);
}
public function tambah(){
    $departement_sub = \App\sub_departement::all();
    $departement = DB::table('sm_departement')->get();
    $awal = 'EXP-0000';
    $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
    $noUrutAkhir = \App\karyawan::max('users_id');
    $no = 1;
    $data = sprintf("%03s",  $awal . abs($noUrutAkhir + 1)). '/'  . $bulanRomawi[date('n')] .'/' . date('Y');
    $data2 = sprintf("%04s",  abs($noUrutAkhir + 1));
    $data_departement = DB::table('departement_karyawan')->get();
    $data_company = DB::table('company_profile')->get();
 
    return view('Karyawan/tambah_karyawan',['data_company'=>$data_company,'data_departement'=>$data_departement,'number'=>$data,'number2'=>$data2,'departement_sub'=>$departement_sub]);


}
        public function create(Request $request){
            
            $validatedData = $request->validate([
                'nama_karyawan' => 'required|min:3',
                'email' => 'required|unique:users',
                'alamat' => 'required|min:5',
                'nomor_telp' => 'required',
                'nomor_hp' => 'required|min:5|max:14',
                'tanggal_lahir' => 'required',
                'jabatan' => 'required',
              
               
            ],
            [
                'email.unique' => 'alamat email sudah ada',
                'email.required' => 'harap masukan email anda',
                'nama_karyawan.required' => 'harap isi nama karyawan',
                'alamat.required' => 'harap isi alamat',
                'nomor_telp.required' => 'harap isi nomor telepon',
                'nomor_hp.required' => 'harap isi nomor hp',
                'tanggal_lahir.required' => 'harap isi tanggal lahir ',
                'jabatan.required' => 'harap isi jabatan anda ',
            ]
            
            );

        //    insert ke table users
        $user = new\App\User;
        
        $user->id_karyawan = $request->kode_karyawan;
        $user->id_company = $request->kode_company;
        $user->users_id = $request->users_id;
        $user->role = $request->jabatan;
        $user->name = $request->nama_karyawan;
        $user->kode_departemen = $request->kode_departemen;
        $user->kode_company = $request->kode_company;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->remember_token = Str::random(60);
        $user->save();
        // insert ke table karyawan
        $request->request->add(['users_id'=> $user->users_id]);
        $karyawan = \App\karyawan::create($request->all());
        // dd($karyawan);
        // if($karyawan->email){
        //     echo 'data sudah ada';
        // }
        return redirect('/karyawan')->with('sukses','Data Berhasil disimpan');
       
    }
    public function edit($id){
       $karyawan = \App\karyawan::find($id);
       return view('Karyawan/karyawan_edit',['karyawan'=>$karyawan]);
    }
    public function update(Request $request,$id)
    {
        // dd($request->all());
        $karyawan = \App\karyawan::find($id);
        $karyawan->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('assets/images',$request->file('avatar')->getClientOriginalName());
            $karyawan->avatar = $request->file('avatar')->getClientOriginalName();
            $karyawan->save();
        }
        return redirect('karyawan')->with('ubah','Data Berhasil di Ubah');
    }
    public function delete($id){
    
       $karyawan = DB::table('karyawan')
        ->leftJoin('users', 'karyawan.email', '=', 'users.email')
        ->where('karyawan.email', $id)
        ->delete();
        return redirect('/karyawan')->with('sukses','data berhasil dihapus');
    }
    public function profile ($id){
        $karyawan = \App\karyawan::find($id);
        return view('profile',['karyawan'=>$karyawan]);
    }
    // konteks izin
    public function izin(){
        $izin = \App\IzinKaryawan::all();
        return view ('Karyawan.izin_karyawan',['izin'=>$izin]);
    }
  public function tambah_izin(){
    $awal = 'IZ';
    $noUrutAkhir = \App\IzinKaryawan::max('id');
    $data = $awal .sprintf("%03s", abs($noUrutAkhir + 1)).date('Y');
      return view('Karyawan/tambah_izin',['kode_izin'=>$data]);
  }
  public function create_izin(Request $request){
    $tambah = \App\IzinKaryawan::create($request->all());
    return redirect('/izin_karyawan')->with('sukses','Data Berhasil disimpan');
  }
   public function edit_izin($id){
    $jam = date("h:i:sa");
    $tambah = \App\IzinKaryawan::find($id);
    return view('Karyawan/confirm_izin',['edit_izin'=>$tambah,'jam'=>$jam]);
   }
   public function update_izin(Request $request ,$id){
    $karyawan = \App\IzinKaryawan::find($id);
    $karyawan->update($request->all());
    return redirect('izin-karyawan')->with('ubah','Data Berhasil di Ubah');
   }
   public function profile_karyawan(){
       return view('Karyawan/profile_karyawan');
   }
}

