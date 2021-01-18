@extends('Layout.Master')
@section('title','System Settings')
@section('headcontent','Tambah Karyawan')
@section('content')

    <div class="card" >

       <div class="container pt-3">
       <h5 class="font-weight-bold text-dark">Tambah Karyawan - {{$number}}</h5>
       
        <hr>
        
       <form action="{{route('karyawan.create')}}" method="POST">
        @csrf
            <input type="hidden" name="kode_karyawan" value="{{$number}}">
            <input type="hidden" name="users_id" value="{{$number2}}">
        <div class="mb-4">
            <div class="row">
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">Select Company</label>
                    <select name="kode_company" class="form-control mb-5" id="exampleFormControlSelect2">
                        <option value="">Select Company</option>
                            @foreach ($data_company as $company)      
                                <option  value="{{$company->kode_company}}">{{$company->nama_company}}</option>                
                            @endforeach
                      </select>
                </div>
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">Select Departement</label>
                    <select name="kode_departemen" class="form-control kode_departement " id="exampleFormControlSelect2" id="departement">
                        <option value="">Select Departement</option>
                            @foreach ($data_departement as $data)      
                                <option value="{{$data->id_departement}}">{{$data->nama_departement}}</option>                
                            @endforeach
                      </select>
                </div>
            </div>
        <hr>
<div class="col-xl-12 col-lg-12 pt-3">
    <div class="row">
        <div class="col-xl-3 col-lg-3">
        <label for="" class="h6" >Nama Karyawan</label>    
        </div>
        <div class="col-xl-9 col-lg-9">
            <div class="form-group">
            <input type="text" name="nama_karyawan" class="form-control" class="form-control @error('nama_karyawan') is-invalid @enderror" value="{{ old('nama_karyawan')}}">
            @error('nama_karyawan')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        </div>
    </div>
</div>
<div class="col-xl-12 col-lg-12">
    <div class="row">
        <div class="col-xl-3 col-lg-3">
        <label for="" class="h6" >Email</label>    
        </div>
        <div class="col-xl-9 col-lg-9">
            <div class="form-group">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email')}}">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        </div>
    </div>
</div>
<div class="col-xl-12 col-lg-12">
    <div class="row">
        <div class="col-xl-3 col-lg-3">
        <label for="" class="h6" >Jenis Kelamin</label>    
        </div>
        <div class="col-xl-9 col-lg-9">
            <div class="form-group">
                <select name="jenis_kelamin" class="form-control " id="exampleFormControlSelect2">
                    <option value="">Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                  </select>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-12 col-lg-12">
    <div class="row">
        <div class="col-xl-3 col-lg-3">
        <label for="" class="h6" >Jabatan</label>    
        </div>
        <div class="col-xl-9 col-lg-9">
            <div class="form-group">
                {{-- <input type="text" name="jabatan" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('jabatan')}}"> --}}
                <select name="jabatan" class="form-control jabatan" id="exampleFormControlSelect2">
                    <option value="">Pilih Jabatan</option>
                    @foreach ($departement_sub as $sub)
                    <option style="text-transform: uppercase">{{$sub->nama_sub}}</option>
                    @endforeach 
                    
                </select>
        </div>
        </div>
    </div>
</div>
<div class="col-xl-12 col-lg-12">
    <div class="row">
        <div class="col-xl-3 col-lg-3">
        <label for="" class="h6" >Nomor Hp</label>    
        </div>
        <div class="col-xl-9 col-lg-9">
            <div class="form-group">
            <input type="number" name="nomor_hp" class="form-control @error('nomor_hp') is-invalid @enderror" value="{{ old('nomor_hp')}}">
            @error('nomor_hp')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        </div>
    </div>
</div>
<div class="col-xl-12 col-lg-12">
    <div class="row">
        <div class="col-xl-3 col-lg-3">
        <label for="" class="h6" >Nomor Telepon</label>    
        </div>
        <div class="col-xl-9 col-lg-9">
            <div class="form-group">
            <input type="number" name="nomor_telp" class="form-control @error('nomor_telp') is-invalid @enderror" value="{{ old('nomor_telp')}}">
            @error('nomor_telp')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        </div>
    </div>
</div>
<div class="col-xl-12 col-lg-12">
    <div class="row">
        <div class="col-xl-3 col-lg-3">
        <label for="" class="h6" >Alamat</label>    
        </div>
        <div class="col-xl-9 col-lg-9">
            <div class="form-group">
            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat')}}">
            @error('alamat')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        </div>
    </div>
</div>
<div class="col-xl-12 col-lg-12">
    <div class="row">
        <div class="col-xl-3 col-lg-3">
        <label for="" class="h6" >Tanggal Lahir</label>    
        </div>
        <div class="col-xl-9 col-lg-9">
            <div class="form-group">
            <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir')}}">
            @error('tanggal_lahir')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        </div>
    </div>
</div>
<div class="col-xl-12 col-lg-12">
    <div class="row">
        <div class="col">
         <button class="btn btn-primary float-right" type="submit">simpan</button>
        </div>
     
        </div>
    </div>
</div>
            
</form>  

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('change','.kode_departement',function(){
            // console.log('hmm its change');

            var cat_id =$(this).val();
            // console.log(cat_id);
            var div=$(this).parent();
            var op =" ";
            $.ajax({
                type:'get',
                url:"{!!URL::to('findDepartementName')!!}",
                data:{'id':cat_id},
                success:function(data){
                    // console.log('success');

                    // console.log(data);

                    // console.log(data.length);
                    op+='<option value="0" selected disabled> Pilih Product </option>';
                    for(var i=0;i<data.length;i++){
                        op+='<option value="'+data[i].id+'">'+data[i].nama_sub+'</option>';

                    }
                    
                    div.find('.jabatan').html(" ");
                        div.find('.jabatan').append(op);
                },error:function(){

                }
            });
        });
    });
</script>

@endsection
@push('pages-scripts')

@endpush