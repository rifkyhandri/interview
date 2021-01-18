@extends('Layout.Master')
@section('title','System ERP')
@section('headcontent','Brand Categories')

@section('content')

        <div class="card" >
            <div class="container">
               
            <div class="row">
                @foreach ($brand_cat as $br_cat)

                <div class="col-3">
                    <div class="card shadow mt-3" style="height: 200px">
                        <img src="{{ url('assets/images/ecommerce/brand-cat/'.$br_cat->avatar) }}" style="height: 200px" alt="">
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <section>

            <div class="card" >
                <form action="{{route('cms_brand_cat_create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="container">
                    <div class="row">
                            <div class="col-xl-6 mt-3">
                                <p class="font-weight-bold h4">Masukan Kategori</p>
                            </div>
                           
                      </div>
            <hr>
                    <div class="form-group mt-3">
                        <label for="exampleInputEmail1">Nama Kategori</label>
                        <input type="text" name="nama_brand" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Kategori" value="">
                      </div>
            
                      <div class="form-group">
                        <label for="exampleInputEmail1">Pilih Brand</label>
                        <select name="kode_brand" class="form-control" id="exampleFormControlSelect1">
                            <option value="">Pilih Brand</option>
                            @foreach ($brand as $br)
                                <option value="{{$br->nomor}}">{{$br->name}}</option>
                            @endforeach
                         
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">link - tidak wajib</label>
                        <input type="text" name="link" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="link" value=""> 
                      </div>
   
                      <div class="form-group">
                        <b>File Gambar</b>
                        <br/>
                        <input type="file" name="avatar" class="form-control">
                        </div>

                        <div class="form-group" style="width: 200px">
                            <label for="exampleInputEmail1">status</label>
                            <select name="status" class="form-control" id="exampleFormControlSelect1">
                              <option value="">status</option>
                              <option value="aktif">Aktif</option>
                              <option value="tidak_aktif">Tidak Aktif</option>
                             
                            </select>
                          </div>
                          <div class="modal-footer">
                            @if($brand_cat->count() <  4)<button type="submit" class="btn btn-primary">Simpan</button>@endif
                          </div>

                </div>
            </form>
         
            </div>

    </section>
@endsection
@push('pages-scripts')
 
@endpush