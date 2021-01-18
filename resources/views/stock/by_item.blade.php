@extends('Layout.Master')
@section('title','System ERP')
@section('headcontent','Stock by Item')

@section('content')
<div class="card shadow-sm">
    <div class="container">
        <table id="table_id" class="display table-bordered">
            <thead>
                <tr>
                    <th>No. <input type="hidden" value="{{$no=1}}"></th>
                    <th>Brand</th>
                    <th>Kategori</th>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Stok Masuk</th>
                    <th>Stok Keluar</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th colspan="4"></th>
                    <th style="display: none"></th>  
                    <th style="display: none"></th>  
                    <th style="display: none"></th>
                    <th class="text-right">Mulai</th>  
                    <th class="text-right">0</th>  
                    <th class="text-right">0</th>  
                    <th class="text-right">0</th>  
                  
                </tr>
                <tr>
                    <th colspan="4"></th>
                    <th style="display: none"></th>  
                    <th style="display: none"></th>  
                    <th style="display: none"></th>
                    <th class="text-right">Jumlah</th>  
                    <th class="text-right">0</th>
                    <th class="text-right">0</th>
                    <th class="text-right">{{$stock_sum}}</th>  
                </tr>
                <tr>
                    <th colspan="4"></th>
                    <th style="display: none"></th>  
                    <th style="display: none"></th>  
                    <th style="display: none"></th>
                    <th class="text-right">Akhir</th>  
                    <th class="text-right">0</th>  
                    <th class="text-right">0</th>
                    <th class="text-right">0</th>
               
                </tr>
            </thead>
            <tbody>
               
                @foreach ($stock_sub as $sub)
                    <tr class="">
                    <td>{{$no++}}</td>
                    <td>{{$sub->nama_brand}}</td>
                    <td>{{$sub->kode_cat}}</td>
                    <td>{{$sub->kode_produk}}</td>
                    <td>{{$sub->nama_produk}}</td>
                    <td align=right>0</td>
                    <td align=right>0</td>
                    <td align=right>{{$sub->qty}}</td>
                    </tr>
                @endforeach
              
            </tbody>
        </table>
    </div>
  
    
</div>

@endsection
@push('before-script')
<script src="{{asset('assets/admin/plugins/jquery/jquery.min.js')}}"></script>

<script>
  $(function () {
    $("#table_id").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    });
   
  });
</script> 
@endpush
