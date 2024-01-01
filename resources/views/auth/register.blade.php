<div class="hero_area">
    {{view('layout.navbar')}}

    @if (session('success'))
        <div class="alert alert-success" role="alert">
    
            <!-- on echo le message ecrit dans les if de UserController  -->
            {{session('success')}}
        </div>
    @endif
    
    
    <!-- si l'inscrition a échoué -->
    
    @if(session('failed'))
        <div class="alert alert-warning" role="alert">
    
            <!-- on echo le message ecrit dans les if de UserController  -->
            {{session('failed')}}
        </div>
    @endif
    @if($errors->any())

        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                <!-- On echo la valeur de l'erreur ou des erreurs qui sont survenu(es) lors de la validation du formulaire -->
                {{$error}}
            @endforeach
        </div>

    @endif

    <section class="vh-100 gradient-custom" >
          <div class="container py-4 h-100" >
            <div class="row d-flex justify-content-center align-items-center h-80">
              <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card  text-white" style="border-radius: 1rem; height:600px; background-color:#13135380">
                    <div class="card-body p-5 text-center">
        
                        <div >
            
                        <h2 class="fw-bold mb-2 text-uppercase">{{ 'Register' }}</h2><br>
                            <form action="{{route('register')}}" method='POST'>
                                @csrf
                                <div class="form-outline form-white mb-2">
                                    <input  name="login" id="typeEmailX" class="form-control form-control-lg @error('login') is-invalid @enderror " style="background-color: rgba(255, 255, 255, 0.781)"
                                    value="{{ old('login') }}"/>
                                    <label class="form-label" for="typeEmailX" >Login</label>
                                    @error('login')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-outline form-white mb-2">
                                    <input  name="email" id="typeEmailX" class="form-control form-control-lg
                                    @error('email') is-invalid @enderror" 
                                    style="background-color: rgba(255, 255, 255, 0.781)" 
                                    value="{{ old('email') }}" required autocomplete="email"/>
                                    <label class="form-label" for="typeEmailX">Email</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="form-outline form-white mb-2">
                                    <input type="password" name="password" id="typePasswordX" 
                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                    style="background-color: rgba(255, 255, 255, 0.781)" 
                                    required autocomplete="new-password"/>
                                    <label class="form-label" for="typePasswordX">Password</label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-outline form-white mb-2">
                    
                                    <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" 
                                    required autocomplete="new-password" style="background-color: rgba(255, 255, 255, 0.781)" >
                                    <label class="form-label" for="password-confirm">{{ __('Confirm Password') }}</label>

                                </div>
            
                        
                                <button class="btn btn-outline-light btn-lg px-5" type="submit">{{ __('Register') }}</button> <br><br>
                            </form>
                        </div>        
                    </div>
                </div>
              </div>
            </div>
          </div>
    </section>

</div>
