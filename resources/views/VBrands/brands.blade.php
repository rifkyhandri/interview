@extends('Layout.Master')
@section('title','Brands')
@section('headcontent','Brands')
    

@section('content')
@if (session('message'))
    <div class="alert alert-success alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">
          <span></span>
        </button>
        {{session('message')}}
      </div>
    </div>
@endif
@if (session('pesan'))
<div class="alert alert-success alert-dismissible show fade">
  <div class="alert-body">
    <button class="close" data-dismiss="alert">
      <span></span>
    </button>
    {{session('pesan')}}
  </div>
</div>
@endif
@if (session('pesan_update'))
<div class="alert alert-success alert-dismissible show fade">
  <div class="alert-body">
    <button class="close" data-dismiss="alert">
      <span></span>
    </button>
    {{session('pesan_update')}}
  </div>
</div>
@endif
<div class="row">
  <div class="col-12 col-md-12 col-lg-12">
      <hr>
      <table class="table table-hover table-light table-bordered table-md">
    <thead class="thead-dark">
      <tr>

        <th scope="col">ID</th>
        <th scope="col" >Nama Brands</th>
        <th scope="col" >Nama Suplier</th>
          <th scope="col" >Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($brand as $data)
      <tr >
        
      
      <td ><a href="">{{$data->nomor}}</a></td>
      <td >{{$data->name}}</td>
      <td >{{$data->suplier}}</td>
      
      <td>
      <a href="{{route('edit.brand',$data->id)}}" class="btn btn-icon icon-left btn-success">Ubah</a>
      <a href="#" data-id="{{$data->id}}" class="btn btn-icon icon-left btn-danger swal-confirm">
      <form action="{{route('delete.brand',$data->id)}}" id="delete{{$data->id}}" method="POST">
        @csrf
        @method('delete')
        </form>
          Hapus</a>
    </td>

  </tr>
  @endforeach
     
    </tbody>
  </table>
  {{$brand->links()}}
</div>
</div>
<hr>
{{-- Table --}}
<a href="{{ route('tambah.brand')}}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Tambah Data</a>
  </div>
</div>
@endsection
@push('pages-scripts')
<script src='assets/js/sweetalert.min.js'></script>   
    
@endpush
@push('after-script')
<script>

$(".swal-confirm").click(function(e) {
  id = e.target.dataset.id;
  swal({
      title: 'Apakah kamu mau hapus id.'+ id +'?',
      text: 'Hapus, you will not be able to recover this imaginary file!',
      icon: 'warning',
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
      swal('Selamat Data berhasil terhapus', {
        icon: 'success',
      });
      $(`#delete${id}`).submit();
      } else {
      swal('Okey , Datamu terselamatkan');
      }
    });
});
</script>
@endpush
@push('before-script')
  
@endpush





















