@extends('Layout.Master')
@section('title','Warehouse')
@section('headcontent','Ubah Gudang')
@section('content')

<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Ubah Gudang</h4>
        </div>
        <div class="card-body">
         
      @foreach ($data_warehouse as $data)
          
      
  {{-- id suplier --}}
 {{-- id , nomor, nama_gudang , alamat , kategori , nomor_telepon , description  --}}
       
      <div class="form-group">
        <form action="{{route('update.wloc')}}" method="POST">
            @csrf
        <label>ID Gudang </label>
        <input type="text" name='nomor' class="form-control @error('nomor') is-invalid @enderror" value="{{ $data->nomor}}" readonly>
       @error('nomor')
       <div class="invalid-feedback">{{ $message }}</div>
       @enderror
      </div>
      {{-- nama Suplier --}}
          <div class="form-group">
            <label>Nama Gudang</label>
            <input type="text" name='nama_gudang' class="form-control @error('nama_gudang') is-invalid @enderror" value="{{ $data->nama_gudang}}">
           @error('nama_gudang')
           <div class="invalid-feedback">{{$message}}</div>
           @enderror
          </div>
          
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" name='alamat' class="form-control @error('alamat') is-invalid @enderror" value="{{ $data->alamat}}">
           @error('alamat')
           <div class="invalid-feedback">{{ $message }}</div>
           @enderror
          </div>

      
          
          <div class="form-group">
            <label>Nomor Telepon
          </label>
            <input type="text" name='nomor_telepon' class="form-control @error('nomor_telepon') is-invalid @enderror" value="{{  $data->nomor_telepon }}">
           @error('nomor_telepon')
           <div class="invalid-feedback">{{ $message }}</div>
           @enderror
          </div>
          
        
          
        <div class="card-footer text-right">
          <button class="btn btn-primary mr-1" type="submit">Submit</button>
          <button class="btn btn-secondary"  type="reset"><a href="#"> Reset</a></button>
        </div>
      </div>
    </form>
    @endforeach
@endsection
