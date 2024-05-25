<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>citrix</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="logo.jpeg" type="image/x-icon">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="container mt-5">
    <h1>Formulaire citrixBEC</h1>
    <form method="post" action="{{route('ajouteBEC')}}">
        @csrf
        <div class="mb-3">
            <label for="bec" class="form-label">BEC</label>
            <input type="text" class="form-control" id="bec" placeholder="Entrez BEC" name="BEC">
        </div>
        <div class="mb-3">
            <label for="adresseIp" class="form-label">Adresse IP</label>
            <input type="text" class="form-control" id="adresseIp" placeholder="Entrez Adresse IP" name="Adresse_IP">
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" placeholder="Entrez Last Name" name="LastName">
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Entrez Username" name="Username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de Passe</label>
            <input type="password" class="form-control" id="password" placeholder="Entrez Mot de Passe" name="MotdePasse">
            <input type="number" class="mt-2" min="2" max="2" value="2" name="id_citrix" hidden>
        </div>
        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
</div>
</body>
</html>