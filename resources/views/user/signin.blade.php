{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nes Quizz Game</title>

    <!-- Reset CSS -->
    <link href="{{ URL::asset('/') }}css/mystyle.css"  rel="stylesheet">
    <link href="{{ URL::asset('/') }}css/bootstrap.css"  rel="stylesheet">
    <link href="{{ URL::asset('/') }}css/font-awesome.min.css"  rel="stylesheet">
    <link href="{{ URL::asset('/') }}css/responsive.css"  rel="stylesheet">

</head>
<body> --}}
  <div class="hero_area">
      {{view('layout.navbar')}}

        <section class="vh-100 gradient-custom" >
            <div class="container py-4 h-100" >
              <div class="row d-flex justify-content-center align-items-center h-80">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                  <div class="card  text-white" style="border-radius: 1rem; height:540px; background-color:#13135380">
                    <div class="card-body p-5 text-center">
          
                      <div >
          
                        <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                        <p class="text-white-50 mb-5">Please enter your login and password!</p>
        <form action="" method="POST">
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
        </form>
                      </div><br>
          
                      <div>
                        <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
                        </p>
                      </div>
          
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    {{-- <h1>Connexion</h1> --}}
{{--     
    <form action="" method="POST">
        @csrf
        <p>
            <label for="email">Email</label>
            <input type="email" name="email">
        </p>
        <p>
            <label for="password">Mot de passe</label>
            <input type="password" name="password">
        </p>
        <p>
            <button type="submit">Se connecter</button>
        </p>
    </form> --}}
    </div>
    
</body>
</html>

