<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap css --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
  {{-- <div class="fixed-top"> --}}
  <div class="navbar-top bg-light" style="width: 100%;height: 40px; ">
    <p class="p-2">Download App</p> 
  
  </div>
    <nav class="mb-5 border-bottom navbar navbar-expand-lg navbar-light bg-white" style="height: 80px;">
      <a class="navbar-brand" href="#">
        <img src="{{asset('assets/images/logos.jpg')}}" class="ml-4" width="40" height="30" alt="">
        <a class="navbar-brand pl-0 font-weight-bold" href="#"></a>
      </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto ">
            
            <li class="nav-item ">
              <a class="nav-link font-weight-bold pr-2" href="#">Promo</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Kategori
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Makanan</a>
                <a class="dropdown-item" href="#">Sepeda</a>
                <a class="dropdown-item" href="#">olahraga</a>
                <a class="dropdown-item" href="#">Motor</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Lainya di Sini</a>
              </div>
            </li>
            
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" style="width: 600px" placeholder="Laptop MSC" aria-label="Search">
              <button class="btn btn-outline-dark my-2 my-sm-0"  type="submit">Search</button>
            </form>
          </ul>
         <div>
           <div class="btn mr-3">Login</div>
           <div class="btn btn-primary my-2 my-sm-0 mr-5">Daftar</div>
         </div>
        </div>
      </nav>
    </div>
    
    {{-- Banner --}}
    <div class="m-5" >
      <div class=" col-xl-12">
        <div class="row">
        <div class="card" style="width:700px;height: 500px">
          <img src="/assets/images/laptop.png" style="height: 500px" alt="">
        </div>
        <div class="col-xl-4">
          <div class="card" style="width:550px;height: 240px; margin-bottom: 20px">
            <img src="/assets/images/disc.webp" style="height: 240px" alt="">
          </div>
          <div class="col"></div>
          <div class="card" style="width:550px;height: 240px; margin-bottom: 30px">
            <img src="/assets/images/oke.jpg" style="height: 240px" alt="">
          </div>
      </div>
      </div>
    </div>
  

  {{-- row --}}
  <div class="row">
    <div class="col-xl-12">
          <div class="card  border border-white" style="height: 300px;border-radius: 20px; box-shadow: 2px 2px 2px 2px rgba(200, 200, 200, 0.3);">
            <div class="row">
              <div class="col-5">
            <p class="font-weight-bold h3 p-3 ">Kategori Pilihan</p></div>
            <div class="col-7">
            <p class="font-weight-bold h3 p-3">Paket Data & Pulsa</p></div>
          </div>
         <div class="row">
            <div class="col-12 ml-4">
              <div class="row">
            <div class="card shadow-sm m-3" style="width:130px;height: 130px">
              <img src="/assets/images/tas.webp" style="height: 130px" alt="">
            </div>
            <div class=" card shadow-sm m-3" style="width:130px;height: 130px">
              <img src="/assets/images/hardisk.webp" style="height: 130px" alt="">
            </div>
            <div class="card shadow-sm m-3" style="width:130px;height: 130px">
              <img src="/assets/images/makanan.webp" style="height: 130px" alt="">
            </div>
            <div class="card border border-light shadow-sm  m-3" style="width:700px;height: 130px">
              <div class="col-xl-12">
                <div class="row">
           
                <div style="width: 140px;">
                   <div class="ml-5 btn btn-light">
                    Paket
                  </div>
                </div>
                
                <div style="width: 100px;">
                   <div class="btn btn-light">
                    Pulsa
                  </div>
                </div>

                <div style="width: 100px;">
                  <div class="btn btn-light">
                   Listrik
                 </div>
               </div>
               
               <div style="width: 100px;">
                  <div class="btn btn-light">
                   Telpon
                 </div>
               </div>

               <div style="width: 100px;">
                <div class="btn btn-light">
                 Bioskop
               </div>
             </div>
             
             

             <div style="width: 100px;margin-left: 0px">
                <div class="btn btn-light">
                 Tiket 
               </div>
                </div>
                </div>
                
                <div class="row">
                  <div class="col-xl-6">
                <p class="mt-2 ml-3">nomor telepon</p>
                  <input class="border border-dark"  placeholder="+62 xxx-xxx-xxx" type="text" style="margin-top: 0px;margin-left: 10px;border-radius: 20px;width: 250px">
                </div>
                <div class="col-xl-4">
                  <p class="mt-2">Pulsa </p>
                    <input class="border border-dark" placeholder="Rp.20.000,00" type="text" style="border-radius: 20px;width: 250px">
                  </div>
                
              </div>
              </div>
              
            </div>
          </div>
          </div>

     
        </div>
          </div>
      </div>  
</div>

<div class="row">
  <div class="col-12">
    <p class="font-weight-bold h3 mt-4">Terlaris untukmu</p>
    <hr>
   
    {{-- content --}}
@foreach ($products as $data)
    
<div class="row mt-4 ml-4 no-gutters">
  <div class="card bg-light mr-5"  style="width: 16rem;">
    <img src="/assets/images/laptop.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title font-weight-bold"> Laptop  </h5>
      <p class="card-text">Lapotop ROG MSI RAM.12GB  </p>
      <i class="fas fa-star text-success"></i>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star text-success"></i>
            <i class="fas fa-star text-success"></i>
            
            <i class="fas fa-star-half-alt text-success"></i>
            <p></p>
            <a href="#" class="btn mt-4 btn-outline-success">Detail</a>
            <a href="#" class="btn mt-4 btn-danger">Rp.350.000,00</a>
          </div>
        </div>
        @endforeach
      </div>
      
      
  </div>
</div>
  <div class="row">
    <div class="col-12">
      <p class="font-weight-bold h3 mt-4">Termurah untukmu</p>
      <hr>
     
      {{-- content --}}
  
      <div class="row mt-4 ml-4 no-gutters">
        <div class="card bg-light mr-5"  style="width: 16rem;">
            <img src="/assets/images/laptop.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title font-weight-bold"> Laptop ROG MSI </h5>
              <p class="card-text">Lapotop ROG MSI RAM.12GB  </p>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              
              <i class="fas fa-star-half-alt text-success"></i>
             <p></p>
              <a href="#" class="btn mt-4 btn-outline-success">Detail</a>
              <a href="#" class="btn mt-4 btn-danger">Rp.350.000,00</a>
            </div>
          </div>
        <div class="card bg-light mr-5"  style="width: 16rem;">
            <img src="/assets/images/laptop.png" class="card-img-top" alt="...">
            <div class="card-body ">
              <h5 class="card-title font-weight-bold"> Laptop ROG MSI </h5>
              <p class="card-text">Lapotop ROG MSI RAM.12GB  </p>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              
              <i class="fas fa-star-half-alt text-success"></i>
             <p></p>
              <a href="#" class="btn mt-4 btn-outline-success">Detail</a>
              <a href="#" class="btn mt-4 btn-danger">Rp.350.000,00</a>
            </div>
          </div>
        <div class="card bg-light mr-5"  style="width: 16rem;">
            <img src="/assets/images/laptop.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title font-weight-bold"> Laptop ROG MSI </h5>
              <p class="card-text">Lapotop ROG MSI RAM.12GB  </p>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              
              <i class="fas fa-star-half-alt text-success"></i>
             <p></p>
              <a href="#" class="btn mt-4 btn-outline-success">Detail</a>
              <a href="#" class="btn mt-4 btn-danger">Rp.350.000,00</a>
            </div>
          </div>
        <div class="card bg-light mr-5"  style="width: 16rem;">
            <img src="/assets/images/laptop.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title font-weight-bold"> Laptop ROG MSI </h5>
              <p class="card-text">Lapotop ROG MSI RAM.12GB  </p>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              
              <i class="fas fa-star-half-alt text-success"></i>
             <p></p>
              <a href="#" class="btn mt-4 btn-outline-success">Detail</a>
              <a href="#" class="btn mt-4 btn-danger">Rp.350.000,00</a>
            </div>
          </div>
      </div>
  
  
    </div>

</div>

</body>
</html>
@stack('after-script')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>