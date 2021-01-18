@extends('Layout.Master')
@section('title','System ERP')
@section('headcontent','Menu Editor')

@section('content')


<div class="col-lg-4 mb-5 mb-lg-0">
    <a class="card lift h-100" href="{{route('cms_brand_cat')}}">
        <img class="card-img-top" src="{{asset('assets/images/ecommerce/brand-cat/brand-cat.jpg')}}" alt="..."/>
        <div class="card-body">
            <h3 class="text-primary mb-0">Brand Kategori</h3>
            <div class="small text-gray-800 font-weight-500">edit section kategori brand</div>
            <div class="small text-gray-500">Sartalik, GA</div>
        </div>
        <div class="card-footer bg-transparent border-top d-flex align-items-center justify-content-between">
            <div class="small text-gray-500">{{Auth::user()->name}}</div>
            <div class="small text-gray-500"><i data-feather="arrow-right"></i></div></div
    ></a>
</div>
    

@endsection
@push('pages-scripts')
 
@endpush