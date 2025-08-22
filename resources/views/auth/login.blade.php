<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>EduAdmin - Log in </title>

  <!-- Vendors Style-->
  <link rel="stylesheet" href="{{ asset('template/css/vendors_css.css') }}">
    
  <!-- Style-->  
  <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('template/css/skin_color.css') }}">  
</head>
  
<body class="hold-transition theme-primary bg-img" style="background-image: url({{ asset('images/auth-bg/bg-1.jpg') }})">
  
  <div class="container h-p100">
    <div class="row align-items-center justify-content-md-center h-p100">  
      
      <div class="col-12">
        <div class="row justify-content-center g-0">
          <div class="col-lg-5 col-md-5 col-12">
            <div class="bg-white rounded10 shadow-lg">
              <div class="content-top-agile p-20 pb-0">
                <h2 class="text-primary">CBT Universitas Sriwijaya</h2>
                <p class="mb-0">Sign in to continue to CBT Dashboard.</p>              
              </div>
              <div class="p-40">
                
                <!-- 🔹 FORM LOGIN LARAVEL -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Username / Email -->
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                            <input type="email" name="email" class="form-control ps-15 bg-transparent" placeholder="Email" value="{{ old('email') }}" required autofocus>
                        </div>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
                            <input type="password" name="password" class="form-control ps-15 bg-transparent" placeholder="Password" required>
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-6">
                          <div class="checkbox">
                            <input type="checkbox" name="remember" id="basic_checkbox_1">
                            <label for="basic_checkbox_1">Remember Me</label>
                          </div>
                        </div>

                        {{-- <div class="col-6">
                          <div class="fog-pwd text-end">
                            @if (Route::has('password.request'))
                              <a href="{{ route('password.request') }}" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a>
                            @endif
                          </div>
                        </div> --}}

                        <div class="col-12 text-center">
                          <button type="submit" class="btn btn-danger mt-10">SIGN IN</button>
                        </div>
                    </div>
                </form>  

                {{-- <div class="text-center">
                  <p class="mt-15 mb-0">Don't have an account? 
                    @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="text-warning ms-5">Sign Up</a>
                    @endif
                  </p>
                </div>   --}}
              </div>            
            </div>

            {{-- <div class="text-center">
              <p class="mt-20 text-white">- Sign With -</p>
              <p class="gap-items-2 mb-20">
                  <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
                  <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
                  <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
              </p>  
            </div> --}}

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Vendor JS -->
  <script src="{{ asset('template/js/vendors.min.js') }}"></script>
  <script src="{{ asset('template/js/pages/chat-popup.js') }}"></script>
  <script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>  
</body>
</html>
