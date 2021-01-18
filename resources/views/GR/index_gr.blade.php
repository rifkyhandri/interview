@extends('Layout.Master')
@section('title','System ERP')
@section('title','Goods receipt')

@section('content')

<div class="card">
    <div class="container-fluid">
    <table class="table mt-3">
        <thead>
            <th>#</th>
            <th>Document No</th>
            <th>Total Item</th>
            <th>Total Nilai</th>
            <th>status</th>
            <th>created at</th>
        </thead>
        <tbody>
            @foreach ($goods_receipt as $e=>$gr)
            <tr> 
                <td>{{$e+1}}</td>
                <td>{{$gr->document_no}}</td>
                <td>{{$gr->total_item()}}</td>
                @if($gr->status == 1)
                <td><i class="badge badge-warning">{{$gr->statuss->status}}</i></td>
                @else
                <td><i class="badge badge-success">{{$gr->statuss->status}}</i></td>
                @endif
                <td>{{date('d M Y',strtotime($gr->created_at))}}</td>


            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

@endsection
@push('pages-scripts')
 
@endpush