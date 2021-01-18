@extends('Layout.Master')
@section('title','System ERP')
@section('headcontent','+ Purchase Order')
@push('page-style')

<script>
$(document).ready(function(){
  $("select[name='supplier']").change(function(e){
    var id_supplier = $(this).val();
    var url = "{{ url('/purchasing/create') }}"+'/'+id_supplier;

    window.location.href = url;
    });
    $(function () {
    $(".myTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    });
   
  });
});

</script>
@endpush


@section('content')

    {{-- ControllerPurchaseOrder --}}
    <form action="{{route('store.purchase')}}" method="POST">
        @csrf
  
    <div class="form-group">
        <label for="exampleInputEmail1">PO number</label>
        <input type="text" name="document_no" value="{{$number_po}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="PO number">
    </div>
    @if(isset($id_suplier))
    <div class="form-group">
      <label for="exampleInputPassword1">Supplier</label>
      <select class="form-control select2" name="supplier">
            <option selected="" disabled="">Pilih Supplier</option>
          @foreach($suplier as $sp)
          @if($sp->status == 'aktif')<option value="{{ $sp->id }}" {{ ($id_suplier == $sp->id) ? 'selected' : '' }}>({{$sp->code_suplier}}){{ $sp->nama }}</option>@endif
          @endforeach
      </select>
    </div>
    @else
    <div class="form-group">
      <label for="exampleInputPassword1">Supplier</label>
      <select class="form-control select2" name="supplier">
            <option selected="" disabled="">Pilih Supplier</option>
          @foreach($suplier as $sp)
          @if($sp->status == 'aktif') <option value="{{ $sp->id }}">{{ $sp->nama }}</option>@endif
          @endforeach
      </select>
    </div>
    @endif
 


      @if(isset($produk))
      <div class="row">
          <div class="col-md-12">
              <table class="table myTable">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Nama</th>
                          <th>Buy</th>
                          <th>Qty</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($produk as $e=>$pd)
                      <tr>
                          <td>{{ $e+1 }}</td>
                          <td>{{ $pd->nama_produk }}</td>
                          <td>{{ number_format($pd->harga_perolehan,0) }}</td>
                          
                          <td>
                              <input type="hidden" name="produk[]" value="{{ $pd->id }}">
                              <input type="number" value="0" class="form-control" name="qty[]">
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
      @endif
      <button type="submit" class="btn btn-primary">pesan</button>
    </form>
@endsection
@push('before-scripts')
   
    
@endpush