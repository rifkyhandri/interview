@extends('Layout.Master')
@section('title','System ERP')
@section('headcontent','Profile')

@section('content')


      <div class="section-body">
      <h1 class="section-title h1">Hi,{{$karyawan->nama_depan}}{{" "}}{{$karyawan->nama_belakang}}</h2>
        <p class="section-lead">
            Ubah Informasimu Disini 
        </p>

        <div class="row mt-sm-4">
          <div class="col-12 col-md-12 col-lg-5">
            <div class="card profile-widget">
              <div class="profile-widget-header">
              <img alt="image" src="{{$karyawan->getAvatar()}}" class="rounded-circle profile-widget-picture">
                <div class="profile-widget-items">
                  <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Posts</div>
                    <div class="profile-widget-item-value">187</div>
                  </div>
                  <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Followers</div>
                    <div class="profile-widget-item-value">6,8K</div>
                  </div>
                  <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Following</div>
                    <div class="profile-widget-item-value">2,1K</div>
                  </div>
                </div>
              </div>
              <div class="profile-widget-description">
              <div class="profile-widget-name">{{$karyawan->nama_depan}}<div class="text-muted d-inline font-weight-normal"><div class="slash"></div>{{$karyawan->role}}</div></div>
                Dia adalah <b> {{$karyawan->nama_depan}}{{" "}}{{$karyawan->nama_belakang}}</b> , {{$karyawan->nama_depan}} adalah Seorang {{$karyawan->role}} di PT.ERP 4.0 , {{$karyawan->nama_depan}} bekerja di PT.ERP 4.0 selama 3 Tahun 2 Bulan.
              </div>
           
              <div class="card-footer ">
                <div class="font-weight-bold h5 text-left">
                  Informasi Data Diri
              </div>
            <div class="text-left">Nama  <span class="font-weight-bold"style="margin-left: 70px;">{{':'}} {{$karyawan->nama_depan}}{{" "}}{{$karyawan->nama_belakang}}</span></div>
            <div class="text-left">Jenis Kelamin <span class="font-weight-bold"style="margin-left: 25px;">{{':'}} {{$karyawan->jenis_kelamin}}</div>
            <div class="text-left">Agama <span class="font-weight-bold"style="margin-left: 63px;">{{':'}} {{$karyawan->agama}}</span></div>
            <div class="text-left">Alamat<span class="font-weight-bold"style="margin-left: 67px;">{{':'}} {{$karyawan->alamat}}</span></div>
             <hr>
            <div class="btn btn-warning text-right">
            <a class="text-white" href="{{route('karyawan.edit',$karyawan->id)}}"> Ubah </a>
          </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-7">
            <div class="card">
              <form method="post" class="needs-validation" novalidate="">
                <div class="card-header">
                  <h4>Masukan Terakhir</h4>
                </div>
                <div class="card-body">
                   
                   <h1>Grafik</h1>
                 
                </div>
               
              </form>
            </div>
        
  
</div>
</div>

@endsection
@push('pages-scripts')
 
@endpush