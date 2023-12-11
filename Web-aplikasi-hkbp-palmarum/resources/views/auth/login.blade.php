
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">



<div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block">
    
                <div class="mb-4" style="text-align: center;">
                  <h3><span style="display:inline-block; border-bottom: 1px solid black; width: 50px; margin-right: 10px; margin-bottom: 9px;"></span> L O G I N <strong><span style="display:inline-block; border-bottom: 1px solid black; width: 50px; margin-left: 10px; margin-bottom: 9px;"></span></strong></h3>
                  <p class="mb-4">HKBP PALMARUM</p>
                </div>
                
                
                
                <form method="POST" action="{{ route('login') }}">
                @csrf

                  <div class="form-group first">
                    <label for="email">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    
                  </div>
                  
                  <div class="d-flex mb-5 align-items-center">
                    <label class="control control--checkbox mb-0" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      <span class="caption" >{{ __('Remember Me') }}</span>
                      <input type="checkbox" checked="checked"/>
                      <div class="control__indicator"></div>
                    </label>
                   
                  </div>

                  <input type="submit" value="Log In" class="btn btn-pill text-white btn-block btn-primary" style="background-color: #3F486C; border-radius: 0;"   {{ __('Login') }}>
                    
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
                    <p class="mb-4">belum mempunyai account?  <a href="{{ route('register') }}" style="color: #3F486C; text-decoration: none;">{{ __('Register Klik Disini') }}</a>
                    <p class="mb-4">
                      @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}" style=color: #3F486C; text-decoration: none;>
                          {{ __('anda lupa password? ') }}Klik Disini
                        </a>
                      @endif
                  </div>   
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

