{{view('layout.header')}}

<h1>Connexion</h1>

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
</form>

{{view('layout.footer')}}