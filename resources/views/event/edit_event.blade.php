@extends('Layout.Master') @section('title','Tambah Event') @section('content') {{-- tambah event --}}
@section('headcontent','Tambah Event')
	

<div class="col-xl-12">
	<div class="row">
		<div class="col-6">
			<div class="form-group">
				<form action="{{route('event.simpan')}}" method="POST" enctype="multipart/form-data">@csrf
					<label>Corp</label>
				<input type="text" name='corp' class="form-control @error('corp') is-invalid @enderror" placeholder="Nama Perusahaan" value="PT Adhi Karya Group" readonly>@error('corp')
					<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
			<div class="form-group">
				<label>kategori</label>
				<input type="text" name='kategori' class="form-control @error('kategori') is-invalid @enderror" placeholder="Kategori" value="{{ old('kategori')}}"></textarea>@error('kategori')
				<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
			<div class="form-group">
				<label>nama event</label>
				<input type="text" name='nama_event' class="form-control @error('nama_event') is-invalid @enderror" placeholder="Nama Acara" value="{{ old('nama_event')}}"></textarea>@error('nama_event')
				<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
			<div class="form-group">
				<label>Penyelenggara</label>
				<input type="text" name='penyelenggara' class="form-control @error('penyelenggara') is-invalid @enderror" placeholder="Penyelenggara" value="{{ old('penyelenggara')}}">@error('penyelenggara')
				<div class="invalid-feedback">{{$message }}</div>@enderror</div>
			<div class="form-group">
				<label>tanggal</label>
				<input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal')}}">@error('tanggal')
				<div class="invalid-feedback">{{ 'Maaf harap masukan data di form ini' }}</div>@enderror</div>
		</div>
		<div class="col-6">
			<div class="form-group">
				<label>Deskripsi</label>
				<textarea type="text" name="ketentuan" class="form-control @error('ketentuan') is-invalid @enderror" value="{{ old('ketentuan')}}"></textarea>@error('ketentuan')
				<div class="invalid-feedback">{{ 'Maaf harap masukan data di form ini' }}</div>@enderror</div>
			<div class="form-group">
				<label>Jam</label>
				<input type="time" name="jam" class="form-control @error('jam') is-invalid @enderror" value="{{ old('jam')}}">@error('jam')
				<div class="invalid-feedback">{{ 'Maaf harap masukan data di form ini' }}</div>@enderror</div>
			<div class="form-group"> <b>File Gambar</b>
				<br/>
				<input type="file" name="file">
			</div>
		</div>
	</div>
	<div class="card-footer text-right">
		<button class="btn btn-primary mr-1" type="submit">Submit</button>
		<button class="btn btn-secondary" type="reset"><a href="#"> Reset</a>
		</button>
	</div>
</div>@endsection @push('pages-scripts') @endpush