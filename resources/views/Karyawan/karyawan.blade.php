@extends('Layout.Master')
@section('title',' Karyawan')
@section('headcontent','Karyawan')
@section('header-link')
<link rel="stylesheet" href="{{asset('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/plugins/fontawesome-free/css/all.min.css')}}">
@stop
@section('content')

<div class="card shadow-sm" >
    <div class="container">
      <a href="{{route('karyawan.tambah')}}"><div class="btn btn-primary mt-3">Tambah +</div></a>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
           
              <th>Nama departement</th>
              <th>Jabatan</th>
              <th>Nama Karyawan</th>
              <th>Jenis Kelamin</th>
              <th>Email</th>
              <th>aksi</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($data_inner as $din)
                  
              <tr>
              <td>{{$din->nama_departement}}</td>
              <td>{{$din->jabatan}}</td>
              <td>{{$din->nama_karyawan}}</td>
              <td>{{$din->jenis_kelamin}}</td>
              <td>{{$din->email}}</td>
              <td>
                <div class="row">
               
              <div class="col">
              <a class="text-danger"  href="{{route('karyawan.delete',$din->email)}}" onclick="return confirm('yakin Data ini ingin dihapus ?')">Hapus</a>
              </div>
            </div>
               
              </td>
              </tr>
              
              @endforeach
            </tbody>
          </table>
    </div>
</div>

  


@endsection
@push('before-script')
<script src="{{asset('assets/admin/plugins/jquery/jquery.min.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    });
   
  });
</script> 
@endpush