@extends('Layout.Master')
@section('title','Setup Aplikasi')
@section('headcontent','Setup Aplikasi')
    

@section('content')
{{-- jika jumlah data di dalam array sama dengan null/0 maka button tambah akan muncul --}}
@if (sizeof($setup)==0)
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Aw, yeah!</button>
@endif

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
        <th scope="col" >Jumlah hari kerja</th>
        <th scope="col">Nama Aplikasi</th>
        <th scope="col">Action</th>

        
      </tr>
    </thead>
    <tbody>
        @foreach ($setup as $no => $data)
      <tr >
        
      <td>{{$no+1}}</td>
      <td>{{$data->jumlah_hari_kerja}}</td>
      <td>{{$data->nama_aplikasi}}</td>
    

      <td>
      <a href="#" data-id="{{ $data->id }}" class="btn btn-icon icon-left btn-success btn-edit">Ubah</a>
     
    </td>

  </tr>
  @endforeach
     
    </tbody>
  </table>
  {{-- {{$setup->links()}} --}}
</div>
</div>
<hr>
{{-- Table --}}
  </div>
</div>
@section('modal')
{{-- modal untuk tambah data ketika belum ada data di daatabase --}}
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Setup Aplication</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              
               <div class="card-body">
                 <form action="{{route('setup.store')}}" method="POST">
                       @csrf
               <label>Nama Aplikasi</label>
               <input type="text" name='nama_aplikasi' class="form-control @error('nama_aplikasi') is-invalid @enderror" value="{{ old('nama_aplikasi')}}">
              @error('nama_aplikasi')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
             </div>
              
              <div class="card-body">
               
                  <label>Jumlah hari kerja</label>
                  <input type="text" name='jumlah_hari_kerja' class="form-control @error('jumlah_hari_kerja') is-invalid @enderror" value="{{ old('jumlah_hari_kerja')}}">
                 @error('jumlah_hari_kerja')
                 <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
                </div>
                
               
                   
           
                
              <div class="card-footer text-right">
                <button class="btn btn-primary mr-1" type="submit">Simpan</button>
                <button class="btn btn-secondary"  type="reset"><a href="#"> Reset</a></button>
              </div>
            </div>
          </div>
          </form>
      </div>
     
    </div>
  </div>
</div>
{{-- modal untuk edit data --}}
<div class="modal fade" tabindex="-1" role="dialog" id="modal-edit">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Setup Aplication</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary mr-1" type="submit">Simpan</button>
                <button class="btn btn-secondary"  type="reset"><a href="#"> Reset</a></button>
              </div>
            </div>
          </div>
          </form>
      </div>
     
    </div>
  </div>
</div>
</div>

@endsection
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

$('.btn-edit').on('click',function() {
  console.log($(this).data('id'))
  let id = $(this).data('id')
  $.ajax({
    url:`/konfigurasi/setup/${id}/edit`,
    method:'GET',
    success: function(data){
      console.log(data)
      $('#modal-edit').modal('show')
    },
    error: function(error){
      console.log(error)
      
    }
  })
});
</script>
@endpush
@push('before-script')
  
@endpush



















