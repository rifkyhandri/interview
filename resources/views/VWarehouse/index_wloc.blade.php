@extends('Layout.Master')
@section('title','Location Category')
@section('headcontent','Warehouse Location Category')

@section('content')

<div class="container-fluid">
    <div class="btn btn-primary mb-3">Tambah Kategori</div>
    <table class=" bg-white table table-hover table-bordered text-center shadow" >
        <thead>
            <tr>
                <th  scope="col">ID Warehouse</th>
                <th  scope="col">Nama Kategori</th>
                <th  scope="col">Nama Sub Kategori </th>
                <th  scope="col">Nama Small Kategori </th>
                <th  scope="col">status</th>
            </tr>
        </thead>
        <tbody>
            {{-- Warehouse bigcat --}}
            @foreach ($bigcat as $big)
                
          
        <tr class="font-weight-bold bg-light" >
            <td>{{$big->id_bigcat}}</td>
            <td>{{$big->nama_bigcat}}</td>
            <td colspan="2"></td>
            <td>{{$big->status}}</td>

            {{--Warehouse subcat --}}
            @foreach ($subcat as $sub)
                @if($sub->id_bigcat == $big->id_bigcat)
                    <tr style="background-color: rgb(247, 244, 244)">
                        <td></td>
                        <td>{{$sub->id_subcat}}</td>
                        <td>{{$sub->nama_subcat}}</td>
                        <td colspan="2"></td>

                        {{-- small category --}}
                            @foreach ($smcat as $sm)
                                 @if ( $sm->id_subcat == $sub->id_subcat )
                                    <tr>
                                        <td colspan="2"></td>
                                        <td>{{$sm->id_smcat}}</td>
                                        <td>{{$sm->nama_smcat}}</td>
                                        <td></td>
                                    </tr>
                                @else {{-- kosong --}} @endif
                             @endforeach



                      
                    </tr>
                 @else  
                     
                @endif
            @endforeach
   

        </tr>
        @endforeach
        </tbody>
    </table>
    
</div>
</div>


@endsection
@push('pages-scripts')
 
@endpush
         {{-- SELECT
  warehouse_bigcat.nama_bigcat,
  warehouse_subcat.nama_subcat,
  warehouse_smcat.nama_smcat
FROM warehouse_smcat
JOIN warehouse_bigcat
  ON warehouse_smcat.id_bigcat = warehouse_bigcat.id_bigcat
JOIN warehouse_subcat
  ON warehouse_smcat.id_subcat = warehouse_subcat.id_subcat; --}}
          