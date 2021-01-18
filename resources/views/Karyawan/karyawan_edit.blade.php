@extends('Layout.Master')
@section('title','System ERP')

@section('content')
@section('headcontent','Edit Karyawan')

<form action="{{route('karyawan.update',$karyawan->id)}}"method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleFormControlInput1">Nama depan</label>
    <input name='nama_depan' value="{{$karyawan->nama_depan}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Depan">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Nama Belakang</label>
      <input  name='nama_belakang' type="text" class="form-control" id="exampleFormControlInput3" placeholder="Nama Belakang"  value="{{$karyawan->nama_belakang}}">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Jabatan</label>
      <select name="role" class="form-control" id="exampleFormControlSelect1">
        <option @if($karyawan->role == 'admin') selected @endif>Admin</option>
        <option @if($karyawan->role == 'HR') selected @endif>HR</option>
        <option @if($karyawan->role == 'Sekertaris') selected @endif>Sekertaris</option>
        <option @if($karyawan->role == 'Manager') selected @endif>Manager</option>
        <option @if($karyawan->role == 'Direktur') selected @endif>Direktur</option>
        <option @if($karyawan->role == 'super-admin') selected @endif value="super-admin">Corporate</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect2">Agama</label>
      <select name="agama" class="form-control" id="exampleFormControlSelect2">
        <option @if($karyawan->agama == 'ISLAM') selected @endif>ISLAM</option>
        <option @if($karyawan->agama == 'HINDU') selected @endif>HINDU</option>
        <option @if($karyawan->agama == 'BUDHA') selected @endif>BUDHA</option>
        <option @if($karyawan->agama == 'KRISTEN') selected @endif>KRISTEN</option>
        <option @if($karyawan->agama == 'KONGHUCU') selected @endif>KONGHUCU</option>
       
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect2">Jenis Kelamin</label>
      <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect2">
        <option @if($karyawan->jenis_kelamin == 'L') selected @endif value="L">Laki-laki</option>
        <option @if($karyawan->jenis_kelamin == 'P') selected @endif value="P">Perempuan</option>
      
       
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">ALAMAT</label>
      <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$karyawan->alamat}}</textarea>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">AVATAR</label>
      <input type="file" name="avatar"  class="form-control"> 
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-warning">UPDATE</button>
</form>   

@endsection
@push('pages-scripts')
 
@endpush