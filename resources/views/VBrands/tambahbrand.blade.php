@extends('Layout.Master')
@section('title','Tambah Brand')
@section('headcontent','Tambah Brands')
@section('content')

<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Masukan Brand</h4>
        </div>
        <div class="card-body">
         
          <?php

            $nomor = 'B'.rand(0,99999999).'SU'
            
          ?>
          <form action="{{route('simpan.brand')}}" method="POST">
            {{ csrf_field() }}
          <div class="form-group">
            <label>ID Brand</label>
            <input type="text" name='nomor' class="form-control @error('nomor') is-invalid @enderror" value="{{$nomor}}" readonly>
           @error('nomor')
           <div class="invalid-feedback">{{ $message }}</div>
           @enderror
          </div>
          <div class="form-group">
                @csrf
            <label>Nama brand</label>
            <input type="text" name='name' class="form-control @error('name') is-invalid @enderror" value="{{ old('name')}}">
           @error('name')
           <div class="invalid-feedback">{{ $message }}</div>
           @enderror
          </div>
          
          
          <div class="form-group">
           
            <label>Suplier</label>
            <select name="suplier" class="form-control">
              <option value="">Pilih Suplier</option>
              @foreach($Rsuplier as $rs)
          
                @if($rs->status == '')@elseif($rs->status == 'aktif')<option value="{{$rs->nama}}">{{$rs->nama}}</option>@endif
               
                @endforeach
            </select>
           @error('suplier')
           <div class="invalid-feedback">{{ $message }}</div>
           @enderror
          </div>
             
          
          <div class="form-group">
        
            <label>Deskripsi
              {{-- pesan error di atas --}}
               {{-- @error('nomor_telepon')
                {{$message}}
            @enderror --}}
          </label>
          <textarea type="text" name='desc' class="form-control @error('desc') is-invalid @enderror" value="{{ old('desc')}}"></textarea>
           @error('desc')
           <div class="invalid-feedback">{{$message }}</div>
           @enderror
          </div>
      
          
        <div class="card-footer text-right">
          <button class="btn btn-primary mr-1" type="submit">Submit</button>
          <button class="btn btn-secondary"  type="reset"><a href="#"> Reset</a></button>
        </div>
      </div>
    </form>
@endsection

