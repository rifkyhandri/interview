@extends('Layout.Master')
@section('title','System ERP')
@section('headcontent','Purchase list')

@section('content')
@if(session('sukses'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Berhasil</strong>Pesananan pembelian sudah dibuat
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
<div class="card">
    <div class="table-responsive">
    <div class="container-fluid">
    <table class="table table-bordered mt-5 ">
        <thead>
            <th>#</th>
            <th>Detail</th>
            <th>Approve ?</th>
            <th>document no</th>
            <th>suplier</th>
            <th>total item</th>
            <th>total nilai</th>
            <th>status</th>
            <th>created at</th>
        </thead>
        <tbody>
            @foreach ($list_po as $e=>$list)
            @if($list->lines_count > 0)
                <tr>
                <td>{{$e+1}}</td>
                <td>
                    <a href="{{route('detail.purchase',$list->id)}}" class="fa fa-eye" ></a>
                </td>
                @if($list->statuss->status === 'disetujui')
                <td><i class="fas fa-check"></i></td>
                @else
                <td><a href="{{route('aproved.purchase',$list->id)}}" class="fa fa-paint-brush"  onclick="return confirm('Yakin ingin di Aproved ?')"></a></td>
                @endif
                <td>{{$list->document_no}}</td>
                <td>{{$list->supppliers->nama}}</td>
                <td>{{$list->lines_count}}</td>
                <td>Rp.{{number_format($list->grand_total()),0}}</td>
           @if($list->status == 1)
                <td class="bg-warning font-weight-bold text-dark">{{$list->statuss->status}}</td>
                @else
                <td class="bg-success font-weight-bold text-dark">{{$list->statuss->status}}</td>
                @endif
      
            <td>{{date('d M Y',strtotime($list->created_at))}}</td>
        </tr>
        @endif
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>


@endsection
@push('pages-scripts')
 
@endpush