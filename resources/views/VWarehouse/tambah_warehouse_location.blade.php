@extends('Layout.Master')
@section('title','tambah Gudang')
@section('headcontent','Tambah Lokasi Gudang')
@section('content')

<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Masukan Nama gudang</h4>
        </div>
        <div class="card-body">
         
             {{-- id , nomor_gudang , nama_gudang , alamat , kategori , nomor_telepon , description  --}}
          {{-- ID Gudang --}}
             <div class="form-group">
            <form action="{{route('simpan.wloc')}}" method="POST">
                @csrf
           
            <label>ID Gudang</label>
            <input type="text" name='nomor_gudang' class="form-control @error('nomor_gudang') is-invalid @enderror" value="{{$id_gudang}}" readonly>
           @error('nomor_gudang')
           <div class="invalid-feedback">{{ $message }}</div>
           @enderror
          </div>
          
          {{-- Nama Gudang --}}
          <div class="form-group">
            <label>Nama Gudang</label>
            <input type="text" name='nama_gudang' class="form-control @error('nama_gudang') is-invalid @enderror" value="{{ old('nama_gudang')}}">
           @error('nama_gudang')
           <div class="invalid-feedback">{{ $message }}</div>
           @enderror
          </div>
         

          

          {{-- alamat --}}
          <div class="form-group">
            <label>Alamat</label>
            <textarea type="text" name='alamat' class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat')}}"></textarea>
           @error('alamat')
           <div class="invalid-feedback">{{ $message }}</div>
           @enderror
          </div>
          
           {{-- nomor telepon --}}
           <div class="form-group"> 
            <label>Kategori</label>
            <input type="text" name='kategori' class="form-control @error('kategori') is-invalid @enderror" value="{{ old('kategori')}}">
           @error('kategori')
           <div class="invalid-feedback">{{$message }}</div>
           @enderror
          </div>

          {{-- nomor telepon --}}
          <div class="form-group"> 
            <label>Nomor Telepon</label>
            <input type="text" name='nomor_telepon' class="form-control @error('nomor_telepon') is-invalid @enderror" value="{{ old('nomor_telepon')}}">
           @error('nomor_telepon')
           <div class="invalid-feedback">{{$message }}</div>
           @enderror
          </div>
          
          <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description')}}">
            @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          
        <div class="card-footer text-right">
          <button class="btn btn-primary mr-1" type="submit">Submit</button>
          <button class="btn btn-secondary"  type="reset"><a href="#"> Reset</a></button>
        </div>
      </div>
    </form>
@endsection
