@extends('Layout.Master')
@section('title','permintaan izin')
@section('headcontent','Permintaan Izin')
    

@section('content')
@if (session('sukses'))
    <div class="alert alert-success alert-dismissible show fade">
      <div class="alert-body">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        {{session('sukses')}}
      </div>
    </div>
@endif

<div class="row">
    <div class="col-2">
        <div class="form-inline">
            <label class="pr-3" for="exampleFormControlSelect2">Status</label>
            <select name="agama"  class="form-control p-0 mr-0" id="exampleFormControlSelect2">
                <option value="izin" >Pilih</option>
              <option value="izin" >DiIzinkan</option>
              <option value="ditolak">DiTolak</option>
              <option value="diproses" >Proses</option>
             
            </select>
          </div>
    </div>
    <div class="col-8">
        <form class="form-inline" method="GET" action="/izin_karyawan">
            <input name="cari" class="form-control mr-2 col-10" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        
    </div>
    <div class="col-2">
      <a class="btn btn-primary float-right" href="{{route('tambah.izin')}}">tambah</a>
    </div>
</div>
  <br>  
<div class="row">
    
        <table class="table table-hover table-bordered bg-white text-center shadow-sm ">
            <thead>
              <tr>
                {{-- <th scope="col">ID</th> --}}
                <th scope="col">ID Karyawan</th>
                <th scope="col">Nama Karyawan</th>
                <th scope="col">Alasan</th>
                <th scope="col">Jam</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Izin Atasan</th>
                <th scope="col">Izin HRD</th>
                <th scope="col">Status Security</th>
                <th scope="col">Kembali</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($izin as $izin)
              <tr>
              {{-- <td>{{$izin->nomor_izin}}</td>    --}}
            <td>{{$izin->id_karyawan}}</td>   
            <td>
              @if(auth()->user()->role == 'super_admin' || auth()->user()->role == 'HRD'|| auth()->user()->role == 'SECURITY')
                <a href="{{route('edit.izin',$izin->id)}}" >{{$izin->nama_karyawan}}</a>
              @endif
                </td>   
              <td>{{$izin->alasan}}</td>   
              <td>{{$izin->dari_jam}} / {{$izin->sampai_jam}}</td>   
              <td>{{$izin->tanggal}}</td>
              @if($izin->status_atasan == '')
                <td>-0-</td>
              @elseif($izin->status_atasan == 'ditolak')
                <td class="text-danger">{{$izin->status_atasan}}</td>
              @else
                <td class="text-primary">{{$izin->status_atasan}}</td>
              @endif
              {{-- izin HRD --}}
              @if ($izin->status_hr == '')              
              <td>-0-</td>
              @else 
              <td>{{$izin->status_hr}}</td> 
              @endif   
              {{-- status security --}}
              @if($izin->status_security == '')
              <td>-0-</td>
              @else
              <td>{{$izin->status_security}}</td>
              @endif
             {{-- status kembali --}}
              @if ($izin->status_kembali == '') 
              <td>-0-</td>   
              @else
              <td>{{$izin->status_kembali}}</td>
            
              @endif  
            </tr>
            @endforeach
            
            </tbody>
          </table>
        
 
</div>

@endsection
@push('pages-scripts')
 
@endpush

