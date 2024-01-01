{{-- {{view('layout.header')}} --}}

<!-- si l'inscription est faite -->

<div class="hero_area">
    {{view('layout.navbar')}}

    {{-- <div class="alert alert-success" role="alert">
        inscription faite
    
    </div> --}}
    
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
            <!-- Pour chaque $errors ->all() nous permet de récupérer le tableau des messages d'erreurs -->
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
        
                      <h2 class="fw-bold mb-2 text-uppercase">SingIn</h2><br>
                      {{-- <p class="text-white-50 mb-5">Please enter your login and password!</p> --}}
      <form action="{{route('create_user')}}" method='POST'>
          @csrf
          <div class="form-outline form-white mb-2">
            <input  name="firstname" id="typeEmailX" class="form-control form-control-lg" style="background-color: rgba(255, 255, 255, 0.781)" />
            <label class="form-label" for="typeEmailX" >Prénom</label>
          </div>
          <div class="form-outline form-white mb-2">
            <input type="text" name="lastname" id="typeEmailX" class="form-control form-control-lg" style="background-color: rgba(255, 255, 255, 0.781)" />
            <label class="form-label" for="typeEmailX">Nom</label>
          </div>

                      <div class="form-outline form-white mb-2">
                        <input  name="email" id="typeEmailX" class="form-control form-control-lg" style="background-color: rgba(255, 255, 255, 0.781)" />
                        <label class="form-label" for="typeEmailX">Email</label>
                      </div>
                      <div class="form-outline form-white mb-2">
                        <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" style="background-color: rgba(255, 255, 255, 0.781)" />
                        <label class="form-label" for="typePasswordX">Password</label>
                      </div>
        
                      
                      <button class="btn btn-outline-light btn-lg px-5" type="submit">SignIn</button> <br><br>
                      <p class="small mb-3 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
      </form>
                    </div>
        
        
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
























{{-- <div class="alert alert-success" role="alert">
    inscription faite

</div>

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



<!-- ici la variable $errors est un regex  -->

@if($errors->any())

    <div class="alert alert-danger" role="alert">
        <!-- Pour chaque $errors ->all() nous permet de récupérer le tableau des messages d'erreurs -->
        @foreach($errors->all() as $error)
            <!-- On echo la valeur de l'erreur ou des erreurs qui sont survenu(es) lors de la validation du formulaire -->
            {{$error}}
        @endforeach
    </div>

@endif

<div id="inscription">
    <center>
    <h1>Inscription</h1>

    <form action="{{route('create_user')}}" method='POST'>
        @csrf
        
        <label for="firstname">Prénom</label><br>
        <input type="text" name="firstname"><br>
    
    
        <label for="lastname">Nom</label><br>
        <input type="text" name="lastname"><br>
    
    
        <label for="email">Email</label><br>
        <input type="email" name="email"><br>
    
        <label for="password">Mot de passe</label><br>
        <input type="password" name="password"><br><br><br>
        <button type="submit">Créer le compte</button>
    </form>
    </center>
</div><br><br>

{{view('layout.footer')}} --}}