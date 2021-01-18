@extends('Layout.Master')
@section('title','System ERP')
@push('page-style')
<script>
   jQuery(document).ready(function ()
    {
            jQuery('select[name="kode_big"]').on('change',function(){
               var bigID = jQuery(this).val();
               if(bigID)
               {
                  jQuery.ajax({
                     url : 'stock_in/catsub/' +bigID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="cat_sub"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="cat_sub"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="cat_sub"]').empty();
               }
            });
            jQuery('select[name="cat_sub"]').on('change',function(){
               var subID = jQuery(this).val();
               if(subID)
               {
                  jQuery.ajax({
                     url : 'stock_in/catsm/' +subID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="kode_cat"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="kode_cat"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="kode_cat"]').empty();
               }
            });
         
          
    });
    
</script>


@endpush
@section('headcontent','Stock')

@section('content')
<div class="row">
    <div class="col-6">
      <button type="button" class="btn btn-primary btn-tambah" data-toggle="modal" data-target="#modal-tambah"> Tambah Group</button>
    </div>
    <br>
</div>
<div class="row"><br></div>
<div class="card shadow">

  <div class="container">
    <table id="table_id" class="table table-bordered mt-3 mb-5 mr-3">
      <thead>
        <tr>
          <th>No. <input type="hidden" ></th>
          <th>Code Item</th>
          <th>Original Code</th>
          <th>Nama Produk</th>
          <th>Kuantiti</th>
          <th>Aksi</th>
        </tr>
      </thead>
    <tbody>
        <tr>
            <td colspan=4 align=center><b>Total</b></td> 
            <td>{{$stock_sum}}/pcs</td> 
            <td></td> 
        </tr>
      @foreach ($stock_in as $e=>$stock)
        <tr>
          <td>{{$e+1}}</td>
          <td>{{$stock->kode_item_grup}}</td>
          <td></td>
          <td>{{$stock->nama_produk}}<div class="ml-3 fas fa-edit" data-toggle="modal" data-target="#edit-big-{{$stock->id}}"></div> <span><a href="" class="ml-3 fas fa-plus-square" data-toggle="modal" data-target="#tombol-{{$stock->id}}" ></a></span></td>
          <td></td>
          <td><a href="{{route('stock.delete',$stock->kode_item_grup)}}" onclick="return confirm('yakin Data ini ingin dihapus ?')" class="fas fa-trash text-danger"><span class="ml-2">Delete</span></a> </td>
           @foreach ($stock_sub as $item)
           @if ($item->kode_item_grup == $stock->kode_item_grup) 
          <tr class="bg-light">
          <td>-</td>
          <td>{{$item->kode_produk}}</td>
          <td>{{$item->kode_original}}</td>
          <td><span><a href="" data-toggle="modal" data-target="#modal-update-{{$item->id}}">{{$item->nama_produk}}</a></span>
            @if($item->online == 'aktif')<i class=" ml-2 fas fa-check"></i>@elseif($item->online == 'proses')<i class="ml-2 fas fa-clock"></i>@endif 
            @if($item->avatar == '0') @else<i class="ml-3 far fa-image text-primary"></i>@endif</td>
          <td>{{$item->qty}}</td>
          <td><span><a href="{{route('deletebyitem',$item->id)}}" onclick="return confirm('yakin Data ini ingin dihapus ?')"><i class="fas fa-minus-circle text-danger"></i></a></span></td>
        </tr>
      @endif
      @endforeach
    </tr>
    @endforeach
    </tbody>
  </table>
  {{$stock_in->links()}}
  </div>

</div>
@endsection
@section('modal')
<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('stock.create')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Kategori Barang</label>
            <select  id="kodebig" name="kode_big" class="form-control" id="exampleFormControlSelect2">
              <option value="">-- Kategori --</option>
              @foreach ($product_big as $key => $value)
              <option value="{{ $key }}">{{ $value }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Kategori Barang</label>
            <select  id="catsub" name="cat_sub" class="form-control" id="exampleFormControlSelect2">
              <option >-- Kategori --</option>
            
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Kategori sub</label>
            <select id="kodecat" name="kode_cat" class="form-control" id="exampleFormControlSelect1">
              <option value="">-- Kategori --</option>
            
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Kode item grup</label>
            <input type="text" name="kode_item_grup" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode item Group" value="{{$big_rand}}">
            
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Kode Original Grup</label>
            <input type="text" name="kode_original" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Original">
           
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Produk">  
          </div>
         
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Brand</label>
            <select name="nama_brand" class="form-control" id="exampleFormControlSelect1">
              <option value="">-- Brand --</option>
              @foreach ($brand as $b)
                  
              <option value="{{$b->name}}">{{$b->name}}</option>
                @endforeach
              </select>
           
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>
{{-- edit stock --}}
@foreach ($stock_in as $big)
<div class="modal fade" id="edit-big-{{$big->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('stock.create')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Kategori Barang</label>
            <select name="cat_sub" class="form-control" id="exampleFormControlSelect2">
              <option selected='' disabled=''>-- Kategori --</option>
              @foreach ($cat_sub as $sub)
              <option value="{{$sub->id_cat_sub}}" 
               @if ($big->cat_sub ===  $sub->id_cat_sub) selected @endif
                >({{$sub->id_cat_sub}}){{$sub->nama_cat_sub}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Kategori sub</label>
            <select name="kode_cat" class="form-control" id="exampleFormControlSelect1">
              <option value="">-- Kategori --</option>
              @foreach ($cat_sm as $sm)
              <option value="{{$sm->id_cat_sm}}" @if($big->kode_cat === $sm->id_cat_sm) selected @endif>({{$sm->id_cat_sm}}){{$sm->nama_cat_sm}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Kode item grup</label>
            <input type="text" name="kode_item_grup" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode item Group">
            
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Kode Original</label>
            <input type="text" name="kode_original" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Original">
           
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Produk">  
          </div>
         
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Brand</label>
            <select name="nama_brand" class="form-control" id="exampleFormControlSelect1">
              <option value="">-- Brand --</option>
              @foreach ($brand as $b)
                  
              <option value="{{$b->name}}">{{$b->name}}</option>
                @endforeach
              </select>
           
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>
@endforeach
@foreach ($stock_in as $data)
    

<div class="modal fade" id="tombol-{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Product {{$data->nama_produk}}-{{$data->kode_item_grup}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('stock.create_sub')}}" method="POST">
          @csrf
          <div class="row">
            <div class="col-5">
              <div class="form-group">
                <label for="exampleInputEmail1">Original Barcode</label>
                <input type="text" name="original_barcode" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Original Barcode">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Kode original produk</label>
                    <input type="hidden" name="kode_item_grup" value="{{$data->kode_item_grup}}">
                    <input type="hidden" name="kode_cat" value="{{$data->kode_cat}}">
                    <input type="hidden" name="nama_brand" value="{{$data->nama_brand}}">
                    <input type="hidden" name="id_admin" value="{{Auth::user()->id_karyawan}}">
                    <input type="text" name="kode_original" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode original">
              </div>

            </div>
            <div class="col-7">
              <div class="form-group">
                <label for="exampleInputEmail1">Status Online</label>
                <select name="online" class="form-control" id="exampleFormControlSelect1">
                      <option value="tidak_aktif">-- Status --</option>
                      @if($data->avatar === 0)
                      <option value="aktif">Gambar tidak ada</option>
                      <option value="aktif">Aktif</option>
                      @else
                      <option value="proses">proses</option>
                      <option value="tidak_aktif">tidak aktif</option>
                      @endif
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Mata uang</label>
                <select name="mata_uang" class="form-control" id="exampleFormControlSelect1">
                  <option value="">-- Mata uang --</option>
                  <option value="rupiah">Rupiah(RP)</option>
                  <option value="dollar">Dollar($)</option>        
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">kode produk</label>
            <input type="text" name="kode_produk" value="{{$sub_rand}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode item Group">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode item Group">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Gudang</label>
            <select name="kode_gudang" class="form-control" id="exampleFormControlSelect1">
              <option value="">-- Gudang --</option>
              @foreach ($warehouse as $ws)
              <option value="{{$ws->nomor}}">({{$ws->nomor}}){{$ws->nama_gudang}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Suplier</label>
            <select name="kode_suplier" class="form-control" id="exampleFormControlSelect1">
              <option value="">-- pilih --</option>
              @foreach ($suplai as $sp)
              @if($sp->status == 'aktif')
              <option value="{{$sp->id}}">({{$sp->code_suplier}}){{$sp->nama}}</option>
              @endif
              @endforeach
            </select>
          </div>
       
          
          <div class="form-group">
            <label for="exampleInputEmail1">harga perolehan</label>
            <input type="text" name="harga_perolehan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga Perolehan">
            
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">harga jual </label>
            <input type="text" name="harga_jual" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga Jual">
           
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">harga reseller</label>
            <input type="text" name="harga_reseller" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga Reseller">
          </div>
         
          <div class="form-group">
            <label for="exampleInputEmail1">MOQ</label>
            <input type="text" name="MOQ" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="MOQ">  
          </div>
      
         
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>
@endforeach
@foreach ($stock_sub as $data_sub)
    
<div class="modal fade" id="modal-update-{{$data_sub->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Product {{$data_sub->nama_brand}}-{{$data_sub->kode_produk}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('updatebyitem',$data_sub->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">BARCODE</label>
            <br><img src="data:image/png;base64,{{DNS1D::getBarcodePNG(
              $data_sub->kode_produk, 'C39')}}" height="60" width="300">
             <br>{{$data_sub->kode_produk }}
          </div>
          <div class="row">
            <div class="col-5">
              <div class="form-group">
                <label for="exampleInputEmail1">Status Online</label>
                <select name="online" class="form-control" id="exampleFormControlSelect1">
                      <option value="tidak_aktif">-- Status --</option>
                      <option @if($data_sub->online == "aktif") selected @endif value="aktif">Aktif</option>
                      <option @if($data_sub->online == "proses") selected @endif value="proses">proses</option>
                      <option @if($data_sub->online == "tidak_aktif") selected @endif value="tidak_aktif">tidak_aktif</option>
                
                
                </select>
              </div>   
            </div>
            <div class="col-7">
              <div class="form-group">
                <label for="exampleInputEmail1">Kode produk</label>
                    <input type="hidden" name="kode_item_grup" value="{{$data_sub->kode_item_grup}}">
                    <input type="hidden" name="kode_cat" value="{{$data_sub->kode_cat}}">
                    <input type="hidden" name="kode_original" value="{{$data_sub->kode_original}}">
                    <input type="hidden" name="original_barcode" value="{{$data_sub->original_barcode}}">
                    <input type="hidden" name="nama_brand" value="{{$data_sub->nama_brand}}">
                    <input type="hidden" name="id_admin" value="{{$data_sub->id_admin}}">
                    <input type="number" name="kode_produk" value="{{$data_sub->kode_produk}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode item Group">
              </div>
            </div>
          </div>
         
      
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode item Group" value="{{$data_sub->nama_produk}}">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Gudang</label>
            <select name="kode_gudang" class="form-control" id="exampleFormControlSelect1">
              <option value="">-- Gudang --</option>
              @foreach ($warehouse as $ws)
              <option  value="{{$ws->nomor}}" 
                @if ($ws->nomor === $data_sub->kode_gudang)
                 selected >
                @endif  
                ({{$ws->nomor}}){{$ws->nama_gudang}}</option>              
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Suplier</label>
            <select name="kode_suplier" class="form-control" id="exampleFormControlSelect1">
              <option value="">-- pilih --</option>
              @foreach ($suplai as $sp)
              @if($sp->status == 'aktif')
              <option value="{{$sp->id}}" @if($sp->id === $data_sub->kode_suplier) selected @endif>({{$sp->code_suplier}}){{$sp->nama}}</option>
              @endif
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Mata uang</label>
            <select name="mata_uang" class="form-control" id="exampleFormControlSelect1">
              <option value="">-- Mata uang --</option>
              <option @if($data_sub->mata_uang == 'rupiah')selected @endif value="rupiah" >Rupiah(RP)</option>
              <option @if($data_sub->mata_uang == 'dollar')selected @endif value="dollar">Dollar($)</option>        
            </select>
          </div>
          
          <div class="form-group">
            <label for="exampleInputEmail1">harga perolehan</label>
            <input type="text" name="harga_perolehan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga Perolehan" value="{{$data_sub->harga_perolehan}}">
            
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">harga jual </label>
            <input type="text" name="harga_jual" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga Jual" value="{{$data_sub->harga_jual}}">
           
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">harga reseller</label>
            <input type="text" name="harga_reseller" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga Reseller" value="{{$data_sub->harga_reseller}}">
          </div>
         
          <div class="form-group">
            <label for="exampleInputEmail1">MOQ</label>
            <input type="text" name="MOQ" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="MOQ" value="{{$data_sub->MOQ}}">  
          </div>
         
          <div class="form-group">
            <b>File Gambar</b>
            <br/>
            <input type="file" name="avatar" enctype="multipart/form-data" class="form-control" value="{{ $data_sub->avatar }}">
            </div>

            <img src="{{ asset("assets/images/products/".$data_sub->avatar) }}" alt="" style='display: block;margin-left: auto;margin-right: auto;width: 50%;'>
         
         
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>
@endforeach
@endsection
@push('before-script')
<script src="{{asset('assets/admin/plugins/jquery/jquery.min.js')}}"></script>

<script>
 
</script> 
@endpush