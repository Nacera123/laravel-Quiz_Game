<div class="hero_area">
    {{view('layout.navbar')}}

     <section class="vh-100 gradient-custom" style="margin-top:80px; " >
          <div class="container py-4 h-100" >
            <div class="row d-flex justify-content-center align-items-center h-80">
              <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card  text-white" style="border-radius: 1rem; height:450px; background-color:#13135380">
                  <div class="card-body p-5 text-center">
        
                    <div >
        
                      <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                      <p class="text-white-50 mb-5">Don't have an account? <a href="{{ route('register') }}" class="text-white-50 fw-bold">Sign Up</a></p>
      
                      <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3 form-white">
                            <label for="login" class="col-md-4 col-form-label text-md-right" style="color:aliceblue;"><b>{{ __('Login') }}</b></label>

                            <div class="col-md-6">
                                <input id="login" type="login" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>

                                @error('login')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="color:aliceblue;"><b>{{ __('Password') }}</b></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        {{-- <button class="btn btn-outline-light btn-lg px-5" type="submit">{{ __('Login') }}</button> --}}
                        <button class="btn btn-outline-info btn-lg px-5" type="submit"
                        ><h4>Enter</h4></button> <br><br>
                        <div>
                            @if (Route::has('password.request'))
                            {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a> --}}
                            
                            <p class="mb-0"> <a href="{{ route('password.request') }}" class="text-white-50 fw-bold">{{ __('Forgot Your Password?') }}?</a>
                            {{-- <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a> --}}
                            </p>
                            @endif
                        </div>
      

                    </form>

      
      
      
      
      
      
      
      
                      {{-- <form action="" method="POST">
          @csrf
                      <div class="form-outline form-white mb-4">
                        <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" style="background-color: rgba(255, 255, 255, 0.781)" />
                        <label class="form-label" for="typeEmailX">Email</label>
                      </div>
        
                      <div class="form-outline form-white mb-4">
                        <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" style="background-color: rgba(255, 255, 255, 0.781)" />
                        <label class="form-label" for="typePasswordX">Password</label>
                      </div>
        
                      <p class="small mb-3 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
        
                      <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
      </form> --}}
                    </div><br>
        
        
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>




{{-- @extends('layouts.app')

@section('content')
@endsection --}}
