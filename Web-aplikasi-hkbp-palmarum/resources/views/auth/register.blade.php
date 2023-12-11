
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">


<div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <!-- <div class="col-md-6 order-md-2">
          <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div> -->
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block">
                <div class="mb-4" style="text-align: center;">
                  <h3><span style="display:inline-block; border-bottom: 1px solid black; width: 50px; margin-right: 10px; margin-bottom: 9px;"></span>REGISTER<strong><span style="display:inline-block; border-bottom: 1px solid black; width: 50px; margin-left: 10px; margin-bottom: 9px;"></span></strong></h3>
                  <p class="mb-4">HKBP PALMARUM</p>
                </div>
                
                
                
                <form action="{{ route('register') }}" method="post" >
                  @csrf
                  <div class="form-group first">
                    <label for="name">{{ __('Name') }}</label>
                    <input type="text" class="form-control"  id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                  </div>
                  <div class="form-group last mb-4">
                    <label for="email">{{ __('Email Address') }}</label>
                    <input  id="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                   </div>
                  <div class="form-group last mb-4">
                    <label for="password">{{ __('Password') }}</label>
                    <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">{{ __('Confirm Password') }}</label>
                    <input  id="password"id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    
                  </div>
              

                  <input type="submit" value="Register" class="btn btn-pill text-white btn-block btn-primary" style="background-color: #3F486C; border-radius: 0;"  {{ __('Register') }}>


                  <span class="d-block text-center my-4 text-muted"> or sign in with</span>
                  
                  <div class="social-login text-center">
                    <a href="#" class="facebook">
                      <span class="icon-facebook mr-3"></span> 
                    </a>
                    <a href="#" class="twitter">
                      <span class="icon-twitter mr-3"></span> 
                    </a>
                    <a href="#" class="google">
                      <span class="icon-google mr-3"></span> 
                    </a>
                  </div>
                  <div class="mb-4" style="text-align: center;">
                    <p class="mb-4">Sudah Memiliki Akun?  <a href="{{ route('login') }}" style="color: #3F486C; text-decoration: none;">Klik disini</a>
                  </div>
                  
                  </p>
                </form>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
