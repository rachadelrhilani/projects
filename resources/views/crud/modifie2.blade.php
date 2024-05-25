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
  <h1>modification des Utilisateurs</h1>
  <form method="post" action="{{ route('ancienupdate', $citrix->id)}}">
    @csrf
    @method('PUT')
    <div class="row">
      <div class="col-md-6">
        <h2>Entité</h2>
        <div class="mb-3">
          <label for="entite" class="form-label">Entité</label>
          <input type="text" class="form-control" id="entite" name="Entité" value="{{$citrix->Entité}}">
        </div>
        <div class="mb-3">
          <label for="chefEntite" class="form-label">Chef Entité</label>
          <input type="text" class="form-control" id="chefEntite" name="Chef_Entity" value="{{$citrix->Chef_Entity}}">
        </div>
      </div>
      <div class="col-md-6">
        <h2>Utilisateur</h2>
        <div class="mb-3">
          <label for="login" class="form-label">Login</label>
          <input type="text" class="form-control" id="login" name="Login" value="{{$citrix->Login}}">
        </div>
        <div class="mb-3">
          <label for="nouveauLogin" class="form-label">Nouveau Login</label>
          <input type="text" class="form-control" id="nouveauLogin" name="Nouveau_login1" value="{{$citrix->Nouveau_login1}}">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" id="password" name="Password1" value="{{$citrix->Password1}}">
        </div>
      </div>
    </div>
    <div class="mb-3">
      <label for="collaborateur" class="form-label">Collaborateur</label>
      <input type="text" class="form-control" id="collaborateur" name="Colaborateur" value="{{$citrix->Colaborateur}}">
    </div>
    <div class="mb-3">
      <label for="collaborateurLogin" class="form-label">Login Collaborateur</label>
      <input type="text" class="form-control" id="collaborateurLogin" name="Login2" value="{{$citrix->Login2}}">
    </div>
    <div class="mb-3">
      <label for="nouveauCollaborateurLogin" class="form-label">Nouveau Login Collaborateur</label>
      <input type="text" class="form-control" id="nouveauCollaborateurLogin" name="Nouveau_Login2" value="{{$citrix->Nouveau_Login2}}">
    </div>
    <div class="mb-3">
      <label for="collaborateurPassword" class="form-label">Mot de passe Collaborateur</label>
      <input type="password" class="form-control" id="collaborateurPassword" name="Password2" value="{{$citrix->Password2}}">
    </div>
    <button type="submit" class="btn btn-primary">Soumettre</button>
  </form>
</div>
</body>

</html>