<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Event_daftar;
class ControllerEvent extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event_daftar = \App\Event_daftar::all();
        $data_event = \App\Event::all();
        return view('event.event',['data_event'=>$data_event,'event_daftar'=>$event_daftar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event/tambah_event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
//     $this->validate($request,[
//         'corp'=>'required',
//         'kategori'=>'required',
//         'nama_event'=>'required',
//         'penyelenggara'=>'required',
//         'tanggal'=>'required',
//         'ketentuan'=>'required',
//         'jam'=>'required',
//         'file'=>'required',
//         'description'=>'required',
//     ],
//     [
      
//         'corp.required' => 'harap isi nama perusahaan ',
//         'file.required' => 'harap isi form ini ',
//         'ketentuan.required' => 'harap isi form ini',
//         'jam.required' => 'harap isi waktu',
//         'description.required' => 'harap isi deskripsi',
//         'kategori.required' => 'harap isi kategori',
//         'nama_event.required' => 'harap isi nama event ',
//         'penyelenggara.required' => 'harap isi nama penyelenggara',
//         'tanggal.required' => 'harap isi tanggal ',
//     ]
    
// );
    
    // masih error di upload photo
    $event = \App\Event::create($request->all());
    if($request->hasFile('avatar')){
        $request->file('avatar')->move('assets/images/',$request->file('avatar')->getClientOriginalName());
        $event->avatar = $request->file('avatar')->getClientOriginalName();
        $event->save();
    }
  
       return redirect('/event')->with('message','Data Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event_daftar = \App\Event_daftar::all();
        $event = \App\Event::find($id);
        return view ('event.show_event',['event_karyawan'=>$event,'event_daftar'=>$event_daftar]);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     
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
        //
    }

    public function daftar_free(Request $request)
    {
        $data = Event_daftar::create($request->all());
        return redirect('event')->with('sukses','Data Berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = \App\Event::find($id);
        $event->delete($event);
        return redirect('/event')->with('sukses','data berhasil dihapus');
    }
}
