@extends('Layout.Master')
@section('title','System ERP')
@section('headcontent','Confirm')
@section('content')

<div class="card" >

    <div class="container pt-3">
    <h5 class="font-weight-bold text-dark">Edit Izin - {{$edit_izin->nomor_izin}}</h5>
    
     <hr>
     
    <form action="{{route('update.izin',$edit_izin->id)}}" method="POST">
     @csrf
     <div class="mb-4">
 <div class="row">
     <div class="col-6">
         <div class="form-group">  
         <label class="h6" for="">ID Karyawan</label>
         <input type="text" name="id_karyawan" class="form-control" class="form-control @error('nama_karyawan') is-invalid @enderror" value="{{$edit_izin->id_karyawan}}" readonly>
         @error('nama_karyawan')
         <div class="invalid-feedback">{{ $message }}</div>
         @enderror
     </div>
     </div>
 
     <div class="col-6">
         <div class="form-group">
         <label class="h6" for="">Kode Izin</label>
         <input type="text" name="nomor_izin" class="form-control" class="form-control @error('nama_karyawan') is-invalid @enderror" value="{{$edit_izin->nomor_izin}}" readonly>
         @error('nama_karyawan')
         <div class="invalid-feedback">{{ $message }}</div>
         @enderror
     </div>
     </div>
 

</div>
<div class="form-group">
 <label class="h6" for="">Nama Karyawan</label>
 <input type="text" name="nama_karyawan" class="form-control" class="form-control @error('nama_karyawan') is-invalid @enderror" value="{{$edit_izin->nama_karyawan}}" readonly>
 @error('nama_karyawan')
 <div class="invalid-feedback">{{ $message }}</div>
 @enderror
</div>
<div class="form-group">
 <label class="h6" for="">Alasan IZIN</label>
 <textarea type="text" name="alasan" class="form-control" class="form-control @error('nama_karyawan') is-invalid @enderror"  >{{$edit_izin->alasan}}</textarea>
 @error('nama_karyawan')
 <div class="invalid-feedback">{{ $message }}</div>
 @enderror
</div>
<div class="form-group">
<div class="row">
 <div class="col-3">
     <label class="h6" for="">Tanggal</label>
         <input type="date" name="tanggal" class="form-control" class="form-control @error('nama_karyawan') is-invalid @enderror" value="{{$edit_izin->tanggal}}" >
              @error('tanggal')
                 <div class="invalid-feedback">{{ $message }}</div>
              @enderror
 </div>
 <div class="col-3">
     <label class="h6" for="">Dari Jam</label>
         <input type="time" name="dari_jam" class="form-control" class="form-control @error('nama_karyawan') is-invalid @enderror" value="{{$edit_izin->dari_jam}}" >
              @error('nama_karyawan')
                 <div class="invalid-feedback">{{ $message }}</div>
              @enderror
 </div>
 <div class="col-3">
     <label class="h6" for="">Sampai Jam</label>
         <input type="time" name="sampai_jam" class="form-control" class="form-control @error('nama_karyawan') is-invalid @enderror" value="{{$edit_izin->sampai_jam}}" >
              @error('nama_karyawan')
                 <div class="invalid-feedback">{{ $message }}</div>
              @enderror
 </div>
</div>
</div>

@if (auth()->user()->role == 'super_admin')
<div class="form-group">
    <label for="exampleFormControlSelect2">Status - {{Auth::user()->role}}</label>
    <select name="status_atasan" class="form-control" id="exampleFormControlSelect2">
    <option value="">-- STATUS --</option>
    <option @if($edit_izin->status_atasan == 'diterima') selected @endif>diterima</option>
    <option @if($edit_izin->status_atasan == 'ditolak') selected @endif>ditolak</option>
   
   
    </select>
  </div>
@endif
@if (auth()->user()->role == 'HRD')
<div class="form-group">
    <label for="exampleFormControlSelect2">Status - {{Auth::user()->role}}</label>
    <select name="status_hr" class="form-control" id="exampleFormControlSelect2">
        
    <option value="">-- STATUS --</option>
    @if($edit_izin->status_atasan == '' || $edit_izin->status_atasan == 'ditolak' )
         
    @else
    <option @if($edit_izin->status_hr == 'diterima') selected @endif>diterima</option>
    <option @if($edit_izin->status_hr == 'ditolak') selected @endif>ditolak</option>
    @endif
    </select>
  </div>
@endif



@if (auth()->user()->role == 'SECURITY')
<div class="form-group">
    <label for="exampleFormControlSelect2">Status - {{Auth::user()->role}}</label>
    <select name="status_security" class="form-control" id="exampleFormControlSelect2">
        <option value="">-- STATUS --</option>
        @if($edit_izin->status_hr == '' || $edit_izin->status_atasan == '' || $edit_izin->status_atasan == 'ditolak' )
         
        @else
            <option @if($edit_izin->status_security == 'masuk') selected @endif>masuk</option>
            <option @if($edit_izin->status_security == 'keluar') selected @endif>keluar</option>
        @endif
    </select>
  </div>

<div class="form-group">
    <label for="exampleFormControlSelect2">Status Kembali- {{Auth::user()->role}}</label>
    <input type="time" name="status_kembali" class="form-control col-3" class="form-control @error('nama_karyawan') is-invalid @enderror" value="{{$jam}}" >
        @error('nama_karyawan')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
  </div>
@endif

<div class="col-xl-12 col-lg-12">
 <div class="row">
     <div class="col">
    @if($edit_izin->status_atasan == 'ditolak' )
    @else
    <button class="btn btn-primary float-right" type="submit">simpan</button>
    @endif
</div>
  
     </div>
 </div>
</div>
         
</form>  

@endsection
@push('pages-scripts')
 
@endpush