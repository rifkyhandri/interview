@extends('api.Layout_Ecommerce.Master_Ecommerce')
@section('title','System ERP')
@section('bg-header','bg-gradient-primary-to-secondary navbar-dark fixed-top')
@section('navbar-brand','text-white')
<header class="page-header page-header-dark bg-img-cover overlay overlay-60 mt-10" style="background-image: url(https://source.unsplash.com/PTRzqc_h1r4/1600x900);">
    <div class="page-header-content">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="page-header-title mb-3">Blogs</h1>
                    <p class="page-header-text mb-0">Browse articles, keep up to date, and learn more on our blog!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</header>
@section('content')

<div class="container"> 
<a class="card post-preview post-preview-featured lift mb-5" href="{{route('blog.show',$event_header->id)}}">
                    <div class="row no-gutters">
                        <div class="col-lg-5"><img class="card-img-top" src="{{ url('assets/images/'.$event_header->avatar) }}" style="height: 335px;{{ url('../assets/img/unsplash/'.$event_header->file)}}" alt="..." /></div>
                        <div class="col-lg-7">
                            <div class="card-body">
                                <div class="py-5">
                                <h5 class="card-title">{{$event_header->nama_event}}</h5>
                                    <p class="card-text">{{$event_header->description}}.</p>
                                </div>
                                <hr />
                                <div class="post-preview-meta">
                                    <img class="post-preview-meta-img" src="{{ url('assets/images/'.$event_header->avatar) }}" style="{{ url('../assets/img/unsplash/'.$event_header->file)}}" alt="..." />
                                    <div class="post-preview-meta-details">
                                    <div class="post-preview-meta-details-name">{{$event_header->nama_admin}}  &middot; Status : <span class="font-weight-bold text-primary">{{$event_header->status}}</span></div>
                                    <div class="post-preview-meta-details-date">{{$event_header->tanggal}} &middot; Jam : {{$event_header->jam}}  &middot; Penyelenggara : <span class="font-weight-bold text-primary">{{$event_header->penyelenggara}}</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></a>
                    <h1 class="font-weight-bold text-dark mb-4">Events</h1>
                <div class="row">
                    @foreach ($data_event as $event)
                        
              
                    <div class="col-md-6 col-xl-4 mb-5">
                        <a class="card post-preview lift h-100" href="{{route('blog.show',$event->id)}}">
                            <img class="card-img-top" src="{{ url('assets/images/'.$event->avatar) }}" style="height: 200px;{{ url('../assets/img/unsplash/'.$event->file)}}" alt="..." />
                            <div class="card-body">
                            <h5 class="card-title mb-2">{{$event->nama_event}}</h5>
                               @if($event->harga == "")<p>Gratis</p>@else<p class="card-text">Rp.{{$event->harga}}.</p>@endif
                            </div>
                            <div class="card-footer">
                                <div class="post-preview-meta">
                                    <img class="post-preview-meta-img" src="{{ url('assets/images/'.$event->avatar) }}" style="{{ url('../assets/img/unsplash/'.$event->file)}}" alt="..." />
                                    <div class="post-preview-meta-details">
                                    <div class="post-preview-meta-details-name">{{$event->nama_admin}}</div>
                                        <div class="post-preview-meta-details-date">Tanggal : {{$event->tanggal}} . Jam : {{$event->jam}} . Penyelenggara : <span class="font-weight-bold text-primary">{{$event->penyelenggara}}</span>  </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-blog justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#!" aria-label="Previous"><span aria-hidden="true">«</span></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                        <li class="page-item"><a class="page-link" href="#!">12</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#!" aria-label="Next"><span aria-hidden="true">»</span></a>
                        </li>
                    </ul>
                </nav>
            </div> 
                     

@endsection
















                      