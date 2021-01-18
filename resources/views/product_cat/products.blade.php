@extends('Layout.Master')
@section('title','System ERP')
@section('headcontent','Kategori Produk')

@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
     Tambah
  </button>
@foreach ($big_cat as $item)
@if(!$item)

@else
<div class="row">
    <div class="mb-3 col-4">
         <label for="exampleInputEmail1" class="form-label">Big Categories -  {{$item->id_cat_big}}</label>
         <div class="row">
           <div class="col-9" style="padding-right: 0px">
            <input name="nama_cat_big" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$item->nama_cat_big}}" >
            <input name="id_cat_big" type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$item->nama_cat_big}}" >
            
          </div>
          <div class="col-3">
            <a class="font-weight-bold text-danger mr-3" href="/product_categori/{{$item->id}}/delete">X</a>
            <a class="fas fa-plus" data-toggle="modal" data-target="#modal_edit-{{ $item->id }}" href=""></a>
          </div>
          </div>
                <div id="emailHelp" class="form-text">Masukan nama kategori produk.</div>
    </div>
    
    
    <div class="col-8 mb-3">
      @foreach ($data_sub_join as $sub)
      @if($sub->id_cat_big ==  $item->id_cat_big)
      <label for="exampleInputEmail1" class="form-label">Sub Categories -  {{$sub->id_cat_sub}}</label>
      <div class="row">
        <div class="col-4" style="padding-right: 0px">
          <input name="nama_cat_big" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$sub->nama_cat_sub}}" >
          {{-- <input name="id_cat_big" type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$sub->nama_cat_big}}" > --}}
        </div>
     
       <div class="col-2">
             
      
         <a class="font-weight-bold text-danger mr-3" href="/product_categories/{{$sub->id}}/delete">X</a>
         <a class="fas fa-plus" data-toggle="modal" data-target="#modal_tambah_sm-{{ $sub->id }}" href=""></a>
       </div>
       {{-- sm --}}
       <div class="col-4">
        @foreach ($data_sm_join as $sm)
        @if($sm->id_cat_big ==  $item->id_cat_big && $sm->id_cat_sub ==  $sub->id_cat_sub)
        <label for="exampleInputEmail1" class="form-label">Small Categories -  {{$sm->id_cat_sm}}</label>
        <div class="row">
          <div class="col-9" style="padding-right: 0px">
           <input name="nama_cat_sm" type="text" class="form-control mb-3" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$sm->nama_cat_sm}}" >
           
         </div>
         <div class="col-3">
          <a class="font-weight-bold text-danger mr-3" href="/product_categories_sm/{{$sm->id}}/delete">X</a>
         </div>
         </div>
            
               @else
      
               @endif
               @endforeach
       </div>
      </div>
      @else

      @endif
    
      @endforeach
    </div>
           

    

</div>


@endif
@endforeach




  
  
@push('pages-scripts')
 
@endpush

@endsection

@section('modal')
    <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form action="{{route('create.product')}}"method="POST" >
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleFormControlInput1">ID Suplier</label>
                <input name='id_cat_big' type="text" class="form-control"  value="{{$kode_big}}" >
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama Kategori </label>
                  <input  name='nama_cat_big' type="text" class="form-control" value="{{ old('nama')}}" id="exampleFormControlInput3" placeholder="Nama Kategori">

                 
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </form>
      </div>
    </div>
  
    </div>
  </div>

  {{-- modal edit --}}
  @foreach ($big_cat as $sedit)
  <div class="modal fade" id="modal_edit-{{ $sedit->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
            <form action="{{route('create_sub.product')}}"method="POST" id="editform">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleFormControlInput1">ID Kategori - {{$sedit->nama_cat_big}}  </label>
                <input name='id_cat_sub' type="text" class="form-control" value="{{$sedit->id_cat_big}}" >
                <input name='id_cat_big' type="hidden" class="form-control" value="{{$sedit->id_cat_big}}" >
                {{-- <input name='id_cat_sub' id="id_cat_sub" type="text" class="form-control"   > --}}
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama Kategori </label>
                  <input  name='nama_cat_sub' id="nama_cat_big" type="text" class="form-control" value="{{ old('nama')}}" id="exampleFormControlInput3" placeholder="Nama Sub Kategori">

                 
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
      </div>
    </div>
  
    </div>
  </div>
  @endforeach
  @foreach ($data_sub as $subdit)
  <div class="modal fade" id="modal_tambah_sm-{{ $subdit->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
            <form action="{{route('create_sm.product')}}"method="POST" id="editform">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleFormControlInput1">ID Kategori - {{$subdit->nama_cat_sub}}  </label>
                <input name='id_cat_sm' type="text" class="form-control" value="{{$subdit->id_cat_sub}}" >
    
                <input name='id_cat_sub' type="hidden" class="form-control" value="{{$subdit->id_cat_sub}}" >
                <input name='id_cat_big' type="hidden" class="form-control" value="{{$subdit->id_cat_big}}" >
                {{-- <input name='id_cat_sub' id="id_cat_sub" type="text" class="form-control"   > --}}
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama Kategori </label>
                  <input  name='nama_cat_sm' id="nama_cat_big" type="text" class="form-control" value="{{ old('nama')}}" id="exampleFormControlInput3" placeholder="Nama Small Kategori">

                 
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
      </div>
    </div>
  
    </div>
  </div>
  @endforeach

@endsection

{{-- <div class="col-4 mb-3">
  
        </div> --}}