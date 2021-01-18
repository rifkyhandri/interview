@extends('Layout.Master')
@section('title','System ERP')
@section('headcontent','EVENT')

@section('content')
{{-- jika berhasil ditambahkan akan muncul sebuah alert sukses disini --}}
@if (session('message'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
	<strong>Hai Bro,</strong>  {{session('message')}}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	</button>
  </div>  
@endif

{{-- jika login sebagai super admin dan HR maka bisa menambah acara / jika bukan divisi tersebut maka tidak muncul button tambah data --}}
@if (auth()->user()->role == 'super_admin' || auth()->user()->role == 'HR')
<a href="{{route('event.tambah')}}" class="btn btn-primary mb-3">Tambah acara</a>    
 @endif

 {{--  ini adalah card menampilkan data event  --}}
<div class="row ">
	<div class="col-xl-12">
		<h3>Event Saat ini</h3>
	</div>
</div>
<div class="row">
    @foreach ($data_event as $data)

    
	<div class="col-3 mb-2">
		<article class="article " >
			<div class="article-header">
        {{-- jika login dengan role super_admin dan HR maka bisa menghapus data pada event tersebut --}}
          @if (auth()->user()->role == 'super_admin' || auth()->user()->role == 'HR')
				<a class="btn btn-danger float-right"  href="{{route('event.delete',$data->id)}}" onclick="return confirm('yakin Data ini ingin dihapus ?')">X</a>
          @endif

          {{-- jika login dengan role super_admin dan HR bisa edit data pada event tersebut --}}
          @if (auth()->user()->role == 'super_admin' || auth()->user()->role == 'HR')
          
				<a class="btn btn-success fas fa-edit text-white float-right"  href="" onclick="return confirm('yakin Data ini ingin dihapus ?')"></a>
          @endif
        
          {{-- dibawah ini menunjukan bahawa kita get data dari img/unsplash dengan id yang tertera --}}
				<div class="article-image" data-background="{{ url('assets/images/'.$data->avatar) }}" style="{{ url('../assets/img/unsplash/'.$data->file) }}"></div>
				<div class="article-title">
					<h2>
						<a href="#">{{$data->nama_event}}</a>
					</h2>
				</div>
			</div>
			<div class="article-details">
				<p class="font-weight-bold text-dark">{{$data->kategori}} || {{$data->tanggal}} </p>
				<div class="row container">
          {{-- jika harga nya tidak ada atau gratis maka akan muncul title Gratis , jika ada dia akan menampilkan harga pada card event tersebut --}}
            @if($data->harga == '')
					<p>Gratis</p>@else
					<p>Rp.{{$data->harga}}</p>@endif
            @if ($data->status == 'wajib')
					<p> ~ 
						<span class="font-weight-bold text-primary">{{$data->status}}</span>
					</p>@endif
            
				</div>
			
				--
				<p class="font-weight-bold text-dark">{{$data->penyelenggara}} </p>
				<div class="article-cta">
					<a href="{{route('event.show',$data->id)}}" class="btn btn-primary">lihat disini</a>
				</div>
			</div>
		</article>
	</div>
    @endforeach
      

</div>



{{-- event rutin --}}

@endsection

@push('pages-scripts')
    
@endpush