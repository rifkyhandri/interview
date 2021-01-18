@extends('Layout.Master')
@section('title','System ERP')
@section('headcontent','Stock by Warehouse')

@section('content')

    <div class="card shadow">
        <div class="container">
            

            <table class="table table-bordered  mt-3">
                <thead>
                  <tr>
                    <th>No. <input type="hidden" value="{{$id=1}}"></th>
                    <th>Brand</th>
                    <th>Kategori</th>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>TOTAL</th>
                    @foreach ($data_wh as $item)
                        
                    <th ><a href=''><b>{{$item->nama_gudang}}</b></a>
                  	
                    @endforeach
                  </tr>
                </thead>
                <tbody>
                    @foreach ($join_wh as $join)
                    <tr>
                        <td>{{$id++}}</td>
                        <td>{{$join->nama_brand}}</td>
                        <td>{{$join->kode_cat}}</td>
                        <td>{{$join->kode_produk}}</td>
                        <td>{{$join->nama_produk}}</td>
                        <td>{{$join->qty}}</td>
                       <td>@if($join->kode_gudang === 'GDG8852KTG')<i class="fas-fa-check"></i>@endif</td>
                       <td>@if($join->kode_gudang == $item->nomor)<i class="fas-fa-check"></i>@endif</td>
                    
                    </tr>
                    @endforeach
                </tbody>
              </table>


        </div>
    </div>

@endsection
@push('pages-scripts')
 
@endpush