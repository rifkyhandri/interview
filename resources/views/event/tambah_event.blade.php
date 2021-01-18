@extends('Layout.Master') @section('title','Tambah Event') @section('content') {{-- tambah event --}}
@section('headcontent','Tambah Event')
	


<div class="col-xl-12">
	<div class="row">
		<div class="col-6">
			<div class="form-group">
				
					<form action=" {{route('event.simpan')}}" method="POST" enctype="multipart/form-data">@csrf
					<label>Perusahaan</label>
					<input type="text" name='corp' class="form-control @error('corp') is-invalid @enderror" value="PT Adhi Karya Group" readonly>@error('corp')
					
						<div class="invalid-feedback">{{ $message }}</div>@enderror
					</div>
					<div class="form-group">
						<label>ID Event</label>
						<input type="text" name='id_event' class="form-control @error('id_event') is-invalid @enderror"  <?php $id_event = 'E'.rand(0,9999).'2020' ?> value="{{$id_event}}"  readonly>
						</textarea>@error('id_event')
				
						<div class="invalid-feedback">{{ $message }}</div>@enderror
					</div>
					<div class="form-group">
						<label>Nama event</label>
						<input type="text" name='nama_event' class="form-control @error('nama_event') is-invalid @enderror" placeholder="Nama Acara" value="{{ old('nama_event')}}">
						</textarea>@error('nama_event')
				
						<div class="invalid-feedback">{{ $message }}</div>@enderror
					</div>
					<div class="form-group">
					
						<input type="hidden" name='nama_admin' class="form-control @error('nama_admin') is-invalid @enderror" placeholder="Nama Acara" value="{{Auth::user()->name}}">
						</textarea>@error('nama_admin')
				
						<div class="invalid-feedback">{{ $message }}</div>@enderror
					</div>
					<div class="form-group">
						<label>Kategori</label>
						<input type="text" name='kategori' class="form-control @error('kategori') is-invalid @enderror" placeholder="Kategori" value="{{ old('kategori')}}">
						</textarea>@error('kategori')
				
						<div class="invalid-feedback">{{ $message }}</div>@enderror
					</div>
					<div class="form-group">
						<label>Penyelenggara</label>
						<input type="text" name='penyelenggara' class="form-control @error('penyelenggara') is-invalid @enderror" placeholder="Penyelenggara" value="{{ old('penyelenggara')}}">@error('penyelenggara')
				
							<div class="invalid-feedback">{{$message }}</div>@enderror
						</div>
						<div class="form-group">
							<label>Tanggal</label>
							<input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal')}}">@error('tanggal')
				
								<div class="invalid-feedback">{{ 'Maaf harap masukan data di form ini' }}</div>@enderror
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label>Ketentuan</label>
								<textarea type="text" name="ketentuan" class="form-control @error('ketentuan') is-invalid @enderror" value="{{ old('ketentuan')}}"></textarea>@error('ketentuan')
				
								<div class="invalid-feedback">{{ 'Maaf harap masukan data di form ini' }}</div>@enderror
							</div>
							<div class="form-group">
								<label>Description</label>
								<textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description')}}"></textarea>@error('description')
				
								<div class="invalid-feedback">{{ 'Maaf harap masukan data di form ini' }}</div>@enderror
							</div>
							<div class="form-group">
								<label>Harga | abaikan form ini jika tidak ada harga atau <span class="font-weight-bold text-primary">Gratis</span></label>
								<input type="number" name="harga" placeholder="Rp." class="form-control @error('input') is-invalid @enderror" value="{{ old('harga')}}">@error('description')
				
								<div class="invalid-feedback">{{ 'Maaf harap masukan data di form ini' }}</div>@enderror
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect2">Status</label>
								<select name="status" class="form-control" id="exampleFormControlSelect2">
								  <option value="">-- STATUS --</option>
								  <option value="wajib">Wajib</option>
								  <option value="tidak_wajib">Tidak Wajib</option>
								  
								 
								</select>
							  </div>
							<div class="form-group">
								<label for="exampleFormControlSelect2">Header</label>
								<select name="header" class="form-control" id="exampleFormControlSelect2">
								<option value="{{false}}">-- STATUS --</option>
								<option value="{{true}}">Aktif</option>
								<option value="{{false}}">Tidak Aktif</option>
								  
								 
								</select>
							  </div>
							<div class="form-group">
								<label>Jam</label>
								<input type="time" name="jam" class="form-control @error('jam') is-invalid @enderror" value="{{ old('jam')}}">@error('jam')
				
									<div class="invalid-feedback">{{ 'Maaf harap masukan data di form ini' }}</div>@enderror
								</div>
								<div class="form-group">
									<b>File Gambar</b>
									<br/>
									<input type="file" name="avatar" class="form-control">
									</div>
								</div>
							</div>
							<div class="card-footer text-right">
								<button class="btn btn-primary mr-1" type="submit">Submit</button>
							</form>
								<button class="btn btn-secondary" type="reset">
									<a href="#"> Reset</a>
								</button>
							</div>
						</div>@endsection @push('pages-scripts') @endpush