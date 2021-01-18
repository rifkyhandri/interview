@extends('Layout.Master')
@section('title','System Settings')
@section('headcontent','Tambah Izin')
@section('content')

    <div class="card" >

       <div class="container pt-3">
       <h5 class="font-weight-bold text-dark">Tambah Izin - {{$kode_izin}}</h5>
       
        <hr>
        
       <form action="" method="POST">
        @csrf
        <div class="mb-4">
    <div class="row">
        <div class="col-6">
            <div class="form-group">  
            <label class="h6" for="">ID Karyawan</label>
            <input type="text" name="id_karyawan" class="form-control" class="form-control @error('nama_karyawan') is-invalid @enderror" value="{{Auth::user()->id_karyawan}}" readonly>
            @error('nama_karyawan')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        </div>
    
        <div class="col-6">
            <div class="form-group">
            <label class="h6" for="">Kode Izin</label>
            <input type="text" name="nomor_izin" class="form-control" class="form-control @error('nama_karyawan') is-invalid @enderror" value="{{$kode_izin}}" readonly>
            @error('nama_karyawan')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        </div>
    

</div>
<div class="form-group">
    <label class="h6" for="">Nama Karyawan</label>
    <input type="text" name="nama_karyawan" class="form-control" class="form-control @error('nama_karyawan') is-invalid @enderror" value="{{Auth::user()->name}}" readonly>
    @error('nama_karyawan')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label class="h6" for="">Alasan IZIN</label>
    <textarea type="text" name="alasan" class="form-control" class="form-control @error('nama_karyawan') is-invalid @enderror" value="{{Auth::user()->name}}" ></textarea>
    @error('nama_karyawan')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
<div class="row">
    <div class="col-3">
        <label class="h6" for="">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" class="form-control @error('nama_karyawan') is-invalid @enderror" value="{{Auth::user()->name}}" >
                 @error('tanggal')
                    <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
    </div>
    <div class="col-3">
        <label class="h6" for="">Dari Jam</label>
            <input type="time" name="dari_jam" class="form-control" class="form-control @error('nama_karyawan') is-invalid @enderror" value="{{Auth::user()->name}}" >
                 @error('nama_karyawan')
                    <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
    </div>
    <div class="col-3">
        <label class="h6" for="">Sampai Jam</label>
            <input type="time" name="sampai_jam" class="form-control" class="form-control @error('nama_karyawan') is-invalid @enderror" value="{{Auth::user()->name}}" >
                 @error('nama_karyawan')
                    <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
    </div>
</div>
</div>

<div class="col-xl-12 col-lg-12">
    <div class="row">
        <div class="col">
         <button class="btn btn-primary float-right" type="submit">simpan</button>
        </div>
     
        </div>
    </div>
</div>
            
</form>  
        

@endsection
@push('pages-scripts')
 
@endpush