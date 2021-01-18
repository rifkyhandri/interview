@extends('Layout.Master')

@section('title','Supplier')
@section('headcontent','Supplier')


@section('content')
@if (session('message'))
    <div class="alert alert-success alert-dismissible show fade">
      <div class="alert-body">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        {{session('message')}}
      </div>
    </div>
@endif
@if (session('sukses'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{session('sukses')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="col-xl-12">
    <div class="row">
    <div class="col-xl-6">
     <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalCenter">
       Tambah Data Suplier
     </button>
    </div>
    <div class="col-xl-6">
     <form class="form-inline" method="GET" action="/suplier">
       <input name="cari" class="form-control mr-sm-2 col-xl-9" type="search" placeholder="Search" aria-label="Search">
       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
     </form>
    </div>
   </div>
  </div>
<table class="table table-hover shadow-sm table-light table-bordered table-md">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Kode Suplier</th>
        <th scope="col" >Nama Suplier</th>
          <th scope="col" >Mata Uang</th>
          <th scope="col" >Manager</th>
          <th scope="col" >Status</th>
          <th scope="col" >Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($suplier as $data)
      <tr >
        
      <td ><a href="{{route('suplier.profile',$data->id)}}">
        @if ($data->status == 'aktif')
        <i class="font-weight-bold text-primary ">{{$data->code_suplier}}</i>
        @else
        <i class="font-weight-bold text-dark " >{{$data->code_suplier}}</i>
        @endif
      

      
    </a></td>
      <td ><a href="{{route('suplier.profile',$data->id)}}"> @if ($data->status == 'aktif')
        <i class="font-weight-bold text-primary ">{{$data->nama}}</i>        
        @else
        <i class="font-weight-bold text-dark " >{{$data->nama}}</i>
        @endif</a></td>
      <td>{{$data->currency}}</td>
      <td >{{$data->manager}}</td>
      
      <td >
        @if ($data->status == 'aktif')
        <i class="fas fa-check">{{$data->status}}</i>        
        @else
        <div style="font-size: 20px;">
        <i class="fas fa-window-close text-danger fa-4x" ></i>
    </div> 
        @endif</a></td>
        <td>
      <a href="{{route('suplier.ubah',$data->id)}}" class="btn btn-warning">Ubah</a>
        <a href="suplier/{{$data->id}}/delete"  class="btn btn-danger" onclick="return confirm('yakin Data ini ingin dihapus ?')">X</a>
    </td>

  </tr>
  @endforeach
     
    </tbody>
  </table>

@endsection

@section('modal')
    

<div class="modal fadein" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" @if($errors->any())style="display:none;" @endif>
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('suplier.simpan')}}"method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleFormControlInput1">ID Suplier</label>
                <input name='code_suplier' type="text" class="form-control" id="exampleFormControlInput1" value="{{$auto_number}}" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama Suplier </label>
                  <input  name='nama' type="text" class="form-control" value="{{ old('nama')}}" id="exampleFormControlInput3" placeholder="Nama Suplier">
                  @error('nama')
                      <div class="text-danger"><i class="fas fa-times"></i>{{" ".$message}}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nomor Telepon</label>
                  <input  name='nomor_telepon' type="text" class="form-control" id="exampleFormControlInput3" placeholder="Nomor Telepon" value="{{ old('nomor_telepon')}}">
                  @error('nomor_telepon')
                  <div class="text-danger"><i class="fas fa-times"></i>{{" ".$message}}</div>
              @enderror
                </div>
            
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Asal Negara</label>
                  <select name="asal_negara" class="form-control" id="exampleFormControlSelect1">
                    <option value="Dalam Negeri">Dalam Negeri</option>
                    <option value="Luar Negeri">Luar Negeri</option>
                  </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Alamat</label>
                    <textarea name='alamat' type="text" class="form-control" id="exampleFormControlInput1" placeholder="Alamat" value="{{ old('alamat')}}"></textarea>
                    @error('alamat')
                    <div class="text-danger"><i class="fas fa-times"></i>{{" ".$message}}</div>
                @enderror
                  </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </form>
        </div>
      </div>
    </div>
  </div>
  @endsection

      
