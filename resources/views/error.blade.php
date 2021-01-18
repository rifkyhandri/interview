<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title') </title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/fontawesome-free/css/all.css')}}">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">

  @stack('page-style')
</head>

<body>
    <div id="app">
      <section class="section">
        <div class="container mt-5">
          <div class="page-error">
            <div class="page-inner">
              <h1>500</h1>
              <div class="page-description">
               Maaf Layanan ini sedang dalam Perbaikan
              </div>
              <div class="page-search">
                <form>
                  <div class="form-group floating-addon floating-addon-not-append">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-search"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" placeholder="Search">
                      <div class="input-group-append">
                        <button class="btn btn-primary btn-lg">
                          Search
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
                <div class="mt-3">
                <a href="{{url('dashboard')}}">Back to Home</a>
                </div>
              </div>
            </div>
          </div>
          <div class="simple-footer mt-5">
            Copyright &copy; Stisla 2018
          </div>
        </div>
      </section>
    </div>
    @stack('before-script')
  <!-- General JS Scripts -->
  <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 
  <script src="{{asset('assets/js/moment.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('assets/js/moment.min.js')}}"></script>
  <script src="{{asset('assets/js/stisla.js')}}"></script>
  <script src="{{asset('assets/js/sweetalert.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="{{url('assets/js/scripts.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>
@stack('pages-script')
  <!-- Page Specific JS File -->
</body>
</html>
@stack('after-script')
  