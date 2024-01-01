<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <!-- Reset CSS -->
        <link href="{{ URL::asset('/') }}css/mystyle.css"  rel="stylesheet">
        <link href="{{ URL::asset('/') }}css/bootstrap.css"  rel="stylesheet">
        <link href="{{ URL::asset('/') }}css/font-awesome.min.css"  rel="stylesheet">
        <link href="{{ URL::asset('/') }}css/responsive.css"  rel="stylesheet">
    
</head>
<body>
    <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="#">
              <span style="color: #c3bbb0fe;
              font: italic bold 30px monospace;
                      font-family: cursive;
                      ">Nes Game</span>
            </a>
  
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>
  
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('homepage')}}">
                      Home <span class="sr-only">(current)</span>
                  </a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" href="{{route('signup')}}"> Sign Up</a>
                </li> --}}
                @guest
                  @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                  @endif

                  @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                  @endif
                @else

                <li class="nav-item active">
                    

                  <form action="{{ route('logout') }}" method="POST">
                        @csrf                
                        <a type="submit" class="nav-link" href="{{ route('logout') }}"><button type="submit">Déconnexion</button></a>

                    {{-- <a type="submit">Déconnexion</a> --}}
                    {{-- <button type="submit">Déconnexion</button> --}}
                
                  </form>

                </li>
                  {{-- <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                      </a>

                      <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                        </form>
                      </div>
                  </li> --}}
                @endguest

                <li class="nav-item">
                  <a class="nav-link" href="service.html">Games</a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" href="{{route('signin')}}">Log In</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact Us</a>
                </li> --}}
              </ul>
              <div class="quote_btn-container">
                <form class="form-inline">
                  <button class="btn   nav_search-btn" type="submit"> logout
                    {{-- <i class="fa fa-search" aria-hidden="true"></i> --}}
                  </button>
                </form>
  
              </div>
            </div>
          </nav>
        </div>
      </header>

             <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>


</body>
</html>


{{-- 
<center><h1 >Quiz</h1></center>
<nav id="navbar">

<br>
    <ul id="navbarul">


        <li id="navbarli">
            <a href="{{route('Acceuil1')}}">
                <i></i>
                Accueil
            </a>
        </li id="navbarli">

        <li id="navbarli">
            <a href="{{route('home1')}}">
            Quiz
            </a>
        </li>

        <li id="navbarli">
            <a href="#">
                <i></i>
                Mon compte
            </a>
        </li>

        <li id="navbarli">
            <a href="{{route('signin')}}">
                <i></i>
                Connexion
            </a>
        </li>


        <li id="navbarli">
            <a href="{{route('signup')}}">
                <i></i>
                Inscription
            </a>
        </li>

        <li id="navbarli">
            <a href="#">
                <i></i>
                Déconnexion
            </a>
        </li>

    </ul>
</nav>


 --}}
