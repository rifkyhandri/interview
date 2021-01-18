@extends('Layout.Master')
@section('title','System ERP')
@section('headcontent','Tambah konten')
    

@section('content')

<form action="{{route('create.kt')}}" method="POST">
    {{ csrf_field() }}

        <div class="form-group">
                <label for="exampleInputEmail1">Judul Konten</label>
                <input name="id_kontent" type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$number}}" >
                <input name="judul_kontent" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul Konten" >
                <input name="id_admin" type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{Auth::user()->id}}" >
        </div>

        <div class="form-group">
        <label for="">Konten</label>
        <textarea id="konten" class="form-control" name="konten" rows="10" cols="50"></textarea>
        </div>

        <div class="form-group">
        <label for="">Status</label>
        <select name="active" class="form-control" id="exampleFormControlSelect1">
        
        <option value="{{FALSE}}">Status</option>
        <option value="{{TRUE}}">Active</option>
        <option value="{{FALSE}}">Non-Active</option>
           
          </select>
        </div>
       
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">+Sub Category</button>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>

        

</div>

</form>

<div class="card" style="height: 200px">
    <div class="container-fluid">
      <input type="hidden" value="{{$id = 1}}">
        @foreach ($konten as $kt)
        <a href="">
        <div class="card shadow-sm mt-2" style="height: 30px">
        <div class="row">
            <div class="col-8">
            <div class="ml-2 font-weight-bold">{{$id++}}
                <span class="ml-2 font-weight-bold">{!!$kt->judul_kontent!!}</span></div> 
            </div>
            <div class="col-4">
                @if($kt->active == 1)<div class="font-weight-bold">Aktif</div>@else<div class="font-weight-bold text-danger">Tidak Aktif</div>@endif 
            </div>
        </div>
        </div>
    </a>   
        @endforeach
    </div>
</div>


{{-- script CKeditor --}}
<script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
<script>
  var konten = document.getElementById("konten");
    CKEDITOR.replace(konten,{
    language:'en-gb'
  });
  CKEDITOR.config.allowedContent = true;
</script>

<link href="{{ asset('ckeditor/plugins/codesnippet/lib/highlight/styles/default.css') }}" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="{{ asset('ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js') }}"></script>
<script>hljs.initHighlightingOnLoad();</script>
@endsection
@push('pages-scripts')
 
@endpush