<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    {{-- Sweet Alert --}}
    <link rel="stylesheet" href="/assets/sweet-alert/sweetalert2.min.css">

    <!-- custom css -->
    <link rel="stylesheet" href="/assets/css/style.css">  

    <title>{{ $title }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body style="background-color: #fafcfe">
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img src="/assets/image/logo-sancu-mini.png" alt="logo sancu" style="max-width: 120px">
        </a>
        
        <div class="d-flex flex-row align-items-center justify-content-center p-1">
          <h6 class="text text-light mb-0">Hi, {{auth()->user()->name}}</h6>
          <button class="btn">
            <i class="bi bi-bell-fill text-light"></i>
          </button>
        </div>
        
      </div>
    </nav>

    <!-- Hero Banner -->

    <div class="container mt-4 mal-main-container">
      @Yield('container')
    </div>

    @if(Route::currentRouteName() != 'keranjang')
    <!-- Floating Div -->
    <div class="row mal-float-nav">
      <div class="col-2 d-flex justify-content-center align-items-center">
          <a class="btn" href="/profil">
              <i class="bi bi-person mal-floar-nav-icon"></i>
          </a>
      </div>
      <div class="col-8 d-flex justify-content-center align-items-center">
          <h6 id="floatdiv-total">0</h6>
      </div>
      <div class="col-2 d-flex justify-content-center align-items-center">
          <a href="{{ route('keranjang') }}" class="btn">
              <i class="bi bi-cart mal-floar-nav-icon"></i>
          </a>
      </div>
  </div>
  <!-- End floating Div -->
  @endif

    {{-- overlay loading --}}
    <div id="mal-loading-overlay">
      <div class="loader loader--style3" title="2">
        <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           width="40px" height="40px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
        <path fill="#000" d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z">
          <animateTransform attributeType="xml"
            attributeName="transform"
            type="rotate"
            from="0 25 25"
            to="360 25 25"
            dur="0.6s"
            repeatCount="indefinite"/>
          </path>
        </svg>
      </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="/assets/js/floatdiv.js"></script>
    <script src="/assets/js/main.js"></script>

  </body>
</html>