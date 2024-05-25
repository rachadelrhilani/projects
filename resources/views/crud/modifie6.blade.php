<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Systèmes réseaux</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="logo.jpeg" type="image/x-icon">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="container mt-5">
  <h1>modifications des Accès</h1>
  <form method="post" action="{{route('infoUpdate',$info->id)}}">
    @csrf 
    @method('PUT')
    <div class="mb-3">
      <label for="systemeInfo" class="form-label">Système d'information</label>
      <input type="text" class="form-control" id="systemeInfo" name="Système_dinformation" value="{{$info->Système_dinformation}}">
    </div>
    <div class="mb-3">
      <label for="lien" class="form-label">Lien</label>
      <input type="text" class="form-control" id="lien" name="Lien" value="{{$info->Lien}}">
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="mb-3">
          <label for="loginAdmin" class="form-label">Login administrateur</label>
          <input type="text" class="form-control" id="loginAdmin" name="Login_administrateur" value="{{$info->Login_administrateur}}">
        </div>
        <div class="mb-3">
          <label for="mdpAdmin" class="form-label">Mot de passe administrateur</label>
          <input type="password" class="form-control" id="mdpAdmin" name="Motdepasse_administrateur" value="{{$info->Motdepasse_administrateur}}">
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <label for="loginUser" class="form-label">Login utilisateur</label>
          <input type="text" class="form-control" id="loginUser" name="Login_utilisateur" value="{{$info->Login_utilisateur}}">
        </div>
        <div class="mb-3">
          <label for="mdpUser" class="form-label">Mot de passe utilisateur</label>
          <input type="password" class="form-control" id="mdpUser" name="Motdepasse_utilisateur" value="{{$info->Motdepasse_utilisateur}}">
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Soumettre</button>
  </form>
</div>
</body>
</html>