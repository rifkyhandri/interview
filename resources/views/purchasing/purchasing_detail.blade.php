@extends('Layout.Master')
@section('title','System ERP')
@section('headcontent','No.'.$detail->document_no)

@section('content')
<a href="/purchasing" class="btn btn-primary fa fa-hand-point-left mb-3"></a>
<ion-icon name="heart"></ion-icon>
<div class="card mb-5">
    <div class="row">
   <div class="col-md-12">
    <table class="table">
        <tbody>
        <tr>
            <th>Document number</th>
            <td>:</td>
            <td>{{$detail->document_no}}</td>

            <th>supplier</th>
            <td>:</td>
            <td>{{$detail->supppliers->nama}}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>:</td>
            @if($detail->status == 1)
            <td><span class="badge badge-warning">{{$detail->statuss->status}}</span></td>
            @else
            <td><span class="badge badge-primary">{{$detail->statuss->status}}</span></td>
            @endif

            <th>Created at</th>
            <td>:</td>
            <td>{{date('d M Y',strtotime($detail->created_at))}}</td>
        </tr>
    </tbody>
    </table>
</div>
</div>

</div>
<div class="card">
    <div class="row">
        <div class="col-12">
            <form action="{{route('update_qty',$detail->id)}}" method="POST">
                @csrf
                {{ method_field('PUT')}}
            <table class="table">
                <thead>
                    <th>No.</th>
                    <th>Nama Produk</th>
                    <th>Harga Beli</th>
                    <th>Qty</th>
                    <th>Grand Total</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <?php 
                    $total_buy = 0;
                    $total_qty = 0;
                    $total = 0;    
                    ?>
                    @foreach ($detail->lines as $e=>$line)
                    <?php 
                    $total_buy += $line->buy;
                    $total_qty += $line->qty;
                    $total += $line->grand_total;
                    ?>
                    <tr>
                        <td>{{$e+1}}</td>
                         <td>{{$line->produks->nama_produk}}</td>
                         <td>
                            <input type="number" class="form-control" value="{{$line->buy}}" name="buy[]"  @if($detail->statuss->status === 'disetujui')readonly @endif>
                         </td>
                         <td>
                             <input type="number" class="form-control" value="{{$line->qty}}" name="qty[]"  @if($detail->statuss->status === 'disetujui')readonly @endif>
                             <input type="hidden" name="id_line[]" value="{{$line->id}}">
                             <input type="hidden" name="produk[]" value="{{$line->produk}}">
                        </td>
                        
                         <td>Rp.{{number_format($line->grand_total),0}}</td>
                         @if($detail->statuss->status === 'disetujui')
                         <td><a class="btn btn-secondary" href="#" onclick="return alert('Maaf,Data sudah disetujui')"><i class="fas fa-trash"></i></a></td>
                         @else
                         <td><a class="btn btn-danger" href="{{route('detail.delete',$line->id)}}" onclick="return confirm('Yakin ingin Product di PO ini ingin di hapus ?')"><i class="fas fa-trash"></i></a></td>
                         @endif
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>
                            <b>Jumlah</b>
                        </th>
                        <th>Rp.{{number_format($total_buy),0}}</th>
                        <th>{{$total_qty}}</th>
                        <th>Rp.{{number_format($total),0}}</th>
                    </tr>
                   
                </tfoot>
            </table>
        </div>
    </div>
    <button class="btn btn-primary" type="submit">simpan</button>
</form>
</div>
@endsection
@push('pages-scripts')

@endpush