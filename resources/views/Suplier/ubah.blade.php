@extends('Layout.Master')
@section('title','Ubah Suplier')
@section('headcontent','Supplier')
    
{{-- jika ada error dengan property id jangan menggunakan foreach --}}
@section('content')

<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Ubah Supplier</h4>
        </div>
        <div class="card-body">     
  {{-- id suplier --}}
      <div class="form-group">
        <form action="{{route('suplier.update',$ganti->id)}}" method="POST">
            @csrf
        <label>ID Suplier </label>
        <input type="text" name='id' class="form-control @error('id') is-invalid @enderror" value="{{ $ganti->code_suplier}}" readonly>
       @error('id')
       <div class="invalid-feedback">{{ $message }}</div>
       @enderror
      </div>
      {{-- nama Suplier --}}
          <div class="form-group">
            <label>Nama Supplier</label>
            <input type="text" name='nama' class="form-control @error('nama_suplier') is-invalid @enderror" value="{{ $ganti->nama}}">
           @error('nama_suplier')
           <div class="invalid-feedback">{{$message}}</div>
           @enderror
          </div>
          
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" name='alamat' class="form-control @error('alamat') is-invalid @enderror" value="{{ $ganti->alamat}}">
           @error('alamat')
           <div class="invalid-feedback">{{ $message }}</div>
           @enderror
          </div>
  
          <div class="form-group">
            <label>Asal Negara</label>
            <input type="text" name='asal_negara' class="form-control @error('asal_negara') is-invalid @enderror" value="{{ $ganti->asal_negara}}" readonly>
           @error('asal_negara')
           <div class="invalid-feedback">{{ $message }}</div>
           @enderror
          </div>
          
          
        
          
          <div class="form-group">
            <label>Nomor Telepon
              {{-- pesan error di atas --}}
               {{-- @error('nomor_telepon')
                {{$message}}
            @enderror --}}
          </label>
            <input type="text" name='nomor_telepon' class="form-control @error('nomor_telepon') is-invalid @enderror" value="{{  $ganti->nomor_telepon }}">
           @error('nomor_telepon')
           <div class="invalid-feedback">{{ $message }}</div>
           @enderror
          </div>
          
          <div class="form-group">
            <label>Website</label>
            <input type="text" name="website" class="form-control @error('website') is-invalid @enderror" value="{{ $ganti->website}}">
            @error('website')
            <div class="invalid-feedback">{{ 'Maaf harap masukan data di form ini'  }}</div>
            @enderror
          </div>
    
         
          <div class="form-group">
            <label for="">Mata Uang</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="currency" id="exampleRadios1" value="Rupiah" checked>
            <label class="form-check-label" for="exampleRadios1">
              RP  ( Rupiah )
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="currency" id="exampleRadios2" value="Dollar Amerika">
            <label class="form-check-label" for="exampleRadios2">
              $ Amerika Serikat
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="currency" id="exampleRadios2" value="Dollar Singapura">
            <label class="form-check-label" for="exampleRadios2">
              $ Singapura
            </label>
          </div>
          </div>
          
  
          <div class="form-group">
            <label>Manager</label>
            <input type="text" name="manager" class="form-control @error('manager') is-invalid @enderror" value="{{ $ganti->manager}}">
            @error('manager')
            <div class="invalid-feedback">{{ 'Maaf harap masukan data di form ini'  }}</div>
            @enderror
          </div>
  
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $ganti->Email}}">
            @error('email')
            <div class="invalid-feedback">{{ 'Maaf harap masukan data di form ini'  }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label>Telepon rumah</label>
            <input type="text" name="tel_home" class="form-control @error('tel_home') is-invalid @enderror" value="{{ $ganti->tel_home}}">
            @error('tel_home')
            <div class="invalid-feedback">{{ 'Maaf harap masukan data di form ini'  }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label>Telepon Kantor</label>
            <input type="text" name="tel_office" class="form-control @error('tel_office') is-invalid @enderror" value="{{ $ganti->tel_office}}">
            @error('tel_office')
            <div class="invalid-feedback">{{ 'Maaf harap masukan data di form ini'  }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label>FAX</label>
            <input type="text" name="fax" class="form-control @error('fax') is-invalid @enderror" value="{{ $ganti->fax}}">
            @error('fax')
            <div class="invalid-feedback">{{ 'Maaf harap masukan data di form ini'  }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label>Mobile</label>
            <input type="text" name="mobile" class="form-control @error('mobile') is-invalid @enderror" value="{{ $ganti->mobile}}">
            @error('mobile')
            <div class="invalid-feedback">{{ 'Maaf harap masukan data di form ini'  }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label>Street</label>
            <input type="text" name="street" class="form-control @error('street') is-invalid @enderror" value="{{ $ganti->street}}">
            @error('street')
            <div class="invalid-feedback">{{ 'Maaf harap masukan data di form ini'  }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label>City</label>
            <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" value="{{ $ganti->city}}">
            @error('city')
            <div class="invalid-feedback">{{ 'Maaf harap masukan data di form ini'  }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label>Country</label>
            <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" value="{{ $ganti->country}}">
            @error('country')
            <div class="invalid-feedback">{{ 'Maaf harap masukan data di form ini'  }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="">Status</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="non-aktif" checked>
            <label class="form-check-label" for="exampleRadios1">
              NonAktif
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="proses">
            <label class="form-check-label" for="exampleRadios2">
              Proses
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="aktif">
            <label class="form-check-label" for="exampleRadios2">
              Aktif
            </label>
          </div>
          </div>
          <div class="form-group">
            <label>catatan</label>
            <input type="text" name="catatan" class="form-control @error('catatan') is-invalid @enderror" value="{{ $ganti->catatan}}">
            @error('catatan')
            <div class="invalid-feedback">{{ 'Maaf harap masukan data di form ini'  }}</div>
            @enderror
          </div>
          
        <div class="card-footer text-right">
          <button class="btn btn-primary mr-1" type="submit">Submit</button>
          <button class="btn btn-secondary"  type="reset"><a href="#"> Reset</a></button>
        </div>
      </div>
    </form>
 
@endsection