@extends('Layout.Master')
@section('title','System ERP')
@section('headcontent','Tambah Kategori')
@section('content')
<div class="card shadow-sm" style="height: 400px">
   <div class="card bg-primary shadow-sm text-center" style="height:50px;width:300px;margin-left: 50px;margin-top: -20px;padding-top: 12px ">
      <h5 class="font-weight-bold text-white">Departement {{$departement_edit->nama_departement}}</h5>
   </div>
   <div class="col-xl-12 col-lg-12">
      <div class="row">
         <div class="col">
            <div style="margin-left: 35px">
               <div class="h6 font-weight-bold">Nama Departement : Departement <span class="text-primary">{{$departement_edit->nama_departement}}</span></div>
               <p style="width:400px;text-align: justify"><span class="text-primary" >Departement {{$departement_edit->nama_departement}}</span> adalah {{$departement_edit->catatan}}</p>
            </div>
         </div>
         <div class="col">
            <div style="margin-right: 35px">
                <form action="{{route('departement.create')}}" method="POST">
                    {{ csrf_field() }}
              <div class="form-group">
                
                <label for="exampleInputEmail1">ID Departement</label>
                <input name="id_departement" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID" value="{{$departement_edit->id_departement}}" readonly>
              
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Nama Departement</label>
              <input name="nama_departement" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Departement" value="{{$departement_edit->nama_departement}}">
              </div>
              
              <div class="form-group">
                  <label for="">status</label>
                <input name="status" type="text" class="form-control" id="exampleInputPassword1"  value="{{$departement_edit->status}}">
              </div>
              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">+Sub Category</button>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            
        </div>
          
            </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@push('pages-scripts')
@endpush