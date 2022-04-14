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

    <!-- custom css -->
    <link rel="stylesheet" href="/assets/css/style.css">  

    <title>Login</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body style="background-color: #fafcfe">

    <div class="container mt-4 mal-main-container d-flex flex-column align-items-center justify-content-center bg-light" style="height: 100vh;">
        <img src="/assets/image/logo-sancu-300px.png" class="img mb-5" style="max-width: 150px;" />
        <h6>Login ke akun anda</h6>

        <div class="row col-10">

          @if(session('message'))
            <div class="alert alert-danger" role="alert">
                {{ session('message') }}
            </div>
          @endif

          <form action="/login" method="POST">
              @csrf
              @error('email')
                <span class="text-danger" style="margin-top: -5px">{{$message}}</span>
              @enderror
              <div class="form-group mb-3">
                  <input type="email" class="form-control p-2 @error('email') border border-danger @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email" value="{{old('email')}}">
              </div>
             
              @error('password')
                <span class="text-danger" style="margin-top: -5px">{{$message}}</span>
              @enderror
              <div class="form-group mb-3">
                <div class="input-group" id="toggle-password">
                  <input type="password" class="form-control p-2 @error('password') border border-danger @enderror" id="passwordInput" placeholder="Password" name="password">
                  <div class="input-group-prepend">
                    <div class="input-group-text" style="height: 100%">
                      <a href="" id="eye"><i class="bi bi-eye-slash"></i></a>
                    </div>
                    
                  </div>
                </div>
                
              </div>
              <button type="submit" class="btn btn-primary p-2" style="width: 100%; ">Submit</button>
          </form>

          <p class="text-center">Aplikasi Order Distributor Sancu Ver 1.0</p>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script>
      function togglePassword(){
        const elemToggle = document.getElementById('toggle-password');
        const eye = document.getElementById('eye');
        const eyeLogo = eye.firstElementChild;
        const passwordInput = document.getElementById('passwordInput');

        eye.addEventListener('click', (e)=>{
          e.preventDefault();
          // ganti logo
          if(eyeLogo.classList.contains('bi-eye-slash')){
            eyeLogo.classList.remove('bi-eye-slash');
            eyeLogo.classList.add('bi-eye-fill');
          }
          else{
            eyeLogo.classList.remove('bi-eye-fill');
            eyeLogo.classList.add('bi-eye-slash');
          }
          // ganti type input
          if(passwordInput.type == 'password'){
            passwordInput.type = 'text';
          }
          else{
            passwordInput.type = 'password';
          }
        })
      }

      togglePassword()
    </script>
</body>

</html>