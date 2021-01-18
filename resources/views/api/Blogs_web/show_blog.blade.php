
@extends('api.Layout_Ecommerce.Master_Ecommerce')
@section('title','System ERP')
@section('bg-header','bg-gradient-primary-to-secondary navbar-dark fixed-top')
@section('navbar-brand','text-white')
@section('content')

<section class="bg-light py-10">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="single-post">
                <h1>{{$event_show->nama_event}}</h1>
                    <p class="lead">{{$event_show->ketentuan}}.</p>
                    <div class="d-flex align-items-center justify-content-between mb-5">
                        <div class="single-post-meta mr-4">
                            <img class="single-post-meta-img" src="{{ url('assets/images/'.$event_show->avatar) }}" style="{{url('../assets/img/unsplash/'.$event_show->file)}}" alt="..." />
                            <div class="single-post-meta-details">
                            <div class="single-post-meta-details-name">{{$event_show->nama_admin}}</div>
                                <div class="single-post-meta-details-date">Tanggal : {{$event_show->tanggal}} &middot; Jam : {{$event_show->jam}}</div>
                            </div>
                        </div>
                        <div class="single-post-meta-links">
                            <a href="#!"><i class="fab fa-twitter fa-fw"></i></a><a href="#!"><i class="fab fa-facebook-f fa-fw"></i></a><a href="#!"><i class="fas fa-bookmark fa-fw"></i></a>
                        </div>
                    </div>
                    <img class="img-fluid mb-2" src="{{ url('assets/images/'.$event_show->avatar) }}" style="width: 100%;{{url('../assets/img/unsplash/'.$event_show->file)}}" alt="..." />
                <div class="small text-gray-500 text-center">Photo Credit: {{$event_show->nama_admin}}</div>
                    <div class="single-post-text my-5">
                       
                      <hr class="my-5" />
                    <p>{{$event_show->description}}</p>
                        <div class="text-center"><a class="btn btn-primary btn-marketing rounded-pill" href="/api/blog-index">Kembali ke menu Blogs</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</section>

@endsection
@push('pages-scripts')
 
@endpush
  
