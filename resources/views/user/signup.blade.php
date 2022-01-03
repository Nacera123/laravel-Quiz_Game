{{view('layout.header')}}

<!-- si l'inscription est faite -->

<div class="alert alert-success" role="alert">
    fadi est dangereux

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

{{view('layout.footer')}}