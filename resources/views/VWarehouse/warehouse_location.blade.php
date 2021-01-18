@extends('Layout.Master') @section('title','Warehouse') @section('headcontent','Warehouse') @section('content') @if (session('message'))
<div class="alert alert-success alert-dismissible show fade">
	<div class="alert-body">
		<button class="close" data-dismiss="alert"> <span></span>
		</button>{{session('message')}}</div>
</div>@endif @if (session('pesan'))
<div class="alert alert-success alert-dismissible show fade">
	<div class="alert-body">
		<button class="close" data-dismiss="alert"> <span></span>
		</button>{{session('pesan')}}</div>
</div>@endif @if (session('pesan_update'))
<div class="alert alert-success alert-dismissible show fade">
	<div class="alert-body">
		<button class="close" data-dismiss="alert"> <span></span>
		</button>{{session('pesan_update')}}</div>
</div>@endif
<div class="row">
	<div class="col-12 col-md-12 col-lg-12">
		<div class="form-group">
			<input type="text" name="" placeholder="cari" id="search">
		</div>
		<hr>
		<table class="table table-hover table-light table-bordered table-md" id="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">ID Gudang</th>
					<th scope="col">Nama Gudang</th>
					<th scope="col">Tipe Gudang</th>
					<th scope="col">Alamat</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>@foreach ($wloc as $data)
				<tr>
					<td>{{$data->nomor}}</td>
					<td>{{$data->nama_gudang}}</td>
					<td>{{$data->kategori}}</td>
					<td>{{$data->alamat}}</td>
					<td> <a href="{{route('edit.wloc',$data->id)}}" class="btn btn-icon icon-left btn-success">Ubah</a>
						<a href="#" data-id="{{$data->id}}" class="btn btn-icon icon-left btn-danger swal-confirm">
      <form action="{{route('delete.wloc',$data->id)}}" id="delete{{$data->id}}" method="POST">
        @csrf
        @method('delete')
        </form>
          Hapus</a>
					</td>
				</tr>@endforeach</tbody>
		</table>{{-- dibawah ini adalah variable bukan page --}} {{$wloc->links()}}</div>
</div>
<hr>{{-- Table --}}
<a href="{{ route('tambah.wloc')}}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Tambah Data</a>
</div>
</div>@endsection @push('pages-scripts')
<script src='assets/js/sweetalert.min.js'></script>@endpush @push('after-script')
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
	
		var $rows = $('#table tr');
	
	$('#search').keyup(function() {
	    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
	    <
	    $rows.show().filter(function() {
	        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
	        return !~text.indexOf(val);
	    }).hide();
	});
</script>@endpush @push('before-script')
@endpush