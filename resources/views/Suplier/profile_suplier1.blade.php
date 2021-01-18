@extends('Layout.Master')
@section('header-link')

@stop
@section('title','Supplier')
@section('headcontent','Supplier')
    

@section('content')

<div class="section-body">
    <h1 class="section-title h1">Hai,{{$suplier->nama}}</h1>
      <p class="section-lead">
          Ubah Informasi Suplier Disini
      </p>

      <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-5">
          <div class="card profile-widget">
            <div class="profile-widget-header">
            <img alt="image" src="{{asset('assets/images/anjing.png')}}" class="rounded-circle profile-widget-picture">
              <div class="profile-widget-items">
                <div class="profile-widget-item">
                  <div class="profile-widget-item-label">Produk</div>
                <div class="profile-widget-item-value">{{$suplier->brand->count()}}</div>
                </div>
                <div class="profile-widget-item">
                  <div class="profile-widget-item-label">Stock</div>
                  <div class="profile-widget-item-value">0</div>
                </div>
                <div class="profile-widget-item">
                  <div class="profile-widget-item-label">sold</div>
                  <div class="profile-widget-item-value">0</div>
                </div>
              </div>
            </div>
            <div class="profile-widget-description">
            <div class="profile-widget-name">{{$suplier->nama}}<div class="text-muted d-inline font-weight-normal"><div class="slash"></div>Suplier</div></div>
              {{$suplier->nama}} <b></b> ,  adalah Suplier asal {{$suplier->asal_negara}} , dengan alamat lengkap di {{$suplier->alamat}}
            </div>
         
            <div class="card-footer ">
              <div class="font-weight-bold h5 text-left">
                Informasi Data Diri
            </div>
          <div class="text-left">Nama  <span class="font-weight-bold"style="margin-left: 70px;">{{$suplier->nama}}</span></div>
          <div class="text-left">Negara <span class="font-weight-bold"style="margin-left: 63px;">{{$suplier->asal_negara}}</div>
          <div class="text-left">Currency <span class="font-weight-bold"style="margin-left: 53px;">{{$suplier->currency}}</span></div>
          <div class="text-left">Nomor Telepon<span class="font-weight-bold"style="margin-left: 17px;">{{$suplier->nomor_telepon}}</span></div>
          <div class="text-left">Status Suplier<span class="font-weight-bold"style="margin-left: 25px;">@if($suplier->status == "")Belum di Konfirmasi @else{{$suplier->status}} @endif</span></div>

<hr>
          <div class="btn btn-warning text-right">
          <a class="text-white" href="{{route('suplier.ubah',$suplier->id)}}"> Ubah </a>
        </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-7">
          <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModalCenter">
            Tambah Brand
          </button>
    
          <div class="card">
            @if (session('error'))
            <div class="alert alert-danger alert-dismissible show fade">
              <div class="alert-body">
                {{session('error')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
      
              </div>
            </div>
        @endif
            <form method="post" class="needs-validation" novalidate="">
              <div class="card-header">
                <h4>Brand</h4>
              </div>
              <div class="card-body">
                 
                  <table class=" table table-sm table-striped">
                      <thead>
                        <tr>
                          <th class="text-center">Brand</th>
                   
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                        
                          @foreach ($suplier->brand as $spb)
                        <tr>
                        <td class="text-center">{{$spb->name}}</td>
                     
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
               
              </div>
             
            </form>
          </div>
      

          <div class="panel shadow-sm">
            <div id="chart-suplier"></div>
          </div>
</div>
</div>
</div>

@endsection

  @section('modal')
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Brand</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="/suplier/{{$suplier->id}}/addbrand"method="POST">
            {{ csrf_field() }}
           {{-- brand --}}
            <div class="form-group">
              <label for="exampleFormControlSelect2">Brand</label>
              <select name="brand" class="form-control" id="exampleFormControlSelect2">
                <option>pilih</option>
                @foreach ($brand as $brand)
              <option value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
           {{-- jika ada error trying to get property of non-object itu adalah ada 2 variable yang sama dalam 1 page misalnya $suplier function a dan b sama variable nya maka akan terjadi error dengan itu ganti lah salah satu variable tersebut menjadi tidak sama --}}
               
              </select>
            </div>
         
           
  
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection

@section('footer')
{{-- <script src="https://code.highcharts.com/highcharts.js"></script>
<script>
  Highcharts.chart('chart-suplier', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah Stock'
    },
    
    xAxis: {
        categories:{!!json_encode($categories)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Stock (pcs)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
       
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'stock',
        data: {!!json_encode($qty)!!}
        }]
});

          // script editable
          $(document).ready(function() {
    $('#username').editable();
});
</script> --}}

@endsection