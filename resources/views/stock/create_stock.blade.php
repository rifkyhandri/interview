@extends('Layout.Master')
@section('title','System ERP')
@section('headcontent','Tambah Stock')

@section('content')

<div class="row">
    <div class="container">
        <div class="baris2">
            {{-- form --}}
        <form id="input" action="{{route('stock.create')}}" method="POST">
            @csrf
                    <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Stock ID ( <span class="text-primary">Automatic</span> )</label>
                        <input type="text" name="stock_id" class="form-control" value="20201023.01.{{rand(1,9999)}}" id="auto-code" readonly>
                            <small id="danger" class="form-text text-muted">form diatas merupakan penomoran ID otomatis.</small>
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Original Code</label>
                            <input type="text" name="original_code" class="form-control" id="ori-code" placeholder="Original Code">
                          </div>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kategori </label>
                            <select name="kategori" class="form-control">
                                <option value="">Pilih Kategori</option>
                                @foreach ($kategory as $ktg)
                            <option value="{{$ktg->master_kategory}}">{{$ktg->master_kategory}}</option>
                                @endforeach
                               
                            </select>
                            <select name="kategori" class="form-control">
                                <option value="">Pilih Kategori</option>
                                @foreach ($kategory as $ktg)
                            <option value="{{$ktg->sub_kategory}}">{{$ktg->sub_kategory}}</option>
                                @endforeach
                               
                            </select>
                            <select name="kategori" class="form-control">
                                <option value="">Pilih Kategori</option>
                                @foreach ($kategory as $ktg)
                            <option value="{{$ktg->small_kategory}}">{{$ktg->small_kategory}}</option>
                                @endforeach
                               
                            </select>
                            <small id="danger" class="form-text text-muted">Pilih kategori produk.</small>
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" id="ori-code" placeholder="Nama Produk">
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Brand</label>
                            <select name="brand" class="form-control">
                                @foreach ($brand as $data)
                            <option value="{{$data->name}}">{{$data->name}}</option>
                              @endforeach
                          </select>
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Kuantiti</label>
                            <input type="text" name="kuantiti" class="form-control" id="ori-code" placeholder="QTY">
                          </div>
                    </div>
                    
                    
                      <div class="col-12">
                          <input type="hidden" name="admin" value="{{Auth::user()->name}}" readonly>
                          <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                      </div>
    
                </div>
            </div>
              </form>
        </div>
    </div>
    </div>
    

@endsection
@push('pages-scripts')
 
@endpush