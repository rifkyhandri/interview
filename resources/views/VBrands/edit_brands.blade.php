@extends('Layout.Master')
@section('title','Update Brands')
@section('headcontent','Update Brands')
@section('content')

<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Ubah Brands</h4>
        </div>
        <div class="card-body">
         
      @foreach ($brand as $dbrand)
          
      
  {{-- id suplier --}}

      <div class="form-group">
        <form action="{{route('update.brand')}}" method="POST">
            @csrf
        <label>nomor</label>
        <input type="text" name='id' class="form-control @error('id') is-invalid @enderror" value="{{ $dbrand->id}}">
       @error('id')
       <div class="invalid-feedback">{{$message}}</div>
       @enderror
      </div>
      
      {{-- ID Brand --}}
      <div class="form-group">
      <label>ID Brand </label>
        <input type="text" name='nomor' class="form-control @error('nomor') is-invalid @enderror" value="{{ $dbrand->nomor}}" readonly>
       @error('nomor')
       <div class="invalid-feedback">{{ $message }}</div>
       @enderror
      </div>

          <div class="form-group">
            <label>Nama Brand</label>
            <input type="text" name='name' class="form-control @error('name') is-invalid @enderror" value="{{ $dbrand->name}}">
           @error('name')
           <div class="invalid-feedback">{{$message}}</div>
           @enderror
          </div>
          
          <div class="form-group">
            <label>Nama Suplier</label>
            <input type="text" name='suplier' class="form-control @error('suplier') is-invalid @enderror" value="{{ $dbrand->suplier}}" readonly>
           @error('suplier')
           <div class="invalid-feedback">{{ $message }}</div>
           @enderror
          </div>

          <div class="form-group">
            <label>desc</label>
            <input type="text" name='desc' class="form-control @error('desc') is-invalid @enderror" value="{{ $dbrand->desc}}">
           @error('desc')
           <div class="invalid-feedback">{{ $message }}</div>
           @enderror
          </div>
          
        <div class="card-footer text-right">
          <button class="btn btn-primary mr-1" type="submit" value="submit">Submit</button>
          <button class="btn btn-secondary"  type="reset"><a href="#"> Reset</a></button>
        </div>
      </div>
    </form>
    @endforeach
@endsection
