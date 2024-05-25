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
    <h1>modification citrixBEC</h1>
    <form method="post" action="{{route('BECupdate', $citrix->id)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="bec" class="form-label">BEC</label>
            <input type="text" class="form-control" id="bec" placeholder="BEC" name="BEC" value="{{$citrix->BEC}}">
        </div>
        <div class="mb-3">
            <label for="adresseIp" class="form-label">Adresse IP</label>
            <input type="text" class="form-control" id="adresseIp" placeholder="Adresse_IP" name="Adresse_IP" value="{{$citrix->Adresse_IP}}">
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" placeholder="LastName" name="LastName" value="{{$citrix->LastName}}">
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Username" name="Username" value="{{$citrix->Username}}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de Passe</label>
            <input type="password" class="form-control" id="password" placeholder="MotdePasse" name="MotdePasse" value="{{$citrix->MotdePasse}}">
        </div>
        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
</div>
</body>

</html>