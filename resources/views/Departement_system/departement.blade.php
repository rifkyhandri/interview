
@extends('Layout.Master') @section('title','System ERP') @section('headcontent','Tambah Departement') @section('content') {{-- body --}}
@section('content')
@if (session('message'))
    <div class="alert alert-success alert-dismissible show fade">
      <div class="alert-body">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        {{session('message')}}
      </div>
    </div>
@endif
<div class="card shadow">{{-- header --}}
	<header class="mb-4">
		<div class="row">
			<div class="col-6 pl-4 pt-2">
				<button type="button" class="btn btn-primary btn-tambah" data-toggle="modal" data-target="#modal-tambah"> Tambah Departement</button>
			</div>
			<div class="col-6 pr-4 pt-2 ">
				<a href="/karyawan">
					<div class="btn btn-warning float-right">Tambah Karyawan</div>
				</a>
			</div>
		</div>
	</header>{{-- kontent table --}}
	
	<div class="container-fluid">
		<table class="table table-hover table-bordered bg-white text-center shadow-sm ">
			<thead>
				<tr>{{--
					<th scope="col">ID</th>--}}
					<th scope="col">ID Departement</th>
					<th scope="col">Nama Departement</th>
					<th scope="col">Sub Departement </th>
					<th scope="col">Small Departement </th>
					<th scope="col">Status</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
        {{-- Departement --}}
		 @foreach ($departement as $item )
		 
				<tr class="font-weight-bold bg-light">
					<td>{{$item->id_departement}}</td>
					<td><a class="font-weight-bold text-dark" href="{{route('departement.panggil',$item->id)}}">{{$item->nama_departement}}</a><span><a href="" class="ml-3 fas fa-plus" data-toggle="modal" data-target="#modal-sub-{{$item->id}}"></a></span></td>
					<td colspan="2"></td>
					<td>{{$item->status}}</td>
					<td><a href="{{route('delete.departement',$item->id)}}" class="btn btn-danger">X</a></td>

				{{-- sub departement --}}
					@foreach ($sub_departement as $sub)
						@if ($sub->id_departement == $item->id_departement)
						<tr>
							<td></td>
							<td>{{$sub->id_sub}}</td>
							<td>{{$sub->nama_sub}} <span><a href="" class="ml-3 fas fa-plus" data-toggle="modal" data-target="#modal-sm-{{$sub->id}}"></a></span></td>
							<td colspan="2"></td>
						{{-- sm departement --}}
							@foreach ($data_sm as $sm)
								@if($sm->id_departement == $item->id_departement && $sm->id_sub == $sub->id_sub)
								<tr>
									<td colspan="2"></td>
									<td>{{$sm->id_sm}}</td>
									<td>{{$sm->nama_sm}}</td>
									<td></td>
								</tr>
								@else
								{{-- kosong --}}
								@endif
						   	@endforeach
						</tr>
						@else
						{{-- kosong --}}
						@endif
					@endforeach

				</tr>
		@endforeach
			</tbody>
		</table>
	</div>
</div>{{-- create data departement --}} @endsection 
@section('modal')
<!-- Button trigger modal -->
<!-- Modal tambah -->
<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Departement</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<form action="{{route('departement.create')}}" method="POST">
				{{ csrf_field() }}
          <div class="form-group">
            
            <label for="exampleInputEmail1">ID Departement</label>
		  <input name="id_departement" type="text" class="form-control" id="exampleInputEmail1"" aria-describedby="emailHelp" placeholder="ID" value="{{$nomor_big}}">
          
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Nama Departement</label>
            <input name="nama_departement" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Departement">
          </div>
          
          <div class="form-group">
			  <label for="">status</label>
            <select name="status" class="form-control" id="exampleFormControlSelect1">
				<option value="aktif">Aktif</option>
				<option value="non-aktif">Non-aktif</option>
			  </select>
          </div>
          <div class="form-group">
			  <label for="">Deskripsi</label>
           <textarea name="catatan" id=""  class="form-control"></textarea>
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
@foreach ($departement as $big)
	

<div class="modal fade" id="modal-sub-{{$big->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Sub-{{$big->nama_departement}}</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<form action="{{route('departement_sub.create')}}" method="POST">
				{{ csrf_field() }}
          <div class="form-group">
            
            <label for="exampleInputEmail1">ID Departement</label>
		  <input name="id_sub" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID" value="{{$big->id_departement}}">
		  <input name="id_departement" type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID" value="{{$big->id_departement}}">
          
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Nama Departement</label>
            <input name="nama_sub" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Departement">
          </div>
          
          <div class="form-group">
			  <label for="">status</label>
            <select name="status" class="form-control" id="exampleFormControlSelect1">
				<option value="aktif">Aktif</option>
				<option value="non-aktif">Non-aktif</option>
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
@endforeach
@foreach ($sub_departement as $subsm)
	

<div class="modal fade" id="modal-sm-{{$subsm->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah small-{{$subsm->nama_departement}}</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<form action="{{route('departement_sm.create')}}" method="POST">
				{{ csrf_field() }}
          <div class="form-group">
            
            <label for="exampleInputEmail1">ID Departement</label>
		  <input name="id_sm" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID" value="{{$subsm->id_sub}}">
		  <input name="id_sub" type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID" value="{{$subsm->id_sub}}">
		  <input name="id_departement" type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID" value="{{$subsm->id_departement}}">
          
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Nama Departement</label>
            <input name="nama_sm" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Departement">
          </div>
          
          <div class="form-group">
			  <label for="">status</label>
            <select name="status" class="form-control" id="exampleFormControlSelect1">
				<option value="aktif">Aktif</option>
				<option value="non-aktif">Non-aktif</option>
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
@endforeach
{{-- modal-edit --}}

@endsection 
@push('pages-scripts') 


@endpush