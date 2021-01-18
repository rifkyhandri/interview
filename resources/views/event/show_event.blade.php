@extends('Layout.Master') @section('title','System ERP') @section('headcontent','Event') @section('content') 

	

<div class="row">		
<div class="col-12">
	<div class="card mb-0 " style="height: 600px">
		<img src="{{url('assets/images/'.$event_karyawan->avatar)}}" style="height:600px; ">
	</div>
</div>
</div>
<div class="card-body shadow bg-white">
	<a href="#" class="btn btn-primary btn-icon icon-left btn-lg btn-block mb-4 d-md-none" data-toggle-slide="#ticket-items">
	  <i class="fas fa-list"></i> All Tickets
	</a>
	<div class="tickets">
	  <div class="ticket-items" id="ticket-items">
		<div class="ticket-item active">
		  <div class="ticket-title">
		  <h4>{{$event_karyawan->nama_event}}</h4>
		  </div>
		  <div class="ticket-desc">
			<div>{{$event_karyawan->tanggal}}</div>
			<div class="bullet"></div>
			<div>{{$event_karyawan->jam}}</div>
		  </div>
		</div>
		<div class="ticket-item ">
			<div >Corp</div>
		  <div class="ticket-title">
		  <h4>{{$event_karyawan->corp}}</h4>
		  </div>
		  <div>penyelenggara</div>
		  <div class="ticket-title">
			<div class="font-weight-bold">{{$event_karyawan->penyelenggara}}</div>
		
		  </div>
		  <div>Status</div>
		  <div class="ticket-title">
			@if($event_karyawan->status == 'wajib')<div class="font-weight-bold">{{$event_karyawan->status}}</div>@else <div class="font-weight-bold">Tidak Wajib</div> @endif
		
		  </div>
		  <div>Status pembayaran</div>
		  <div class="ticket-title">
			@foreach ($event_daftar as $daftar) @if($daftar->status_pembayaran == 'Terbayar')<div class="font-weight-bold">{{$daftar->status_pembayaran}}</div> @else --@endif @endforeach
		
		  </div>
		</div>
		
	  </div>
	  <div class="ticket-content">
		<div class="ticket-header">
		  <div class="ticket-sender-picture img-shadow">
			<img src="{{url('assets/images/'.$event_karyawan->avatar)}}" alt="image" style="height: auto;">
		  </div>
		  <div class="ticket-detail">
			<div class="ticket-title">
			<h4>{{$event_karyawan->nama_event}}
				@if($event_karyawan->status == 'wajib') <div class="bullet"></div><span class="text-primary font-weight-600">{{$event_karyawan->status}}@else{{-- tidak muncul --}} @endif</span></h4>
			</div>
			
			<div class="ticket-info">
			<div class="font-weight-600">@if($event_karyawan->harga == '')Gratis @else RP. {{$event_karyawan->harga}} @endif</div>
			  <div class="bullet"></div>
			<div class="text-primary font-weight-600">{{$event_karyawan->ketentuan}}</div>
			</div>
		  </div>
		</div>
		<div class="ticket-description">
		<p>Hai <span class="font-weight-bold text-primary">{{Auth::user()->name}}</span>,kamu di undang di acara {{$event_karyawan->description}}</p>
		
		<hr>	
		  <div class="gallery">
			<div class="gallery-item" data-image="{{url('assets/images/'.$event_karyawan->avatar)}}" data-title="Image 1" href="../assets/img/news/img01.jpg" title="Image 1" style="background-image: url(&quot;../assets/img/news/img01.jpg&quot;);"></div>
			<div class="gallery-item" data-image="../assets/img/news/img02.jpg" data-title="Image 2" href="../assets/img/news/img02.jpg" title="Image 2" style="background-image: url(&quot;../assets/img/news/img02.jpg&quot;);"></div>
			<div class="gallery-item" data-image="../assets/img/news/img03.jpg" data-title="Image 3" href="../assets/img/news/img03.jpg" title="Image 3" style="background-image: url(&quot;../assets/img/news/img03.jpg&quot;);"></div>
			<div class="gallery-item gallery-more" data-image="../assets/img/news/img04.jpg" data-title="Image 4" href="../assets/img/news/img04.jpg" title="Image 4" style="background-image: url(&quot;../assets/img/news/img04.jpg&quot;);">
			  <div>+2</div>
			</div>
		  </div>

		  <div class="ticket-divider"></div>

		  <div class="ticket-form">
		  @if($event_karyawan->harga == '')<form action="{{route('daftar.free')}}"  method="POST">@else<form action="/daftar">@endif
			@csrf
				<div class="form-group">	
				<input name="id_event" type="hidden" class="summernote form-control" value="{{$event_karyawan->id_event}}">
				</div>	
				<div class="form-group">	
				<input name="nama_event" type="hidden" class="summernote form-control" value="{{$event_karyawan->nama_event}}">
				</div>	
				<div class="form-group">	
				
				<input name="status_pembayaran" type="hidden" class="summernote form-control" @if($event_karyawan->harga == '')value="Terbayar"@else value='Belum Bayar' @endif>
				</div>	
				<div class="form-group">	
				<input name="id_pembayaran" type="hidden" class="summernote form-control" @if($event_karyawan->harga == '')value="{{'E'.'2020'.$event_karyawan->id_event.Auth::user()->id.'FREE' }}"@else value="{{'E'.'2020'.$event_karyawan->id_event.Auth::user()->id.'PAY'}}"@endif>
				</div>	
				<div class="form-group">	
				<input name="id_karyawan" type="hidden" class="summernote form-control" value="{{Auth::user()->id}}">
				</div>	
				<div class="form-group">	
				<input name="nama_karyawan" type="hidden" class="summernote form-control" value="{{Auth::user()->name}}">
				</div>	
			  <div class="form-group">
				  <label class="font-weight-bold " for=""><span class="font-weight-bold text-primary">Note :</span> berikan komentar jika dianggap perlu</label>
				<textarea class="summernote form-control" placeholder="Komentar ..."></textarea>
			  </div>
			  <div class="form-group text-right">
				<button class="btn btn-primary btn-lg" type="submit">
				  Daftar
				</button>
			  </div>
			</form>
		  </div>
		</div>
	  </div>
	</div>
  </div>

  

@endsection @push('pages-scripts') @endpush